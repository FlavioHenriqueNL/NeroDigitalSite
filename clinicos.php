

<?php
    //TEMPLATE NAME: Clinicos
    get_header('interno'); 
?>
<?php
$args = array(
    'post_type' => 'Clinicos',
    'order' => 'ASC'
);
$clinicos = new WP_Query($args);
?>

<section class="corpo-clinico corpo-clinico-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="titulo">
                    <h1>Corpo Clínico</h1>
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
                            <img src="<?php echo $imagem_thumbnail[0]; ?>" alt="<?php the_title(); ?>" class="img-fluid">
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


<?php get_footer(); ?>