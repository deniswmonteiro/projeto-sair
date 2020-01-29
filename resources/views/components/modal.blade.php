<!-- modal logout -->
<div id="{{$id}}" uk-modal>
  <div class="uk-modal-dialog uk-modal-body uk-border-rounded modal">
    <h3 class="uk-modal-title">{{$texto}}</h3>
    <div class="uk-flex uk-flex-right uk-margin-remove-bottom btn">
      <a class="uk-button uk-flex-last@s btn-modal-confirmar" onclick="event.preventDefault(); document.querySelector('form.logout').submit()">{{__('Confirmar')}}</a>
      <form action="{{route('logout')}}" class="logout" method="post" style="display:none;">
          @csrf
      </form>
      <a class="uk-button uk-modal-close uk-margin-right btn-cancelar" type="button">
        Cancelar
      </a>
    </div>
  </div>
</div>