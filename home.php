<?php
    //Importa o arquivo conexao.php
    include("./src/php/conexao.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet"href="./src/css/home.css">
  </head>
  <body class="cor">
    <div class="android-large">
      <div class="div">
        <div class="overlap-group">
          <div class="borda"></div>
          <div class="text-wrapper">COMIDAS</div>
          <div class="text-wrapper-2">SUPERMERCADO WN</div>
          <div class="buto"></div>
          <p class="arroz-r-a-ucar-r">
            Arroz.............................................R$<br />açucar...........................................R$<br />feijão.............................................R$<br />farinha..........................................R$<br />cuscuz...........................................R$<br />massa
            do trigo..............................R$<br />goma de mandioca.......................R$<br />bolacha
            fortaleza seca.................R$<br />bolacha doce................................R$<br />macarrão......................................R$<br />sal................................................R$<br />leite
            condensado..........................R$<br />massa de  brownie.......................R$<br />café..............................................R$<br />creme
            de leite..............................R$<br />gelatina.......................................R$<br />batata
            palha...............................R$<br />azeite...........................................R$<br />oleo.............................................R$<br />sal
            grosso....................................R$<br />chocolate granulado...................R$
          </p>
          <div class="text-wrapper-3">FAÇA SEU PEDIDO</div>
          <div class="alimentos"></div>
          <div class="para-mais-alimentos">para mais alimentos<br />clique aqui</div>
        </div>
        <div class="comidas">R$</div>
        <img class="logo" src="./src/img/logo.png" />
      </div>
    </div>
    <div class="butonn">
    <p>
        <!-- Botão para encerrar a sessão -->
        <a href="./src/php/logout.php" title="Logout">Clique aqui para encerrar sua sessão</a>
    </p>
    </div>
  </body>
</html>