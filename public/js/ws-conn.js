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
    //console.log(message.destinationName + ": " + message.payloadString);

    const circuito = message.payloadString;
    const interruptores = document.querySelectorAll('.interruptor .interruptor-lampada');

    $(interruptores).each(function() {
      switch(circuito) {
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
})();