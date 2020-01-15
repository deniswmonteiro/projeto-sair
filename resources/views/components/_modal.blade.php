public static function getLogin() {
      echo "
    <div id='modal-login' uk-modal>
          <div class='uk-modal-dialog uk-border-rounded modal modal-login'>
            <button class='uk-modal-close-default' type='button' uk-close></button>
            <div class='uk-modal-header uk-border-rounded modal-header'>
              <h2 class='uk-modal-title'>Fazer login</h2>
            </div>
            <div class='uk-modal-body'>
              <form class='uk-form-stacked form'>
                <div class='uk-margin'>
                  <label class='uk-form-label' for='form-enviar-email'>Email ou nome de usuário</label>
                  <div class='uk-form-controls'>
                    <input class='uk-input uk-border-rounded' id='form-login-email' type='email'>
                  </div>
                </div>
                <div class='uk-margin'>
                  <label class='uk-form-label' for='form-senha'>Senha</label>
                  <div class='uk-form-controls uk-inline uk-display-block'>
                    <button class='uk-form-icon uk-form-icon-flip btn-form-senha-modal btn-mostra-senha-modal' type='button' onclick='mostraSenha()'>
                      <img src='' alt='Ícone da senha' data-icone-senha-modal>
                    </button>
                    <input class='uk-input uk-border-rounded' id='form-senha' type='password' data-senha>
                  </div>
                </div>
              </form>
              <span>
                <a class='uk-button' href='#modal-recuperar-senha' uk-toggle>Esqueceu a senha?</a>
              </span>
              <span><a class='uk-button' href='cadastro.php'>Solicitar acesso</a></span>
            </div>
            <div class='uk-modal-footer uk-text-right uk-border-rounded modal-footer btn'>
              <a class='uk-button uk-modal-close uk-border-rounded btn-cancelar' type='button'>Cancelar</a>
              <a class='uk-button uk-border-rounded btn-entrar' type='button'>Entrar</a>
            </div>
          </div>
        </div>
      ";
    }
    
    public function getRecuperarSenha() {
      echo "
        <div id='modal-recuperar-senha' uk-modal>
          <div class='uk-modal-dialog uk-border-rounded modal modal-recuperar-senha'>
            <button class='uk-modal-close-default' type='button' uk-close></button>
            <div class='uk-modal-header uk-border-rounded modal-header'>
              <h2 class='uk-modal-title'>Recuperar senha</h2>
            </div>
            <div class='uk-modal-body'>
            <form class='uk-form-stacked'>
              <div class='uk-margin'>
                <label class='uk-form-label' for='form-recuperar-email'>
                  Informe o email cadastrado
                </label>
                <div class='uk-form-controls'>
                  <input class='uk-input uk-border-rounded' id='form-recuperar-email' type='email'>
                </div>
              </div>
            </form>
            </div>
            <div class='uk-modal-footer uk-text-left uk-border-rounded modal-footer btn'>
              <a class='uk-button uk-border-rounded btn-enviar' href='#notificacao-recuperar-senha' type='button' uk-toggle>Enviar</a>
              <a class='uk-button' href='#modal-login' uk-toggle>Voltar para o login</a>
            </div>
          </div>
        </div>
      ";
    }

    public function getNotificacao($notificacao_id, $notificacao_texto) {
      echo "
        <div id='$notificacao_id' uk-modal>
          <div class='uk-modal-dialog uk-border-rounded modal modal-notificacao'>
            <button class='uk-modal-close-default' type='button' uk-close></button>
            <div class='uk-modal-body uk-text-center'>
              <span><i class='material-icons-round'>check</i></span>
              <p>$notificacao_texto</p>
            </div>
          </div>
        </div>
      ";