// const cpf = document.querySelector("#form-cadastro-cpf");

// function formataCPF(cpf) {
//   cpf = cpf.replace(/[^\d]/g, "");
//   return cpf.replace(/(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
// }

// console.log(formataCPF(cpf));

var options = {
  onKeyPress: function (cpf, ev, el, op) {
      var masks = ['000.000.000-00'];
      el.mask(masks, op);
  }
}

$('#form-cadastro-cpf').mask('000.000.000-00', options);