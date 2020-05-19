@extends("layouts.app", ["paginaAtual" => "Editar Perfil"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "editar-perfil"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-usuarios", "textoIntroducao" => "atualize seus dados", "paginaAtual" => "Perfil de Usuário"])

  <section class="uk-section usuarios">
		<div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body bg-card-form">
        <form class="uk-form-stacked form-usuario-editar" action="{{route('perfil.update', ["perfil" => $usuario->id])}}" method="post">
          @csrf
          @method("put")
					<div class="uk-child-width-1-2@s" uk-grid>
						<div>
							<label class="uk-form-label form" for="form-perfil-nome">{{__('Nome completo *')}}</label>
							<div class="uk-form-controls">
								<input id="form-perfil-nome" type="text" class="uk-input uk-border-rounded @error('nome') is-invalid @enderror" name="nome" value="{{$usuario->nome}}" required autocomplete="nome" autofocus>
								@error('nome')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-perfil-cpf">{{__('CPF *')}}</label>
							<div class="uk-form-controls">
								<input class="uk-input uk-border-rounded @error('cpf') is-invalid @enderror" name="cpf" value="{{$usuario->cpf}}" id="form-perfil-cpf" type="text" placeholder="Somente os números" required autocomplete="cpf">
								@error('cpf')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
					</div>
					<div class="uk-child-width-1-3@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label" for="form-peril-email">{{__('Email *')}}</label>
							<div class="uk-form-controls">
								<input id="form-peril-email" type="email" class="uk-input uk-border-rounded @error('email') is-invalid @enderror" name="email" value="{{$usuario->email}}" required autocomplete="email">
								@error('email')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
            </div>
            <div>
							<label class="uk-form-label" for="form-perfil-usuario">{{__('Usuário *')}}</label>
							<div class="uk-form-controls">
								<input class="uk-input @error('usuario') is-invalid @enderror" name="usuario" value="{{$usuario->usuario}}" id="form-perfil-usuario" type="text" placeholder="Mínimo de 6 caracteres" required autocomplete="usuario">
								@error('usuario')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
            </div>
						<div>
							<label class="uk-form-label" for="form-perfil-sala-lab">
								{{__('Laboratório *')}}
							</label>
							<div class="uk-form-controls">
								<select class="uk-select uk-border-rounded" id="form-perfil-sala-lab" @error('laboratorio') is-invalid @enderror" name="laboratorio" value="{{$usuario->laboratorio}}" required autocomplete="laboratorio">
									<option value="" disabled>Escolha uma opção</option>
									<option value="LabMotriz" @if($usuario->laboratorio === 'LabMotriz') selected @endif>
                    LabMotriz
                  </option>
									<option value="LCADE" @if($usuario->laboratorio === 'LCADE') selected @endif>
                    LCADE
                  </option>
									<option value="LabQuali" @if($usuario->laboratorio === 'LabQuali') selected @endif>
                    LabQuali
                  </option>
                  <option value="LabSIMA" @if($usuario->laboratorio === 'LabSIMA') selected @endif>
                    LabSIMA
									</option>
									<option value="Biblioteca" @if($usuario->laboratorio === 'Biblioteca') selected @endif>
                    Biblioteca
									</option>
									<option value="Secretaria" @if($usuario->laboratorio === 'Secretaria') selected @endif>
                    Secretaria
									</option>
									<option value="Diretoria" @if($usuario->laboratorio === 'Diretoria') selected @endif>
                    Diretoria
									</option>
									<option value="LabInstEletricas" @if($usuario->laboratorio === 'LabInstEletricas') selected @endif>
                    Lab. de Instalações Elétricas
									</option>
									<option value="LabModelagem" @if($usuario->laboratorio === 'LabModelagem') selected @endif>
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
          <div>
            <label class="uk-form-label" for="form-perfil-mudarsenha">{{__('Alterar senha?')}}</label>
            <div class="uk-form-controls">
              <input class="uk-checkbox" name="usuario" id="form-perfil-mudarsenha" type="checkbox">
            </div>
          </div>
					<div class="uk-child-width-1-3@s uk-margin" uk-grid>
            <div>
							<label class="uk-form-label" for="form-perfil-senhaantiga">
                {{__('Senha antiga *')}}
              </label>
							<div class="uk-form-controls uk-inline uk-display-block">
								<input id="form-perfil-senhaantiga" type="password" class="uk-input uk-border-rounded @error('password') is-invalid @enderror" name="password" required>
								@error('password')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-perfil-senhanova">
                {{__('Nova senha *')}}
              </label>
							<div class="uk-form-controls uk-inline uk-display-block">
								<input id="form-perfil-senhanova" type="password" class="uk-input uk-border-rounded @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required>
								@error('password_confirmation')
									<span class="uk-text-danger" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-perfil-senhaconfirmar">
                {{__('Confirmar nova senha *')}}
              </label>
							<div class="uk-form-controls uk-inline uk-display-block">
								<input id="form-perfil-senhaconfirmar" type="password" class="uk-input uk-border-rounded @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required>
								@error('password_confirmation')
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
						<a href="{{route('usuario.index')}}" class="uk-button uk-margin-right btn-cancelar">
							{{__('Cancelar')}}
						</a>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection