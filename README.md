# ENEDI

## Taller: Visualización de Datos

#### A cargo de:

- **Felipe Cortez**. Diseñador gráfico y Magíster en Filosofía. Interesado en percepción, experiencia de usuario y visualización. Actualmente es docente en las escuelas de Diseño de la [UC](http://diseno.uc.cl/persona/felipe-cortez/) y la [UCH](http://www.uchile.cl/portafolio-academico/perfilAcademico.jsf?username=felipe.cortez). También es Coordinador del [Certificado Académico en Desarrollo de Productos y Servicios Digitales](http://formaciongeneral.uc.cl/certificados-academicos/interdisciplinarios/arquitectura-diseno-y-estudios-urbanos/escuela-de-diseno/desarrollo-de-productos-y-servicios-digitales) de la UC.

- **Ricardo Vega**. Diseñador y artista, MFA Design and Technology (Parsons, The New School). Interesado en tecnología y sus implicancias sociales, culturales y artisticas. Actualmente es docente en las escuelas de [Diseño](http://diseno.uc.cl/persona/ricardo-vega/) e [Ingeniería](https://www.ing.uc.cl/academicos-e-investigadores/ricardo-leonardo-vega-mora/) de la UC. También es Jefe del [Diplomado en Visualización de datos](http://diseno.uc.cl/curso/diplomado-en-visualizacion-de-datos/) de Diseño UC. 

#### Serán 3 sesiones: 

- Miércoles 18 oct. @ FAU, Av. Portugal 84, Sala P2. [[ver mapa](https://www.google.cl/maps/place/Av.+Portugal+84,+Santiago,+Regi%C3%B3n+Metropolitana/@-33.4422791,-70.6403642,17z/data=!3m1!4b1!4m5!3m4!1s0x9662c59dc0e87dfb:0xabc6e29d36565147!8m2!3d-33.4422791!4d-70.6381755)]
- Jueves 19 oct. @ Cowork Estación Lastarria, Villavicencio 378, Oficina 32 [[ver mapa](https://www.google.cl/maps/place/Villavicencio+378,+Santiago,+Regi%C3%B3n+Metropolitana/@-33.4382337,-70.640796,15z/data=!4m13!1m7!3m6!1s0x9662c599496e6611:0x2555aa27ffee7eab!2sVillavicencio+378,+Santiago,+Regi%C3%B3n+Metropolitana!3b1!8m2!3d-33.4385013!4d-70.6406766!3m4!1s0x9662c599496e6611:0x2555aa27ffee7eab!8m2!3d-33.4385013!4d-70.6406766)]
- Viernes 20 oct. @ Cowork Estación Lastarria, Villavicencio 378, Oficina 32 [[ver mapa](https://www.google.cl/maps/place/Villavicencio+378,+Santiago,+Regi%C3%B3n+Metropolitana/@-33.4382337,-70.640796,15z/data=!4m13!1m7!3m6!1s0x9662c599496e6611:0x2555aa27ffee7eab!2sVillavicencio+378,+Santiago,+Regi%C3%B3n+Metropolitana!3b1!8m2!3d-33.4385013!4d-70.6406766!3m4!1s0x9662c599496e6611:0x2555aa27ffee7eab!8m2!3d-33.4385013!4d-70.6406766)]

#### Cada sesión tendrá su énfasis

- Miércoles 18 oct. —> presentación e introducciones.
- Jueves 19 oct. —> análisis, formulación y prototipado.
- Viernes 20 oct. —> reformulación, implementación y publicación.

**Mientras que la sesión del miércoles tendrá un formato de clase expositiva, las sesiones de jueves y viernes seguirán el formato [hackathon](https://es.wikipedia.org/wiki/Hackathon), en el sentido de una actividad de trabajo colaborativo, donde distintos grupos resolverán un problema de visualización de datos.**

_____

## INTRODUCCIÓN A LA VISUALIZACIÓN

A continuación, un par de ideas obtenidas de: Boehm, Gottfried (2011) *¿Más allá del lenguaje? Apuntes sobre la lógica de las imágenes*. En: Ana García Varas (Ed.) Filosofía de la imagen (87-106). Salamanca: Ediciones Universidad de Salamanca.

«**Cuando hablo de imágenes (bidimensionales, plásticas, técnicas, espaciales, etc.), me refiero a una diferencia según la cual** uno o varios focos temáticos, vinculados por nuestra atención, refieren a un campo no temático. Es decir, que **vemos lo uno en lo otro**.» (Boehm 2010:101)

«Bien entrada la segunda mitad del siglo XVIII [surgió] la forma de imagen cognitiva de mayor éxito y que todavía hoy es ominipresente: la gráfica (orginalmente: *das Diagramm*; mejor traducción podría ser representación gráfica). La [representación] gráfica es a menudo, y pese a su fuerte connotación cognitiva, una verdadera imagen, porque **permite visualizar grandes magnitudes abstractas de un modo casi inimaginable. Traslada lo más abstracto (…) a una configuración visual que muestra lo que nunca podría verse** sin más en columnas de números. Con la gráfica la representación estadísticas se transformó radicalmente, al convertir la cantidad estadística en una cualidad visible. La condición de esto es que el campo de la imagen no se ha de considerar solo como una superficie estructurada, sino como una función de las coordenadas x e y, la abscisa y la ordenada, cuya relación matemática se muestra mediante la solución sobre el plano». (Boehm 2010:104-105) 

Boehm ejemplifica estas ideas con una publicación de **1786** de [William Playfair](https://es.wikipedia.org/wiki/William_Playfair), el padre de los gráficos de estadística:

![Playfair](https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Playfair_TimeSeries-2.png/1200px-Playfair_TimeSeries-2.png)

En el mismo **1876**, Thomas Clarkson publica “[An Essay on the Slavery and Commerce of the Human Species](http://oll.libertyfund.org/titles/clarkson-an-essay-on-the-slavery-and-commerce-of-the-human-species)”, donde muestra lo que no quería verse:

![Slave Ship](https://readthespirit-wpengine.netdna-ssl.com/interfaith-peacemakers/wp-content/uploads/sites/25/2015/05/Thomas-Clarkson-Slave-Ship-Sketch.jpg)

Recién en el siglo XIX se publicarán trabajos que, hasta hoy en día, son referencia habitual al momento de hablar del origen de la visualización de datos.

Entre estos trabajo está el de John Snow (1813-1858), [el padre de la epidemiología moderna](http://www.scielo.cl/scielo.php?script=sci_arttext&pid=S0716-10182007000400014), quien descubre los focos del cólera mediante un mapa que muestra las muertes ocurridas en el área de Broad Street (1854):

![John Snow](http://johnsnow.matrix.msu.edu/images/online_companion/chapter_images/fig12-5.jpg)

Otra de estas referencias es Charles Joseph Minard (1781-1870), [reconocido hasta por Edward Tufte](https://www.edwardtufte.com/tufte/posters) por el trabajo que, en 1869, mostraba el recorrido y las bajas en la Campaña Rusa de Napoleón.

![Minard](https://upload.wikimedia.org/wikipedia/commons/2/29/Minard.png)

A lo presentado, y para cerrar la introducción a la visualización, podemos sumar:

- [10 of my professional sins](https://medium.com/xocas/look-what-you-made-me-do-i-illustrated-10-of-my-professional-sins-bb53028553a)
- [A Periodic Table of Visualization Methods](http://www.visual-literacy.org/periodic_table/periodic_table.html)
- [Principles of Information Display for Visualization Practitioners](http://www2.cs.uregina.ca/~rbm/cs100/notes/spreadsheets/tufte_paper.html)
- [Para qué sirve la visualización](https://issuu.com/ricardov_net/docs/cuidadanohackathon_07_2017ok)
- [The Data Visualisation Catalogue](https://datavizcatalogue.com/)

En lo que sigue, presentaremos una serie de introducciones breves, necesarias para el trabajo a desarrollarse los días jueves y viernes.

_____


## INTRODUCCIÓN A BOOTSTRAP (HTML, CSS Y JAVASCRIPT)

[Bootstrap](http://getbootstrap.com/) es un framework de código abierto que simplifica la implementación de sitios y aplicaciones web responsivas (con páginas que se ajustan y optimizan a distintos dispositivos).

[Bootstrap](http://getbootstrap.com/) ofrece documentos [CSS](https://github.com/profesorfaco/enedi/wiki/CSS) que describen tipografía, formularios, botones y otros elementos de diseño necesarios para presentar un documento [HTML](https://github.com/profesorfaco/enedi/wiki/HTML) actual. Además, ofrece componentes de [JavaScript](https://github.com/profesorfaco/enedi/wiki/JavaScript), basados en la biblioteca [jQuery](https://jquery.com/), que aportan al ajuste y optimización del menú principal en distintos dispositivos, además del despliegue de [popovers](https://v4-alpha.getbootstrap.com/components/popovers/), [modals](https://v4-alpha.getbootstrap.com/components/modal/), [scrollspy](https://v4-alpha.getbootstrap.com/components/scrollspy/), etc.

Para usar [Bootstrap](http://getbootstrap.com/) necesitamos partir por un documento `index.html` donde se escriba:

```
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hola mundo!</h1>
    <!-- Este es el orden: primero jQuery, luego Popper.js, y al final Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>

```

Luego, se puede cambiar el `<h1>Hola mundo!</h1>` por todo lo que conozcamos de HTML y sea considerado en el CSS de Bootstrap. Para esto, es necesario tener en cuanta que Bootstrap, por defecto, divide cada fila con una [grilla de 12 columnas](https://getbootstrap.com/docs/4.0/layout/grid/). Y pone a las filas dentro de contenedores, que pueden ser: 

Fijos
```
<div class="container">
 <div class="row">
  <div class="col-6"><h1>Hola mundo!</h1></div>
  <div class="col-6"><h2>Cómo estás?</h2></div>
 </div>
</div>
```

Fluidos
```
<div class="container-fluid">
 <div class="row">
  <div class="col-6"><h1>Hola mundo!</h1></div>
  <div class="col-6"><h2>Cómo estás?</h2></div>
 </div>
</div>
```

Ahora bien, si no estás muy familiarizado con HTML, CSS ni JavaScript, recomendamos [consultar la Wiki de este repositorio](https://github.com/profesorfaco/enedi/wiki). Si ya conoces estos lenguajes, puedes revisar el contenido de la [carpeta 01-boostrap](https://profesorfaco.github.io/enedi/01-bootstrap/), donde encontrarás más datos sobre [Bootstrap](http://getbootstrap.com/).
_____

## INTRODUCCIÓN A PHP

Este lenguaje de programación se ejecuta [del lado del servidor](https://es.wikipedia.org/wiki/Script_del_lado_del_servidor), afectando al documento completo antes de que éste sea enviado al [cliente](https://es.wikipedia.org/wiki/Cliente_(inform%C3%A1tica)). Por esto, nunca aparece al “ver código fuente”, ni existe una Consola de PHP en los navegadores.

Para que se ejecute PHP en sus computadores, se pueden usar programas como **[MAMP](https://www.mamp.info/en/)**, el que permite montar un servidor local. 

Para escribir PHP en sus computadores deben usar el mismo programa de código que usan para escribe HTML. Es más, la diferencia radical de un documento `*.php` y un `*.html` es su extensión. Esta permite al servidor identificarlo como tal y buscar, entre lo que es HTML, un par de etiquetas de apertura y cierre particulares, que son `<?php` y `?>`, donde estarán las intrucciones que debe ejecutar.

Entre `<?php` y `?>` se pueden escribir una o varias instrucciones. Si se escriben varias, éstas deben separarse mediante punto y coma `;`. Y si necesitan escribir comentarios de una línea, deben anteponer un doble slash `//`:

```
<?php 
//por ejemplo, defino unos valores
$a=2;
$b=25;
$c=$a*$b;
?>
<p><?php print $c; ?></p>
```
Lo que resulta de esto es un [elemento HTML párrafo con un contenido "50"](http://codepad.org/ASfDKGBe).

Entre las instrucciones podemos aprovechar las funciones internas (incluídas) de PHP; es muy dificil que exista alguien capaz de aprender de memoria todas las `funciones()` que ofrece este lenguaje de programación, pero en el [sitio oficial de PHP](http://php.net/manual/es/langref.php), y en [varios lugares más](http://stackoverflow.com/questions/tagged/php), se puede encontrar mucha ayuda.

_____

## INTRODUCCIÓN A FORMATOS DE DATOS

Podemos echar un vistazo a la introducción a los formatos de datos más conocidos y usados, preparada por [Ricardo Vega](https://issuu.com/ricardov_net/docs/datos_formatos_2016).

Con lo revisado hasta ahora, podemos hacer dos ejercicio de visualización. En el primero podemos consultar y visualizar los datos de un CSV y en el segundo los datos de un JSON. Esta consulta y visualización la podemos hacer con PHP, y aprovechándonos de Bootstrap. 

_____


## INTRODUCCIÓN A D3

- [Introducción D3](https://visualizacion-uc.github.io/introduccion-js-d3/bloque-I/d3.html)
- [D3: gráfico de barras](https://visualizacion-uc.github.io/introduccion-js-d3/bloque-II/barras.html)
- [Intro to D3.JS](http://square.github.io/intro-to-d3/)
- [d3/d3Wiki](https://github.com/d3/d3/wiki/tutorials)
