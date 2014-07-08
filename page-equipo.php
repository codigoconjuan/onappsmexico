<?php
/*
 * Template Name: Equipo de trabajo
 */

get_header(); ?>

    <?php get_template_part('partes/parte','destacada'); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    
            <section id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

                <h1><?php the_title(); ?></h1>
                <div class="dividerTitulo"></div>
                    
                <section class="contenido text-center">
                    <?php the_content(); ?>
                </section>
                
                <div id="integrantes" class="row">
                            
                    <div class="col-md-3">
                        <div class="integrante grisBG text-center">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/user.svg">
                            <h3>Nombre 1</h3>
                            
                            <p class="puesto">CEO</p>
                            
                            <p>In posuere ligula at est suscipit blandit. Vivamus lacinia risus nec commodo blandit. Nunc vestibulum metus risus, eu fermentum nisi dapibus non. Praesent vitae tempor odio. Etiam consectetur lacus ante, at pharetra ante venenatis vitae.</p>
                        
                            <div class="sociales">
                                algo
                            </div>
                        </div>
                    </div>

                    
                    
                </div>
                
            </section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
