/** 
    Script baseado no projeto Eclipse Paho disponível no link 
    https://www.eclipse.org/paho/clients/js/
  **/
(function () {
  "use strict";
  const textoNotificacao = document.querySelector("div.alert");
  $(textoNotificacao).append(
    "<span class='uk-margin-small-left' uk-spinner></span>"
  );
  const host = "hairdresser.cloudmqtt.com";
  const port = 37615;
  const id = "ceamazon_" + new Date().getUTCMilliseconds();
  let client = new Paho.MQTT.Client(host, port, id);
  client.onConnectionLost = onConnectionLost;
  client.onMessageArrived = onMessageArrived;

  function doFail(e) {
    if (e) {
      console.log(e);
      $(textoNotificacao).removeClass("alert-warning").addClass("alert-danger");
      textoNotificacao.innerText = "Falha na conexão com a nuvem!";
      textoNotificacao.style.display = "block";
    }
  }

  function onConnectionLost(responseObject) {
    if (responseObject.errorCode !== 0) {
      console.log("onConnectionLost:" + responseObject.errorMessage);
      $(textoNotificacao).removeClass("alert-warning").addClass("alert-danger");
      textoNotificacao.innerText = "A conexão com a nuvem foi perdida!";
      textoNotificacao.style.display = "block";
    }
  }

  function onMessageArrived(message) {
    mudaInterruptores(message.payloadString);
    mudaIconesLampadas(message.payloadString);
  }

  const options = {
    userName: "xldvnagx",
    password: "hD23-LNVOrD8",
    useSSL: !0,
    onSuccess: onConnect,
    onFailure: doFail,
  };

  client.connect(options);

  function onConnect() {
    $(textoNotificacao).removeClass("alert-warning").addClass("alert-success");
    textoNotificacao.innerText = "Conectado!";
    const interruptores = document.querySelectorAll(
      ".interruptor .interruptor-lampada"
    );
    const localNome = document.querySelector(".salas .sala-nome");
    const subtopico = localNome.innerText
      .toLowerCase()
      .replace(/[á]/g, "a")
      .replace(/[ã]/g, "a")
      .replace(/[é]/g, "e")
      .replace(/[ó]/g, "o")
      .replace(/[õ]/g, "o")
      .replace(/[ç]/g, "c")
      .match(/[a-z]/g)
      .join("");
    for (let i = 1; i < interruptores.length + 1; i++) {
      client.subscribe("ceamazon/" + subtopico + "/c" + i);
    }

    acionaLampadas(subtopico, interruptores, client);
  }

  function acionaLampadas(subtopico, interruptores, cliente) {
    let messagem = "";
    $(interruptores).each(function (interruptor) {
      interruptor += 1;
      $(this).change(function () {
        if ($(this).is(":checked")) {
          messagem = new Paho.MQTT.Message("on" + interruptor);
          messagem.destinationName =
            "ceamazon/" + subtopico + "/c" + interruptor;
          messagem.qos = 1;
          messagem.retained = !0;
          cliente.send(messagem);
        } else {
          messagem = new Paho.MQTT.Message("off" + interruptor);
          messagem.destinationName =
            "ceamazon/" + subtopico + "/c" + interruptor;
          messagem.qos = 1;
          messagem.retained = !0;
          cliente.send(messagem);
        }
      });
    });
  }

  function mudaInterruptores(mensagem) {
    const interruptores = document.querySelectorAll(
      ".interruptor .interruptor-lampada"
    );
    const lampadas1 = document.querySelector(".interruptor #lampadas1");
    const lampadas2 = document.querySelector(".interruptor #lampadas2");
    const lampadas3 = document.querySelector(".interruptor #lampadas3");
    const lampadas4 = document.querySelector(".interruptor #lampadas4");
    interruptores.forEach(() => {
      switch (mensagem) {
        case "on1":
          lampadas1.checked = !0;
          break;
        case "off1":
          lampadas1.checked = !1;
          break;
        case "on2":
          lampadas2.checked = !0;
          break;
        case "off2":
          lampadas2.checked = !1;
          break;
        case "on3":
          lampadas3.checked = !0;
          break;
        case "off3":
          lampadas3.checked = !1;
          break;
        case "on4":
          lampadas4.checked = !0;
          break;
        case "off4":
          lampadas4.checked = !1;
          break;
      }
    });
  }

  function mudaIconesLampadas(mensagem) {
    const iconesLampadas1 = document.querySelectorAll(
      ".img-sala [data-dispositivo='lampadas1']"
    );
    const iconesLampadas2 = document.querySelectorAll(
      ".img-sala [data-dispositivo='lampadas2']"
    );
    const iconesLampadas3 = document.querySelectorAll(
      ".img-sala [data-dispositivo='lampadas3']"
    );
    const iconesLampadas4 = document.querySelectorAll(
      ".img-sala [data-dispositivo='lampadas4']"
    );
    const corIconeLigado = "#119933";
    const corIconeDesligado = "#ee2211";
    iconesLampadas1.forEach((icone) => {
      if (mensagem == "on1") {
        icone.style.background = corIconeLigado;
      } else if (mensagem == "off1") {
        icone.style.background = corIconeDesligado;
      }
    });
    iconesLampadas2.forEach((icone) => {
      if (mensagem == "on2") {
        icone.style.background = corIconeLigado;
      } else if (mensagem == "off2") {
        icone.style.background = corIconeDesligado;
      }
    });
    iconesLampadas3.forEach((icone) => {
      if (mensagem == "on3") {
        icone.style.background = corIconeLigado;
      } else if (mensagem == "off3") {
        icone.style.background = corIconeDesligado;
      }
    });
    iconesLampadas4.forEach((icone) => {
      if (mensagem == "on4") {
        icone.style.background = corIconeLigado;
      } else if (mensagem == "off4") {
        icone.style.background = corIconeDesligado;
      }
    });
  }
})();
