@extends("layouts.app", ["paginaAtual" => "Editar Usuário"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "editar-usuario"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-usuarios", "textoIntroducao" => "atualize os dados de usuário", "paginaAtual" => "Usuários"])

  <section class="uk-section usuarios">
		<div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body bg-card-form">
				<form class="uk-form-stacked form-usuario-editar" action="{{route('usuarios.update', ["usuario" => $usuarios->id])}}" method="post">
          @csrf
          @method("put")
					<div class="uk-child-width-1-2@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label form" for="form-atualizar-nome">{{__('Nome Completo *')}}</label>
							<div class="uk-form-controls">
								<input id="form-atualizar-nome" type="text" class="uk-input uk-border-rounded @error('nome') is-invalid @enderror" name="nome" value="{{$usuarios->nome}}" required autocomplete="nome" autofocus>
								@error('nome')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-atualizar-cpf">{{__('CPF *')}}</label>
							<div class="uk-form-controls">
								<input class="uk-input uk-border-rounded @error('cpf') is-invalid @enderror" name="cpf" value="{{$usuarios->cpf}}" id="form-atualizar-cpf" type="text" placeholder="Somente os números" required autocomplete="cpf">
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
							<label class="uk-form-label" for="form-atualizar-email">{{__('Email *')}}</label>
							<div class="uk-form-controls">
								<input id="form-atualizar-email" type="email" class="uk-input uk-border-rounded @error('email') is-invalid @enderror" name="email" value="{{$usuarios->email}}" required autocomplete="email">
								@error('email')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-atualizar-sala-lab">
								{{__('Laboratório *')}}
							</label>
							<div class="uk-form-controls">
								<select class="uk-select uk-border-rounded" id="form-atualizar-sala-lab" @error('laboratorio') is-invalid @enderror" name="laboratorio" value="{{$usuarios->laboratorio}}" required autocomplete="laboratorio">
									<option value="" disabled>Escolha uma opção</option>
									<option value="LabMotriz" @if($usuarios->laboratorio === 'LabMotriz') selected @endif>
                    LabMotriz
                  </option>
									<option value="LCADE" @if($usuarios->laboratorio === 'LCADE') selected @endif>
                    LCADE
                  </option>
									<option value="LabQuali" @if($usuarios->laboratorio === 'LabQuali') selected @endif>
                    LabQuali
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
					<div class="uk-child-width-1-2@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label" for="form-atualizar-usuario">{{__('Usuário *')}}</label>
							<div class="uk-form-controls">
								<input class="uk-input @error('usuario') is-invalid @enderror" name="usuario" value="{{$usuarios->usuario}}" id="form-atualizar-usuario" type="text" placeholder="Mínimo de 6 caracteres" required autocomplete="usuario">
								@error('usuario')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
            <div>
							<label class="uk-form-label" for="form-atualizar-categoria">
								{{__('Categoria *')}}
							</label>
							<div class="uk-form-controls">
								<select class="uk-select uk-border-rounded" id="form-atualizar-categoria" @error('categoria') is-invalid @enderror" name="categoria" value="{{$usuarios->categoria}}" required autocomplete="categoria">
									<option value="" disabled>Escolha uma opção</option>
									<option value="CEAMAZON" @if($usuarios->categoria === 'CEAMAZON') selected @endif>
                    CEAMAZON
                  </option>
									<option value="ADMINISTRADOR" @if($usuarios->categoria === 'ADMINISTRADOR') selected @endif>
                    ADMINISTRADOR
                  </option>
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
						<a href="#" class="uk-button uk-flex-last@s btn-confirmar" onclick="event.preventDefault(); document.querySelector('form.form-usuario-editar').submit()">{{__('Atualizar')}}</a>
						<a href="{{route('usuarios.index')}}" class="uk-button uk-margin-right btn-cancelar">
							{{__('Cancelar')}}
						</a>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection