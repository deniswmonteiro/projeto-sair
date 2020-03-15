// Create a client instance
client = new Paho.MQTT.Client("hairdresser.cloudmqtt.com", 37615, "ceamazon_" + parseInt(Math.random() * 100, 10));
//Example client = new Paho.MQTT.Client("m11.cloudmqtt.com", 32903, "web_" + parseInt(Math.random() * 100, 10));

// set callback handlers
client.onConnectionLost = onConnectionLost;
client.onMessageArrived = onMessageArrived;
var options = {
  useSSL: true,
  userName: "xldvnagx",
  password: "hD23-LNVOrD8",
  onSuccess:onConnect,
  onFailure:doFail
}

// connect the client
client.connect(options);

// called when the client connects
function onConnect() {
  // Once a connection has been made, make a subscription and send a message.
  console.log("onConnect");
  
  // chama a função responsável por fazer o envio de mensagens para a cloud
  acionaLampadas();
}

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
  console.log("onMessageArrived:" + message.payloadString);
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
        client.subscribe("ceamazon/" + subtopico);
        message = new Paho.MQTT.Message("on" + interruptor);
        message.destinationName = "ceamazon/" + subtopico;
        message.qos = 1;
        client.send(message);

        localStorage.setItem('lampada', 'on');
      }

      else {
        client.subscribe("ceamazon/" + subtopico);
        message = new Paho.MQTT.Message("off" + interruptor);
        message.destinationName = "ceamazon/"  + subtopico;
        message.qos = 1;
        client.send(message);

        localStorage.setItem('lampada', 'off');
      }
    });
  });

  $(document).ready(function() {
    function getLocalStorage() {
      const lampadas1 = document.querySelector('.lampadas1');

      const valorLampada = localStorage.getItem('lampada');
      console.log(valorLampada);

          if(valorLampada == "on") {          
            $(lampadas1).css('background', 'green');
          }

          else if(valorLampada == "off"){
            $(lampadas1).css('background', 'red');
          }

    }
    
    getLocalStorage();
  });
}