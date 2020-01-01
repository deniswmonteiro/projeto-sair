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

/* links do menu mobile para outras páginas */
(function linksMenuMobile() {
    const linksMenu = document.querySelectorAll("[data-link]");
    linksMenu.forEach(link => {
        link.addEventListener("click", () => {
            if (link.dataset.link === "sobre") {
                window.location.href = "../sobre.php";
            } else if (link.dataset.link === "login") {
                window.location.href = "#";
            }
        });
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
    icone.setAttribute("src", "../img/ico-esconde.svg");
});

senhaModal.forEach(btn => {
    btn.addEventListener("click", () => {
        btn.classList.toggle("btn-mostra-senha-modal");

        if (btn.classList.contains("btn-mostra-senha-modal")) {
            iconeSenha.forEach(icone => {
                icone.setAttribute("src", "../img/ico-esconde.svg");
            });
        } else {
            iconeSenha.forEach(icone => {
                icone.setAttribute("src", "../img/ico-mostra.svg");
            });
        }
    });
});
