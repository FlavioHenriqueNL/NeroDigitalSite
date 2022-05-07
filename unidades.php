<?php //TEMPLATE NAME: Unidades ?>
<?php $contador = 2;
    $args = array(
        'post_type' => 'Unidades',
        'order' => 'ASC'
    );
    $unidades = new WP_Query($args);
?>
<?php get_header('interno'); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section class="unidades unidades-interno">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titulo">
                    <h1 id="unidades-titulo"><?php the_title(); ?></h1>
                    <h3><?php the_content(); ?> </h3>
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

<?php get_footer(); ?>