<?php include('header.php');?>
      <div class="container">
         <h1>Hola mundo <span class="badge badge-primary">PHP</span></h1>
         <p class="lead">Esto ayudará a familiarizarnos con PHP, y por esta vía podremos familiarizarnos con la programación.</p>
         <p>Ya dijimos, este lenguaje de programación se ejecuta del lado del servidor, afectando al documento completo antes de que éste sea enviado al cliente.</p>

        <?php
        //primero creo una variable "yeison", a la que le asignaré como contenido lo que sea contenido del docummento acreditadas.json en carpeta data
        $yeison = file_get_contents('data/acreditadas.json');
        //pasaré los datos de la variable $yeison a $dato, para decodificarla al modo que conviene a PHP
        $dato = json_decode($yeison,true);
        //voy a imprimir lo que ahora tengo en $dato
        ?>

        <hr>
        <h3>Programando consultas</h3>
        <p>Veamos sólo el nombre de la carrera, la insticución a la que corresponde, su estado de acreditación y, si corresponde, sus años de acreditación.</p>

        <table id="export_table" class="table table-bordered table-striped table-responsive">
            <caption>Acreditaciones</caption>
            <tr>
                <th>Carrera</th>
                <th>Institución</th>
                <th>Acreditada</th>
                <th>Años</th>
            </tr>
            <?php for($n = 1; $n < count($dato); $n++){?>
            <tr>
                    <td><?php print($dato[$n]['career']);?></td>
                    <td><?php print($dato[$n]['institution']);?></td>
                    <td><?php print($dato[$n]['result']);?></td>
                    <td><?php print($dato[$n]['years']);?></td>
            </tr>
            <?php };?>
        </table>
        <button id="export" data-export="export">Export</button>

 <?php include('footer.php');?>

</body>
</html>
