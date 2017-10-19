
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>D3 Circulos</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<div class="container">
<a class="navbar-brand" href="index.php">SVG + D3.JS</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExampleDefault">
<ul class="navbar-nav ml-auto">
<li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>active<?php };?>"><a class="nav-link" href="index.php">v1</a></li>
<li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='page-2.php'){?>active<?php };?>"><a class="nav-link" href="page-2.php">v2</a></li>
<li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='page-3.php'){?>active<?php };?>"><a class="nav-link" href="page-3.php">v3</a></li>
<li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='page-4.php'){?>active<?php };?>"><a class="nav-link" href="page-4.php">v4</a></li>
<li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='page-5.php'){?>active<?php };?>"><a class="nav-link" href="page-5.php">v5</a></li>
<li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='page-6.php'){?>active<?php };?>"><a class="nav-link" href="page-6.php">v6</a></li>
</ul>
</div>
</div>
</nav>
<div class="jumbotron">
<div class="container">
<h1>Hola mundo <span class="badge badge-primary">SVG + D3.JS</span></h1>
<p class="lead"><a href="https://www.w3.org/Graphics/SVG/" target="_blank">SVG (Scalable Vector Graphics)</a> es un formato de gráficos vectoriales bidimensionales, tanto estáticos como animados, cuya especificación es un estándar abierto desarrollado por el W3C desde el año 1999. + <a href="https://d3js.org/" target="_blank">D3.JS (Data Driven Document)</a> es una biblioteca de JavaScript que permite manipular documentos basados en datos. Esta biblioteca trabaja con HTML, SVG y CSS.</p>
</div>
</div>
<div class="container">