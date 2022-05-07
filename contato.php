<?php // TEMPLATE NAME: Contato 
    get_header('interno');
?>
<?php if(have_posts()): ?>
<section class="contato">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="titulo">
                        <h1>Contato</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-12">
                    <?php the_field('formulario'); ?>
                </div>
                <div class="offset-md-1 col-md-4 col-12">
                    <h2>Nossos Endereços</h2>
                    <div class="unidade">
                       <?php the_field('content'); ?>
                    </div>
                </div>
            </div>
            
        </div>
   </section>
<?php endif; ?>

<?php get_footer()?>