<footer>
        <div class="container">    
            <div class="conteudo">
                <div class="mobile">
                <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barrarodape" aria-controls="barrarodape" aria-expanded="false" aria-label="Toggle navigation">
                                <span><img src="<?php echo get_template_directory_uri();?>/assets/media/img/menu-icon.png" alt="BOTAO"></span>
                            </button>
                        </div>
                        <div class="col-auto">
                            <a href="#inicio">
                                <div class="para_topo"><img src="<?php echo get_template_directory_uri();?>/assets/media/img/icone_seta_01.png" alt=""></div>
                            </a>
                            <h6 class="text-center">Topo</h6>
                            
                        </div>  
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-12 d-flex align-items-md-start justify-content-md-start justify-content-center">
                        <div class="" id="barrarodape">
                            <div class="menu">
                            <?php
                                $args = array(
                                    'menu' => 'principal',
                                    'theme-location' => 'menu-principal',
                                );
                                wp_nav_menu( $args );
                            ?>
                            </div>
                        </div>
                    </div>
                    <?php
                       $args = array(
                           "pagename" => "contatos"
                       );
                        $contatos = new WP_Query($args);
                    ?>
                    <?php if($contatos->have_posts()): $contatos->the_post(); ?>
                    <div class="col-md-5 col-12" id="footer-div">
                        <div class="nossas-redes">
                            <h2>Nossas Redes</h2>
                            <div class="facebook">
                                <a target="blank" <?php echo "Oi?" ?> href="<?php the_field('facebook'); ?>"><h3><i class="fab fa-facebook-f mr-2"></i>Facebook</h3></a>
                            </div>
                            <div class="instagram">
                                <a target="blank" href="<?php the_field('instagram'); ?>"><h3><i class="fab fa-instagram mr-2"></i>Instagram</h3></a>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_query(); endif; ?>
                    <div class="col-md-4 col-12">
                        <div class="fale-conosco">
                            <h2>Fale Conosco</h2>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input class="form-control formulario" type="text" placeholder="Nome">		
                                </div>
                                <div class="form-group">	
                                    <input type="text" class="form-control formulario" placeholder="Telefone">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control formulario" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="mensagem" class="formulario form-control" 
                                    resize=no id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
                                </div>
    
                                <button type="submit"  class="btn-enviar float-right">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row pt-3 justify-content-end align-items-center">
                    <div class="col text-center">
                       <p style="margin: 0;">Nero Digital - Todos os Direitos Reservados.</p>
                    </div>
                    <div class="col-auto">
                        <a target="_blank" href="https://www.eitxa.com.br"><img src="<?php echo get_template_directory_uri();?>/assets/media/img/logo-eitxa.png" alt="Eitxa! - Agência Digital"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/b3736c1d99.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/slicky_navbar.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/scripts.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
    
    $('document').ready(function(){
     
        adicionarCollapse('barrarodape');
        adicionarCollapse('barra-dentista');
        
        slickyNavbar();
        $(window).scroll(function(){
		    slickyNavbar();
	    });

        $(window).resize(function(){
            adicionarCollapse('barrarodape');
            adicionarCollapse('barra-dentista')
        });
        
        function backToTop(){
            $('html, body').animate({scrollTop:0}, 800);
        }	

        $(".para_topo").click(function(){
            backToTop();
        });

        $('.slide').slick({
            autoplay: true,
            arrows: false,
            dots: false
        });

        
    });
    $('#navbarSupportedContent').on('show.bs.collapse', function () {
       $(".barra-navegacao").css('background', '#47a491');
    });

        $('#navbarSupportedContent').on('hidden.bs.collapse', function () {
            $(".barra-navegacao").css('background', 'transparent');
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>