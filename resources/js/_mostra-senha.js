"use strict";

/** muda ícone do botão que mostra a senha */
const btnMostraSenha = document.querySelectorAll(".btn-mostra-senha");
const icoMostraSenha = document.querySelectorAll("[data-icone-senha]");
icoMostraSenha.forEach(icone => {
  icone.setAttribute("src", "/img/ico-esconde.svg");
});
btnMostraSenha.forEach(btn => {
  btn.addEventListener("click", () => {
    /** mostra/esconde a senha */
    document.querySelectorAll("[data-senha]").forEach(tipo => {
      "password" == tipo.type ? (tipo.type = "text") : (tipo.type = "password");
    });

    /** modifica o ícone do botão */
    btn.classList.toggle("btn-mostra-senha"),
      btn.classList.contains("btn-mostra-senha")
        ? icoMostraSenha.forEach(icone => {
            icone.setAttribute("src", "/img/ico-esconde.svg");
          })
        : icoMostraSenha.forEach(icone => {
            icone.setAttribute("src", "/img/ico-mostra.svg");
          });
  });
});
