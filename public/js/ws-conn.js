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
})();
