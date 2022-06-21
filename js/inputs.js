const statesAndCities = [{
	sp: ['quadra1', 'quadra2', 'quadra3'],

	rj: ['quadra4', 'quadra5', 'quadra6'],

	mg: ['quadra7', 'quadra8', 'quadra9'],

	ma: ['quadra10', 'quadra11', 'quadra12']
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
