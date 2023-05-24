<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acessoBD/style.css">
    <title>Aprendendo a conectar php ao banco de dados</title>
</head>
<body>
   
    <header>
        <nav>
            <a class="logo" href="/">Produtos</a>
            <div class="mobile-menu"></div>
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            <ul class="nav-list">
                <li><a href="/">Listar</li>
                <li><a href="/">Pesquisar</li>
                <li><a href="/">Excluir</li>
                <li><a href="/">Cadastro</li>
                <li><a href="/">Alterar</li>

            </ul>
        </nav>
        <?php

        include_once 'bd_produtos.php';

$p = new Produto();
$pro_bd=$p->listar();

?>
<b> Id &nbsp;&nbsp;&nbsp;&nbsp; Nome &nbsp;&nbsp;&nbsp;&nbsp; Estoque</b>
<?php
foreach($pro_bd as $pro_mostrar){
    ?>
    <br><br>
    <b><?php echo $pro_mostrar[0]; ?> </b>&nbsp;&nbsp;&nbsp;&nbsp;
    <?php echo $pro_mostrar[1]; ?> &nbsp;&nbsp;&nbsp;&nbsp;
    <?php echo $pro_mostrar[2]; ?> 
    
    <?php
   
    
  
}

     echo "<br><br><button><a href = 'menu.html'> Voltar</a></button>";?>
    
</header>
<main>
  <!--  <img src="starwars.jpg"  alt="logo do projeto">-->
  
</main>

</body>
</html>