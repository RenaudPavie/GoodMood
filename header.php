<?php

?>
<html>
  <head>
    <meta charset="utf-8">
    <title>GoodMood</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory") ?>/assets/css/master.css">
  </head>
  <body>

    <!-- HEADER -->
    <header class="container-fluid">
      <div class="row">
        <div class="topHeadband">
          <p>Tout le good du music mood</p>
          <div class="rsxSociaux">
            <p>On est partout :</p>
            <a href="https://www.instagram.com/">
             <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/instagram-sketched.svg" alt="Icone réseau Instagram">
            </a>
            <a href="https://www.youtube.com/">
             <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/youtube.svg" alt="Icone réseau Youtube">
            </a>
            <a href="https://www.facebook.com/">
              <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/facebook.svg" alt="Icone réseau Facebook">
            </a>
            <a href="https://www.twitter.com/">
              <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/twitter.svg" alt="Icone réseau Twitter">
            </a>
          </div>
        </div>
        <nav class="navMenu">
          <a href="<?php bloginfo('url') ?>" class="logo">
              <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/logo.svg" alt="Logo GoodMood">
          </a>
          <div class="navLink">
            <a href="#" class="logoSidebar">
                <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/logo.svg" alt="Logo GoodMood">
            </a>
            <button type="button" id="closeMenu">
              <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/menu.svg" alt="Logo GoodMood">
            </button>
            <a href="<?php bloginfo('url') ?>/actualites">Actualités</a>
            <a href="<?php bloginfo('url') ?>/tous-les-evenements/">Evenements</a>
            <a href="#">Contact</a>
          </div>
          <button type="button" id="openMenu">
            <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/menu.svg" alt="Logo GoodMood">
          </button>
        </nav>


      </div>
    </header>