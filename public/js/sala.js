/* mostra a imagem de acordo com a tab (lâmpadas ou ar-condicionado) */
$("[data-group]").each(function() {
    const $allTarget = $(this).find("[data-target]"),
        $allClick = $(this).find("[data-click]"),
        activeClass = "active";

    $allTarget.first().addClass(activeClass);
    $allClick.first().addClass(activeClass);

    $allClick.click(function(e) {
        e.preventDefault();

        var id = $(this).data("click"),
            $target = $('[data-target="' + id + '"]');

        $allClick.removeClass(activeClass);
        $allTarget.removeClass(activeClass);

        $target.addClass(activeClass);
        $(this).addClass(activeClass);
    });
});

/* muda a cor do ícone de acordo com o switch correspondente */
const check = document.querySelectorAll(".check");
const iconesLampada = document.querySelectorAll(".icones-lampada");
const iconesArcondicionado = document.querySelectorAll(
    ".icones-arcondicionado"
);
const dataDispositivo = document.querySelectorAll("[data-dispositivo]");

check.forEach(item => {
    item.addEventListener("click", () => {
        dataDispositivo.forEach(dispositivo => {
            if (item.id == dispositivo.dataset.dispositivo && item.checked) {
                $(dispositivo).css("background", "#193");
            }

            else if (item.id == dispositivo.dataset.dispositivo && !item.checked) {
                $(dispositivo).css("background", "#e21");
            }
        });
    });
});


/* mostra os ícones de acordo com o tipo (lâmpada ou ar-condicionado) */
const allClick = document.querySelectorAll("[data-click]");
const avisoArcondicionado = document.querySelectorAll(".aviso-arcondicionado");
$(iconesArcondicionado).css("display", "none");
$(avisoArcondicionado).css("display", "none");

allClick.forEach(click => {
    $(click).click(function(e) {
        if (click.dataset.click === "lampada") {
            $(iconesLampada).css("display", "block");
            $(iconesArcondicionado).css("display", "none");
            $(avisoArcondicionado).css("display", "none");
        } else {
            $(iconesLampada).css("display", "none");
            $(iconesArcondicionado).css("display", "block");
            $(avisoArcondicionado).css("display", "block");
        }
    });
});