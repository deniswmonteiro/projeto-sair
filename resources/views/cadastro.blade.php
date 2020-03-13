@extends("layouts.app", ["paginaAtual" => "Cadastro"])

@section("conteudo")
	@include("layouts.menu", ["menu" => "cadastro"])
	@include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "solicite acesso", "paginaAtual" => "Cadastro"])

	<section class="uk-section cadastro">
		<div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body bg-card-form">
				<form class="uk-form-stacked cadastro" action="{{route('cadastro.store')}}" method="post">
					@csrf
					<div class="uk-child-width-1-3@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label form" for="form-cadastro-nome">{{__('Nome Completo *')}}</label>
							<div class="uk-form-controls">
								<input id="form-cadastro-nome" type="text" class="uk-input uk-border-rounded @error('nome') is-invalid @enderror" name="nome" value="{{old('nome')}}" required autocomplete="nome" autofocus>
								@error('nome')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-cpf">{{__('CPF *')}}</label>
							<div class="uk-form-controls">
								<input class="uk-input uk-border-rounded @error('cpf') is-invalid @enderror" name="cpf" value="{{old('cpf')}}" id="form-cadastro-cpf" type="text" placeholder="Somente os números" required autocomplete="cpf">
								@error('cpf')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-email">{{__('Email *')}}</label>
							<div class="uk-form-controls">
								<input id="form-cadastro-email" type="email" class="uk-input uk-border-rounded @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email">
								@error('email')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
					<div class="uk-child-width-1-3@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label" for="form-cadastro-usuario">{{__('Usuário *')}}</label>
							<div class="uk-form-controls">
								<input id="form-cadastro-usuario" type="text" class="uk-input uk-border-rounded @error('usuario') is-invalid @enderror" name="usuario" value="{{old('usuario')}}" required autocomplete="usuario" placeholder="Mínimo de 6 caracteres">
								@error('usuario')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-sala-lab">
								{{__('Laboratório *')}}
							</label>
							<div class="uk-form-controls">
								<select id="form-cadastro-sala-lab" class="uk-select uk-border-rounded @error('laboratorio') is-invalid @enderror" name="laboratorio" value="{{old('laboratorio')}}" required autocomplete="laboratorio">
									<option value="" disabled selected>Escolha uma opção</option>
									<option value="LabMotriz">LabMotriz</option>
									<option value="LCADE">LCADE</option>
									<option value="LabQuali">LabQuali</option>
								</select>
								@error('laboratorio')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
					<p class="aviso">Campos marcados com * são obrigatórios.</p>
					<div class="btn">
						<a href="#" class="uk-button uk-margin-right btn-confirmar" onclick="event.preventDefault(); document.querySelector('form.cadastro').submit()">
							{{__('Cadastrar')}}
						</a>
						<a href="{{route('login')}}" class="uk-link-reset link-voltar-login">
							{{__('Voltar para o login')}}
						</a>
					</div>
				</form>
			</div>
		</div>
	</section>

	<script src="js/jquery.mask.js"></script>
	<script src="js/solicita-cadastro.js"></script>
@endsection