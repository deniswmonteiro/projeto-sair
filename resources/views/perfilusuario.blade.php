@extends("layouts.app", ["paginaAtual" => "Editar Perfil"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "editar-perfil"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-usuarios", "textoIntroducao" => "atualize seus dados", "paginaAtual" => "Perfil de Usuário"])

  <section class="uk-section perfil">
		<div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body bg-card-form">
        <form class="uk-form-stacked form-usuario-editar" action="{{route('perfil.update', ["perfil" => encrypt($usuarioLogado->id)])}}" method="post">
          @csrf
          @method("put")
					<div class="uk-child-width-1-2@s" uk-grid>
						<div>
							<label class="uk-form-label form" for="form-perfil-nome">{{__('Nome completo *')}}</label>
							<div class="uk-form-controls">
								<input id="form-perfil-nome" type="text" class="uk-input uk-border-rounded @error('nome') uk-form-danger @enderror" name="nome" value="{{$usuarioLogado->nome}}" required autocomplete="nome" autofocus>
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
								<input class="uk-input uk-border-rounded @error('cpf') uk-form-danger @enderror" name="cpf" value="{{$usuarioLogado->cpf}}" id="form-perfil-cpf" type="text" placeholder="Somente os números" required autocomplete="cpf">
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
								<input id="form-peril-email" type="email" class="uk-input uk-border-rounded @error('email') uk-form-danger @enderror" name="email" value="{{$usuarioLogado->email}}" required autocomplete="email">
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
								<input class="uk-input uk-border-rounded @error('usuario') uk-form-danger @enderror" name="usuario" value="{{$usuarioLogado->usuario}}" id="form-perfil-usuario" type="text" placeholder="Mínimo de 6 caracteres" required autocomplete="usuario">
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
								<select class="uk-select uk-border-rounded @error('laboratorio') uk-form-danger @enderror" id="form-perfil-sala-lab" name="laboratorio" value="{{$usuarioLogado->laboratorio}}" required autocomplete="laboratorio">
									<option value="" disabled>Escolha uma opção</option>
									<option value="LabMotriz" @if($usuarioLogado->laboratorio === 'LabMotriz') selected @endif>
                    LabMotriz
                  </option>
									<option value="LCADE" @if($usuarioLogado->laboratorio === 'LCADE') selected @endif>
                    LCADE
                  </option>
									<option value="LabQuali" @if($usuarioLogado->laboratorio === 'LabQuali') selected @endif>
                    LabQuali
                  </option>
                  <option value="LabSIMA" @if($usuarioLogado->laboratorio === 'LabSIMA') selected @endif>
                    LabSIMA
									</option>
									<option value="Biblioteca" @if($usuarioLogado->laboratorio === 'Biblioteca') selected @endif>
                    Biblioteca
									</option>
									<option value="Secretaria" @if($usuarioLogado->laboratorio === 'Secretaria') selected @endif>
                    Secretaria
									</option>
									<option value="Diretoria" @if($usuarioLogado->laboratorio === 'Diretoria') selected @endif>
                    Diretoria
									</option>
									<option value="LabInstEletricas" @if($usuarioLogado->laboratorio === 'LabInstEletricas') selected @endif>
                    Lab. de Instalações Elétricas
									</option>
									<option value="LabModelagem" @if($usuarioLogado->laboratorio === 'LabModelagem') selected @endif>
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
            <div class="uk-form-controls uk-margin-medium-top">
							<label class="uk-form-label" for="form-perfil-mudarsenha">
								<input class="uk-checkbox uk-border-rounded" name="chk_senha" id="form-perfil-mudarsenha" type="checkbox" onchange="alterarSenhaPerfil()" data-perfil="chk_alterar_senha">
								{{__('Alterar senha?')}}
							</label>
						</div>
          <div class="uk-child-width-1-3@s uk-margin form-senha" uk-grid data-perfil="form_senha">
            <div>
							<label class="uk-form-label" for="form-perfil-senhaatual">
                {{__('Senha atual *')}}
              </label>
							<div class="uk-form-controls uk-inline uk-display-block">
								<input id="form-perfil-senhaatual" type="password" class="uk-input uk-border-rounded @error('password') uk-form-danger @enderror" name="password" placeholder="Mínimo de 8 caracteres" required disabled>
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
								<input id="form-perfil-senhanova" type="password" class="uk-input uk-border-rounded @error('new_password') uk-form-danger @enderror" name="new_password" placeholder="Mínimo de 8 caracteres" required disabled>
								@error('new_password')
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
								<input id="form-perfil-senhaconfirmar" type="password" class="uk-input uk-border-rounded @error('password_confirmation') uk-form-danger @enderror" name="password_confirmation" placeholder="Mínimo de 8 caracteres" required disabled>
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
						<a href="{{route('home')}}" class="uk-button uk-margin-right btn-cancelar">
							{{__('Cancelar')}}
						</a>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection