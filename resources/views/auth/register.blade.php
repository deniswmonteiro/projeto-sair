@extends("layouts.app", ["paginaAtual" => "Cadastro"])

@section("conteudo")
	@include("layouts.menu", ["menu" => "cadastro"])
	@include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "solicite acesso", "paginaAtual" => "Cadastro"])

	<section class="uk-section cadastro">
		<div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body card-cadastro">
				<form class="uk-form-stacked form" action="{{route('register')}}" method="post">
					@csrf
					<div class="uk-child-width-1-2@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label form" for="form-cadastro-nome">{{__('Nome Completo *')}}</label>
							<div class="uk-form-controls">
								<input id="form-cadastro-nome" type="text" class="uk-input @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" required autocomplete="name" autofocus>
								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-cpf">{{__('CPF *')}}</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="form-cadastro-cpf" type="text" placeholder="Somente os números">
							</div>
						</div>
					</div>
					<div class="uk-child-width-1-2@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label" for="form-cadastro-email">{{__('Email *')}}</label>
							<div class="uk-form-controls">
								<input id="form-cadastro-email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email">
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-sala-lab">
								{{__('Sala/Laboratório *')}}
							</label>
							<div class="uk-form-controls">
								<select class="uk-select" id="form-cadastro-sala-lab">
									<option value="" disabled selected>Escolha uma opção</option>
									<option value="labmotriz">LabMotriz</option>
									<option value="lcad">LCAD</option>
								</select>
							</div>
						</div>
					</div>
					<div class="uk-child-width-1-2@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label" for="form-cadastro-usuario">{{__('Usuário *')}}</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="form-cadastro-usuario" type="text" placeholder="Mínimo de 6 caracteres">
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-senha">{{__('Senha *')}}</label>
							<div class="uk-form-controls uk-inline uk-display-block">
								<input id="form-cadastro-senha" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mínimo de 8 caracteres">
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
					<p class="aviso">Campos marcados com * são obrigatórios.</p>
					<div class="uk-text-left uk-border-rounded uk-flex btn">
						<a href="#" class="uk-button uk-border-rounded btn-cadastrar">{{__('Cadastrar')}}</a>
						<a href="{{route('login')}}" class="uk-link-reset link-voltar-login">
							{{__('Voltar para o login')}}
						</a>
					</div>
				</form>
			</div>
		</div>
	</section>

	<script src="{{asset('../js/cadastro.js')}}"></script>
@endsection