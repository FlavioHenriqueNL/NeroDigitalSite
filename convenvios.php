<?php //TEMPLATE NAME: Convênios ?>
<?php get_header(); ?>
<?php
$args = array(
  "post_type" => "convenios",
  "order" => "asc"
);
$convenio = new WP_Query($args);
?>
<section id="convenios">
  <div class="titulo text-center">
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="container">
    <div class="row">
<?php if ($convenio->have_posts()) : while ($convenio->have_posts()) : $convenio->the_post(); ?>
    
    <div class="col-lg-3 col-md-4 col-6">
      <div class="convenio">
        <?php $imagem_thumbnail = wp_get_attachment_image_src(get_field('logo'),"convenios"); ?>
        
        <img class="img-fluid" src="<?php echo $imagem_thumbnail[0]; ?>" alt="<?php the_title(); ?>">
      </div>
    </div>
    
<?php endwhile; wp_reset_query(); else: echo "Não há convênios para mostrar."; endif; ?>
    </div>
  </div>
</section>
<?php get_footer(); ?> 