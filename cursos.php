<?php //TEMPLATE NAME: Cursos

$args = array(
    'post_type' => 'Cursos',
    'order' => 'ASC'
);
$cursos = new WP_Query($args);
?>
<?php get_header('interno'); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <section class="cursos">
        <div class="container">
            <div class="row cabecalho-secao">
                <div class="col-12">
                    <div class="titulo">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
            
            <div class="row cursos align-items-strech">
                <?php if($cursos->have_posts()): while($cursos->have_posts()): $cursos->the_post(); ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="curso">
                        <a href="<?php the_permalink( )?>">
                            <figure>
                                <img src="<?php the_field('thumbnail_cursos'); ?>" alt="Curso X" class="img-fluid">
                            </figure>
                            <div class="informacoes">
                                <h5 class="data"><?php the_field('data'); ?></h5>
                                <h2 class="nome"><?php the_title(); ?></h2>
                                <h4 class="local"><?php the_field('local'); ?></h4>
                            </div>
                            <div class="resumo">
                            <p class="text-justify"><?php the_field('resumo_curso'); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endwhile; else: endif; ?>
            </div>
        </div>
    </section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>