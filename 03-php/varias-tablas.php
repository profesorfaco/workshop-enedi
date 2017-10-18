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
        <p>Veamos sólo el nombre de la carrera, la insticución a la que corresponde y sus años de acreditación, pero separemos las tablas.</p> 

        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <td colspan="3">NO ACREDITADAS</td>
            </tr>
            <tr>
                <th>Carrera</th>
                <th>Institución</th>
                <th>Acreditada</th>
            </tr>
            <?php for($n = 1; $n < count($dato); $n++){?>
                <?php if(($dato[$n]['years'])==0){?>
                <tr>
                    <td><?php print($dato[$n]['career']);?></td>
                    <td><?php print($dato[$n]['institution']);?></td>
                    <td class="text-center"><?php print($dato[$n]['years']);?></td>
                </tr>
                <?php };?>            
            <?php };?>
        </table>


        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <td colspan="3">SI ACREDITADAS</td>
            </tr>            
            <tr>
                <th>Carrera</th>
                <th>Institución</th>
                <th>Acreditada</th>
            </tr>
            <?php for($n = 1; $n < count($dato); $n++){?>
                <?php if(($dato[$n]['years'])!=0){?>
                <tr>
                    <td><?php print($dato[$n]['career']);?></td>
                    <td><?php print($dato[$n]['institution']);?></td>
                    <td class="text-center"><?php print($dato[$n]['years']);?> años</td>
                </tr>
                <?php };?>            
            <?php };?>
        </table>

 <?php include('footer.php');?>

</body>
</html>
