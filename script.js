


const url = 'https://api.openweathermap.org/data/2.5/'
const apikey = '0660a5a9eb7baabc47b15990c8830ec5'

const getResult = () =>
{
let query = `${url}weather?q=Bursa&appid=${apikey}&units=metric&lang=tr`
  fetch(query)
  .then(weather => 
  {
    return weather.json()
  })
  .then(displayResult)
}
const displayResult = (result) => {
  let city = document.querySelector('.city')
  city.innerText = `${result.name}, ${result.sys.country}`

  let sicaklik = document.querySelector('.sicaklik')
  sicaklik.innerText = `Sıcaklık : ${Math.round(result.main.temp)} C`
  let ruzgar = document.querySelector('.ruzgar')
  ruzgar.innerText = `Rüzgar Hızı : ${result.wind.speed}`
}
getResult();

