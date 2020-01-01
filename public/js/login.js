const btnlogin = document.querySelector(".btn-entrar");
const form = document.querySelector("form.form");

btnlogin.addEventListener("click", e => {
    e.preventDefault();
    form.submit();
});
