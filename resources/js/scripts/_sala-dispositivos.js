"use script";

/** previne mudança de aba de dispositivos na tela touch */
//document.querySelector(".uk-switcher").style.cssText = "touch-action = 'none'";
$(".uk-switcher").css("touch-action", "none");

/** muda aba do dispositivo e imagem correspondente */
$("[data-group]").each(function() {
  const allTarget = $(this).find("[data-target]"),
    allClick = $(this).find("[data-click]"),
    activeClass = "active";
  allTarget.first().addClass(activeClass);
  allClick.first().addClass(activeClass);
  allClick.click(function(e) {
    e.preventDefault();
    var id = $(this).data("click"),
      target = $('[data-target="' + id + '"]');
    allClick.removeClass(activeClass);
    allTarget.removeClass(activeClass);
    target.addClass(activeClass);
    $(this).addClass(activeClass);
  });
});

/** muda a cor do ícone do dispositivo de acordo com o interruptor acionado */
const interruptores = document.querySelectorAll(".check");
const icoDispositivos = document.querySelectorAll("[data-dispositivo]");
interruptores.forEach(interruptor => {
  interruptor.addEventListener("click", () => {
    icoDispositivos.forEach(dispositivo => {
      interruptor.id == dispositivo.dataset.dispositivo &&
      interruptor.checked &&
      interruptor.classList.contains("interruptor-lampada")
        ? (dispositivo.style.background = "#193")
        : interruptor.id == dispositivo.dataset.dispositivo &&
          interruptor.checked &&
          interruptor.classList.contains("interruptor-arcondicionado")
        ? (dispositivo.style.background = "#06c")
        : interruptor.id != dispositivo.dataset.dispositivo ||
          interruptor.checked ||
          (dispositivo.style.background = "#e21");
    });
  });
});

/** mostra os ícones do dispositivos de acordo com a aba */
const avisoArcondicionado = document.querySelectorAll(".aviso-arcondicionado");
const iconesLampada = document.querySelectorAll(".icones-lampada");
const iconesArcondicionado = document.querySelectorAll(
  ".icones-arcondicionado"
);
const allClick = document.querySelectorAll("[data-click]");
$(iconesArcondicionado).css("display", "none");
$(avisoArcondicionado).css("display", "none");
allClick.forEach(tab => {
  $(tab).click(function() {
    "lampada" === tab.dataset.click
      ? ($(iconesLampada).css("display", "block"),
        $(iconesArcondicionado).css("display", "none"),
        $(avisoArcondicionado).css("display", "none"))
      : ($(iconesLampada).css("display", "none"),
        $(iconesArcondicionado).css("display", "block"),
        $(avisoArcondicionado).css("display", "block"));
  });
});
