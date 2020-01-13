@extends("layouts.app", ["paginaAtual" => "Gerenciar Solicitação"])

@section("conteudo")
	@include("layouts.menu", ["menu" => "gerenciarsolicitacao"])
	@include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "gerencie solicitação de cadastro", "paginaAtual" => "Usuário"])

	<section class="uk-section cadastro">
		<div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body card-cadastro">
				<form class="uk-form-stacked form" action="{{route('usuarios.cadastro')}}" method="post">
					@csrf
					<div class="uk-child-width-1-3@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label form" for="form-cadastro-nome">{{__('Nome Completo *')}}</label>
							<div class="uk-form-controls">
								<input id="form-cadastro-nome" type="text" class="uk-input @error('nome') is-invalid @enderror" name="nome" value="{{$solicitacoes->nome}}" required autocomplete="nome" autofocus>
								@error('nome')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-cpf">{{__('CPF *')}}</label>
							<div class="uk-form-controls">
								<input class="uk-input @error('cpf') is-invalid @enderror" name="cpf" value="{{$solicitacoes->cpf}}" id="form-cadastro-cpf" type="text" placeholder="Somente os números" required autocomplete="cpf">
								@error('cpf')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-email">{{__('Email *')}}</label>
							<div class="uk-form-controls">
								<input id="form-cadastro-email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{$solicitacoes->email}}" required autocomplete="email">
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
					<div class="uk-child-width-1-3@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label" for="form-cadastro-sala-lab">
								{{__('Laboratório *')}}
							</label>
							<div class="uk-form-controls">
								<select class="uk-select" id="form-cadastro-sala-lab" @error('laboratorio') is-invalid @enderror" name="laboratorio" value="{{$solicitacoes->laboratorio}}" required autocomplete="laboratorio">
									<option value="" disabled>Escolha uma opção</option>
									<option value="LabMotriz" @if($solicitacoes->laboratorio === 'LabMotriz') selected @endif>
										LabMotriz
									</option>
									<option value="LCAD" @if($solicitacoes->laboratorio === 'LCAD') selected @endif>
										LCAD
									</option>
									<option value="LabQuali" @if($solicitacoes->laboratorio === 'LabQuali') selected @endif>
										LabQuali
									</option>
								</select>
								@error('laboratorio')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-usuario">{{__('Usuário *')}}</label>
							<div class="uk-form-controls">
								<input class="uk-input @error('usuario') is-invalid @enderror" name="usuario" value="{{$solicitacoes->usuario}}" id="form-cadastro-usuario" type="text" placeholder="Mínimo de 6 caracteres" required autocomplete="usuario">
								@error('usuario')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-senha">{{__('Senha *')}}</label>
							<div class="uk-form-controls uk-inline uk-display-block">
								<input id="form-cadastro-senha" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Utilizar CPF">
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
					<div class="uk-child-width-1-3@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label" for="form-atualizar-usuario">
								{{__('Categoria *')}}
							</label>
							<div class="uk-form-controls">
								<select class="uk-select" id="form-atualizar-usuario" @error('categoria') is-invalid @enderror" name="categoria" value="{{old('categoria')}}" required autocomplete="categoria">
									<option value="" selected disabled>Escolha uma opção</option>
									<option value="CEAMAZON">CEAMAZON</option>
									<option value="ADMINISTRADOR">ADMINISTRADOR</option>
								</select>
								@error('categoria')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
					<p class="aviso">Campos marcados com * são obrigatórios.</p>
					<div class="btn">
						<a href="{{route('gerenciarsolicitacoes.index')}}" class="uk-button uk-margin-right btn-cancelar">
							{{__('Cancelar')}}
						</a>
						<a href="#" class="uk-button btn-confirmar">{{__('Cadastrar')}}</a>
					</div>
				</form>
			</div>
		</div>
	</section>

	<script src="{{asset('/js/cadastro.js')}}"></script>
@endsection