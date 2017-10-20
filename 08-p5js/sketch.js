var weather;

function setup() {
 createCanvas(400, 400);
 loadJSON('http://api.openweathermap.org/data/2.5/weather?q=Valparaiso&units=metric&APPID=d65f550743f17ab5ce88d4d1d56a3195', gotData);
}

function gotData(data) {
 weather = data;
}

function draw() {
 background(0);
 if (weather) {
  fill(map(weather.main.temp,0,35,0,255),map(weather.main.temp,0,35,0,125),0);
  ellipse(width / 3, height / 2, weather.main.temp, weather.main.temp);
  ellipse((width / 3) * 2, height / 2, weather.main.humidity, weather.main.humidity);
 }
}
