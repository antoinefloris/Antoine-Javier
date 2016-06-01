<?php  get_header(); ?>

</header>

<section id="contenu-accueil">
    <article>
        <h1>Antoine & Javier</h1>
        <h2>Comédiens</h2>
    </article>
</section>



<div id="slide-accueil">

    <div id="cbp-fwslider" class="cbp-fwslider">
        <ul>
            <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/eximg10.jpg" alt=""/></a></li>
            <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/eximg10.jpg" alt=""/></a></li>
            <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/eximg10.jpg" alt=""/></a></li>
            <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/eximg10.jpg" alt=""/></a></li>
        </ul>
    </div>

</div>

<section id="articles">
    <h1>À ne pas rater</h1>

    <!-- Verifie si il y a des articles a afficher -->
    <?php query_posts('post_type=actu');
    while (have_posts()) : the_post();
        //Récupérer les catégories de chaque image
        $terms = get_the_terms($post->ID, 'categories');
        $terms_name = array();

        ?>
    <article class="article-boucle">
        <ul>
            <li><h2><?php the_title(); ?></h2></li>
            <li><?php the_post_thumbnail("image_actualite"); ?></a></li>
            <li class="meta-acc">Le <?php the_time('j F, Y'); ?> par <b><?php the_author(); ?></b> dans <?php the_category(', '); ?> | <?php the_views(); ?></li>
            <li><p><?php echo substr(strip_tags($post->post_content), 0, 340); ?>...</p></li>
            <li><a href="<?php the_permalink(); ?>">Lire la suite</a></li>

        </ul>


    </article>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>



</section>



<!-- //////  Options du slider d'images -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.cbpFWSlider.min.js"></script>
<script>
    $( function() {
        $( '#cbp-fwslider' ).cbpFWSlider();
        $( '#cbp-fwslider' ).cbpFWSlider('interval');
    } );
</script>
<!-- Fin Options du slider d'images -->

<div class="clearboth"></div>

</div>

<?php get_footer(); ?>
