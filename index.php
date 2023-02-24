<?php
//SOAP
$options = array('uri' => 'http://s936421440.mialojamiento.es/', 'location' => 'http://s936421440.mialojamiento.es/index.php');
$client = new SoapClient(NULL, $options);

//Obtenemos pixels
$pixels = $client->getPixels();

//Enviamos array




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Ejemplo Tema 7: Validación formulario con jQuery</title>
        <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="jquery.js"></script>
    </head>
<body>
    <h1>TABLA PIXELS</h1>
    <div id="tablaCont"></div>
   <p id="test"></p>
</body>
<script type="text/javascript">
    var jArray =<?php echo json_encode($pixels); ?>;


</script>
<script type="text/javascript" src="jquery.js"></script>
</html>



<?php 
/* $pixels = $client->getPixels();
for ($col=0; $col < 1 ; $col++) { 
    echo "<tr>";
    for($row = 0; $row < 1; $row++){
        $eyedroper = "colorpick-eyedropper-active='false'";
        $pixel = $pixels[$col*32];
        echo "<td><input  type='color' value='{$pixel["color"]}' name='p' id='p' {$eyedroper}></td>";
    }
    echo "</tr>";
}; */
?>     