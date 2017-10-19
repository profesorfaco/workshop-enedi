<?php include('header.php');?>
      <div class="container">
         <h1>Hola mundo <span class="badge badge-primary">PHP</span></h1>
         <p class="lead">Esto ayudará a familiarizarnos con PHP, y por esta vía podremos familiarizarnos con la programación.</p>
         <p>Ya dijimos, este lenguaje de programación se ejecuta del lado del servidor, afectando al documento completo antes de que éste sea enviado al cliente.</p>
         <p>La página que ahora ves se divide en 3 partes, las que se juntan en el servidor gracias a dos <a href="http://php.net/manual/es/function.include.php" target="_blank">funciones include</a>: una al principio de page.php, que incluye al header.php, y otra al final, que incluye al footer.php. ¿Qué utilidad ofrece esto? Podemos mantener el mismo header.php y footer.php, y cambiar el documento que los llama, ello fue útil para generar esta página, que se parece mucho a la portada.</p>
         <p>A pie de página, mediante una <a href="http://php.net/manual/es/function.print.php" target="_blank">función de impresión</a> de la <a href="http://php.net/manual/es/function.date.php" target="_blank">función date</a>, puedo incluir la fecha del día en que se muestre la página, porque se consulta al servidor por su fecha antes de que envíe la página al cliente.</p>
 <?php include('footer.php');?>