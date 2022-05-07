<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/estilo.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/sticky.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/node_modules/font-awesome/css/font-awesome.min.css">

    <?php wp_head(); ?>

</head>
<body>
    <header class="interno">
        <section class="barra-navegacao" id="inicio">
        <div class="container">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="nero/home">
                        <img src="<?php echo get_template_directory_uri();?>/assets/media/img/Logo.png" class="img-fluid" alt="Nero Digital">
                    </a>
                    <div class="align-self-start redes-sociais order-md-1 desktop">
                        <span class="mr-1"><a href=""><i class="fa fa-facebook-f"></i></a></span>
                        <span><a href=""><i class="fa fa-instagram"></i></a></span>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="<?php echo get_template_directory_uri();?>/assets/media/img/menu-icon.png" alt="">
                    </button>

                    <div class="collapse navbar-collapse mae-menu" id="navbarSupportedContent">
                            <?php
                                $args = array(
                                    'menu' => 'principal',
                                    'theme-location' => 'menu-principal',
                                );
                                wp_nav_menu( $args );
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>
    </header>
    <section id="area-do-dentista">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-auto">
                <div class="titulo d-flex">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/media/img/areadodentista_icon.png" alt="Dente">
                    <h1 class="ml-2">Área do Dentista</h1>
                </div>
            </div>
            <div class="col-12 text-center mobile">
                <input type="checkbox" data-toggle="collapse" data-target="#barra-dentista" aria-controls="barrarodape" aria-expanded="false" aria-label="Toggle navigation" id="seta" style="display: none;">
                <label for="seta" class="seta">
                        <img src="<?php echo get_template_directory_uri();?>/assets/media/img/icone-seta.png" alt="BOTAO" >
                </label>
            </div>
            
            <div class="col-md col-12">
                <div id="barra-dentista">
                    <form action="" method="" class="d-md-flex d-block">
                        <input class="formulario form-control" type="email" placeholder="E-mail">
                        <input class="formulario form-control" type="password" placeholder="*******">
                        <button class="btn-enviar form-control" type="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>