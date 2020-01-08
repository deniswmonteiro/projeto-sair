@extends("layouts.app", ["paginaAtual" => "Recuperar Senha"])

@section("conteudo")
	@include("layouts.menu", ["menu" => "recuperar-senha"])
	<section class="uk-section recuperar-senha">
  	<div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body card-recuperar-senha">
				@auth
					<div class="alerta-logado">
						<div class="uk-alert-warning uk-card-default uk-card-body uk-animation-shake" uk-alert>
							<h4 class="uk-text-center">Você já está logado(a) como {{auth()->user()->name}}!</h4>
						</div>
						<div class="uk-text-left uk-border-rounded uk-flex">
							<a href="{{route('home')}}" class="uk-link-reset link-voltar-home">
								{{__('Voltar para a página inicial')}}
							</a>
						</div>
					</div>
				@endauth

				@guest
					<h1>Recuperar Senha</h1>
					<form class="uk-form-stacked form" method="post" action="{{route('email.store')}}">
						@csrf
						<div class="uk-margin">
							<label class="uk-form-label" for="form-recuperar-email">
								{{ __('Informe o email cadastrado') }}
							</label>
							<div class="uk-form-controls">
								<input id="form-recuperar-email" type="email" class="uk-input uk-border-rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div class="uk-text-left uk-border-rounded modal-footer btn">
							<a href="#" class="uk-button uk-border-rounded btn-enviar">
								{{__('Enviar solicitação')}}
							</a>
							<a href="{{route('login')}}" class="uk-button uk-link-reset link-voltar-login">
								{{__('Voltar para o login')}}
							</a>
						</div>
					</form>
				@endguest
      </div>
  	</div>
	</section>

	<script src="{{asset('../js/recuperar-senha.js')}}"></script>
@endsection