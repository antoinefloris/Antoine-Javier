<?php
/*
Template Name: Event
 */
?>

<?php get_header(); ?>
    </header>
    <div id="arianne"><?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        } ?></div>

    <section id="contenu">
    <article>
        <h1>Actualités du théatre.</h1>
        <h2>En ce moment à nos spectacles...</h2>

    </article>

    <!-- Verifie si il y a des articles a afficher -->
<?php query_posts('post_type=even');
while (have_posts()) : the_post(); ?>
    <article class="even-fiche">
        <div class="even-fiche-info">
            <h1><?php the_title(); ?></h1>
            <div class="even-fiche-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("liste_even"); ?></a></div>
            <div class="meta">Publié le <?php the_time('j F, Y'); ?> </b>
            <ul>
                <li><?php echo substr(strip_tags($post->post_content), 0, 0); ?></li>
                <li><a href="<?php the_permalink(); ?>">Plus d'information</a></li>
            </ul>
        </div>
    </article>
<?php endwhile; ?>
<?php wp_reset_query(); ?>

</div>

    </section>

    <div class="clearboth"></div>







<?php get_footer(); ?>