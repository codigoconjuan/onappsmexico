    <section id="servicios" class="grisBG clear text-center">
        
        <div class="border">
        
                <div class="container">
                   <h2><?php the_field('titulo_3') ?></h2>

                   <div class="row">
                       <div class="col-md-4 text-center">
                           <h3 data-toggle="modal" data-target=".servicio1">Aplicaciones Móviles</h3>
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/servCel.svg">
                           
                       </div>
                       <div class="col-md-4 text-center">
                           <h3 data-toggle="modal" data-target=".servicio2">Páginas Web</h3>
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/servPagina.svg">
                           
                       </div>
                       <div class="col-md-4 text-center">
                           <h3 data-toggle="modal" data-target=".servicio3">Web Apps</h3>
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/servWebApps.svg">
                           
                       </div>
                   </div>

                </div>
            
        </div>
        
     

    </section> <!--/servicios -->
    
    
    <?php $servicios = new WP_Query('page_id=8'); while ($servicios->have_posts()): $servicios->the_post(); ?>  
    
    <div class="modal fade servicio1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content text-center">
          <?php the_field('servicio_1') ?>
        </div>
      </div>
    </div>

    <div class="modal fade servicio2" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content text-center">
          <?php the_field('servicio_2') ?>
        </div>
      </div>
    </div>

    <div class="modal fade servicio3" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content text-center">
          <?php the_field('servicio_3') ?>
        </div>
      </div>
    </div>
    
    <?php endwhile;  wp_reset_postdata(); ?>