@extends("layouts.app", ["paginaAtual" => "Redefinir Senha"])

@section("conteudo")
	@include("layouts.menu", ["menu" => "recuperar-senha"])
	<section class="uk-section login">
  	<div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body bg-card-form">
				@auth
					<div class="alerta-logado">
						<div class="uk-alert-warning uk-card-default uk-card-body uk-animation-shake" uk-alert>
							<h4 class="uk-text-center">
								Você já está logado(a) como {{auth()->user()->usuario}}!
							</h4>
						</div>
						<div class="uk-text-left uk-flex">
							<a href="{{route('home')}}" class="uk-link-reset link-voltar-home">
								{{__('Voltar para a página inicial')}}
							</a>
						</div>
					</div>
				@endauth

				@guest
					<h1>Redefinir Senha</h1>
					<form class="uk-form-stacked form-recuperar-senha" method="post" action="{{route('senha.email')}}">
						@csrf
						<div class="uk-margin">
							<label class="uk-form-label" for="form-recuperar-email">
								{{__('Informe o email cadastrado')}}
							</label>
							<div class="uk-form-controls">
								<input id="form-recuperar-email" type="email" class="uk-input uk-border-rounded @error('email') uk-form-danger @enderror" name="email" value="{{old('email')}}" required autocomplete="email" autofocus>
								@error('email')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div class="uk-text-left modal-footer btn">
							<a href="#" class="uk-button uk-margin-small-right btn-confirmar" onclick="event.preventDefault(); document.querySelector('form.form-recuperar-senha').submit()">
								{{__('Enviar solicitação')}}
							</a>
							<a href="{{route('login')}}" class="uk-button uk-link-reset link-voltar-login inicial">
								{{__('Voltar para o login')}}
							</a>
						</div>
					</form>
				@endguest
      </div>
  	</div>
	</section>
@endsection