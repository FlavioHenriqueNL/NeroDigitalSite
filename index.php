<?php //TEMPLATE NAME: Home ?>
<?php get_header();?>
<?php get_header('areadentista'); ?>

   <section class="corpo-clinico">
        <?php
            $args = array(
                'post_type' => 'Clinicos',
                'order' => 'ASC',
                'posts_per_page' => 4
            ); 
            $clinicos = new WP_Query($args);
        ?>
       <div class="container">
           <div class="row">
               <div class="col-12">
                    <div class="titulo">
                        <h1>Corpo Clínico</h1>
                        <a href="nero/corpo-clinico" id="conheca_clinicos">
                            <h2 class="text-center">Conheça todos os nossos clínicos</h2>
                        </a>
                    </div>
                </div>
           </div>
           <div class="row">
              
            <?php if($clinicos->have_posts()): while($clinicos->have_posts()): $clinicos->the_post();
                $imagem_thumbnail = wp_get_attachment_image_src(get_field('foto_clinico'), 'thumbnail-clinico');
            ?>
    
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="clinico">
                        <a href="<?php the_permalink(); ?>">
                            <figure class="img-clinico">
                                <img src="<?php echo $imagem_thumbnail[0]; ?>" alt="Clinico" class="img-fluid">
                            </figure>
                        
                            <div class="id-clinico">
                                <h5><?php the_title(); ?></h5>
                                <h6><?php the_field('registro')?></h6>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile; else: endif; ?>
           </div>
       </div>

   </section>
   <?php
        $args = array(
            "post_type" => "unidades",
            'order' => 'ASC'
        );
        $args2 = array(
            "pagename" => "unidades",
        );
        $pageUnidades= new WP_Query($args2);
        $unidades = new WP_Query($args);
        $contador = 2;
   ?>
   <?php if($pageUnidades->have_posts()): while($pageUnidades->have_posts()): $pageUnidades->the_post(); ?>
    <section class="unidades">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="titulo">
                        <h1 id="unidades-titulo"><?php the_title(); ?></h1>
                        <a href="nero/unidades"><h3><?php the_content(); ?></h3></a>
                    </div>
                </div>
            </div>
            <div class="locais">
            <?php if($unidades->have_posts()): while($unidades->have_posts()): $unidades->the_post(); ?>
            
            <?php if($contador%2==0): ?>
                <div class="row local">
                        <div class="col-6 order-0">
                            <figure>
                                <img src="<?php the_field('imagem_unidade') ?>" alt="Unidade" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-6 order-1 d-flex align-items-center">
                            <div class="informacao">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_field('conteudo_unidade') ?></p>
                            </div>
                        </div>
                </div>
                <?php else: ?>
                    <div class="row local">
                        <div class="col-6 order-1">
                            <figure>
                                <img src="<?php the_field('imagem_unidade') ?>" alt="Unidade" class="img-fluid">
                            </figure>
                        </div>
                        <div class="col-6 order-0 d-flex align-items-center">
                            <div class="informacao">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_field('conteudo_unidade') ?></p>
                            </div>
                        </div>
                    </div>
                    
                <?php endif;?>

                <?php $contador++; ?>
                <?php endwhile; else: endif; ?>
            </div>
        </div>
    </section>
    <?php endwhile; else: endif; ?>
   <hr id="linha-unidade">
   <?php
        $args = array(
            "pagename" => "servicos"
        );
        $servicos = new WP_Query($args);
   ?>
   <?php if($servicos->have_posts()): while($servicos->have_posts()): $servicos->the_post(); ?>
   
   <section class="servicos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="titulo">
                        <h1><?php the_title();?></h1>
                        <a href="<?php the_permalink()?>"> <h2><?php the_field('subtitulo');?></h2></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="linha-vertical desktop"></div>
                    <figure class="desktop">
                        <img src="<?php the_field('thumbnail') ?>" class="img-fluid" alt="">
                    </figure>
                    
                </div>
                <div class="col-sm-6 col-12">
                    <ul class="lista-servicos list-unstyled desktop" style="overflow-wrap: break-word">
                    <?php if(have_rows('lista_de_itens')): while (have_rows('lista_de_itens')):the_row();?>
                        <li><?php the_sub_field('item');?></li>
                    <?php endwhile; else: endif; ?>               
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>