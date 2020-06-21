function mostraSenha() {
  "use strict";
  document.querySelectorAll("[data-senha]").forEach((e) => {
    "password" == e.type ? (e.type = "text") : (e.type = "password");
  });
}
function alterarSenhaPerfil() {
  "use strict";
  const e = document.querySelector("[data-perfil='chk_alterar_senha']"),
    t = document.querySelector("[data-perfil='form_senha']"),
    c = document.querySelectorAll("[data-perfil='form_senha'] input");
  t.classList.toggle("active"),
    c.forEach((t) => {
      1 == $(e).prop("checked")
        ? t.removeAttribute("disabled")
        : t.setAttribute("disabled", !0);
    });
}
!(function () {
  "use strict";
  window.addEventListener("load", function () {
    const e = document.querySelectorAll(".uk-form-danger");
    $(e).each(function () {
      $(this).change(function () {
        $(this).removeClass("uk-form-danger"), $(this).next().remove();
      });
    }),
      document.querySelectorAll("input[id$='cpf']").forEach((e) => {
        $(e).mask("000.000.000-00");
      });
    const t = document.querySelectorAll(".btn-mostra-senha"),
      c = document.querySelectorAll("[data-icone-senha]");
    c.forEach((e) => {
      e.setAttribute("src", "/img/ico-esconde.svg");
    }),
      t.forEach((e) => {
        e.addEventListener("click", () => {
          e.classList.toggle("btn-mostra-senha"),
            e.classList.contains("btn-mostra-senha")
              ? c.forEach((e) => {
                  e.setAttribute("src", "/img/ico-esconde.svg");
                })
              : c.forEach((e) => {
                  e.setAttribute("src", "/img/ico-mostra.svg");
                });
        });
      }),
      $("div.alert").not(".alert-important").delay(4e3).fadeOut(350),
      document.querySelectorAll("input").forEach((e) => {
        e.addEventListener("keyup", (e) => {
          13 === e.keyCode &&
            (e.preventDefault(),
            document.querySelector(".btn-confirmar").click());
        });
      }),
      (document.querySelector(".uk-switcher").style.cssText =
        "touch-action = 'none'");
    const s = document.querySelectorAll("[data-target]"),
      o = document.querySelectorAll("[data-click]");
    s[0].classList.add("active"),
      o.forEach((e) => {
        e.addEventListener("click", () => {
          "arcondicionado" === e.dataset.click
            ? (s[0].classList.remove("active"), s[1].classList.add("active"))
            : (s[0].classList.add("active"), s[1].classList.remove("active"));
        });
      });
    const a = document.querySelectorAll(".check"),
      r = document.querySelectorAll("[data-dispositivo]");
    a.forEach((e) => {
      e.addEventListener("click", () => {
        r.forEach((t) => {
          e.id == t.dataset.dispositivo &&
          e.checked &&
          e.classList.contains("interruptor-lampada")
            ? (t.style.background = "#193")
            : e.id == t.dataset.dispositivo &&
              e.checked &&
              e.classList.contains("interruptor-arcondicionado")
            ? (t.style.background = "#06c")
            : e.id != t.dataset.dispositivo ||
              e.checked ||
              (t.style.background = "#e21");
        });
      });
    });
    const i = document.querySelectorAll("[data-click]"),
      l = document.querySelectorAll(".aviso-arcondicionado"),
      d = document.querySelectorAll(".icones-lampada"),
      n = document.querySelectorAll(".icones-arcondicionado");
    $(n).css("display", "none"),
      $(l).css("display", "none"),
      i.forEach((e) => {
        $(e).click(function (t) {
          "lampada" === e.dataset.click
            ? ($(d).css("display", "block"),
              $(n).css("display", "none"),
              $(l).css("display", "none"))
            : ($(d).css("display", "none"),
              $(n).css("display", "block"),
              $(l).css("display", "block"));
        });
      });
  });
})(),
  (function () {
    "use strict";
    const e = document.querySelectorAll("[data-slider]"),
      t = document.querySelectorAll(".check");
    e.forEach((e) => {
      e.setAttribute("disabled", !0),
        noUiSlider.create(e, {
          start: [16],
          connect: "lower",
          tooltips: [wNumb({ decimals: 0, suffix: " ºC" })],
          step: 1,
          range: { min: [16], max: [26] },
        }),
        e.noUiSlider.on("update", () => {
          console.log(e.noUiSlider.get().slice(0, 2));
        });
    });
    const c = document.querySelectorAll(".noUi-tooltip"),
      s = document.querySelectorAll(".noUi-handle");
    t.forEach((t) => {
      t.addEventListener("click", () => {
        e.forEach((e) => {
          t.id == e.dataset.slider && t.checked
            ? (e.removeAttribute("disabled"),
              c.forEach((e, c) => {
                c === t.id.substr(-1) - 1 && e.classList.add("enabled");
              }),
              s.forEach((e, c) => {
                c === t.id.substr(-1) - 1 && e.classList.add("enabled");
              }))
            : t.id != e.dataset.slider ||
              t.checked ||
              (e.setAttribute("disabled", !0),
              c.forEach((e, c) => {
                c === t.id.substr(-1) - 1 && e.classList.remove("enabled");
              }),
              s.forEach((e, c) => {
                c === t.id.substr(-1) - 1 && e.classList.remove("enabled");
              }));
        });
      });
    });
  })();
