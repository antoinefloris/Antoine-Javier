<?php get_header(); ?>
 </header>
    <div id="arianne"><?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        } ?></div>





        <!--commande qui verifie si il y a des pages a affiché. -->
        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; else : ?>
            <!--Si il y en a pas on affiche un message d erreur. -->
            <p>Bonjour, désolé, mais la page désirée n'est pas accessible.</p>
        <?php endif; ?>






    <aside id="sidebar">

        <!-- boucle le widget -->



    </aside>




    <div class="clearboth"></div>




    </div>



<?php get_footer(); ?>