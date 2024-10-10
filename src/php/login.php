 <?php
    $email = $_POST["email"];
    $password = $_POST["password"];
   
    $sql = "SELECT email, senha FROM usuarios WHERE email = '$email';";
    $result = mysqli_query($conn, $sql);
    $login = mysqli_fetch_array($result);
    if(is_null($login)){
        echo "<script type='text/javascript'> alert('Conta inexistente');</script>";
    }else{
        $login_m = $login['email'];
        $login_p = $login['senha'];
        if(($login_m == $email) && ($login_p == $password)){
            echo "<script type='text/javascript'>alert('Login realizado.');</script>";
        $_SESSION["user"] = $login_m;
        echo'<script type ="text/javascript" window.open("./home.php","_self"); </script>';
        } else {
            echo "<script type='text/javascript'>alert('Email ou senha inválido.');</script>";
        }
    }
        
?>
 