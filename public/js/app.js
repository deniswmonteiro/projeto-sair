(function() {
	'use strict';
	
  window.addEventListener("load", function() {
		const inputErro = document.querySelectorAll(".uk-form-danger");
		$(inputErro).each(function() {
			$(this).change(function() {
				$(this).removeClass("uk-form-danger");
				$(this).next().remove();
			})
		});

    const divSenha = document.querySelector("[data-perfil='form_senha']");
		const alterarSenha = document.querySelector("[data-perfil='chk_alterar_senha']");
    const inputsSenha = document.querySelectorAll("[data-perfil='form_senha'] input");
		const labelsSenha = document.querySelectorAll("[data-perfil='form_senha'] label");
		const elemsSenha = [inputsSenha, labelsSenha];

		$(divSenha).css({"opacity": ".5", "cursor": "not-allowed"});
		$(elemsSenha).each(function(index, elem) {
			$(elem).css("cursor", "not-allowed");
		});

    $(alterarSenha).change(function() {
      if($(alterarSenha).prop("checked") == true) {
        $(divSenha).css({"opacity": "1", "cursor": "default"});
        $(inputsSenha).each(function() {
          $(this).attr("disabled", false).css("cursor", "text");
        });
        $(labelsSenha).each(function() {
          $(this).css("cursor", "default");
        });
      }

      else {
        $(divSenha).css({"opacity": ".5", "cursor": "not-allowed"});
        $(inputsSenha).each(function() {
          $(this).attr("disabled", true).css("cursor", "not-allowed");
        });
        $(labelsSenha).each(function() {
          $(this).css("cursor", "not-allowed");
        });
      }
    });
		
	const cpfs = document.querySelectorAll("input[id$='cpf']");
	cpfs.forEach((cpf) => {
		$(cpf).mask("000.000.000-00");
	});
	const senhaModal = document.querySelectorAll(".btn-mostra-senha-modal");
	const iconeSenha = document.querySelectorAll("[data-icone-senha-modal]");
	iconeSenha.forEach((icone) => {
		icone.setAttribute("src", "/img/ico-esconde.svg");
	});
	senhaModal.forEach((btn) => {
		btn.addEventListener("click", () => {
			btn.classList.toggle("btn-mostra-senha-modal");
			if (btn.classList.contains("btn-mostra-senha-modal")) {
				iconeSenha.forEach((icone) => {
					icone.setAttribute("src", "/img/ico-esconde.svg");
				});
			} else {
				iconeSenha.forEach((icone) => {
					icone.setAttribute("src", "/img/ico-mostra.svg");
				});
			}
		});
	});
	$("div.alert").not(".alert-important").delay(4000).fadeOut(350);
	const inputForm = document.querySelectorAll("input");
	inputForm.forEach((input) => {
		input.addEventListener("keyup", (e) => {
			if (e.keyCode === 13) {
				e.preventDefault();
				document.querySelector(".btn-confirmar").click();
			}
		});
	});
	const switcher = document.querySelector(".uk-switcher");
	switcher.style.cssText = "touch-action = 'none'";
	const imgsLocal = document.querySelectorAll("[data-target]");
	const btnsDispositivo = document.querySelectorAll("[data-click]");
	imgsLocal[0].classList.add("active");
	btnsDispositivo.forEach((btn) => {
		btn.addEventListener("click", () => {
			if (btn.dataset.click === "arcondicionado") {
				imgsLocal[0].classList.remove("active");
				imgsLocal[1].classList.add("active");
			} else {
				imgsLocal[0].classList.add("active");
				imgsLocal[1].classList.remove("active");
			}
		});
	});
	const interruptores = document.querySelectorAll(".check");
	const dataDispositivo = document.querySelectorAll("[data-dispositivo]");
	interruptores.forEach((interruptor) => {
		interruptor.addEventListener("click", () => {
			dataDispositivo.forEach((dispositivo) => {
					if (interruptor.id == dispositivo.dataset.dispositivo && interruptor.checked &&  interruptor.classList.contains("interruptor-lampada")) {
						dispositivo.style.background = "#193";
					} 
					
					else if (interruptor.id == dispositivo.dataset.dispositivo && interruptor.checked &&  interruptor.classList.contains("interruptor-arcondicionado")) {
						dispositivo.style.background = "#06c";
					}
					
					else if (interruptor.id == dispositivo.dataset.dispositivo && !interruptor.checked) {
						dispositivo.style.background = "#e21";
					}
			});
		});
	});
	const allClick = document.querySelectorAll("[data-click]");
	const avisoArcondicionado = document.querySelectorAll(".aviso-arcondicionado");
	const iconesLampada = document.querySelectorAll(".icones-lampada");
	const iconesArcondicionado = document.querySelectorAll(".icones-arcondicionado");
	$(iconesArcondicionado).css("display", "none");
	$(avisoArcondicionado).css("display", "none");
	allClick.forEach((click) => {
		$(click).click(function (e) {
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
});
})();
function mostraSenha() {
  'use strict';
	const tiposInput = document.querySelectorAll("[data-senha]");
	tiposInput.forEach((tipo) => {
		if (tipo.type == "password") {
			tipo.type = "text";
		} else {
			tipo.type = "password";
		}
	});
}
(function tempArCondicionado() {
  'use strict';
	const sliders = document.querySelectorAll("[data-slider]");
	const check = document.querySelectorAll(".check");
	sliders.forEach((slider) => {
		slider.setAttribute("disabled", !0);
		noUiSlider.create(slider, {
			start: [16],
			connect: "lower",
			tooltips: [wNumb({ decimals: 0, suffix: " ºC" })],
			step: 1,
			range: { min: [16], max: [26] },
		});
		slider.noUiSlider.on("update", () => {
			console.log(slider.noUiSlider.get().slice(0, 2));
		});
	});
	const sliderTooltips = document.querySelectorAll(".noUi-tooltip");
	const sliderBtns = document.querySelectorAll(".noUi-handle");
	check.forEach((item) => {
		item.addEventListener("click", () => {
			sliders.forEach((slider) => {
				if (item.id == slider.dataset.slider && item.checked) {
					slider.removeAttribute("disabled");
					sliderTooltips.forEach((tooltip, index) => {
						if (index === item.id.substr(-1) - 1) {
							tooltip.classList.add("enabled");
						}
					});
					sliderBtns.forEach((btn, index) => {
						if (index === item.id.substr(-1) - 1) {
							btn.classList.add("enabled");
						}
					});
				} else if (item.id == slider.dataset.slider && !item.checked) {
					slider.setAttribute("disabled", !0);
					sliderTooltips.forEach((tooltip, index) => {
						if (index === item.id.substr(-1) - 1) {
							tooltip.classList.remove("enabled");
						}
					});
					sliderBtns.forEach((btn, index) => {
						if (index === item.id.substr(-1) - 1) {
							btn.classList.remove("enabled");
						}
					});
				}
			});
		});
	});
})();