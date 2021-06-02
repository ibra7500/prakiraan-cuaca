//default location jakarta
const myMap = L.map("map", {
  zoomControl: true,
  trackResize: true,
  doubleClickZoom: true,
  zoomAnimation: true,
}).setView([-6.2146, 106.8451], 10);
//-6.2146, 106.8451

//marker
const marker = L.marker([0, 0]).addTo(myMap);

//Base maps osm
const osm = L.tileLayer("http://{s}.tile.osm.org/{z}/{x}/{y}.png", {
  attribution: '&copy; <a href="http://osm.org/copyright" target = "_blank">OpenStreetMap</a> contributors',
}).addTo(myMap);

//popup card
const popup = L.popup();

//get search key
const inputKeyword2 = document.querySelector(".input-keyword2");
//searchbar on type
inputKeyword2.addEventListener("keyup", function (e) {
  //searchbar on enter
  if (e.key === "Enter") {
    //fetching api based on searchbar keyword
    fetch(`https://api.openweathermap.org/data/2.5/weather?q=${inputKeyword2.value}&appid=0d2605012ec7c9dcd2e02db22ee6fdcf&units=metric&lang=id`)
      .then((response) => response.json())
      .then((response) => {
        //get response data
        const cuaca = response;
        autoPopUp(cuaca);
      })
      .catch((error) => {
        swal("Pastikkan nama kota benar");
        console.log(`Error: ${error}`);
      });
  }
});

//get search button
const searchBtn2 = document.querySelector(".search-btn2");
//search button on click
searchBtn2.addEventListener("click", function () {
  //fetching api based on search button click
  fetch(`https://api.openweathermap.org/data/2.5/weather?q=${inputKeyword2.value}&appid=0d2605012ec7c9dcd2e02db22ee6fdcf&units=metric&lang=id`)
    .then((response) => response.json())
    .then((response) => {
      //get response data
      const cuaca = response;
      autoPopUp(cuaca);
    })
    .catch((error) => {
      swal("Pastikkan nama kota benar");
      console.log(`Error: ${error}`);
    });
});

//auto popup
function autoPopUp(cuaca) {
  const { lat, lon } = cuaca.coord;
  const { id, main, description, icon } = cuaca.weather[0];
  const { temp, temp_min, temp_max, pressure, humidity } = cuaca.main;
  const { speed, deg } = cuaca.wind;
  const { dt } = cuaca;
  const { country } = cuaca.sys;
  const { name } = cuaca;

  //weather icon
  const kondisiCuacaIcon = "https://openweathermap.org/img/wn/" + icon + ".png";

  //convert wind speed to kmh
  //const speedToKmh = Math.round(speed * 3.6 * 100) / 100;

  //convert unix timestamp date to js date time
  const timestamp = dt;
  const milisecond = timestamp * 1000;
  const dataObject = new Date(milisecond);
  const finalFormatDate = dataObject.toLocaleDateString("id-ID", { weekday: "long", day: "numeric", month: "long", year: "numeric" });

  //set coord
  marker.setLatLng([lat, lon]);
  myMap.setView([lat, lon]);
  // var latLngs = [marker.getLatLng()];
  // var markerBounds = L.latLngBounds(latLngs);
  // myMap.fitBounds(markerBounds, 10);
  popup.setLatLng([lat, lon]);
  popup.setContent(
    `
    Keadaan Cuaca di ${name}<br>
    <div class="text-center">${finalFormatDate}</div>
    <img src=${kondisiCuacaIcon}>${description}
    <div class="h4 text-center">${temp}°C</div>
    Suhu Terendah: ${temp_min}°C<br>
    Suhu Tertinggi: ${temp_max}°C<br>
    Kelembapan: ${humidity}%<br>
    Kecepatan Angin: ${speed} m/s<br>
    Tekanan udara: ${pressure} hPa<br>
    <br>
    Sumber Data:<br>
    Stasiun Cuaca: ${name}<br>
    Koordinat: ${lat}, ${lon}<br>
    Negara: ${country}
    `
  );
  popup.openOn(myMap);
}

//city on click
function onMapClick(e) {
  popup.setLatLng(e.latlng).openOn(myMap);
  myMap.setView([e.latlng.lat, e.latlng.lng]);

  fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${e.latlng.lat}&lon=${e.latlng.lng}&appid=0d2605012ec7c9dcd2e02db22ee6fdcf&units=metric&lang=id`)
    .then((response) => response.json())
    .then((response) => {
      const cuaca = response;
      autoPopUp(cuaca);
    })
    .catch((error) => {
      swal("Error fetching data");
      console.log(`Error: ${error}`);
    });
}

//popup
myMap.on("click", onMapClick);
