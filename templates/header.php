<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Codificando</title>
    <!-- ESTILOS DO PROJETO -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!-- GOOGLE FONTES -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <!-- ÍCONE DA PAGINA -->
    <link href="img/h1_logo.ico" rel="shortcut icon" type="image/x-icon">
         <a href="<?= $BASE_URL ?>" id="logo">
        <img src="<?= $BASE_URL ?>/img/favicon.ico" alt="Codificando">
        </a>
        <!------------------ -->
        <!-- MENU -->
        <nav>
           <ul id="navbar">
               <li><a href="<?= $BASE_URL ?>"class="nav-link">Home</a></li>
               <li><a href="#"class="nav-link">Categorias</a></li>
               <li><a href="#"class="nav-link">Sobre</a></li>
               <li><a href="<?= $BASE_URL ?>/contato.php" class="nav-link">Contato</a></li>
           </ul>
        </nav>

        <!-- ÍCONE DAS REDES SOCIAIS -->
        <nav id="menu_social"> 
				<ul>
                    <li><a href="http://www.twitter.com" class="twitter"></a></li>
					<li><a href="http://www.facebook.com" class="facebook"></a></li>
				</ul>
			</nav>
    </header>