@extends("layouts.app", ["paginaAtual" => "Editar Solicitação"])

@section("conteudo")
	@include("layouts.menu", ["menu" => "editar-solicitacao"])
	@include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "confirme dados de solicitação", "paginaAtual" => "Solicitação de Cadastro"])

	<section class="uk-section solicitacao">
		<div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body bg-card-form">
				<form class="uk-form-stacked form" action="{{route('gerenciarsolicitacoes.store')}}" method="post">
					@csrf
					<div class="uk-child-width-1-3@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label form" for="form-cadastro-nome">{{__('Nome Completo *')}}</label>
							<div class="uk-form-controls">
								<input id="form-cadastro-nome" type="text" class="uk-input uk-border-rounded @error('nome') is-invalid @enderror" name="nome" value="{{$solicitacoes->nome}}" required autocomplete="nome" autofocus>
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
								<input class="uk-input uk-border-rounded @error('cpf') is-invalid @enderror" name="cpf" value="{{$solicitacoes->cpf}}" id="form-cadastro-cpf" type="text" placeholder="Somente os números" required autocomplete="cpf">
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
								<input id="form-cadastro-email" type="email" class="uk-input uk-border-rounded @error('email') is-invalid @enderror" name="email" value="{{$solicitacoes->email}}" required autocomplete="email">
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
							<label class="uk-form-label" for="form-cadastro-sala-lab">
								{{__('Laboratório *')}}
							</label>
							<div class="uk-form-controls">
								<select class="uk-select uk-border-rounded" id="form-cadastro-sala-lab" @error('laboratorio') is-invalid @enderror" name="laboratorio" value="{{$solicitacoes->laboratorio}}" required autocomplete="laboratorio">
									<option value="" disabled>Escolha uma opção</option>
									<option value="LabMotriz" @if($solicitacoes->laboratorio === 'LabMotriz') selected @endif>
										LabMotriz
									</option>
									<option value="LCADE" @if($solicitacoes->laboratorio === 'LCADE') selected @endif>
										LCADE
									</option>
									<option value="LabQuali" @if($solicitacoes->laboratorio === 'LabQuali') selected @endif>
										LabQuali
									</option>
									<option value="LabSIMA" @if($solicitacoes->laboratorio === 'LabSIMA') selected @endif>
										LabSIMA
									</option>
									<option value="Biblioteca" @if($solicitacoes->laboratorio === 'Biblioteca') selected @endif>
										Biblioteca
									</option>
									<option value="Secretaria" @if($solicitacoes->laboratorio === 'Secretaria') selected @endif>
										Secretaria
									</option>
									<option value="Diretoria" @if($solicitacoes->laboratorio === 'Diretoria') selected @endif>
										Diretoria
									</option>
									<option value="LabQuali" @if($solicitacoes->laboratorio === 'LabQuali') selected @endif>
										LabQuali
									</option>
									<option value="LabInstEletricas" @if($solicitacoes->laboratorio === 'LabInstEletricas') selected @endif>
										Lab. de Instalações Elétricas
									</option>
									<option value="LabModelagem" @if($solicitacoes->laboratorio === 'LabModelagem') selected @endif>
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
						<div>
							<label class="uk-form-label" for="form-cadastro-usuario">{{__('Usuário *')}}</label>
							<div class="uk-form-controls">
								<input class="uk-input uk-border-rounded @error('usuario') is-invalid @enderror" name="usuario" value="{{$solicitacoes->usuario}}" id="form-cadastro-usuario" type="text" placeholder="Mínimo de 6 caracteres" required autocomplete="usuario">
								@error('usuario')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-cadastro-senha">{{__('Senha *')}}</label>
							<div class="uk-form-controls uk-inline uk-display-block">
								<input id="form-cadastro-senha" type="password" class="uk-input uk-border-rounded @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Utilizar CPF">
								@error('password')
									<span class="uk-text-danger" role="alert">
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
								<select class="uk-select uk-border-rounded" id="form-atualizar-usuario" @error('categoria') is-invalid @enderror" name="categoria" value="{{old('categoria')}}" required autocomplete="categoria">
									<option value="" selected disabled>Escolha uma opção</option>
									<option value="CEAMAZON">CEAMAZON</option>
									<option value="ADMINISTRADOR">ADMINISTRADOR</option>
								</select>
								@error('categoria')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
					<p class="aviso">Campos marcados com * são obrigatórios.</p>
					<div class="uk-flex btn">
						<a href="#" class="uk-button uk-flex-last@s btn-confirmar">{{__('Cadastrar')}}</a>
						<a href="{{route('gerenciarsolicitacoes.index')}}" class="uk-button uk-margin-right btn-cancelar">
							{{__('Cancelar')}}
						</a>
					</div>
				</form>
			</div>
		</div>
	</section>

	<script src="{{secure_asset('js/cadastro.js')}}"></script>
@endsection