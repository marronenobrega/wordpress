<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <?php
        $title = get_the_title();
        if($title == ''){
         $title = 'Home';   
        }
    ?>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="<?php echo get_theme_root_uri();?>/danki/style.css" rel="stylesheet">
    <link href="css/fontawesome/css/all.min.css" rel="stylesheet">
   
</head>
<body>
    <section class="topo">
            <div class="center">
                <header>
                        <div class="logo"><a href="<?php echo '/wordpress' ?>"><img src="<?php echo get_theme_root_uri();?>/danki/images/logo.png"/></div>
                </header>
                    <ul class="menu-desktop">
                        <li><a href="/wordpress/">Home</a></li>
                        <li><a href="/wordpress/sobre">Sobre</a></li>
                        <li><a href="/wordpress/contato">Contato</a></li>
                    </ul>
                <div class="menu-mobile">
                    <i class="fas fa-align-right"></i>
                    <ul>
                        <li><a href="/wordpress/">Home</a></li>
                        <li><a href="/wordpress/sobre">Sobre</a></li>
                        <li><a href="/wordpress/contato">Contato</a></li>
                    </ul>
                </div>