<?php get_header(); ?>
 </header>
    <div id="arianne"><?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        } ?></div>
    <section id="contenu">
        <article>
            <h1><span class="jaune">Présentation</span> de l'agence.</h1>
            <h2>Vous avez un projet ?</h2>

        </article>

        <div id="slide-tp">
            <div id="cbp-fwslider" class="cbp-fwslider">
                <ul>
                    <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/eximgslide.jpg" alt=""/></a></li>
                    <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/eximgslide.jpg" alt=""/></a></li>
                    <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/eximgslide.jpg" alt=""/></a></li>
                    <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/eximgslide.jpg" alt=""/></a></li>
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





    </section>

    <aside id="sidebar">
        <!-- widget -->
        <section class="widget">
            <h1>En ce moment...</h1>
            <ul>
                <li class="meta">Publié le 12 mars 2014 par <b>Team8</b> dans <a href="#">Photo du mois</a> | 212 vues</li>
                <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/eximgsidebar1.jpg"></a></li>
                <li>Quisque magna magna, lacinia vel auctor quis, dapibus in enim... <br /><a href="#">Lire la suite</a></li>
            </ul>
        </section>
        <!-- Fin widget -->


    </aside>




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