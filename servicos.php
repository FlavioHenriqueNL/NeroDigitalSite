<?php //TEMPLATE NAME: Serviços ?>
<?php get_header('interno'); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section class="servicos servicos-interno">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titulo">
                    <h1><?php the_title();?></h1>
                    <h2><?php the_field('subtitulo');?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="linha-vertical desktop"></div>
                <figure class="desktop">
                    <img src="<?php the_field('thumbnail'); ?>" class="img-fluid" alt="">
                </figure>
                
            </div>
            <div class="col-md-6 col-12">
                <ul class="lista-servicos list-unstyled" style="overflow-wrap: break-word">
                <?php if(have_rows('lista_de_itens')): while (have_rows('lista_de_itens')):the_row();?>
                    <li><?php the_sub_field('item');?></li>
                <?php endwhile; else: endif; ?>               
                </ul>
            </div>
        </div>
    </div>
</section>
<?php endwhile; else: endif; ?>





<?php get_footer();?>