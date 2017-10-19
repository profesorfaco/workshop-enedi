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

Necesitamos contar, en las tres sesiones, con computadores provistos de algún [programa de edición de código](https://1stwebdesigner.com/free-coding-software/): Sublime Text, Atom, Notepad++, etc. Además, podrían instalar [MAMP (Free)](https://www.mamp.info/en/), y obtener una cuenta en [GitHub](https://github.com/).

_____

## INTRODUCCIÓN A LA VISUALIZACIÓN

A continuación, un par de ideas obtenidas de: Boehm, Gottfried (2011) *¿Más allá del lenguaje? Apuntes sobre la lógica de las imágenes*. En: Ana García Varas (Ed.) Filosofía de la imagen (87-106). Salamanca: Ediciones Universidad de Salamanca.

> «**Cuando hablo de imágenes (bidimensionales, plásticas, técnicas, espaciales, etc.), me refiero a una diferencia según la cual** uno o varios focos temáticos, vinculados por nuestra atención, refieren a un campo no temático. Es decir, que **vemos lo uno en lo otro**.» (Boehm 2010:101)

> «Bien entrada la segunda mitad del siglo XVIII [surgió] la forma de imagen cognitiva de mayor éxito y que todavía hoy es ominipresente: la gráfica [*das Diagramm* en versión original, esto es la representación gráfica de relaciones de tamaño o valores numéricos]. **La [representación] gráfica (…) [t]raslada lo más abstracto (…) a una configuración visual que *muestra* lo que nunca podría verse sin más en columnas de números**». (Boehm 2010:104-105) 

Boehm ilustra su texto con una publicación de **1786** de [William Playfair](https://es.wikipedia.org/wiki/William_Playfair) (1759-1823), el padre de los gráficos de estadística:

![Playfair](https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Playfair_TimeSeries-2.png/1200px-Playfair_TimeSeries-2.png)

Ahora salgamos del texto de Boehm y quedemos en el mismo año. En **1786**, Thomas Clarkson (1760-1846) publica “[An Essay on the Slavery and Commerce of the Human Species](http://oll.libertyfund.org/titles/clarkson-an-essay-on-the-slavery-and-commerce-of-the-human-species)”, donde una representación gráfica muestra lo que podía verse a simple vista:

![Slave Ship](https://readthespirit-wpengine.netdna-ssl.com/interfaith-peacemakers/wp-content/uploads/sites/25/2015/05/Thomas-Clarkson-Slave-Ship-Sketch.jpg)

En lo recién presentado tenemos, primero, un visualizar (representar mediante imágenes fenómenos de otro carácter) y luego un visibilizar (hacer visible artificialmente lo que no puede verse a simple vista). **Visualizar implica hacer visible (se puede ver, tan cierto y evidente que no admite duda). Visibilizar implica develar.**

Para evitar confusiones, parece más seguro avanzar a **trabajos de la segunda mitad del siglo XIX, que son referencia habitual al momento de hablar del origen de la representación gráfica en términos de visualización de datos**, en tanto se trata de trabajos que nos entregan la posibilidad de comprender lo uno, que no puede verse, mientras lo otro es dado a la vista.

Entre estos trabajos está el de [John Snow](https://es.wikipedia.org/wiki/John_Snow) (1813-1858), [el padre de la epidemiología moderna](http://www.scielo.cl/scielo.php?script=sci_arttext&pid=S0716-10182007000400014), quien descubre los focos del cólera mediante una configuración visual que muestra las ubicación de bombas de agua y las muertes ocurridas en el área de Broad Street (1854):

![John Snow](http://johnsnow.matrix.msu.edu/images/online_companion/chapter_images/fig12-5.jpg)

Otra referencia habitual es "Mapa figurativo de las sucesivas pérdidas de hombres de la Armada Francesa en la campaña de Rusia 1812-1813" de [Charles Joseph Minard](https://es.wikipedia.org/wiki/Charles_Joseph_Minard) (1781-1870), elaborado en 1869 y consirado hasta hoy en día, por indicación de [Edward Tufte](https://www.edwardtufte.com/tufte/posters), como uno de los mejores gráfico estadístico jamás dibujados. 

![Minard](https://upload.wikimedia.org/wikipedia/commons/2/29/Minard.png)

A lo presentado, y para cerrar la introducción a la visualización de datos, pueden sumar una revisión de:

- [La visualización de datos como nueva abstracción y antisublime (Lev Manovich)](http://estudiosvisuales.net/revista/pdf/num5/manocivh_visualizacion.pdf)
- [Para qué sirve la visualización (Ricardo Vega)](https://issuu.com/ricardov_net/docs/cuidadanohackathon_07_2017ok)

Y para trabajar con visualización de datos, sería útil considerar:

- [10 of my professional sins (Xaquín González Veira)](https://medium.com/xocas/look-what-you-made-me-do-i-illustrated-10-of-my-professional-sins-bb53028553a)
- [A Periodic Table of Visualization Methods](http://www.visual-literacy.org/periodic_table/periodic_table.html)
- [Principles of Information Display for Visualization Practitioners](http://www2.cs.uregina.ca/~rbm/cs100/notes/spreadsheets/tufte_paper.html)
- [Quick reference guides for learning how to use and how to hack RAW Graphs](http://rawgraphs.io/learning/)
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

Luego podríamos cambiar el `<h1>Hola mundo!</h1>` por todo lo que conozcamos de HTML y sea considerado en el CSS de Bootstrap. Para esto, es necesario tener en cuenta que Bootstrap, por defecto, divide cada fila con [sistema de 12 columnas](https://getbootstrap.com/docs/4.0/layout/grid/), y pone a las filas dentro de contenedores, que pueden ser: 

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

En caso que no estés muy familiarizado con HTML, CSS ni JavaScript, recomendamos [consultar la Wiki de este repositorio](https://github.com/profesorfaco/enedi/wiki). Si ya conoces estos lenguajes, puedes revisar el contenido de la [carpeta 01-boostrap](https://profesorfaco.github.io/enedi/01-bootstrap/), donde encontrarás más datos sobre [Bootstrap](http://getbootstrap.com/).
_____

## INTRODUCCIÓN A PHP

Este lenguaje de programación se ejecuta [del lado del servidor](https://es.wikipedia.org/wiki/Script_del_lado_del_servidor), afectando al documento completo antes de que éste sea enviado al [cliente](https://es.wikipedia.org/wiki/Cliente_(inform%C3%A1tica)). Por esto, nunca aparece al “ver código fuente”, ni existe una Consola de PHP en los navegadores.

**Para ejecutar PHP en nuestros computadores** podemos usar programas como [MAMP](https://www.mamp.info/en/). **Para escribir PHP en nuestros computadores** podemos usar el mismo programa de código que usamos para escribir HTML. Es más, la diferencia radical de un documento `*.php` y un `*.html` es su extensión. Esta permite al servidor identificarlo como tal y buscar, entre lo que es HTML, un par de etiquetas de apertura y cierre particulares, que son `<?php` y `?>`, donde estarán las intrucciones que debe ejecutar.

Entre `<?php` y `?>` podemos escribir una o varias instrucciones. Si escribimos varias, tenemos que separarlas mediante punto y coma `;`. Y si necesitamos escribir comentarios de una línea, tenemos que anteponer un doble slash `//`:

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

Por ahora, será suficiente aprovechar las funciones contenidas en la [carpeta 02-php](https://github.com/profesorfaco/enedi/tree/gh-pages/02-php). Después de revisar los formatos de datos volveremos sobre PHP, con una nueva carpeta.

_____

## INTRODUCCIÓN A FORMATOS DE DATOS

Podemos echar un vistazo a la introducción a los formatos de datos más conocidos y usados, preparada por [Ricardo Vega](https://issuu.com/ricardov_net/docs/datos_formatos_2016).

Especial atención le vamos a poner a 2 formatos de datos: JSON y CSV. 

Con lo revisado hasta ahora, podemos hacer un primer ejercicio de visualización. Para eso vamos usar los contenidos en la [carpeta 03-php](https://github.com/profesorfaco/enedi/tree/gh-pages/03-php), que incluyen obviamente algunos archivos en PHP y algunos datos en JSON. Con esos datos fabricaremos algunas tablas. Y una de esas tablas la exportaremos como CSV, lo que nos permitirá hacer otro ejercicio. 

**PUEDEN ENCONTRAR UNA VERSIÓN MEJORADA DE LA CARPETA 03-PHP EN [03.5-PHP](https://github.com/profesorfaco/enedi/tree/gh-pages/03.5-php)**. Cuando pongan esto en un servidor, debe verse así: [http://profesor.faco.cl/enedi-03.5-php/](http://profesor.faco.cl/enedi-03.5-php/)

_____


## INTRODUCCIÓN A D3.JS

Para continuar, utilicemos las siguientes referencias:

- [Introducción D3](https://visualizacion-uc.github.io/introduccion-js-d3/bloque-I/d3.html)
- [D3: gráfico de barras](https://visualizacion-uc.github.io/introduccion-js-d3/bloque-II/barras.html)
- [Intro to D3.JS](http://square.github.io/intro-to-d3/)
- [d3/d3Wiki](https://github.com/d3/d3/wiki/tutorials)

Notarán, por las referencias, que es necesario tener claro qué es, y para que sirven: [HTML](https://github.com/profesorfaco/enedi/wiki/HTML), [CSS](https://github.com/profesorfaco/enedi/wiki/CSS), [JavaScript](https://github.com/profesorfaco/enedi/wiki/JavaScript) y [SVG](https://developer.mozilla.org/en-US/docs/Web/SVG/Tutorial/Introduction). Además, conviene tener claro la utilidad de una etiqueta HTML en particular, la de `<canvas></canvas>`

**Para seguir avanzando con ejemplos, veamos:** 

- [carpeta 04-svg-d3](https://github.com/profesorfaco/enedi/tree/gh-pages/04-svg-d3)
- [carpeta 05-circles](https://github.com/profesorfaco/enedi/tree/gh-pages/05-circles)
