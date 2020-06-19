<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAIR &bull; {{$paginaAtual}}</title>
    <link rel="stylesheet" href="{{asset('css/uikit.min.css')}}" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <link rel="shortcut icon" href="{{asset('logo.ico')}}" type="image/x-icon">
    <script src="{{asset('js/plugins.min.js')}}" type="text/javascript"></script>
    @laravelPWA
  </head>
  <body>
    <div class="uk-text-center notificacao-alerta">
      @include('flash::message')
    </div>
    @yield("conteudo")

    <footer class="rodape">
      <div class="dados">
        <div class="uk-container">
          <div class="uk-child-width-1-2@s uk-grid-large" uk-grid>
            <div class="contatos">
              <div>
                <h3>Contatos</h3>
                <ul class="uk-list">
                  <li>
                    <span>Endereço:</span> Parque de Ciência e Tecnologia do Guamá - Av. Perimetral, nº 2651, Prédio 01 - CEP: 66077-830 - Guamá - Belém/PA
                  </li>
                  <li>
                    <span>Email:</span> ceamazonufpa@gmail.com
                  </li>
                </ul>
              </div>
            </div>
            <div class="logo-rodape">
              <div class="uk-child-width-1-2@m uk-grid-column-small uk-flex-middle" uk-grid>
                <div class="uk-text-right@m uk-text-center@s">
                  <a href="http://ceamazon.com.br">
                    <img src="{{asset('img/logo-ceamazon.svg')}}" alt="Logo do CEAMAZON">
                  </a>
                </div>
                <div class="uk-text-center@s">
                  <a href="https://portal.ufpa.br/">
                    <img src="{{asset('img/logo-ufpa.svg')}}" alt="Logo da UFPA">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright uk-text-center">
        <div class="uk-container">
          <div uk-grid>
            <div class="uk-margin-auto">
              <p>
                SAIR &copy; {{date('Y')}} &ndash; Todos os direitos reservados.
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/uikit.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/uikit-icons.min.js')}}" type="text/javascript"></script>
  </body>
</html>