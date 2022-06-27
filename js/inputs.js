const statesAndCities = [{
	sp: ['Quadra Penha', 'Quadra Itaquera', 'Quadra Tatuapé'],

	rj: ['Quadra Copacabana', 'Quadra São Gonçalo', 'Quadra Ipanema'],

	mg: ['Quadra Sagrada Família', 'Quadra Céu Azul', 'Quadra Serra'],

	ma: ['Quadra Turu', 'Quadra Cidade Operária', 'Quadra São Francisco']
}]

const states = document.querySelector('#estados')
const quadras = document.querySelector('#quadras')
const wrapperCidade = document.querySelector('#wrapper-cidade')
const wrapperQuadras = document.querySelector('#wrapper-quadras')

const removeChild = (el) => {
	while (el.firstChild) {
  		el.removeChild(el.firstChild);
	}
}

/* function removeChild(el){
    while (el.firstChild) {
        el.removeChild(el.firstChild);
  }
} */

const hideElement = el => el.style.display = 'none'

const showElement = el => el.style.display = ''

hideElement(wrapperQuadras)

states.addEventListener('change', e => {
	showElement(wrapperQuadras)
	removeChild(quadras)
	if(e.target.value === states.value){
		statesAndCities.map( data => {			
			data[e.target.value].map( city => {
				const option = document.createElement("option")
				const value = option.text = city;
				quadras.add(option);
			})
		})
	}
	
})
