<?php // TEMPLATE NAME: Single Cursos ?>
<?php get_header('interno'); ?>
   <section class="cursos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="titulo">
                        <h1>Cursos</h1>
                    </div>
                </div>
            </div>
        <div class="curso">
           <div class="row">
               <div class="col-md-4 col-12">
                    <figure>
                        <img src="<?php the_field('thumbnail_cursos'); ?>" alt="<?php the_title() ?> Thumbnail" class="img-fluid">
                    </figure>
               </div>
                <div class="col-md-8 col-12">
                    <div class="informacoes">
                        <h5 class="data"><?php the_field('data'); ?></h5>
                        <h2 class="nome"><?php the_title() ?></h2>
                        <h4 class="local"><?php the_field('local'); ?></h4>
                    </div>
                    <div class="resumo">
                        <p><?php the_field('resumo_curso'); ?></p>
                    </div>
                </div>
           </div>
           </div>
        </div>
   </section>
<?php get_footer(); ?>