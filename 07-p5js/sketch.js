var fondo;
var titulos = [31,17,12,8,7];
var equipos =['Colo-Colo', 'Universidad de Chile', 'Universidad Católica','Cobreloa','Unión Española'];

function setup() {
  noLoop();
  smooth();
  fondo = createCanvas(windowWidth, windowHeight);
  fondo.position(0, 0);
  fondo.style('z-index', '-1');
}

function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
}

function draw() {
  stroke(155);
  for (var y = 10; y < height; y = y+10){
    for (var x = 10; x < width; x = x+10){
      point (x,y);
    }
  }
  fill(0);
  noStroke();
  textAlign(CENTER);
  for (var i = 0; i < titulos.length; i=i+1){
    ellipse(width/(titulos.length+1)*(i+1), height/2, titulos[i],titulos[i]);
    text(equipos[i], width/(titulos.length+1)*(i+1), (height/3)*1.8);
  }
}
