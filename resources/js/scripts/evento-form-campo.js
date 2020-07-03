"use strict";

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
