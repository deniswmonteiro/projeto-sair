const btnAtualizar = document.querySelector(".btn-atualizar");
const form = document.querySelector("form.form");

btnAtualizar.addEventListener("click", e => {
    e.preventDefault();
    form.submit();
});

const inputForm = document.querySelectorAll("input");
inputForm.forEach(input => {
    input.addEventListener("keyup", e => {
        if (e.keyCode === 13) {
            e.preventDefault();
            document.querySelector(".btn-atualizar").click();
        }
    });
});
