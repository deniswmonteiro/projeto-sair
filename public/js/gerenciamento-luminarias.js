/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app-conexao-nuvem.js":
/*!*******************************************!*\
  !*** ./resources/js/app-conexao-nuvem.js ***!
  \*******************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _connections_conexao_websocket__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./connections/_conexao-websocket */ "./resources/js/connections/_conexao-websocket.js");
/* harmony import */ var _connections_conexao_websocket__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_connections_conexao_websocket__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _connections_aciona_lampadas__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./connections/_aciona-lampadas */ "./resources/js/connections/_aciona-lampadas.js");
/* harmony import */ var _connections_aciona_lampadas__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_connections_aciona_lampadas__WEBPACK_IMPORTED_MODULE_1__);



/***/ }),

/***/ "./resources/js/connections/_aciona-lampadas.js":
/*!******************************************************!*\
  !*** ./resources/js/connections/_aciona-lampadas.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function () {
  "use strict";

  window.acionaLampadas = function (subtopico, interruptores, cliente) {
    var messagem = "";
    $(interruptores).each(function (interruptor) {
      interruptor += 1;
      $(this).change(function () {
        if ($(this).is(":checked")) {
          messagem = new Paho.MQTT.Message("on" + interruptor);
          messagem.destinationName = "ceamazon/" + subtopico + "/c" + interruptor;
          messagem.qos = 1;
          messagem.retained = !0;
          cliente.send(messagem);
        } else {
          messagem = new Paho.MQTT.Message("off" + interruptor);
          messagem.destinationName = "ceamazon/" + subtopico + "/c" + interruptor;
          messagem.qos = 1;
          messagem.retained = !0;
          cliente.send(messagem);
        }
      });
    });
  };

  window.mudaInterruptores = function (mensagem) {
    var interruptores = document.querySelectorAll(".interruptor .interruptor-lampada");
    var lampadas1 = document.querySelector(".interruptor #lampadas1");
    var lampadas2 = document.querySelector(".interruptor #lampadas2");
    var lampadas3 = document.querySelector(".interruptor #lampadas3");
    var lampadas4 = document.querySelector(".interruptor #lampadas4");
    interruptores.forEach(function () {
      switch (mensagem) {
        case "on1":
          lampadas1.checked = !0;
          break;

        case "off1":
          lampadas1.checked = !1;
          break;

        case "on2":
          lampadas2.checked = !0;
          break;

        case "off2":
          lampadas2.checked = !1;
          break;

        case "on3":
          lampadas3.checked = !0;
          break;

        case "off3":
          lampadas3.checked = !1;
          break;

        case "on4":
          lampadas4.checked = !0;
          break;

        case "off4":
          lampadas4.checked = !1;
          break;
      }
    });
  };

  window.mudaIconesLampadas = function (mensagem) {
    var iconesLampadas1 = document.querySelectorAll(".img-sala [data-dispositivo='lampadas1']");
    var iconesLampadas2 = document.querySelectorAll(".img-sala [data-dispositivo='lampadas2']");
    var iconesLampadas3 = document.querySelectorAll(".img-sala [data-dispositivo='lampadas3']");
    var iconesLampadas4 = document.querySelectorAll(".img-sala [data-dispositivo='lampadas4']");
    var corIconeLigado = "#119933";
    var corIconeDesligado = "#ee2211";
    iconesLampadas1.forEach(function (icone) {
      if (mensagem == "on1") {
        icone.style.background = corIconeLigado;
      } else if (mensagem == "off1") {
        icone.style.background = corIconeDesligado;
      }
    });
    iconesLampadas2.forEach(function (icone) {
      if (mensagem == "on2") {
        icone.style.background = corIconeLigado;
      } else if (mensagem == "off2") {
        icone.style.background = corIconeDesligado;
      }
    });
    iconesLampadas3.forEach(function (icone) {
      if (mensagem == "on3") {
        icone.style.background = corIconeLigado;
      } else if (mensagem == "off3") {
        icone.style.background = corIconeDesligado;
      }
    });
    iconesLampadas4.forEach(function (icone) {
      if (mensagem == "on4") {
        icone.style.background = corIconeLigado;
      } else if (mensagem == "off4") {
        icone.style.background = corIconeDesligado;
      }
    });
  };
})();

/***/ }),

/***/ "./resources/js/connections/_conexao-websocket.js":
/*!********************************************************!*\
  !*** ./resources/js/connections/_conexao-websocket.js ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

/** 
    Script baseado no projeto Eclipse Paho disponível no link 
    https://www.eclipse.org/paho/clients/js/
  **/
(function () {
  "use strict";

  var textoNotificacao = document.querySelector("div.alert");
  $(textoNotificacao).append("<span class='uk-margin-small-left' uk-spinner></span>");
  var host = "hairdresser.cloudmqtt.com";
  var port = 37615;
  var id = "ceamazon_" + new Date().getUTCMilliseconds();
  var client = new Paho.MQTT.Client(host, port, id);
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

  var options = {
    userName: "xldvnagx",
    password: "hD23-LNVOrD8",
    useSSL: !0,
    onSuccess: onConnect,
    onFailure: doFail
  };
  client.connect(options);

  function onConnect() {
    $(textoNotificacao).removeClass("alert-warning").addClass("alert-success");
    textoNotificacao.innerText = "Conectado!";
    var interruptores = document.querySelectorAll(".interruptor .interruptor-lampada");
    var localNome = document.querySelector(".salas .sala-nome");
    var subtopico = localNome.innerText.toLowerCase().replace(/[á]/g, "a").replace(/[ã]/g, "a").replace(/[é]/g, "e").replace(/[ó]/g, "o").replace(/[õ]/g, "o").replace(/[ç]/g, "c").match(/[a-z]/g).join("");

    for (var i = 1; i < interruptores.length + 1; i++) {
      client.subscribe("ceamazon/" + subtopico + "/c" + i);
    }

    acionaLampadas(subtopico, interruptores, client);
  }
})();

/***/ }),

/***/ 1:
/*!*************************************************!*\
  !*** multi ./resources/js/app-conexao-nuvem.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\projeto-automacao\resources\js\app-conexao-nuvem.js */"./resources/js/app-conexao-nuvem.js");


/***/ })

/******/ });