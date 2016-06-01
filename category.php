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



    <!-- fiche -->
    <!-- Verifie si il y a des articles a afficher -->
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="blog-fiche">
        <div class="blog-fiche-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("liste_articles"); ?></a></div>
        <div class="blog-fiche-info">
            <h1><?php the_title(); ?></h1>
            <div class="meta">Publié le <?php the_time('j F, Y'); ?> par <b><?php the_author(); ?></b> dans <?php the_category(', '); ?> | <?php the_views(); ?></div>
            <ul>
                <li><?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?></li>
                <li><?php echo substr(strip_tags($post->post_content), 0, 140); ?>...</li>
                <li><a href="<?php the_permalink(); ?>">Lire la suite</a></li>
            </ul>
        </div>
    </article>
    <?php endwhile; else : ?>
        <!--Si il y en a pas on affiche un message d erreur. -->
        <p>Bonjour, désolé, mais la page désirée n'est pas accessible.</p>
    <?php endif; ?>
    <!-- Fin fiche -->


    <div id="pagination"><?php if(function_exists('wp_simple_pagination')) {
            wp_simple_pagination();
        } ?> </div>


    <div class="clearboth"></div>




</section>

<aside id="sidebar">

    <?php dynamic_sidebar("categories"); ?>

    <!-- widget -->
    <section class="widget">
        <h1><?php the_title(); ?></h1>
        <!--Affiche le dernier post -->
        <?php query_posts('order=desc&showposts=1'); ?>
        <?php while (have_posts()) : the_post(); ?>
        <ul>
            <li class="meta">Publié le <?php the_time('j F, Y'); ?>  par <b><?php the_author(); ?></b> dans <?php the_category(', '); ?></li>
            <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("liste_articles"); ?></a></li>
            <li><?php echo substr(strip_tags($post->post_content), 0, 80); ?>...<br /><a href="<?php the_permalink(); ?>">Lire la suite</a></li>
        </ul>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </section>
    <!-- Fin widget -->






</aside>




<div class="clearboth"></div>




</div>

<?php get_footer(); ?>
