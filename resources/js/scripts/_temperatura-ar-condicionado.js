"use strict";

/** cria slider para mudança de temperatura do ar-condicionado */
const slidersTemperatura = document.querySelectorAll("[data-slider]");
const interruptoresArcondicionado = document.querySelectorAll(".check");
slidersTemperatura.forEach(slider => {
  slider.setAttribute("disabled", !0),
    noUiSlider.create(slider, {
      start: [16],
      connect: "lower",
      tooltips: [wNumb({ decimals: 0, suffix: " ºC" })],
      step: 1,
      range: { min: [16], max: [26] }
    }),
    slider.noUiSlider.on("update", () => {
      console.log(slider.noUiSlider.get().slice(0, 2));
    });
});

/** ativa slider da temperatura quando interruptor do ar-condicionado é acionado */
const tooltipsTemperatura = document.querySelectorAll(".noUi-tooltip");
const btnTemperatura = document.querySelectorAll(".noUi-handle");
interruptoresArcondicionado.forEach(btnInterruptor => {
  btnInterruptor.addEventListener("click", () => {
    slidersTemperatura.forEach(slider => {
      btnInterruptor.id == slider.dataset.slider && btnInterruptor.checked
        ? (slider.removeAttribute("disabled"),
          tooltipsTemperatura.forEach((e, c) => {
            c === btnInterruptor.id.substr(-1) - 1 &&
              e.classList.add("enabled");
          }),
          btnTemperatura.forEach((e, c) => {
            c === btnInterruptor.id.substr(-1) - 1 &&
              e.classList.add("enabled");
          }))
        : btnInterruptor.id != slider.dataset.slider ||
          btnInterruptor.checked ||
          (slider.setAttribute("disabled", !0),
          tooltipsTemperatura.forEach((e, c) => {
            c === btnInterruptor.id.substr(-1) - 1 &&
              e.classList.remove("enabled");
          }),
          btnTemperatura.forEach((e, c) => {
            c === btnInterruptor.id.substr(-1) - 1 &&
              e.classList.remove("enabled");
          }));
    });
  });
});
