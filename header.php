<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?> | <?php bloginfo('description'); ?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/estilo.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/sticky.css">
    <meta name="description" content="Somos uma Clínica de Radiologia e Tomografia Odontológica Digital, prestamos serviços no campo da ODONTOLOGIA e áreas MÉDICAS afins, atendendo as solicitações dos requisitantes, para tomadas radiográficas intra e extra bucais, tomografias computadorizadas cone beam, documentações ortodônticas, ortopédicas, periodontais, implantodológicas entre outras."/>
    <meta name="keywords" content="radiologia, tomografia, ondontologia, digital, medicos, dentistas, computadorizadas, documentações, ortopedia, implantodologia, maceio, arapiraca, palmeira dos indios, alagoas."/>

    <?php wp_head(); ?>

</head>
<body>
    <header id="header">
        
    <nav class="barra-navegacao navbar navbar-expand-lg" id="inicio">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="<?php echo get_template_directory_uri();?>/assets/media/img/Logo.png" class="img-fluid" alt="Nero Digital">
            </a>
            <div class="align-self-start redes-sociais order-md-1 desktop-lg">
                <span class="mr-1"><a target="blank" href="https://www.facebook.com/NeroDigital/"><i class="fab fa-facebook-f"></i></i></a></span>
                <span><a target="blank" href="https://www.instagram.com/neroradiologia/"><i class="fab fa-instagram"></i></i></a></span>
            </div>
            <span class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="<?php echo get_template_directory_uri();?>/assets/media/img/menu-icon.png" alt="">
            </span>

            <div class="collapse navbar-collapse mae-menu " id="navbarSupportedContent">
                <?php
                    $args = array(
                        'menu' => 'principal',
                        'theme-location' => 'menu-principal',
                    );
                    wp_nav_menu( $args );
                ?>
            </div>
        </div>
    </nav>
    <?php 
        $args = array(
            'post_type' => 'slider'
        );
        $slider = new WP_Query($args);
    ?>
    <section class="slider">
    
        <div class="slide">
        <?php if($slider->have_posts()): while($slider->have_posts()): $slider->the_post();?>
            <img class="img-fluid" src="<?php the_field('slider'); ?>" alt="aliiii">
        <?php endwhile; wp_reset_postdata(); endif; ?>
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
                    <form target="new" action="http://www.docviewer.com.br/login.php?go=clinica&retorno=clinicanero.com.br" method="post" target="new" class="d-md-flex d-block" onSubmit="return validaForm2()">
                        <input class="formulario form-control" type="email" placeholder="E-mail" id="email"  onfocus="if(this.value == 'E-mail') this.value=''" onblur="if(this.value =='') this.value= 'E-mail'" value="E-mail">
                        <input class="formulario form-control" type="password" placeholder="*******" id="senha"  onfocus="if(this.value == 'Senha') this.value=''" onblur="if(this.value =='') this.value= 'Senha'" value="Senha">
                        <button class="btn-enviar form-control" type="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>