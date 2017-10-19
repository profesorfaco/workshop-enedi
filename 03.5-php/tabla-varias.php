<?php include('header.php');?>
<div class="container">
<?php
//primero creo una variable "yeison", a la que le asignaré como contenido lo que sea contenido del docummento acreditadas.json en carpeta data
$yeison = file_get_contents('data/acreditadas.json');
//pasaré los datos de la variable $yeison a $dato, para decodificarla al modo que conviene a PHP
$dato = json_decode($yeison,true);
//voy a imprimir lo que ahora tengo en $dato
?>
<h3>Consultando datos</h3>
<p>Veamos sólo el nombre del programa de diseño, la institución a la que pertenece y sus años de acreditación, pero separémoslos en 3 tablas:</p>
<ol>
<li>los programas acreditados sobre el promedio (5 años)</li>
<li>los programas acreditados en y bajo el promedio</li> 
<li>los programas acreditados no acreditadas.</li>
</ol> 
<!--primera tabla-->
<h5>ACREDITADAS SOBRE EL PROMEDIO</h5>
    <table class="table table-bordered table-striped table-responsive">
    <tr>
    <th>Carrera</th>
    <th>Institución</th>
    <th>Acreditación</th>
    </tr>
    <?php for($n = 1; $n < count($dato); $n++){?>
    <?php if(($dato[$n]['years'])>5){?>
    <tr>
    <td><?php print($dato[$n]['career']);?></td>
    <td><?php print($dato[$n]['institution']);?></td>
    <td class="text-center"><?php print($dato[$n]['years']);?> años</td>
    </tr>
    <?php };?>            
    <?php };?>
    </table>
<!--segunda tabla-->
<h5>ACREDITADAS</h5>
    <table class="table table-bordered table-striped table-responsive">           
    <tr>
    <th>Carrera</th>
    <th>Institución</th>
    <th>Acreditación</th>
    </tr>
    <?php for($n = 1; $n < count($dato); $n++){?>
    <?php if(($dato[$n]['years'])<=5&&($dato[$n]['years'])!=0){?>
    <tr>
    <td><?php print($dato[$n]['career']);?></td>
    <td><?php print($dato[$n]['institution']);?></td>
    <td class="text-center"><?php print($dato[$n]['years']);?> años</td>
    </tr>
    <?php };?>            
    <?php };?>
    </table>
<!--tercera tabla-->
<h5>NO ACREDITADAS</h5>
    <table class="table table-bordered table-striped table-responsive">           
    <tr>
    <th>Carrera</th>
    <th>Institución</th>
    <th>Acreditación</th>
    </tr>
    <?php for($n = 1; $n < count($dato); $n++){?>
        <?php if(($dato[$n]['years'])==0){?>
            <tr>
            <td><?php print($dato[$n]['career']);?></td>
            <td><?php print($dato[$n]['institution']);?></td>
            <td class="text-center">—</td>
            </tr>
        <?php };?>            
    <?php };?>
    </table>
<?php include('footer.php');?>
</body>
</html>