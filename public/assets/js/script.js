//searchbar on type
const inputKeyword = document.querySelector(".input-keyword");
inputKeyword.addEventListener("keyup", function (e) {
  //searchbar on enter
  if (e.key === "Enter") {
    //fetching api based on lat lon
    fetch(`https://api.openweathermap.org/data/2.5/weather?q=${inputKeyword.value}&appid=0d2605012ec7c9dcd2e02db22ee6fdcf`)
      .then((response) => response.json())
      .then((response) => {
        const coord = response.coord;
        keywordCity(coord);
      })
      .catch((error) => {
        swal("Pastikkan nama kota benar");
        console.log(`Error: ${error}`);
      });
  }
});

//search button on click
const searchBtn1 = document.querySelector(".search-btn1");
searchBtn1.addEventListener("click", function () {
  //fetching api based on lat lon
  fetch(`https://api.openweathermap.org/data/2.5/weather?q=${inputKeyword.value}&appid=0d2605012ec7c9dcd2e02db22ee6fdcf`)
    .then((response) => response.json())
    .then((response) => {
      const coord = response.coord;
      keywordCity(coord);
    })
    .catch((error) => {
      swal("Pastikkan nama kota benar");
      console.log(`Error: ${error}`);
    });
});

//fetching api based on lat lon
function keywordCity(coord) {
  //fetching api based on lat lon
  fetch(`https://api.openweathermap.org/data/2.5/onecall?lat=${coord.lat}&lon=${coord.lon}&exclude=alerts&appid=0d2605012ec7c9dcd2e02db22ee6fdcf&units=metric&lang=id`)
    .then((response) => response.json())
    .then((response) => {
      const cuaca = response.daily;
      let cards = "";
      cuaca.forEach((c) => {
        cards += showCards(c);
      });
      //display weather forecast
      const cuacaContainer = document.querySelector(".cuaca-container");
      cuacaContainer.innerHTML = cards;
    })
    .catch((error) => {
      console.log(`Error: ${error}`);
    });
}

//display card
function showCards(c) {
  //convert unix timestamp date to js date time
  let timestamp = c.dt;
  let milisecond = timestamp * 1000;
  let dataObject = new Date(milisecond);
  let finalFormatDate = dataObject.toLocaleDateString("id-ID", { weekday: "long", day: "numeric", month: "long", year: "numeric" });

  //convert unix timestamp sunrise to js date time
  let timestampSunrise = c.sunrise;
  let milisecond2 = timestampSunrise * 1000;
  let dataObject2 = new Date(milisecond2);
  let finalSunrise = dataObject2.toLocaleDateString("id-ID", { weekday: "long", day: "numeric", month: "long", hour: "numeric", minute: "numeric", timeZoneName: "short" });

  //display response
  return `<div class="col-md-4 my-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Hari: ${finalFormatDate}</h5>
                <h2 class="temp text-center">${c.temp.min}°C - ${c.temp.max}°C</h2>
                  <div class="flex">
                    <img src="https://openweathermap.org/img/wn/${c.weather[0].icon}@2x.png" />
                    <h5 class="description">${c.weather[0].description}</h5>
                  </div>
                <h5 class="card-title">Kelembapan: ${c.humidity}%</h5>
                <h5 class="card-title">Kecepatan angin: ${c.wind_speed} m/s</h5>
                <h5 class="card-title">Tekanan Udara: ${c.pressure} hPa</h5>
                <h5 class="card-title">Curah hujan: ${c.rain} mm</h5>
                <h5 class="card-title">Waktu terbit: ${finalSunrise}</h5>
              </div>
            </div>
          </div>`;
}
