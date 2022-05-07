<?php 
    //TEMPLATE NAME: A Clinica
?>
<?php get_header('interno'); ?>

<?php if(have_posts()): the_post(); ?>

   <section class="a_clinica">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="titulo">
                       
                       <h1 class="text-md-left text-center"><?php echo the_field('nome_do_titulo'); ?></h1>
                   </div>
               </div>
           </div>
           <div class="row">
               <div class="col">
                    <figure class="desktop" id="clinica_imagem">
                        <img src="<?php echo the_field('foto_da_clinica'); ?>" alt="Imagem da Clinica" class="img-fluid float-left">
                    </figure>
                   <div class="informacao">
                        <?php the_content(); ?>
                   </div>
               </div>
           </div>
       </div>
   </section>
<?php endif; ?>

<?php get_footer(); ?>