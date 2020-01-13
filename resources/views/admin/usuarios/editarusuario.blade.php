@extends("layouts.app", ["paginaAtual" => "Atualizar Dados"])

@section("conteudo")
  @include("layouts.menu", ["menu" => "atualizarDados"])
  @include("layouts.introducao", ["iconeIntroducao" => "ico-cadastro", "textoIntroducao" => "atualize os dados", "paginaAtual" => "Usuários"])


  <section class="uk-section cadastro">
		<div class="uk-container">
			<div class="uk-card uk-card-default uk-card-body card-cadastro">
				<form class="uk-form-stacked form" action="{{route('usuarios.update', ["usuario" => $usuarios->id])}}" method="post">
          @csrf
          @method("put")
					<div class="uk-child-width-1-2@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label form" for="form-atualizar-nome">{{__('Nome Completo *')}}</label>
							<div class="uk-form-controls">
								<input id="form-atualizar-nome" type="text" class="uk-input @error('nome') is-invalid @enderror" name="nome" value="{{$usuarios->nome}}" required autocomplete="nome" autofocus>
								@error('nome')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-atualizar-cpf">{{__('CPF *')}}</label>
							<div class="uk-form-controls">
								<input class="uk-input @error('cpf') is-invalid @enderror" name="cpf" value="{{$usuarios->cpf}}" id="form-atualizar-cpf" type="text" placeholder="Somente os números" required autocomplete="cpf">
								@error('cpf')
									<span class="invalid-feedback" role="alert">
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
								<input id="form-atualizar-email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{$usuarios->email}}" required autocomplete="email">
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
						<div>
							<label class="uk-form-label" for="form-atualizar-sala-lab">
								{{__('Sala/Laboratório *')}}
							</label>
							<div class="uk-form-controls">
								<select class="uk-select" id="form-atualizar-sala-lab" @error('laboratorio') is-invalid @enderror" name="laboratorio" value="{{$usuarios->laboratorio}}" required autocomplete="laboratorio">
									<option value="" disabled>Escolha uma opção</option>
									<option value="LabMotriz" @if($usuarios->laboratorio === 'LabMotriz') selected @endif>
                    LabMotriz
                  </option>
									<option value="LCAD" @if($usuarios->laboratorio === 'LCAD') selected @endif>
                    LCAD
                  </option>
									<option value="LabQuali" @if($usuarios->laboratorio === 'LabQuali') selected @endif>
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
					</div>
					<div class="uk-child-width-1-2@s uk-margin" uk-grid>
						<div>
							<label class="uk-form-label" for="form-atualizar-usuario">{{__('Usuário *')}}</label>
							<div class="uk-form-controls">
								<input class="uk-input @error('usuario') is-invalid @enderror" name="usuario" value="{{$usuarios->usuario}}" id="form-atualizar-usuario" type="text" placeholder="Mínimo de 6 caracteres" required autocomplete="usuario">
								@error('usuario')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
								@enderror
							</div>
						</div>
            <div>
							<label class="uk-form-label" for="form-atualizar-usuario">
								{{__('Categoria *')}}
							</label>
							<div class="uk-form-controls">
								<select class="uk-select" id="form-atualizar-usuario" @error('categoria') is-invalid @enderror" name="categoria" value="{{$usuarios->categoria}}" required autocomplete="categoria">
									<option value="" disabled>Escolha uma opção</option>
									<option value="CEAMAZON" @if($usuarios->categoria === 'CEAMAZON') selected @endif>
                    CEAMAZON
                  </option>
									<option value="ADMINISTRADOR" @if($usuarios->categoria === 'ADMINISTRADOR') selected @endif>
                    ADMINISTRADOR
                  </option>
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
						<a href="{{route('usuarios.index')}}" class="uk-button uk-margin-right btn-cancelar">
							{{__('Cancelar')}}
						</a>
						<a href="#" class="uk-button btn-confirmar">{{__('Atualizar')}}</a>
					</div>
				</form>
			</div>
		</div>
	</section>

  <script src="{{asset('/js/atualizar.js')}}"></script>
@endsection