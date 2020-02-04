<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto Automação &bull; {{$paginaAtual}}</title>
    <link rel="stylesheet" href="{{secure_asset('css/uikit.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
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
                  <li><span>Endereço:</span> Parque de Ciência e Tecnologia do Guamá - Av. Perimetral, nº 2651, Prédio 01 - CEP: 66077-830 - Guamá - Belém/PA</li>
                  <li><span>Email:</span> ceamazonufpa@gmail.com</li>
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
                CEAMAZON &copy; {{date('Y')}} &ndash; Todos os direitos reservados
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{asset('js/uikit.js')}}"></script>
    <script src="{{asset('js/uikit-icons.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
  </body>
</html>