@extends("layouts.app", ["paginaAtual" => "Login"])

@section("conteudo")
	@include("layouts.menu")
	<section class="uk-section">
    <div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body modal">
				<h1>Fazer login</h1>
				<form method="POST" action="{{ route('login') }}" class="uk-form-stacked form">
					@csrf
					<div class="uk-margin">
						<label class="uk-form-label" for="form-login-email">{{ __("Email") }}</label>
						<div class="uk-form-controls">
							<input id="form-login-email" type="email" class="uk-input uk-border-rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							@error('email')
								<span class="invalid-feedback error-email" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="uk-margin">
						<label class="uk-form-label" for="form-login-senha">{{ __('Senha') }}</label>
							<div class="uk-form-controls uk-inline uk-display-block">
								<button class="uk-form-icon uk-form-icon-flip btn-form-senha-modal btn-mostra-senha-modal" type="button" onclick="mostraSenha()">
									<img src="" alt="Ícone da senha" data-icone-senha-modal>
								</button>
								<input id="form-login-senha" type="password" class="uk-input uk-border-rounded @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" data-senha>
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
					</div>
					<div class="uk-margin">
						<label for="form-login-lembrar-senha" class="">
							<input class="uk-checkbox" type="checkbox" name="remember" id="form-login-lembrar-senha" {{ old('remember') ? 'checked' : '' }}>
							{{ __('Lembrar senha') }}
						</label>
					</div>
					<div class="uk-margin">
						<span>
							@if(Route::has('password.request'))
								<a class="uk-button" href="{{ route('password.request') }}" uk-toggle="target: #modal-recuperar-senha">Esqueceu a senha?</a>
							@endif
						</span>
						<span>
							<a class="uk-button" href="cadastro.php">Solicitar acesso</a>
						</span>
					</div>
					<div class="uk-text-right uk-border-rounded btn">
						<a class="uk-button uk-border-rounded btn-cancelar" href="{{ route('home') }}">
							{{ __('Cancelar') }}
						</a>
						<a class="uk-button uk-border-rounded btn-entrar">{{ __('Entrar') }}</a>
					</div>
				</form>
			</div>
		</div>
	</section>

	<script src="{{ asset('../js/login.js') }}"></script>
@endsection