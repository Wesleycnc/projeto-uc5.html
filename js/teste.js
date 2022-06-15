const statesAndCities = [{
	sp: ['Campinas', 'Agudos', 'Bauru'],
	rj: ['Parati', 'Valença', 'Itaboraí']
}]

const states = document.querySelector('#states')
const cities = document.querySelector('#cities')
const wrapperCities = document.querySelector('#wrapper-cities')

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

hideElement(wrapperCities)

states.addEventListener('change', e => {
	showElement(wrapperCities)
	removeChild(cities)
	if(e.target.value === states.value){
		statesAndCities.map( data => {			
			data[e.target.value].map( city => {
				const option = document.createElement("option")
				const value = option.text = city;
				cities.add(option);
			})
		})
	}
	
})
