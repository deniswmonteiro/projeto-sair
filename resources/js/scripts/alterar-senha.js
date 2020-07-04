/** ativa/desativa campo de alteração de senha */
const chkAlterarSenha = document.querySelector(
  "[data-perfil='chk_alterar_senha']"
);
const divAlterarSenha = document.querySelector("[data-perfil='form_senha']");
const inputsAlterarSenha = document.querySelectorAll(
  "[data-perfil='form_senha'] input"
);

$(chkAlterarSenha).click(function() {
  divAlterarSenha.classList.toggle("active");
  inputsAlterarSenha.forEach(input => {
    1 == $(chkAlterarSenha).prop("checked")
      ? input.removeAttribute("disabled")
      : input.setAttribute("disabled", !0);
  });
});
