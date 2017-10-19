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
<p>Aprovechemos el componente <a href="https://getbootstrap.com/docs/4.0/components/progress/" target="_blank">Progress</a> que nos ofrece Bootstrap. Con este componente podemos hacer una representación gráfica del valor numérico de los años de acreditación, donde 7 años de acreditación corresponde al 100%. Para obtener el valor que corresponde, en porcentaje, podemos hacer una operación y ocupar una función php que devuelve su resultado <a href="http://php.net/manual/es/function.round.php" target="_blank" title="PHP: round - Manual">redondeado</a> <code>round((($dato[$n]['years'])*100)/7)</code></p> 

<table class="table table-bordered table-striped table-responsive">
<tr>
<th>Carrera</th>
<th>Institución</th>
<th>Acreditación</th>
<th>Hasta</th>
</tr>

<!--fuer del ciclo que recorrerá todas las instituciones, declaro las variables en cero-->
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
    <td class="text-center">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: <?php print (round((($dato[$n]['years'])*100)/7));?>%;" aria-valuenow="<?php print (round((($dato[$n]['years'])*100)/7));?>" aria-valuemin="0" aria-valuemax="100">
            <?php print($dato[$n]['years']);?>
            </div>
        </div>
    </td>
    <td class="text-center"><?php print substr($dato[$n]['until'], 0, 4);?></td>
    </tr>

    <!--conteo de acreditadas v/s no acreditadas-->
    <?php if(($dato[$n]['result'])=="ACREDITADA"){?>
    <?php $acreditadas++;?>
    <?php }else{;?> 
    <?php $noacreditadas++;?>
    <?php };?>  
    <!--conteo de situación de acreditación-->
    <?php if(($dato[$n]['years'])==7){?>
    <?php $extasis++;?>
    <?php }else if(($dato[$n]['years'])==6||($dato[$n]['years'])==5){ ?>
    <?php $contento++;?>
    <?php }else if(($dato[$n]['years'])==4||($dato[$n]['years'])==3){ ?>
    <?php $preocupado++;?>
    <?php }else if(($dato[$n]['years'])==2||($dato[$n]['years'])==1){ ?>
    <?php $triste++;?>
    <?php }else{ ?>
    <?php $muerto++;?>
    <?php }; ?>   

<?php };?>            
<?php };?>
</table>

<div class="alert alert-info">
<p class="lead">En las universidades nacionales: hay <?php echo ($acreditadas);?> programas de diseño acreditados y <?php echo ($noacreditadas);?> no acreditados.</p>
<?php if($extasis!=0){?>
    <p><?php print ($extasis);?> 
        <?php if($extasis<2){;?>
            programa está acreditado por sus 7 años.</p>
        <?php }else{?>
            programas están acreditados por sus 7 años.</p>
    <?php }?>
<?php }?>
<?php if($contento!=0){?>
    <p><?php print ($contento);?> programas están acreditados por sus 5 o 6 años.</p>
<?php }?>
<?php if($preocupado!=0){?>
    <p><?php print ($preocupado);?> programas están acreditados por sus 3 o 4 años.</p>
<?php }?>
<?php if($triste!=0){?>
    <p><?php print ($triste);?> programas están acreditados por 1 año o 2 años.</p>
<?php }?>
<p><?php print ($muerto);?> programas no están acreditados, ellos son: </p>
<ul>
 <?php for($x = 1; $x < count($dato); $x++){?>
    <?php if(substr_count($dato[$x]['institution'],'UNIVERSIDAD') > 0){?>
        <?php if(($dato[$x]['years'])==0){?>
            <li><strong>
                <?php print($dato[$x]['career']);?>
                    
                </strong> en la <?php print($dato[$x]['institution']);?></li>
        <?php }?>
    <?php }?>
<?php }?>
</ul>
</div>

 <?php include('footer.php');?>

</body>
</html>