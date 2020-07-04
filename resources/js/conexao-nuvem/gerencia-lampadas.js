// Função chamada para acionar as luminárias quando o interruptor é clicado
function acionaLampadas(subtopico, interruptores, cliente) {
  let messagem = "";
  $(interruptores).each(function (interruptor) {
    interruptor += 1;
    $(this).change(function () {
      if ($(this).is(":checked")) {
        messagem = new Paho.Message("on" + interruptor);
        messagem.destinationName = "ceamazon/" + subtopico + "/c" + interruptor;
        messagem.qos = 1;
        messagem.retained = !0;
        cliente.send(messagem);
      } else {
        messagem = new Paho.Message("off" + interruptor);
        messagem.destinationName = "ceamazon/" + subtopico + "/c" + interruptor;
        messagem.qos = 1;
        messagem.retained = !0;
        cliente.send(messagem);
      }
    });
  });
}

// Função chamada para mudar o estado dos interruptores acionados
function mudaInterruptores(mensagem) {
  const interruptores = document.querySelectorAll(
    ".interruptor .interruptor-lampada"
  );
  const lampadas1 = document.querySelector(".interruptor #lampadas1");
  const lampadas2 = document.querySelector(".interruptor #lampadas2");
  const lampadas3 = document.querySelector(".interruptor #lampadas3");
  const lampadas4 = document.querySelector(".interruptor #lampadas4");
  interruptores.forEach(() => {
    switch (mensagem) {
      case "on1":
        lampadas1.checked = !0;
        break;
      case "off1":
        lampadas1.checked = !1;
        break;
      case "on2":
        lampadas2.checked = !0;
        break;
      case "off2":
        lampadas2.checked = !1;
        break;
      case "on3":
        lampadas3.checked = !0;
        break;
      case "off3":
        lampadas3.checked = !1;
        break;
      case "on4":
        lampadas4.checked = !0;
        break;
      case "off4":
        lampadas4.checked = !1;
        break;
    }
  });
}

// Função chamada para mudar a cor dos ícones das luminárias
function mudaIconesLampadas(mensagem) {
  const iconesLampadas1 = document.querySelectorAll(
    ".img-sala [data-dispositivo='lampadas1']"
  );
  const iconesLampadas2 = document.querySelectorAll(
    ".img-sala [data-dispositivo='lampadas2']"
  );
  const iconesLampadas3 = document.querySelectorAll(
    ".img-sala [data-dispositivo='lampadas3']"
  );
  const iconesLampadas4 = document.querySelectorAll(
    ".img-sala [data-dispositivo='lampadas4']"
  );
  const corIconeLigado = "#119933";
  const corIconeDesligado = "#ee2211";
  iconesLampadas1.forEach((icone) => {
    if (mensagem == "on1") {
      icone.style.background = corIconeLigado;
    } else if (mensagem == "off1") {
      icone.style.background = corIconeDesligado;
    }
  });
  iconesLampadas2.forEach((icone) => {
    if (mensagem == "on2") {
      icone.style.background = corIconeLigado;
    } else if (mensagem == "off2") {
      icone.style.background = corIconeDesligado;
    }
  });
  iconesLampadas3.forEach((icone) => {
    if (mensagem == "on3") {
      icone.style.background = corIconeLigado;
    } else if (mensagem == "off3") {
      icone.style.background = corIconeDesligado;
    }
  });
  iconesLampadas4.forEach((icone) => {
    if (mensagem == "on4") {
      icone.style.background = corIconeLigado;
    } else if (mensagem == "off4") {
      icone.style.background = corIconeDesligado;
    }
  });
}
