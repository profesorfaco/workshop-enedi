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
        <p>Cambiemos de caso. Veamos sólo carreras universitarias, y pongoamos una indicación cromática respecto de su estado de acreditación.</p> 

        <table class="table table-bordered table-striped table-responsive">
            <tr>
                <th>Carrera</th>
                <th>Institución</th>
                <th>Acreditada</th>
                <th>Emoticon</th>
            </tr>

            <?php $noacreditadas=0; $acreditadas=0;?>
            <?php for($n = 1; $n < count($dato); $n++){?>
                <?php if(substr_count($dato[$n]['institution'],'UNIVERSIDAD') > 0){?>

<tr>
<td><?php print($dato[$n]['career']);?></td>
<td><?php print($dato[$n]['institution']);?></td>
<td class="text-center">
    <img src="images/<?php print($dato[$n]['years']);?>.png">
</td>
<td class="text-center">
<?php if(($dato[$n]['years'])==7){?>
        :-D
    <?php }else if(($dato[$n]['years'])==6||($dato[$n]['years'])==5){ ?>
        :-)
    <?php }else if(($dato[$n]['years'])==4||($dato[$n]['years'])==3){ ?>
        :-/
    <?php }else if(($dato[$n]['years'])==2||($dato[$n]['years'])==1){ ?>
        :-(
    <?php }else{ ?>
        X-(
    <?php }; ?>
</td>
</tr>

                <?php if(($dato[$n]['result'])=="ACREDITADA"){?>
                    <?php $acreditadas++;?>
                <?php }else{;?> 
                    <?php $noacreditadas++;?>
                <?php };?>     
                <?php };?>            
            <?php };?>
        </table>

<div class="alert alert-danger">
<p class="lead">Sabía usted que hay <?php echo ($acreditadas);?> carreras universitarias acreditadas, versus <?php echo ($noacreditadas);?> que no lo están.</p>
</div>

 <?php include('footer.php');?>

</body>
</html>
