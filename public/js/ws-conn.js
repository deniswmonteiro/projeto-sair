// Create a client instance
client = new Paho.MQTT.Client("hairdresser.cloudmqtt.com", 37615,"CEAMAZON");
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
  // client.subscribe("ceamazon/biblioteca");
  // message = new Paho.MQTT.Message("Hello CloudMQTT");
  // message.destinationName = "ceamazon/biblioteca";
  // client.send(message);

  /** salvar estado no banco de dados e selecionar do banco para mudar checkbox correspondente */
  
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

function acionaLampadas() {
  const lampadas1 = document.querySelector('.interruptor #lampadas1');
  const lampadas2 = document.querySelector('.interruptor #lampadas2');
  const lampadas3 = document.querySelector('.interruptor #lampadas3');
  const lampadas4 = document.querySelector('.interruptor #lampadas4');
  
  $(lampadas1).change(function() {
    if($(this).is(':checked')) {
      client.subscribe("ceamazon/biblioteca");
      message = new Paho.MQTT.Message("on1");
      message.destinationName = "ceamazon/biblioteca";
      client.send(message);
    }

    else {
      client.subscribe("ceamazon/biblioteca");
      message = new Paho.MQTT.Message("off1");
      message.destinationName = "ceamazon/biblioteca";
      client.send(message);
    }
  });

  $(lampadas2).change(function() {
    if($(this).is(':checked')) {
      client.subscribe("ceamazon/biblioteca");
      message = new Paho.MQTT.Message("on2");
      message.destinationName = "ceamazon/biblioteca";
      client.send(message);
    }

    else {
      client.subscribe("ceamazon/biblioteca");
      message = new Paho.MQTT.Message("off2");
      message.destinationName = "ceamazon/biblioteca";
      client.send(message);
    }
  });

  $(lampadas3).change(function() {
    if($(this).is(':checked')) {
      client.subscribe("ceamazon/biblioteca");
      message = new Paho.MQTT.Message("on3");
      message.destinationName = "ceamazon/biblioteca";
      client.send(message);
    }

    else {
      client.subscribe("ceamazon/biblioteca");
      message = new Paho.MQTT.Message("off3");
      message.destinationName = "ceamazon/biblioteca";
      client.send(message);
    }
  });

  $(lampadas4).change(function() {
    if($(this).is(':checked')) {
      client.subscribe("ceamazon/biblioteca");
      message = new Paho.MQTT.Message("on4");
      message.destinationName = "ceamazon/biblioteca";
      client.send(message);
    }

    else {
      client.subscribe("ceamazon/biblioteca");
      message = new Paho.MQTT.Message("off4");
      message.destinationName = "ceamazon/biblioteca";
      client.send(message);
    }
  });
}