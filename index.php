<?php

    
$options = array('uri' => 'http://s936421440.mialojamiento.es/', 'location' => 'http://s936421440.mialojamiento.es/index.php');
$client = new SoapClient(NULL, $options);

$test = $client->getPixels();
var_dump($test[6]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <table>

            <?php 
            $pixels = $client->getPixels();
            for ($col=0; $col < 32 ; $col++) { 
                echo "<tr>";
                for($row = 0; $row < 32; $row++){
                    $pixel = $pixels[$col*32];
                    echo "<td><input type='color' colorpick-eyedropper-active='false' value='{$pixel["color"]}' name='{$pixel["x"]},{$pixel["y"]}'></td>";
                }
                echo "</tr>";
            };

          
            ?>
        
    </table>
</body>
</html>