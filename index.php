<?php
//SOAP
$options = array('uri' => 'http://s936421440.mialojamiento.es/', 'location' => 'http://s936421440.mialojamiento.es/index.php');
$client = new SoapClient(NULL, $options);

//Obtenemos pixels
$pixels = $client->getPixels();

//$client->updateColor(1, 2, "#262222");





if(isset($_POST["color"])){
    $client->updateColor($_POST["y"], $_POST["x"], $_POST["color"]);
}


/* echo "tu usuario es: ".$usuario; 
echo "contraseña es: ".$contra; */






?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Ejemplo Tema 7: Validación formulario con jQuery</title>
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    </head>
<body>
    <h1>TABLA PIXELS</h1>
    <div id="tablaCont"></div>
   <p id="test"></p>
   <p id="resultado"></p>
   <input type="button" id="btn" value="Ingresar" />
</body>
<script type="text/javascript">
    var jArray =<?php echo json_encode($pixels); ?>;


</script>
<script type="text/javascript" src="jquery.js"></script>
</html>

