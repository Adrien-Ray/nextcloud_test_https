<!DOCTYPE html>
<html <?php language_attributes(); ?>>    
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/logo/logo-shape.png" type="image/x-icon">
      <title>Shape Agency</title>
      <?php wp_head(); ?>
</head>
<body>
      <header>
            <div class="logo header__child">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/logo-shape.png" alt="">
            </div>
            <div class="burger header__child" id="burger">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/hamburger.png" alt="">
            </div>
            <div class="nav header__child" id="nav">
                  <a href="#" class="nav__child">L'agence</a>
                  <a href="#" class="nav__child">Nos services</a>
                  <a href="#" class="nav__child">Contact</a>
            </div>
      </header>

      <script>
            let b = 0;
            document.getElementById('burger').addEventListener('click', hideShow);
            function hideShow(){
                  console.log('hello');
                  if (b == 0) {
                        document.getElementById('nav').style.animation = 'menu 0.2s linear';
                        document.getElementById('nav').style.animationFillMode = 'both'; //ça bloque a 100%
                        b = 1;
                  }else{
                        document.getElementById('nav').style.animation = 'menu2 0.2s linear';
                        b = 0;
                  }
            }
      </script>
