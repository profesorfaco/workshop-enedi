<?php include('header.php');?>
<div class="container">

<?php
//primero creo una variable "yeison", a la que le asignaré como contenido lo que sea contenido del docummento acreditadas.json en carpeta data
$yeison = file_get_contents('data/acreditadas.json');
//pasaré los datos de la variable $yeison a $dato, para decodificarla al modo que conviene a PHP
$dato = json_decode($yeison,true);
?>

<h3>Consultando datos</h3>
<p>En esta primera tabla, construida mediante consulta al mismo JSON que se muestra en <a href="index.php">portada</a>, podemos ver nombre del programa de diseño, la institución a la que pertenece, su estado de acreditación y los años entre los que aplica tal acreditación. Bajo la tabla encontrarán <a href="#export">un botón</a>, si hacen clic en él: obtendrán una versión CSV de la tabla (eso se puede hacer con <a href="https://github.com/cyriac/jquery.tabletoCSV" title="cyriac/jquery.tabletoCSV: In browser table to csv export" target="_blank">jquery.tabletoCSV</a>).</p>

<table id="export_table" class="table table-bordered table-striped table-responsive">
<tr>
<th>Carrera</th>
<th>Institución</th>
<th>Acreditada</th>
<th>Desde</th>
<th>Hasta</th>
</tr>
<?php for($n = 1; $n < count($dato); $n++){?>
    <tr>                 
        <td><?php print($dato[$n]['career']);?></td>
        <td><?php print($dato[$n]['institution']);?></td>
        <td><?php print($dato[$n]['result']);?></td>
        <td class="text-center"><?php print substr($dato[$n]['since'], 0, 4);?></td>
        <td class="text-center"><?php print substr($dato[$n]['until'], 0, 4);?></td>
    </tr>
<?php };?>
</table>

<button id="export" data-export="export" type="button" class="btn btn-primary btn-lg">Exportar tabla como CSV</button>
<?php include('footer.php');?>