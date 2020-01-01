const btnlogin = document.querySelector(".btn-cadastrar");
const form = document.querySelector("form.form");

btnlogin.addEventListener("click", e => {
    e.preventDefault();
    form.submit();
});
