<?php
header("Content-Type: application/json");
$pdo = new PDO("mysql:dbname=zumbaos sin gold;host=127.0.0.1","root","");

$action = (isset($_GET["action"]))?$_GET["action"]:"read";
switch ($action) {
    case 'add':
        echo "hi";
        break;
    
    default:
        echo "hello";
        $sql = $pdo->prepare("SELECT * FROM reservas");
        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
        break;
}




?>