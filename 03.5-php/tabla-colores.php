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
<p>Ahora veamos sólo programas de diseño en universidades. Indiquemos el nombre del programa, el nombre de la institución a la que pertenece y reemplacemos los años de acreditación con un color, luego, agreguemos una columna emotiva, considerando:</p>
<ul class="list-unstyled">
<li><strong>:-D</strong> para los 7 años de acreditación </li>
<li><strong>:-)</strong> para los 6 o 5 años de acreditación</li> 
<li><strong>:-/</strong> para los 4 o 3 años de acreditación</li>
<li><strong>:-(</strong> para los 2 años y 1 años (no aplica a programas)</li>
<li><strong>X-(</strong> para los programas no acreditados</li>
</ul> 
<p>Después de la tabla agregaremos un recuadro que nos mostrará el resultado de un conteo, donde indicaremos cuántos programas universitarios en diseño están en cada situación.</p>
<table class="table table-bordered table-striped table-responsive">
<tr>
<th>Carrera</th>
<th>Institución</th>
<th>Acreditada</th>
<th>Emotiva</th>
</tr>

<?php 
$noacreditadas=0; 
$acreditadas=0;
$extasis=0;
$contento=0;
$preocupado=0;
$triste=0;
$muerto=0;
?>


<?php for($n = 1; $n < count($dato); $n++){?>
    <?php if(substr_count($dato[$n]['institution'],'UNIVERSIDAD') > 0){?>
    <tr>
    <td><?php print($dato[$n]['career']);?></td>
    <td><?php print($dato[$n]['institution']);?></td>
    <td class="text-center"><img src="images/<?php print($dato[$n]['years']);?>.png"></td>
    <td class="text-center">
        <?php if(($dato[$n]['years'])==7){?>
            :-D <?php $extasis++;?>
        <?php }else if(($dato[$n]['years'])==6||($dato[$n]['years'])==5){ ?>
            :-) <?php $contento++;?>
        <?php }else if(($dato[$n]['years'])==4||($dato[$n]['years'])==3){ ?>
            :-/ <?php $preocupado++;?>
        <?php }else if(($dato[$n]['years'])==2||($dato[$n]['years'])==1){ ?>
            :-( <?php $triste++;?>
        <?php }else{ ?>
            X-( <?php $muerto++;?>
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

<div class="alert alert-info">
<p class="lead">En las universidades nacionales: hay <?php echo ($acreditadas);?> programas de diseño acreditados, y <?php echo ($noacreditadas);?> no acreditados.</p>
<?php if($extasis!=0){?>
    <p><?php print ($extasis);?> 
        <?php if($extasis<2){;?>
            programa está :-D por sus 7 años.</p>
        <?php }else{?>
            programas están :-D por sus 7 años.</p>
    <?php }?>
<?php }?>
<?php if($contento!=0){?>
    <p><?php print ($contento);?> programas están :-) por sus 5 o 6 años.</p>
<?php }?>
<?php if($preocupado!=0){?>
    <p><?php print ($preocupado);?> programas están :-), por sus 3 o 4 años.</p>
<?php }?>
<?php if($triste!=0){?>
    <p><?php print ($triste);?> programas están :-( por su año o 2 años.</p>
<?php }?>
<p><?php print ($muerto);?> programas no están acreditados, estos son: </p>
<ul>
 <?php for($x = 1; $x < count($dato); $x++){?>
    <?php if(substr_count($dato[$x]['institution'],'UNIVERSIDAD') > 0){?>
        <?php if(($dato[$x]['years'])==0){?>
        <li><strong><?php print($dato[$x]['career']);?></strong> en la <?php print($dato[$x]['institution']);?></li>
        <?php }?>
    <?php }?>
<?php }?>
</ul>
</div>

 <?php include('footer.php');?>

</body>
</html>