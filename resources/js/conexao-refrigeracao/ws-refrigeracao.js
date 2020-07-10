/** 
    Script baseado no projeto Eclipse Paho disponível no link 
    https://www.eclipse.org/paho/clients/js/
  **/
// Variáveis de conexão com serviço em nuvem
const hostAC = "tailor.cloudmqtt.com";
const portAC = 32564;
const idAC = "ceamazon_" + new Date().getUTCMilliseconds();
let clienteAC = new Paho.Client(hostAC, portAC, idAC);
clienteAC.onConnectionLost = onConnectionLost;
clienteAC.onMessageArrived = onMessageArrived;

// Função chamada quando não há conexão entre aplicação e nuvem
function doFail(e) {
  if (e) {
    console.log(e);
    $(textoNotificacaoAC).removeClass("alert-warning").addClass("alert-danger");
    textoNotificacaoAC.innerText = "Falha na conexão com a nuvem!";
    textoNotificacaoAC.style.display = "block";
  }
}

// Função chamada quando o cliente perde a conexão com a nuvem
function onConnectionLost(responseObject) {
  if (responseObject.errorCode !== 0) {
    console.log("onConnectionLost:" + responseObject.errorMessage);
    $(textoNotificacaoAC).removeClass("alert-warning").addClass("alert-danger");
    textoNotificacaoAC.innerText = "A conexão com a nuvem foi perdida!";
    textoNotificacaoAC.style.display = "block";
  }
}

// Função chamada quando uma mensagem é recebida
function onMessageArrived(message) {
  mudaInterruptoresAC(message.payloadString);
  mudaIconesAC(message.payloadString);
  console.log(message.topic + " - " + message.payloadString);
}

// Credenciais de conexão com serviço em nuvem
const options = {
  userName: "ldwjwmao",
  password: "SZmxi8fOtKC8",
  useSSL: !0,
  onSuccess: onConnect,
  onFailure: doFail,
};

clienteAC.connect(options);

// Função chamada quando a aplicação conecta com a nuvem
function onConnect() {
  const interruptoresAC = document.querySelectorAll(
    ".interruptor .interruptor-arcondicionado"
  );
  const localNomeAC = document.querySelector(".salas .sala-nome");
  let subtopicoAC = localNomeAC.innerText
    .toLowerCase()
    .replace(/[á]/g, "a")
    .replace(/[ã]/g, "a")
    .replace(/[é]/g, "e")
    .replace(/[ó]/g, "o")
    .replace(/[õ]/g, "o")
    .replace(/[ç]/g, "c")
    .match(/[a-z0-9]/g)
    .join("");

  switch (subtopicoAC) {
    case "labdeinstalacoeseletricas":
      subtopicoAC = "lie";
      break;
    case "labdesistemasmotrizesa":
      subtopicoAC = "labmotriz1";
      break;
    case "secretaria":
      subtopicoAC = "secretaria1";
      break;
    case "diretoria":
      subtopicoAC = "secretaria2";
      break;
    case "labdeconcepcaoeanalisededispositivoseletricos":
      subtopicoAC = "lcade";
      break;
    case "labsima":
      subtopicoAC = "sima";
      break;
    case "labdemodelagem":
      subtopicoAC = "modelagem";
      break;
    case "labdequalidadedeenergia":
      subtopicoAC = "qee";
      break;
    case "labdesistemasmotrizesb":
      subtopicoAC = "labmotriz2";
      break;
    case "saladereuniao":
      subtopicoAC = "salareuniao";
      break;
    case "saladeaula1":
      subtopicoAC = "sala1";
      break;
    case "saladeaula2":
      subtopicoAC = "sala2";
      break;
    case "labdeafericao":
      subtopicoAC = "sala3";
      break;
    case "salaprof1":
      subtopicoAC = "sala4";
      break;
    case "salaprof2":
      subtopicoAC = "sala5";
      break;
    case "salaprof3":
      subtopicoAC = "sala6";
      break;
    case "salaprof4":
      subtopicoAC = "sala7";
      break;
    case "salaprof5":
      subtopicoAC = "sala8";
      break;
    case "salaprof6":
      subtopicoAC = "sala9";
      break;
    case "oficina":
      subtopicoAC = "sala10";
      break;
  }

  for (let i = 1; i < interruptoresAC.length + 1; i++) {
    clienteAC.subscribe("ceamazon/" + subtopicoAC + "/c" + i);
  }

  acionaAC(subtopicoAC, interruptoresAC, clienteAC);
  mudaTemperaturaAC();
}
