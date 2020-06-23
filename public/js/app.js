/** mostra a senha ao clicar no botão */
function mostraSenha() {
  "use strict";
  document.querySelectorAll("[data-senha]").forEach((tipo) => {
    "password" == tipo.type ? (tipo.type = "text") : (tipo.type = "password");
  });
}

/** ativa/desativa campo de alteração de senha */
function alterarSenhaPerfil() {
  "use strict";
  const chkAlterarSenha = document.querySelector(
    "[data-perfil='chk_alterar_senha']"
  );
  const divAlterarSenha = document.querySelector("[data-perfil='form_senha']");
  const inputsAlterarSenha = document.querySelectorAll(
    "[data-perfil='form_senha'] input"
  );
  divAlterarSenha.classList.toggle("active");
  inputsAlterarSenha.forEach((input) => {
    1 == $(chkAlterarSenha).prop("checked")
      ? input.removeAttribute("disabled")
      : input.setAttribute("disabled", !0);
  });
}

!(function () {
  "use strict";
  window.addEventListener("load", function () {
    /** remove borda vermelha e aviso de erro */
    const inputsErro = document.querySelectorAll(".uk-form-danger");
    $(inputsErro).each(function () {
      $(this).change(function () {
        $(this).removeClass("uk-form-danger"), $(this).next().remove();
      });
    });

    /** formata números de cpf */
    document.querySelectorAll("input[id$='cpf']").forEach((e) => {
      $(e).mask("000.000.000-00");
    });

    /** muda ícone do botão que mostra a senha */
    const btnMostraSenha = document.querySelectorAll(".btn-mostra-senha");
    const icoMostraSenha = document.querySelectorAll("[data-icone-senha]");
    icoMostraSenha.forEach((icone) => {
      icone.setAttribute("src", "/img/ico-esconde.svg");
    });
    btnMostraSenha.forEach((btn) => {
      btn.addEventListener("click", () => {
        btn.classList.toggle("btn-mostra-senha"),
          btn.classList.contains("btn-mostra-senha")
            ? icoMostraSenha.forEach((icone) => {
                icone.setAttribute("src", "/img/ico-esconde.svg");
              })
            : icoMostraSenha.forEach((icone) => {
                icone.setAttribute("src", "/img/ico-mostra.svg");
              });
      });
    });

    /** duração das notificações */
    $("div.alert").not(".alert-important").delay(4000).fadeOut(350);

    /** adiciona evento de click em botão a partir de um input */
    const inputForm = document.querySelectorAll("input");
    inputForm.forEach((input) => {
      input.addEventListener("keyup", (e) => {
        if (e.keyCode === 13) {
          e.preventDefault();
          document.querySelector(".btn-confirmar").click();
        }
      });
    });

    /** previne mudança de aba de dispositivos na tela touch */
    document.querySelector(".uk-switcher").style.cssText =
      "touch-action = 'none'";

    /** muda aba do dispositivo e imagem correspondente */
    const allTarget = document.querySelectorAll("[data-target]");
    const allClick = document.querySelectorAll("[data-click]");
    allTarget[0].classList.add("active");
    allClick.forEach((tab) => {
      tab.addEventListener("click", () => {
        "arcondicionado" === tab.dataset.click
          ? (allTarget[0].classList.remove("active"),
            allTarget[1].classList.add("active"))
          : (allTarget[0].classList.add("active"),
            allTarget[1].classList.remove("active"));
      });
    });

    /** muda a cor do ícone do dispositivo de acordo com o interruptor acionado */
    const interruptores = document.querySelectorAll(".check");
    const icoDispositivos = document.querySelectorAll("[data-dispositivo]");
    interruptores.forEach((interruptor) => {
      interruptor.addEventListener("click", () => {
        icoDispositivos.forEach((dispositivo) => {
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
    const avisoArcondicionado = document.querySelectorAll(
      ".aviso-arcondicionado"
    );
    const iconesLampada = document.querySelectorAll(".icones-lampada");
    const iconesArcondicionado = document.querySelectorAll(
      ".icones-arcondicionado"
    );
    $(iconesArcondicionado).css("display", "none");
    $(avisoArcondicionado).css("display", "none");
    allClick.forEach((tab) => {
      $(tab).click(function () {
        "lampada" === tab.dataset.click
          ? ($(iconesLampada).css("display", "block"),
            $(iconesArcondicionado).css("display", "none"),
            $(avisoArcondicionado).css("display", "none"))
          : ($(iconesLampada).css("display", "none"),
            $(iconesArcondicionado).css("display", "block"),
            $(avisoArcondicionado).css("display", "block"));
      });
    });
  });
})();

(function () {
  "use strict";

  /** cria slider para mudança de temperatura do ar-condicionado */
  const slidersTemperatura = document.querySelectorAll("[data-slider]");
  const interruptoresArcondicionado = document.querySelectorAll(".check");
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
        console.log(slider.noUiSlider.get().slice(0, 2));
      });
  });

  /** ativa slider da temperatura quando interruptor do ar-condicionado é acionado */
  const tooltipsTemperatura = document.querySelectorAll(".noUi-tooltip");
  const btnTemperatura = document.querySelectorAll(".noUi-handle");
  interruptoresArcondicionado.forEach((btnInterruptor) => {
    btnInterruptor.addEventListener("click", () => {
      slidersTemperatura.forEach((slider) => {
        btnInterruptor.id == slider.dataset.slider && btnInterruptor.checked
          ? (slider.removeAttribute("disabled"),
            tooltipsTemperatura.forEach((e, c) => {
              c === btnInterruptor.id.substr(-1) - 1 &&
                e.classList.add("enabled");
            }),
            btnTemperatura.forEach((e, c) => {
              c === btnInterruptor.id.substr(-1) - 1 &&
                e.classList.add("enabled");
            }))
          : btnInterruptor.id != slider.dataset.slider ||
            btnInterruptor.checked ||
            (slider.setAttribute("disabled", !0),
            tooltipsTemperatura.forEach((e, c) => {
              c === btnInterruptor.id.substr(-1) - 1 &&
                e.classList.remove("enabled");
            }),
            btnTemperatura.forEach((e, c) => {
              c === btnInterruptor.id.substr(-1) - 1 &&
                e.classList.remove("enabled");
            }));
      });
    });
  });
})();
