// var mqtt = require("mqtt");
// console.log(mqtt);

// var options = {
//     port: 12564,
//     clientId:
//         "mqttjs_" +
//         Math.random()
//             .toString(16)
//             .substr(2, 8),
//     username: "ldwjwmao",
//     password: "SZmxi8fOtKC8"
// };

// var client = connect("mqtt://tailor.cloudmqtt.com", options);

// client.on("connect", function() {
//     // When connected

//     // subscribe to a topic
//     client.subscribe("topic1/test", function() {
//         // when a message arrives, do something with it
//         client.on("message", function(topic, message, packet) {
//             console.log("Received '" + message + "' on '" + topic + "'");
//         });
//     });

//     // publish a message to a topic
//     client.publish("topic1/test", "IoT test message", function() {
//         console.log("Message is published");
//         //client.end(); // Close the connection when published
//     });
// });
