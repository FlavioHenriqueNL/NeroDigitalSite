<?php // TEMPLATE NAME: Single Corpo Clinico ?>
<?php get_header('interno'); ?>

<?php if(have_posts()): while(have_posts()): the_post();
    $imagem_thumbnail = wp_get_attachment_image_src(get_field('foto_clinico'), 'full');
?>
   <section class="corpo-clinico interno">
        <div class="container">
            <div class="clinico">
                <div class="row">
                    <div class="col-sm-4 col-12">
                        <figure>
                            <img src="<?php echo $imagem_thumbnail[0];?>" alt="<?php the_title()?>" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-sm-4 col-12">
                        <div class="informacoes">
                            <h2 class="nome"><?php the_title();?></h2>
                            <p class="curriculo">
                                <?php the_field('curriculo');?>
                            </p>
                            <h6 class="registro"><?php the_field('registro'); ?></h6>
                            <hr>
                            <p class="resumo">
                                <?php the_field('resumo'); ?> 
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
   </section>
<?php endwhile; else: endif; ?>
<? get_footer(); ?>