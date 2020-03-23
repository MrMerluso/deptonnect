<?php

function openFile($file){
    $fp = fopen($file,"r");
    $line = "";
    while (!feof($fp)){ 
        $current_line = fgets ($fp);
        if(!empty($current_line)){
            $line = $line.$current_line;
        }
    }
    fclose($fp);
    return $line;
}

function recogerDatos($ocr){
    $token = strtok($ocr, "<");
    $data = array();
    while ($token !== false){
        array_push($data,$token);
        $token = strtok("<");
    }
    preg_match_all('!\d+!', $data[1], $matches);
    $rut = $matches[0][2];
    $ver = $data[2];
    $rut = $rut."-".$ver;
    $ap = preg_replace('/[^a-zA-Z]/', '', $data[3]);
    $ap = $ap." ".$data[4];
    $nom = $data[5]." ".$data[6];
    
    return $nom."&".$ap."&".$rut;
}

$test = recogerDatos(openFile("test.txt"));
$tok = strtok($test,"&");
$newStr = array();
while($tok !== false){
    array_push($newStr,$tok);
    $tok = strtok("&");
}
$nombre = $newStr[0];
$apellido = $newStr[1];
$rut = $newStr[2];
echo $nombre."<br>";
echo $apellido."<br>";
echo $rut."<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        
    </script>
</head>
<body>
    
</body>
</html>