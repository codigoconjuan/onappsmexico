<?php get_header(); ?>

    <?php get_template_part('partes/parte','destacada'); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
    
            <section id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

                <h1><?php the_title(); ?></h1>
                <div class="dividerTitulo"></div>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php the_content(); ?>
                    </div>
                </div>
                
                

            </section>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>
