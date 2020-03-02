const led0 = document.querySelector('.led0');

import { Board, Led } from "../node_modules/johnny-five";
var board = new Board();

board.on("ready", function() {
  var led = new Led(2);
 
  led0.addEventListener('click', () => {
    alert();
    led.toggle();
  });
});