// Create a client instance
client = new Paho.MQTT.Client("hairdresser.cloudmqtt.com", 37615, "ceamazon_" + parseInt(Math.random() * 100, 10));
//Example client = new Paho.MQTT.Client("m11.cloudmqtt.com", 32903, "web_" + parseInt(Math.random() * 100, 10));

// set callback handlers
client.onConnectionLost = onConnectionLost;
client.onMessageArrived = onMessageArrived;

function doFail(e){
  console.log(e);
}

// called when the client loses its connection
function onConnectionLost(responseObject) {
  if (responseObject.errorCode !== 0) {
    console.log("onConnectionLost:"+responseObject.errorMessage);
  }
}

// called when a message arrives
function onMessageArrived(message) {
  console.log(message.destinationName + ": " + message.payloadString);
  // document.write(message.payloadString);
}

// connect the client
var options = {
  useSSL: true,
  userName: "xldvnagx",
  password: "hD23-LNVOrD8",
  useSSL: true,
  onSuccess:onConnect,
  onFailure:doFail
}

client.connect(options);

// called when the client connects
function onConnect() {
  // Once a connection has been made, make a subscription and send a message.
  console.log("onConnect");
  
  // tópico subscrito
  client.subscribe("ceamazon/biblioteca");

  // chama a função responsável por fazer o envio de mensagens para a cloud
  acionaLampadas();
}

// função de envio de mensagens via websockets
function acionaLampadas() {
  const localNome = document.querySelector(".salas .sala-nome");
  const interruptores = document.querySelectorAll('.interruptor .interruptor-lampada');
  const subtopico = (localNome.innerText).toLowerCase().replace(/[ç]/g, "c").replace(/[ã]/g, "a").replace(/[õ]/g, "o").replace(/[á]/g, "a").replace(/[é]/g, "e").replace(/[ó]/g, "o").match(/[a-z]/g).join("");

  $(interruptores).each(function(interruptor) {
    interruptor += 1;
    $(this).change(function() {
      if($(this).is(':checked')) {
        message = new Paho.MQTT.Message("on" + interruptor);
        message.destinationName = "ceamazon/" + subtopico;
        message.qos = 1;
        message.retained = true;
        client.send(message);
      }

      else {
        client.subscribe("ceamazon/" + subtopico);
        message = new Paho.MQTT.Message("off" + interruptor);
        message.destinationName = "ceamazon/"  + subtopico;
        message.qos = 1;
        message.retained = true;
        client.send(message);
      }
    });
  });

  const interruptor1 = document.querySelector('.interruptor #lampadas1');
  const interruptor2 = document.querySelector('.interruptor #lampadas2');

  $(interruptor1).change(function() {
    $(this).attr('name', message.destinationName + '/c1');
    $(this).attr('value', message.payloadString);

    let circuito1Nome = $(this).attr('name');
    let circuito1Valor = $(this).attr('value');

    
  });

  $(interruptor2).change(function() {
    $(this).attr('name', message.destinationName + '/c2');
    $(this).attr('value', message.payloadString);
  });
}