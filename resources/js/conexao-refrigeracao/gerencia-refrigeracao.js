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

function mudaTemperaturaAC() {
  /** cria slider para mudança de temperatura do ar-condicionado */
  const slidersTemperatura = document.querySelectorAll("[data-slider]");
  const interruptoresArcondicionado = document.querySelectorAll(
    ".check.interruptor-arcondicionado"
  );
  slidersTemperatura.forEach((slider) => {
    slider.setAttribute("disabled", !0),
      noUiSlider.create(slider, {
        start: [16],
        connect: "lower",
        tooltips: [wNumb({ decimals: 0, suffix: " ºC" })],
        step: 1,
        range: { min: [16], max: [26] },
      }),
      slider.noUiSlider.on("update", () => {
        let temperatura = slider.noUiSlider.get().slice(0, 2);
      });

    const valorMax = document.querySelector(".noUi-handle-lower");
    console.log(valorMax.getAttribute("aria-valuemax"));
  });

  /** ativa slider da temperatura quando interruptor do ar-condicionado é acionado */
  const tooltipsTemperatura = document.querySelectorAll(".noUi-tooltip");
  const btnTemperatura = document.querySelectorAll(".noUi-handle");
  interruptoresArcondicionado.forEach((btnInterruptor) => {
    btnInterruptor.addEventListener("click", () => {
      slidersTemperatura.forEach((slider) => {
        btnInterruptor.id == slider.dataset.slider && btnInterruptor.checked
          ? (slider.removeAttribute("disabled"),
            tooltipsTemperatura.forEach((tooltip, c) => {
              c === btnInterruptor.id.substr(-1) - 1 &&
                tooltip.classList.add("enabled");
            }),
            btnTemperatura.forEach((btn, c) => {
              c === btnInterruptor.id.substr(-1) - 1 &&
                btn.classList.add("enabled");
            }))
          : btnInterruptor.id != slider.dataset.slider ||
            btnInterruptor.checked ||
            (slider.setAttribute("disabled", !0),
            tooltipsTemperatura.forEach((tooltip, c) => {
              c === btnInterruptor.id.substr(-1) - 1 &&
                tooltip.classList.remove("enabled");
            }),
            btnTemperatura.forEach((btn, c) => {
              c === btnInterruptor.id.substr(-1) - 1 &&
                btn.classList.remove("enabled");
            }));
      });
    });
  });
}
