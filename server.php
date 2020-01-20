<?php 

    session_start();

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
            $_SESSION['user'] = $username;
            $_SESSION['success'] = "Has iniciado sesion con exito";
            header('location: menu.php');
        }


    }
    if(isset($_POST['login'])){
        $username = mysqli_real_escape_string($data, $_POST["uname"]);
        $pass = mysqli_real_escape_string($data, $_POST["pass"]);

        if(empty($username)){
            array_push($error, "Se requiere nombre de usuario");

        }
        if(empty($pass)){
            array_push($error, "Se requiere contraseña");

        }
        if(count($error) == 0){
            $pass = md5($pass);
            $query = "SELECT * FROM login WHERE user = '$username' AND password = '$pass'";
            $result = mysqli_query($data, $query);
            if(!empty($result) AND mysqli_num_rows($result) > 0){
                $_SESSION['user'] = $username;
                $_SESSION['success'] = "Has iniciado sesion con exito";
                header('location: menu.php');
            }else{
                array_push($error, "usuario o contraseña incorrectos");

            }

        }
    }
    
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['user']);
        header('location: index.php');
    }

?>