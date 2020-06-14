@extends('layouts.app', ["paginaAtual" => "Criar Nova Senha"])

@section('conteudo')
	@include("layouts.menu", ["menu" => "criar-nova-senha"])
	<section class="uk-section login">
		<div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body bg-card-form">
				<h1>{{__('Criar Nova Senha')}}</h1>
				<div class="card-body">
					<form class="uk-form-stacked form-redefinir-senha" method="post" action="{{route('senha.reset')}}">
						@csrf
						<input type="hidden" name="token" value="{{$token}}">
						<div class="uk-margin">
							<label for="form-redefinir-email" class="uk-form-label">
								{{__('Email')}}
							</label>
							<div class="uk-form-controls">
								<input id="form-redefinir-email" type="email" class="uk-input uk-border-rounded @error('email') uk-form-danger @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
								@error('email')
								<span class="uk-text-danger" role="alert">
									<strong>{{$message}}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="uk-margin">
							<label for="form-redefinir-nova-senha" class="uk-form-label">
								{{ __('Nova senha') }}
							</label>
							<div class="uk-form-controls">
								<input id="form-redefinir-nova-senha" type="password" class="uk-input uk-border-rounded @error('password') uk-form-danger @enderror" name="password" required autocomplete="new-password">
								@error('password')
								<span class="uk-text-danger" role="alert">
									<strong>{{$message}}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="uk-margin">
							<label for="form-redefinir-senh-confirmar" class="uk-form-label">
								{{__('Confirmar senha')}}
							</label>
							<div class="uk-form-controls">
								<input id="form-redefinir-senh-confirmar" type="password" class="uk-input uk-border-rounded" name="password_confirmation" required autocomplete="new-password">
							</div>
						</div>

						<div class="uk-text-left modal-footer btn">
							<a href="#" class="uk-button uk-margin-small-right btn-confirmar"
								onclick="event.preventDefault(); document.querySelector('form.form-redefinir-senha').submit()">
								{{__('Redefinir senha')}}
							</a>
							<a href="{{route('login')}}" class="uk-button uk-link-reset link-voltar-login inicial">
								{{__('Voltar para o login')}}
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection