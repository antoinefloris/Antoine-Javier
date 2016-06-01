<?php
/*
Template Name: Equipes
 */
?>

<?php get_header(); ?>
 </header>


    <div id="arianne"><div id="arianne"><?php if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            } ?></div></div>


    <section id="contenu">

        <article>
            <h1>Présentation de l'équipe.</h1>
            <h2></h2>

        </article>

        <div id="equipe">
                <ul>
                    <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/portrait.png" alt=""/></li>
                    <li><h2>Antoine Calvo</h2></li>
                    <li><h3>5 decembre 1991</h3></li>
                    <li>Quisque magna magna, lacinia vel auctor quis, dapibus in enim Quisque magna magna, lacinia vel auctor quis, dapibus in enim</li>
                </ul>
                <ul>
                    <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/portrait.png" alt=""/></li>
                    <li><h2>Antoine Calvo</h2></li>
                    <li><h3>5 decembre 1991</h3></li>
                    <li>Quisque magna magna, lacinia vel auctor quis, dapibus in enim Quisque magna magna, lacinia vel auctor quis, dapibus in enim</li>
                </ul>
                <ul>
                    <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/portrait.png" alt=""/></li>
                    <li><h2>Antoine Calvo</h2></li>
                    <li><h3>5 decembre 1991</h3></li>
                    <li>Quisque magna magna, lacinia vel auctor quis, dapibus in enim Quisque magna magna, lacinia vel auctor quis, dapibus in enim</li>
                </ul>
        </div>


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