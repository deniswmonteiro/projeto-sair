@extends("layouts.app", ["paginaAtual" => "Cadastro"])

@section("conteudo")
	@include("layouts.menu", ["menu" => "cadastro"])
	@include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "solicite acesso", "paginaAtual" => "Cadastro"])

	<section class="uk-section cadastro">
		<div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body bg-card-form">
				<form class="uk-form-stacked form-cadastro" action="{{route('cadastro.store')}}" method="post">
					@csrf
					<div class="uk-child-width-1-2@s" uk-grid>
						<div>
							<label class="uk-form-label form" for="form-cadastro-nome">{{__('Nome completo *')}}</label>
							<div class="uk-form-controls">
								<input id="form-cadastro-nome" type="text" class="uk-input uk-border-rounded @error('nome') uk-form-danger @enderror" name="nome" value="{{old('nome')}}" required autocomplete="nome" autofocus>
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
								<input class="uk-input uk-border-rounded @error('cpf') uk-form-danger @enderror" name="cpf" value="{{old('cpf')}}" id="form-cadastro-cpf" type="text" placeholder="Somente os números" required autocomplete="cpf">
								@error('cpf')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
					<div class="uk-child-width-1-2@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label" for="form-cadastro-email">{{__('Email *')}}</label>
							<div class="uk-form-controls">
								<input id="form-cadastro-email" type="email" class="uk-input uk-border-rounded @error('email') uk-form-danger @enderror" name="email" value="{{old('email')}}" required autocomplete="email">
								@error('email')
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
								<select id="form-cadastro-sala-lab" class="uk-select uk-border-rounded @error('laboratorio') uk-form-danger @enderror" name="laboratorio" required autocomplete="laboratorio">
									<option value="" disabled selected>Escolha uma opção</option>
									<option value="LabMotriz" @if(old("laboratorio") == "LabMotriz") selected @endif>
										LabMotriz
									</option>
									<option value="LCADE" @if(old("laboratorio") == "LCADE") selected @endif>
										LCADE
									</option>
									<option value="LabQuali" @if(old("laboratorio") == "LabQuali") selected @endif>
										LabQuali
									</option>
									<option value="LabSIMA" @if(old("laboratorio") == "LabSIMA") selected @endif>
										LabSIMA
									</option>
									<option value="Biblioteca" @if(old("laboratorio") == "Biblioteca") selected @endif>
										Biblioteca
									</option>
									<option value="Secretaria" @if(old("laboratorio") == "Secretaria") selected @endif>
										Secretaria
									</option>
									<option value="Diretoria" @if(old("laboratorio") == "Diretoria") selected @endif>
										Diretoria
									</option>
									<option value="LabInstEletricas" @if(old("laboratorio") == "LabInstEletricas") selected @endif>
										Lab. de Instalações Elétricas
									</option>
									<option value="LabModelagem" @if(old("laboratorio") == "LabModelagem") selected @endif>
										Lab. de Modelagem
									</option>
								</select>
								@error('laboratorio')
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
								<input id="form-cadastro-usuario" type="text" class="uk-input uk-border-rounded @error('usuario') uk-form-danger @enderror" name="usuario" value="{{old('usuario')}}" required autocomplete="usuario" placeholder="Mínimo de 6 caracteres">
								@error('usuario')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-senha">{{__('Senha *')}}</label>
							<div class="uk-form-controls">
								<input id="form-cadastro-senha" type="password" class="uk-input uk-border-rounded @error('password') uk-form-danger @enderror" name="password" value="{{old('password')}}" required autocomplete="password" placeholder="Mínimo de 8 caracteres">
								@error('password')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-senha-confirmar">
								{{__('Confirmar senha *')}}
							</label>
							<div class="uk-form-controls">
								<input id="form-cadastro-senha-confirmar" type="password" class="uk-input uk-border-rounded @error('password_confirmation') uk-form-danger @enderror" name="password_confirmation" value="{{old('password_confirmation')}}" required autocomplete="password_confirmation" placeholder="Mínimo de 8 caracteres">
								@error('password_confirmation')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
					<p class="aviso">Campos marcados com * são obrigatórios.</p>
					<div class="btn">
						<a href="#" class="uk-button uk-margin-right btn-confirmar" onclick="event.preventDefault(); document.querySelector('form.form-cadastro').submit()">
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
@endsection