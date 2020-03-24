/* oculta/mostra logo do site ao clicar no menu mobile */
(function btnMenuMobile() {
  const btnMenuMobile = document.querySelector("[data-btn-mobile]");
  const logo = document.querySelector(".logo-cabecalho");
  const menuMobile = document.querySelector("[data-menu-mobile]");

  btnMenuMobile.addEventListener("click", () => {
    logo.classList.add("ativo");
  });

  menuMobile.addEventListener("click", () => {
    logo.classList.remove("ativo");
  });
})();

/* mostra a senha que o usuário digitou */
function mostraSenha() {
  const tiposInput = document.querySelectorAll("[data-senha]");

  tiposInput.forEach(tipo => {
    if (tipo.type == "password") {
      tipo.type = "text";
    } else {
      tipo.type = "password";
    }
  });
}

/* mostra/oculta ícone de senha visível/invisível */
const senhaModal = document.querySelectorAll(".btn-mostra-senha-modal");
const iconeSenha = document.querySelectorAll("[data-icone-senha-modal]");

iconeSenha.forEach(icone => {
  icone.setAttribute("src", "/img/ico-esconde.svg");
});

senhaModal.forEach(btn => {
  btn.addEventListener("click", () => {
    btn.classList.toggle("btn-mostra-senha-modal");

    if (btn.classList.contains("btn-mostra-senha-modal")) {
      iconeSenha.forEach(icone => {
        icone.setAttribute("src", "/img/ico-esconde.svg");
      });
    } else {
      iconeSenha.forEach(icone => {
        icone.setAttribute("src", "/img/ico-mostra.svg");
      });
    }
  });
});

/** notificações */
$("div.alert")
  .not(".alert-important")
  .delay(4000)
  .fadeOut(350);

/** adicionar evento de click aos links */
const btnConfirmar = document.querySelector(".btn-confirmar");
const form = document.querySelector("form.form");

btnConfirmar.addEventListener("click", e => {
  e.preventDefault();
  form.submit();
});

/** adiciona evento de click em botão a partir de um input */
const inputForm = document.querySelectorAll("input");
inputForm.forEach(input => {
  input.addEventListener("keyup", e => {
    if (e.keyCode === 13) {
      e.preventDefault();
      document.querySelector(".btn-confirmar").click();
    }
  });
});
