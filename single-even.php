<?php get_header(); ?>
 </header>
<?php while (have_posts()) : the_post(); ?>

 <?php
//Champs personnalisés
 $date = get_post_meta($post->ID, 'Date', true);
 $hours = get_post_meta($post->ID, 'Heure', true);
 $place = get_post_meta($post->ID, 'Lieu', true);
 $map = get_post_meta($post->ID, 'Plan', true);
 $reservationweb = get_post_meta($post->ID, 'Reservation web', true);
 $reservationtel = get_post_meta($post->ID, 'Reservation tel', true);

 ?>


 </header>
 <div id="arianne"><?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?></div>
 <section id="contenu">
  <article>

   <h1><?php the_title(); ?></h1>

   <?php
   $h2=get_post_meta($post->ID,'h2',true);
   ?>

   <?php if($h2){ ?>
    <h2><?php echo $h2; ?></h2>
   <?php } ?>

  </article>
  <div class="meta">Publié le <?php the_time('j F Y'); ?> par <b><?php the_author(); ?></b>  | <?php the_views(); ?></div>
  <div id="slide-tp">
   <div id="cbp-fwslider" class="cbp-fwslider">
    <ul>
     <li><a href="#"><?php the_post_thumbnail(); ?></a></li>
    </ul>
   </div>
  </div>

  <?php the_content(); ?>



  <h3>Informations complémentaires</h3>


  <div id="infocomp">
   <ul>
    <li><?php if($date) { ?><b>Date</b> : <?php echo $date; ?></li><?php } ?>
    <li><?php if($hours) { ?><b>Heure</b> : <?php echo $hours; ?></li><?php } ?>
    <li><?php if($place) { ?><b>Lieu</b> : <?php echo $place; ?></li><?php } ?>
    <li><?php if($reservationweb) { ?><b>Réservation internet</b> : <?php echo $reservationweb; ?></li><?php } ?>
    <li><?php if($reservationtel) { ?><b>Réservation téléphonique</b> : <?php echo $reservationtel; ?></li><?php } ?>
    <li><?php if($map) { ?><b>Plan</b> : <?php echo $map; ?></li><?php } ?>

   </ul>
  </div>



  <?php comments_template(); ?>






 </section>
<?php endwhile;?>




 <div class="clearboth"></div>


 <!-- //////  Options du slider d'images -->
 <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.cbpFWSlider.min.js"></script>
 <script>
  $( function() {
   $( '#cbp-fwslider' ).cbpFWSlider();
   $( '#cbp-fwslider' ).cbpFWSlider('interval');
  } );
 </script>
 <!-- Fin Options du slider d'images -->

 </div>


 </div>
<?php get_footer(); ?>