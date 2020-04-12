(function() {
  // retorno visual de carregamento da conexão
  $("div.alert").append("<span class='uk-margin-small-left' uk-spinner></span>");
  
  // variáveis para criar uma conexão
  const host = "hairdresser.cloudmqtt.com";
  const port = 37615;
  const id = "ceamazon_" + new Date().getUTCMilliseconds();;
  
  // Create a client instance
  client = new Paho.MQTT.Client(host, port, id);
  //Example client = new Paho.MQTT.Client("m11.cloudmqtt.com", 32903, "web_" + parseInt(Math.random() * 100, 10));

  // set callback handlers
  client.onConnectionLost = onConnectionLost;
  client.onMessageArrived = onMessageArrived;

  // called when connection fails
  function doFail(e){
    console.log(e);
  }

  // called when the client loses its connection
  function onConnectionLost(responseObject) {
    if (responseObject.errorCode !== 0) {
      console.log("onConnectionLost:" + responseObject.errorMessage);
    }
  }

  // called when a message arrives
  function onMessageArrived(message) {
    mudaIconesInterruptores(message.payloadString);
    mudaIconesLampadas(message.payloadString);
  }

  // connect the client
  const options = {
    userName: "xldvnagx",
    password: "hD23-LNVOrD8",
    useSSL: true,
    onSuccess: onConnect,
    onFailure: doFail
  }
  client.connect(options);

  // called when the client connects
  function onConnect() {
    const interruptores = document.querySelectorAll('.interruptor .interruptor-lampada');
    const localNome = document.querySelector(".salas .sala-nome");
    const subtopico = (localNome.innerText).toLowerCase().replace(/[ç]/g, "c").replace(/[ã]/g, "a").replace(/[õ]/g, "o").replace(/[á]/g, "a").replace(/[é]/g, "e").replace(/[ó]/g, "o").match(/[a-z]/g).join("");
    const notificacaoConectado = document.querySelector('div.alert');
    
    // Mostra uma notificação quando se conecta ao sistema.
    notificacaoConectado.innerText = "Conectado!";
    
    // tópico subscrito
    for(let i = 1; i < interruptores.length + 1; i++) {
      client.subscribe("ceamazon/" + subtopico + "/c" + i);
    }

    // chama a função responsável por fazer o envio de mensagens para a cloud
    acionaLampadas(subtopico, interruptores);
  }

  // função de envio de mensagens via websockets
  function acionaLampadas(subtopico, interruptores) {  
    $(interruptores).each(function(interruptor) {
      interruptor += 1;
      $(this).change(function() {
        if($(this).is(':checked')) {
          message = new Paho.MQTT.Message("on" + interruptor);
          message.destinationName = "ceamazon/" + subtopico + "/c" + interruptor;
          message.qos = 1;
          message.retained = true;
          client.send(message);
        }

        else {
          message = new Paho.MQTT.Message("off" + interruptor);
          message.destinationName = "ceamazon/" + subtopico + "/c" + interruptor;
          message.qos = 1;
          message.retained = true;
          client.send(message);
        }
      });
    });
  }

  function mudaIconesInterruptores(mensagem) {
    const interruptores = document.querySelectorAll('.interruptor .interruptor-lampada');
    const lampadas1 = document.querySelector('.interruptor #lampadas1');
    const lampadas2 = document.querySelector('.interruptor #lampadas2');
    const lampadas3 = document.querySelector('.interruptor #lampadas3');
    const lampadas4 = document.querySelector('.interruptor #lampadas4');
    
    interruptores.forEach(() => {
      switch(mensagem) {
        case "on1":
          lampadas1.checked = true;
          break;
        case "off1":
          lampadas1.checked = false;
          break;
        case "on2":
          lampadas2.checked = true;
          break;
        case "off2":
          lampadas2.checked = false;
          break;
        case "on3":
          lampadas3.checked = true;
          break;
        case "off3":
          lampadas3.checked = false;
          break;
        case "on4":
          lampadas4.checked = true;
          break;
        case "off4":
          lampadas4.checked = false;
          break;
      }
    });
  }

  function mudaIconesLampadas(mensagem) {
    const iconesLampadas1 = document.querySelectorAll(".img-sala [data-dispositivo='lampadas1']");
    const iconesLampadas2 = document.querySelectorAll(".img-sala [data-dispositivo='lampadas2']");
    const iconesLampadas3 = document.querySelectorAll(".img-sala [data-dispositivo='lampadas3']");
    const iconesLampadas4 = document.querySelectorAll(".img-sala [data-dispositivo='lampadas4']");
    const corIconeLigado = "#119933";
    const corIconeDesligado = "#ee2211";

    iconesLampadas1.forEach((icone) => {
      if(mensagem == "on1") {
        icone.style.background = corIconeLigado;
      }

      else if(mensagem == "off1"){
        icone.style.background = corIconeDesligado;
      }
    });

    iconesLampadas2.forEach((icone) => {
      if(mensagem == "on2") {
        icone.style.background = corIconeLigado;
      }

      else if(mensagem == "off2"){
        icone.style.background = corIconeDesligado;
      }
    });

    iconesLampadas3.forEach((icone) => {
      if(mensagem == "on3") {
        icone.style.background = corIconeLigado;
      }

      else if(mensagem == "off3"){
        icone.style.background = corIconeDesligado;
      }
    });

    iconesLampadas4.forEach((icone) => {
      if(mensagem == "on4") {
        icone.style.background = corIconeLigado;
      }

      else if(mensagem == "off4"){
        icone.style.background = corIconeDesligado;
      }
    });
  }
})();