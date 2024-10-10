<?php  
    //Importa o arquivo conexão.php
    include("./src/php/conexao.php");

    if(isset($_SESSION["user"])){
        header("location:./home.php");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet"href="./src/css/home.css">
    <title>supermarcado WN</title>
</head>
<body>
            <!--Caixa que representa o fundo da pagina e armazena todo o conteúdo-->
                <div class="fundo">
                    <!--Caixa a armazena o(s) Formulario(s)-->
                    <div class="caixa-formulario">
                        <!--Formularios de Cadrasto-->
                        <h1>supermercado WN</h1><br>
                        <form class="area-formulario" method="post" action="#">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="Digite sue Email"> 

                            <label for="password">Senha</label>
                            <input type="password" id="password" name="password" placeholder="**********"> 
            
                            <input type="submit" value="Entrar" id="login" name="login">
                            <p>Não possui uma conta? <a href="./cadrasto.php">clique aqui</a></p>
                        </form>  
                        <!--Fim do formulario de login-->
                    </div>
                    <!--Fim da div "caixa-formulario-->
                </div>
                    <!--Fim da div "fundo"-->
            <?php
               include("./src/php/conexao.php");

               //Verificar se o botao e login foi ativado
               if(isset($_POST["login"])){
                   include("./src/php/login.php");
               }   
            ?>
</body>
</html>