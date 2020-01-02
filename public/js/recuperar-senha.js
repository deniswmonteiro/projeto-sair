const btnlogin = document.querySelector(".btn-enviar");
const form = document.querySelector("form.form");

btnlogin.addEventListener("click", e => {
    e.preventDefault();
    form.submit();
});
