<?php 

    function verificarRut($rut,$ver){
        $rut = strrev($rut);
        $len = strlen($rut);
        $c = 0;
        $mul = 2;
        $sum = 0;
        while($c<$len){
          $sum += substr($rut,$c,1)*$mul;
          if($mul == 7){
             $mul = 2;
          }else{
             $mul++;
          }
          $c++;        
        }
        
        $rest = $sum%11;
        $dig = 11 - $rest;
  
        if($dig == 10){
          $dig = "K";
        }elseif($dig == 11){
          $dig = 0;
        }

        if($dig == $ver){
            return False;
        }else{
            return True;
        }

    }

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

    session_start();

    //var escaneo
    $scanName = "";
    $scanAp = "";
    $scanRut = "";

   //var invtitacion
    $invName = "";
    $invAp = "";
    $invrut = "";
    $invVer = "";
    $invDep = "";

    //var login / registro
    $username = "";
    $email = "";
    $error = array();

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
            $_SESSION['success'] = "Te has registrado con exito";
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

    if(isset($_POST['invite'])){ // REGISTRO DE INVITADO EN DATABASE, TERMINAR
        $invName = mysqli_real_escape_string($data, $_POST['nomb']) ;
        $invAp = mysqli_real_escape_string($data, $_POST['ap']) ;
        $invrut = mysqli_real_escape_string($data, $_POST['rut']) ;
        $invVer = mysqli_real_escape_string($data, $_POST['ver']) ;
        $invDep = mysqli_real_escape_string($data, $_POST['depto']) ;
        
        if(empty($invName) or empty($invAp)){
            array_push($error, "Se requiere el nombre completo del invitado");

        }
        if(empty($invrut) and empty($invVer)){
            array_push($error, "Se requiere el rut del invitado");

        }
        if(verificarRut($invrut,$invVer)){
            array_push($error, "Ingrese un rut válido");

        }
        if(empty($invDep)){
            array_push($error, "Ingrese el numero de su depertamento");

        }
        if(count($error) == 0){
            $rut = $invrut.$invVer;
            $query = "INSERT INTO invitados (nombre, apellido, rut, depto) VALUES ('$invName', '$invAp', '$rut', '$invDep')";
            mysqli_query($data,$query);
            $_SESSION['invName'] = $invName;
            $_SESSION['invAp'] = $invAp;
            $_SESSION['invrut'] = $rut;
            $_SESSION['invDep'] = $invDep;
            header('location: inv.php?yo_mismo=test');
        }
    }


    if(isset($_POST["adminAccess"])){
        $adminName = mysqli_real_escape_string($data,$_POST["adminName"]);
        $adminPass = md5(mysqli_real_escape_string($data,$_POST["adminPass"]));
        $query = "SELECT * FROM admins WHERE adminName = '$adminName' AND adminPass = '$adminPass'";
        $result = mysqli_query($data,$query);
        if(!empty($result) AND mysqli_num_rows($result) > 0){
            $_SESSION['user'] = $adminName;
            $_SESSION['admin'] = $adminName;
            $_SESSION['success'] = "Has iniciado sesion con exito";
            header('location: menu.php');
        }else{
            array_push($error, "usuario o contraseña incorrectos");
        }
    }
    
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['user']);
        unset($_SESSION['admin']);
        header('location: index.php');
    }
?>