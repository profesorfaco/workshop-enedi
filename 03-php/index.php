<?php include('header.php');?>
      <div class="container">
         <h1>Hola mundo <span class="badge badge-primary">PHP</span></h1>
         <p class="lead">Esto ayudará a familiarizarnos con PHP, y por esta vía podremos familiarizarnos con la programación.</p>
         <p>Ya dijimos, este lenguaje de programación se ejecuta del lado del servidor, afectando al documento completo antes de que éste sea enviado al cliente.</p>
         <p>Lo que haremos ahora será aprovechar PHP para consultar un documento JSON.</p>

         <hr>

         <h3>Consultando datos</h3>

        <?php
        //primero creo una variable "yeison", a la que le asignaré como contenido lo que sea contenido del docummento acreditadas.json en carpeta data
        $yeison = file_get_contents('data/acreditadas.json');
        //pasaré los datos de la variable $yeison a $dato, para decodificarla al modo que conviene a PHP
        $dato = json_decode($yeison,true);
        //voy a imprimir lo que ahora tengo en $dato
        print_r ($dato);
        ?>

        <hr>
        <h3>Say whaaaaat?</h3>
        <p>Por nuestras convenciones tipográficas, difícilmente podrán entender lo que recién se mostró. La situación cambia si uso <a href="https://developer.mozilla.org/es/docs/Web/HTML/Elemento/pre" title="&lt;pre&gt; - HTML | MDN">el elemento HTML pre</a>: <code>&lt;pre&gt;&lt;/pre&gt;</code></p>

        <pre><?php print_r($dato);?></pre>

        <hr>
        <h3>Y esto qué es?</h3>
        <p>Esta es una primera "visualización de datos": pueden ver, de modo ordenado, las 38 carrera de "diseño…" registradas en <a href="http://www.ojodondeestudias.cl/">www.ojodondeestudias.cl</a>. Ahora, podemos buscar otro modo de mostrar estos datos. <a href="tabla.php">Una humilde tabla podría ser útil</a>.</p>

 <?php include('footer.php');?>

</body>
</html>
