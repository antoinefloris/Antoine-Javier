<?php get_header(); ?>
 </header>
    <div id="arianne"><?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        } ?></div>

    <section id="contenu">
<article>
            <h1><?php the_title(); ?></h1>
            <?php
            // on recupere notre variable h2
            $h2=get_post_meta($post->ID,'h2', true);
            ?>


       <?php if($h2){ // si il existe une variable $h2 tu me l'affiche, si tu n'as rien rentré coté admin nivau h2 tu m'affiche rien
           ?>

       <h2><?php echo $h2; ?></h2>
       <?php }  ?>

        </article>
        <div class="meta">Publié le <?php the_time('j F, Y'); ?>  par <b><?php the_author(); ?></b> dans <?php the_category(', '); ?> | <?php the_views(); ?></div>
        <div id="slide-tp">
            <div id="cbp-fwslider" class="cbp-fwslider">
                <ul>
                    <li><a href="#"><?php the_post_thumbnail(); ?></a></li>
                    <li><a href="#"><?php if( class_exists( 'kdMultipleFeaturedImages' ) ) {
                            kd_mfi_the_featured_image( 'featured-image-1', 'post' );
                            }?>
                    </a></li>
                    <li><a href="#"><?php if( class_exists( 'kdMultipleFeaturedImages' ) ) {
                                kd_mfi_the_featured_image( 'featured-image-2', 'post' );
                            }?>
                    </a></li>
                    <li><a href="#"><?php if( class_exists( 'kdMultipleFeaturedImages' ) ) {
                                kd_mfi_the_featured_image( 'featured-image-3', 'post' );
                            }?>
                    </a></li>
                </ul>
            </div>
        </div>

        <!--commande qui verifie si il y a des pages a affiché. -->
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else : ?>
            <!--Si il y en a pas on affiche un message d erreur. -->
            <p>Bonjour, désolé, mais la page désirée n'est pas accessible.</p>
        <?php endif; ?>


        <?php comments_template(); ?>

    </section>

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



<?php get_footer(); ?>