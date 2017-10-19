<?php include('header.php');?>
<div class="container">
<h3>Consultando datos</h3>
<p>Vamos a trabajar con un documento en <a href="http://www.json.org/json-es.html" target="_blank">formato JSON</a>; primero veamos todo lo que se obtiene <a href="http://php.net/manual/es/function.json-decode.php" target="_blank" title="PHP: json_decode - Manual">después de decodificarlo</a>.</p>
<?php
//primero creo una variable "yeison", a la que le asignaré como contenido lo que sea contenido del docummento acreditadas.json en carpeta data
$yeison = file_get_contents('data/acreditadas.json');
//pasaré los datos de la variable $yeison a $dato, para decodificarla al modo que conviene a PHP
$dato = json_decode($yeison,true);
//voy a imprimir lo que ahora tengo en $dato
print_r ($dato);
?>
<hr>
<h3>Más lento, cerebrito</h3>
<p>Por nuestras convenciones tipográficas, difícilmente podremos entender lo que se muestra más arriba. La situación cambia si usamos <a href="https://developer.mozilla.org/es/docs/Web/HTML/Elemento/pre" title="&lt;pre&gt; - HTML | MDN">el elemento HTML pre</a>: <code>&lt;pre&gt;&lt;/pre&gt;</code></p>
<pre><?php print_r($dato);?></pre>
<p>Con lo que se acaba de mostrar, ya tenemos una indicación de lo contenido y el modo de obtenerlo. Ahora pasemos a construir <a href="tabla.php">una primera tabla</a>.</p>
<?php include('footer.php');?>