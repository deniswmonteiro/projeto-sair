<!-- modal logout -->
<div id="{{$id}}" uk-modal>
  <div class="uk-modal-dialog uk-modal-body">
    <h3 class="uk-modal-title">{{$texto}}</h3>
    <div class="uk-text-right uk-margin-remove-bottom btn">
      <button class="uk-button uk-modal-close uk-margin-small-right btn-cancelar" type="button">
        Cancelar
      </button>
      <a class="uk-button btn-modal-confirmar" onclick="event.preventDefault(); document.querySelector('form.logout').submit()">{{__('Confirmar')}}</a>
      <form action="{{route('logout')}}" class="logout" method="post" style="display:none;">
          @csrf
      </form>
    </div>
  </div>
</div>