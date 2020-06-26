"use strict";

/** remove borda vermelha e aviso de erro */
const inputsErro = document.querySelectorAll(".uk-form-danger");
$(inputsErro).each(function() {
  $(this).change(function() {
    $(this).removeClass("uk-form-danger"),
      $(this)
        .next()
        .remove();
  });
});
