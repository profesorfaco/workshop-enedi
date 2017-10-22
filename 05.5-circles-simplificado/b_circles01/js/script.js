
//serie de datos
var misdatos = [0, 20, 30, 45, 62, 71, 83, 90, 200];


//crea un contenedor para el grafico, crea dentro un svg
var grafico = d3.select('#caja')
			.append('svg')
			.attr('width', 800)
			.attr('height', 500)
			.style("background", 'yellow')
 			;


//crea una especie de grupo donde de elementos basados en los datos
var circles = grafico.append("g") 
			.classed("circles", true)
			//vincula circulos a serie de datos 
			.selectAll("circle")		
			.data(misdatos)
			
			//una vez vinculados y creados, ahora se procede a "mostrarlos"
			.enter() 				
				.append("circle")
				.attr("cy", 100	)
			//asigna valores de los datos para la posicion x				
				.attr("cx", function(d) {
					return d * 6;
				})
			.attr("r", 10)
			.style("fill", "blue")
			.style("opacity", .6)

  				




