<?php
/*
Template Name: Images
 */
?>


<?php get_header(); ?>

</header>

    <div id="arianne"><?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
        } ?></div>
<section id="contenu-accueil">

    <nav class="primary clearfix">
        <ul>
            <li><a href="#" class="selected" data-filter="*">All</a></li>
            <?php $categories = get_terms("categories",array("order" => "DESC"));
            foreach($categories as $cat) { ?>
            <li><a href="#" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a></li>
            <?php } ?>

        </ul>
    </nav>
    <div class="clearboth"></div>

    <section class="main">

<div class="portfolio">

    <?php query_posts('post_type=images');
    while (have_posts()) : the_post();
    //Récupérer les catégories de chaque image
    $terms = get_the_terms($post->ID, 'categories');
    $terms_name = array();
    foreach($terms as $term) { $terms_name[] = $term->name; }
    ?>

        <article class="entry <?php echo $term->slug; ?>">
                <?php the_post_thumbnail('image_categorie'); ?>
                <span class="magnifier"></span>

        </article>


    <?php endwhile; ?>
    <?php wp_reset_query(); ?>



    <script>
        var $container = $('.portfolio');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });

        $('nav.primary ul a').click(function(){
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });
            return false;
        });

        var $optionSets = $('nav.primary ul'),
            $optionLinks = $optionSets.find('a');

        $optionLinks.click(function(){
            var $this = $(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
                return false;
            }
            var $optionSet = $this.parents('nav.primary ul');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
        });

    </script>
</div>

</section>


    </section>



<div class="clearboth"></div>



</div>

<?php get_footer(); ?>