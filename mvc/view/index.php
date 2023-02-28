<?php
//CONECATAMOS EL SOAP
$options = array('uri' => 'http://s936421440.mialojamiento.es/', 'location' => 'http://s936421440.mialojamiento.es/index.php');
$client = new SoapClient(NULL, $options);

//OBTENEMOS PIXELES
$pixels = $client->getPixels();










//SI RECIBIMOS EL POST CON LAS COORDENADAS Y EL COLOR DEL INPUT HACEMOS UPDATE 
if(isset($_POST["color"])){
    $client->updateColor($_POST["y"], $_POST["x"], $_POST["color"]);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>PRACTICA JQUERY PIXEL ART OSCAR</title>
        <link rel="stylesheet" href="../../media/styles/styles.css">
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    </head>
<body>
    <h1> jQuery + Pixelart</h1>
    <div id="tablaCont"></div>

</body>
<script type="text/javascript">
    //ENVIAMOS PIXELES AL FICHERO JS
    var jArray =<?php echo json_encode($pixels); ?>;


</script>
<script type="text/javascript" src="../model/jquery.js"></script>
</html>

