"use strict";

/** formata números de cpf */
document.querySelectorAll("input[id$='cpf']").forEach(e => {
  $(e).mask("000.000.000-00");
});
