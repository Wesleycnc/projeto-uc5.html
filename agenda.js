var buttonNovoEvento =document.getElementById('buttonNovoEvento')
var buttonCancelar =document.getElementById('buttonCancelar')
var evento = document.getElementById('eventoNovo');

/* Aparecer a caixa de agendamento quando clicar em novo Evento */
function mostrarNovoEvento()  {
  evento.classList.remove('d-none');
}

//Ocultar a caixa de agendamento quando clicar em cancelar
function ocultarNovoEvento () {
  evento.classList.add('d-none');
}

buttonNovoEvento.addEventListener('click', mostrarNovoEvento);
buttonCancelar.addEventListener('click', ocultarNovoEvento);