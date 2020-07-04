"use strict";

/** duração das notificações */
$("div.alert")
  .not(".alert-important")
  .delay(4000)
  .fadeOut(350);
