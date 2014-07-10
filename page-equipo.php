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
                    
                    <?php
                        $args = array(
                            'post_type' => 'equipo',
                            'posts_per_page' => 4,
                            'order' => 'ASC',
                            'order_by' => 'date'
                        );
                    ?>
                    
                    <?php $equipo = new WP_Query($args); while ($equipo->have_posts() ): $equipo->the_post(); ?>
                            
                    <div class="col-md-3">
                        <div class="integrante grisBG text-center">
                            
                            <?php if (has_post_thumbnail()) {
                                 the_post_thumbnail();
                            } else {
                                    echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/user.svg" />';
                            }  ?>
                            
                            <h3><?php the_title(); ?></h3>
                            
                            <p class="puesto"><?php the_field('puesto'); ?></p>
                            
                            <?php the_content(); ?>
                        
                            <div class="sociales">
                                <ul class="enlaces">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                       
                   <?php endwhile; wp_reset_postdata(); ?>
                    
                </div>
                
            </section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
