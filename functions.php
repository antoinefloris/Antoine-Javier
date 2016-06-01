<?php
// Activation du menu
add_theme_support('nav_menus');
// c'est le code qui permet d'activer les nouveaux menus du thème
register_nav_menu('primary','Football');
// Le premier paramettre primary sera l'identifiant interne,
// le second, le menu principal, sera le libelle qui sera administration



// Va permettre de générer tous les widgets
// sidebar defaut

if (function_exists('register_sidebar'))
    register_sidebar(array('name'=>'defaut',
        'before_widget'=>'<section class="widget">',
        'after_widget'=>'</section>',
        'before_title'=>'<h1>',
        'after_title'=>'</h1>',
    ));

// sidebar categories

if (function_exists('register_sidebar'))
    register_sidebar(array('name'=>'categories',
        'before_widget'=>'<section class="widget">',
        'after_widget'=>'</section>',
        'before_title'=>'<h1>',
        'after_title'=>'</h1>',
    ));

// taille d'images

add_theme_support('post-thumbnails');
add_image_size('liste_articles', 270,auto, true);
add_image_size('articles_simulaires', 220,auto, true);
add_image_size('image_galerie', 495,auto, true);
add_image_size('image_actualite', 980,auto, true);
add_image_size('liste_even', 250,auto, true);

// afficher images supplementaire pour les articles et les pages

if( class_exists( 'kdMultipleFeaturedImages' ) ) {

    $args = array(
        'id' => 'featured-image-1',
        'post_type' => 'post',      // Set this to post or page
        'labels' => array(
            'name'      => 'Image N°1',
            'set'       => 'Ajouter image',
            'remove'    => 'Supprimer image',
            'use'       => 'Utiliser image',
        )
    );

    new kdMultipleFeaturedImages( $args );
}

if( class_exists( 'kdMultipleFeaturedImages' ) ) {

    $args = array(
        'id' => 'featured-image-2',
        'post_type' => 'post',      // Set this to post or page
        'labels' => array(
            'name'      => 'Image N°2',
            'set'       => 'Ajouter image',
            'remove'    => 'Supprimer image',
            'use'       => 'Utiliser image',
        )
    );

    new kdMultipleFeaturedImages( $args );
}

if( class_exists( 'kdMultipleFeaturedImages' ) ) {

    $args = array(
        'id' => 'featured-image-3',
        'post_type' => 'post',      // Set this to post or page
        'labels' => array(
            'name'      => 'Image N°3',
            'set'       => 'Ajouter image',
            'remove'    => 'Supprimer image',
            'use'       => 'Utiliser image',
        )
    );

    new kdMultipleFeaturedImages( $args );
}



// Mes images dans la sections images

add_action('init' , 'images_init');
function images_init()
{
    $labels = array(
        'name' => 'Images',
        'singular_name' => 'Image',
        'add_new' => 'Ajouter une images',
        'add_new_item' => 'Ajouter une nouvelle images',
        'edit_item' => 'Modifier une image',
        'new_item' => 'Nouvelle image',
        'view_item' => 'Voir l image',
        'search_items' => 'Rechercher une image',
        'not_found' => 'Aucune images trouvé',
        'not_found_in_trash' => 'Aucune images trouvé dans la corbeille',
        'menu_name' => 'Galerie'

    );

    $args = array (
        'labels' => $labels,
        'public' => true, // si il y a plusieurs utilisateurs si il peuvent rajouter une images
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true, // permet de faire des requetes affichages de contenu
        'rewrite' => true,
        'capability_type' => 'post', // on donne les meme autorisation que les articles
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title','thumbnail', 'custom_fields') // ce que l'on va pouvoir faire dans la section images

    );

    register_post_type('images',$args);
}

add_action ('init', 'create_taxonomy', 0);
function create_taxonomy()
{

        $labels = array(
            'name' => 'Catégories image',
            'singular_name' => 'Catégorie image',
            'search_items' => 'Rechercher une catégorie',
            'all_items' => 'Toutes les catégories',
            'edit_item' => 'Editer une catégorie',
            'update_item' => 'Modifier une catégorie',
            'add_new_item' => 'Ajouter une catégorie',
            'new_item_name' => 'Nouvelle catégorie',
            'menu_name' => 'Catégorie'

        );

        register_taxonomy('categories', array('images'), array ( // donne la possibilité de mettre des categories
            'hierarchical' => true, // donne la possibilité de mettre des nouvelles categories
            'labels' => $labels,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'categories')  // Permet de faire des url avec nos catégories


    ));
}


// Mes actualités à la une

add_action('init' , 'actu_init');
function actu_init()
{
    $labels = array(
        'name' => 'Actualites',
        'singular_name' => 'Actualite',
        'add_new' => 'Ajouter une actualités',
        'add_new_item' => 'Ajouter une nouvelle actualité',
        'edit_item' => 'Modifier une actualité',
        'new_item' => 'Nouvelle actualité',
        'view_item' => 'Voir l actualité',
        'search_items' => 'Rechercher une actualité',
        'not_found' => 'Aucune actualités trouvé',
        'not_found_in_trash' => 'Aucune actualités trouvé dans la corbeille',
        'menu_name' => 'Actualités'

    );

    $args = array (
        'labels' => $labels,
        'public' => true, // si il y a plusieurs utilisateurs si il peuvent rajouter une actualité
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true, // permet de faire des requetes affichages de contenu
        'rewrite' => true,
        'capability_type' => 'post', // on donne les meme autorisation que les articles
        'hierarchical' => false,
        'menu_position' => 4,
        'supports' => array('title', 'editor', 'thumbnail', 'custom_fields', 'comments', ) // ce que l'on va pouvoir faire dans la section actualités

    );

    register_post_type('actu',$args);
}


// Mes évenements


add_action('init', 'even_init');
function even_init()
{
    $labels = array(
        'name' => 'Evenement',
        'singular_name' => 'Événement',
        'add_new' => 'Ajouter une Événements',
        'add_new_item' => 'Ajouter un nouvel événement',
        'edit_item' => 'Modifier un événement',
        'new_item' => 'Nouvelle événement',
        'view_item' => 'Voir l événement',
        'search_items' => 'Rechercher un événement',
        'not_found' => 'Aucun événements trouvé',
        'not_found_in_trash' => 'Aucun événements trouvé dans la corbeille',
        'menu_name' => 'Événements'

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 2,
        'supports' => array('title','editor','thumbnail','custom-fields','comments')

    );
    register_post_type('even',$args);
}

// affichage pour les évenements
function iti_custom_posts_per_page($query)
{
    switch ($query->query_vars['post_type'])
    {
        case 'images': // Nom du post type
            $query->query_vars['posts_per_page'] = 10;
            break;
    }
    return $query;
}

if(!is_admin())
{
    add_filter('pre_get_posts','iti_custom_posts_per_page');
}


function iti_custom_posts_per_even($query)
{
    switch ($query->query_vars['post_type'])
    {
        case 'even': // Nom du post type
            $query->query_vars['posts_per_page'] = 10;
            break;
    }
    return $query;
}

if(!is_admin())
{
    add_filter('pre_get_posts','iti_custom_posts_per_even');
}

?>