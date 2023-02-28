<?php

require './mvc/view/View.php';
$vistaPrincipal = new View();
$vistaPrincipal->loadView('./media/html/mainPage.html');

echo $vistaPrincipal->returnView();