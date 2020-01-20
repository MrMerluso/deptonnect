<?php 

    $username = "";
    $email = "";
    $error = array();
    $link = "register.php";

    $data = mysqli_connect("localhost", "root","","zumbaos sin gold");

    if(isset($_POST["register"])){
        $username = mysqli_real_escape_string($data, $_POST["uname"]);
        $email = mysqli_real_escape_string($data, $_POST["mail"]);
        $pass = mysqli_real_escape_string($data, $_POST["pass"]);
        $pass2 = mysqli_real_escape_string($data, $_POST["pass2"]);

        if(empty($username)){
            array_push($error, "Se requiere nombre de usuario");

        }
        if(empty($email)){
            array_push($error, "Se requiere correo electronico");

        }
        if(empty($pass)){
            array_push($error, "Se requiere contraseña");

        }
        if($pass != $pass2){
            array_push($error, "Las contraseñas no coinciden");
        }
        if(count($error) == 0){
            $pass = md5($pass);
            $sql = "INSERT INTO login (user, password, mail) VALUES ('$username', '$pass', '$email')";
            mysqli_query($data, $sql);
        }


    } 

?>