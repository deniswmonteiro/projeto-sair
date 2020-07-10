// Função chamada para acionar os condicionadores de ar quando o interruptor é clicado
function acionaAC(subtopicoAC, interruptoresAC, clienteAC) {
  let messagemAC = "";
  $(interruptoresAC).each(function (interruptorAC) {
    interruptorAC += 1;

    $(this).change(function () {
      if ($(this).is(":checked")) {
        messagemAC = new Paho.Message("on" + interruptorAC);
        messagemAC.destinationName =
          "ceamazon/" + subtopicoAC + "/c" + interruptorAC;
        messagemAC.qos = 1;
        messagemAC.retained = !0;
        clienteAC.send(messagemAC);
      } else {
        messagem = new Paho.Message("off" + interruptorAC);
        messagem.destinationName =
          "ceamazon/" + subtopicoAC + "/c" + interruptorAC;
        messagem.qos = 1;
        messagem.retained = !0;
        clienteAC.send(messagem);
      }
    });
  });
}

// Função chamada para mudar o estado dos interruptores acionados
function mudaInterruptoresAC(mensagem) {
  const interruptoresAC = document.querySelectorAll(
    ".interruptor .interruptor-arcondicionado"
  );
  const arcondicionado1 = document.querySelector(
    ".interruptor #arcondicionado1"
  );
  const arcondicionado2 = document.querySelector(
    ".interruptor #arcondicionado2"
  );
  const arcondicionado3 = document.querySelector(
    ".interruptor #arcondicionado3"
  );
  const arcondicionado4 = document.querySelector(
    ".interruptor #arcondicionado4"
  );

  interruptoresAC.forEach(() => {
    switch (mensagem) {
      case "on1":
        arcondicionado1.checked = !0;
        break;
      case "off1":
        arcondicionado1.checked = !1;
        break;
      case "on2":
        arcondicionado2.checked = !0;
        break;
      case "off2":
        arcondicionado2.checked = !1;
        break;
      case "on3":
        arcondicionado3.checked = !0;
        break;
      case "off3":
        arcondicionado3.checked = !1;
        break;
      case "on4":
        arcondicionado4.checked = !0;
        break;
      case "off4":
        arcondicionado4.checked = !1;
        break;
    }
  });
}

// Função chamada para mudar a cor dos ícones dos condicionadores de ar
function mudaIconesAC(mensagem) {
  const iconesAC1 = document.querySelectorAll(
    ".img-sala [data-dispositivo='arcondicionado1']"
  );
  const iconesAC2 = document.querySelectorAll(
    ".img-sala [data-dispositivo='arcondicionado2']"
  );
  const iconesAC3 = document.querySelectorAll(
    ".img-sala [data-dispositivo='arcondicionado3']"
  );
  const iconesAC4 = document.querySelectorAll(
    ".img-sala [data-dispositivo='arcondicionado4']"
  );
  const corIconeLigado = "#0066cc";
  const corIconeDesligado = "#ee2211";

  iconesAC1.forEach((icone) => {
    if (mensagem == "on1") {
      icone.style.background = corIconeLigado;
    } else if (mensagem == "off1") {
      icone.style.background = corIconeDesligado;
    }
  });

  iconesAC2.forEach((icone) => {
    if (mensagem == "on2") {
      icone.style.background = corIconeLigado;
    } else if (mensagem == "off2") {
      icone.style.background = corIconeDesligado;
    }
  });

  iconesAC3.forEach((icone) => {
    if (mensagem == "on3") {
      icone.style.background = corIconeLigado;
    } else if (mensagem == "off3") {
      icone.style.background = corIconeDesligado;
    }
  });

  iconesAC4.forEach((icone) => {
    if (mensagem == "on4") {
      icone.style.background = corIconeLigado;
    } else if (mensagem == "off4") {
      icone.style.background = corIconeDesligado;
    }
  });
}

/** controle de acionamento da temperatura */
const inputsValorTemperatura = document.querySelectorAll(
  "[data-temperatura] input"
);
const interruptoresArcondicionado = document.querySelectorAll(
  ".check.interruptor-arcondicionado"
);

$(inputsValorTemperatura).inputSpinner();

interruptoresArcondicionado.forEach((btnInterruptor) => {
  btnInterruptor.addEventListener("click", () => {
    inputsValorTemperatura.forEach((input) => {
      btnInterruptor.id == input.dataset.temperatura && btnInterruptor.checked
        ? input.removeAttribute("disabled")
        : btnInterruptor.id != input.dataset.temperatura ||
          btnInterruptor.checked ||
          input.setAttribute("disabled", !0);
    });
  });
});
