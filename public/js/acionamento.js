const led0 = document.querySelector('.led0');

var five = require("johnny-five");
var board = new five.Board();

board.on("ready", function() {
  var led = new five.Led(2);
 
  led0.addEventListener('click', () => {
    alert();
    led.toggle();
  });
});