// (function linksSalas() {
//     const cardsAndar = document.querySelectorAll("[data-andar]");
//     cardsAndar.forEach(andar => {
//         andar.addEventListener("click", () => {
//             if (andar.dataset.andar === "terreo") {
//                 window.location.href = "../terreo";
//             } else if (andar.dataset.andar === "primeiro") {
//                 window.location.href = "../primeiroandar";
//             } else if (andar.dataset.andar === "segundo") {
//                 window.location.href = "../segundoandar";
//             }
//         });
//     });
// })();

/** notificação */
$("div.alert")
    .not(".alert-important")
    .delay(3000)
    .fadeOut(350);
