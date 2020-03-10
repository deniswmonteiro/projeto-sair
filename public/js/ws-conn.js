
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
    
    const liga1 = document.querySelector('.teste');
    console.log(liga1);

    if(liga1.checked == true) {
      client.subscribe("ceamazon/biblioteca");
      message = new Paho.MQTT.Message("on2");
      message.destinationName = "ceamazon/biblioteca";
      client.send(message);
    }

    // else {
    //   client.subscribe("ceamazon/biblioteca");
    //   message = new Paho.MQTT.Message("off2");
    //   message.destinationName = "ceamazon/biblioteca";
    //   client.send(message);
    // }



    // const liga1 = document.querySelector('.liga1');
    // const liga2 = document.querySelector('.liga2');

   
    // liga1.addEventListener('click', () => {
    //   if(message.payloadString === "on2") {
    //     client.subscribe("ceamazon/biblioteca");
    //     message = new Paho.MQTT.Message("off2");
    //     message.destinationName = "ceamazon/biblioteca";
    //     client.send(message);
    //     message.retained = true;
    //   }

    //   else {
    //     client.subscribe("ceamazon/biblioteca");
    //     message = new Paho.MQTT.Message("on2");
    //     message.destinationName = "ceamazon/biblioteca";
    //     client.send(message);
    //     message.retained = true;
    //   }
    // });

    // liga2.addEventListener('click', () => {
    //   if(message.payloadString === "on3") {
    //     client.subscribe("ceamazon/biblioteca");
    //     message = new Paho.MQTT.Message("off3");
    //     message.destinationName = "ceamazon/biblioteca";
    //     client.send(message);
    //     message.retained = true;
    //   }

    //   else {
    //     client.subscribe("ceamazon/biblioteca");
    //     message = new Paho.MQTT.Message("on3");
    //     message.destinationName = "ceamazon/biblioteca";
    //     client.send(message);
    //     message.retained = true;
    //   }
    // });
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