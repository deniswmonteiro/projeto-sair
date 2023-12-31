@extends("layouts.app", ["paginaAtual" => "Login"])

@section("conteudo")
	@include("layouts.menu", ["menu" => "login"])
	<section class="uk-section login">
    <div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body bg-card-form">
				<h1>Fazer Login</h1>
				<form method="post" action="{{route('login')}}" class="uk-form-stacked form-login">
					@csrf
					<div class="uk-margin">
						<label class="uk-form-label" for="form-login-email">{{__("Email")}}</label>
						<div class="uk-form-controls">
							<input id="form-login-email" type="email" class="uk-input uk-border-rounded @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" autofocus>
							@error('email')
								<span class="uk-text-danger" role="alert">
									<strong>{{$message}}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="uk-margin">
						<label class="uk-form-label" for="form-login-senha">{{__('Senha')}}</label>
							<div class="uk-form-controls uk-inline uk-display-block">
								<button class="uk-form-icon uk-form-icon-flip btn-form-senha btn-mostra-senha" type="button">
									<img src="" alt="Ícone da senha" data-icone-senha>
								</button>
								<input id="form-login-senha" type="password" class="uk-input uk-border-rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" data-senha>
								@error('password')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
					</div>
					<div class="uk-margin acoes-login">
						<span>
							@if(Route::has('password.request'))
								<a class="uk-button" href="{{route('senha.request')}}">Esqueceu a senha?</a>
							@endif
						</span>
						<span>
							<a class="uk-button" href="{{route('cadastro.index')}}">Cadastrar-se</a>
						</span>
					</div>
					<div class="uk-flex btn">
						<a href="#" class="uk-button uk-flex-last@s btn-confirmar" onclick="event.preventDefault(); document.querySelector('form.form-login').submit()">{{__('Entrar')}}</a>
						<a href="{{route('home')}}" class="uk-button uk-margin-right btn-cancelar">
							{{__('Cancelar')}}
						</a>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection