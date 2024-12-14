//IDENTIFICAR ELEMENTOS 
const CITY = document.querySelector ('#input_city')
const BUTTON = document.querySelector ('button')
const RESULT = document.querySelector ('#result')
const RESULT2 = document.querySelector ('#result2')
const RESULT3 = document.querySelector ('#result3')
const RESULT4 = document.querySelector ('#result4')
const RESULT5 = document.querySelector ('#result5')



BUTTON.addEventListener ('click', get_weather)

async function get_weather () {
    const API_KEY = 'e82252527048047f45c32776acc06ba9'
    const API_URL = `https://api.openweathermap.org/data/2.5/weather?q=${CITY.value}&units=metric&appid=${API_KEY}`

    try {
        const response = await fetch (API_URL)
        if (!response.ok) {
            throw new Error ('Cidade não encontrada!')
        }
        else {
            const dados = await response.json()
            const temp = dados.main.temp
            const max_temp = dados.main.temp_max
            const min_temp = dados.main.temp_min
            const feels_like = dados.main.feels_like
            const humidity = dados.main.humidity

            RESULT.textContent = `Temperatura: ${temp}°C`
            RESULT2.textContent = `Máxima: ${max_temp}°C`
            RESULT3.textContent = `Mínima: ${min_temp}°C`
            RESULT4.textContent = `Sensação: ${feels_like}°C`
            RESULT5.textContent = `Humidade: ${humidity}%`
        }
    }
    catch (error) {
        console.log ('ERRO')
        console.log (error)
    }
}