<?php

class Portfolio_cpt
{
    function __construct()
    {
        add_action('init', [$this, 'project_cpt']);
        add_action('init', [$this, 'project_register_taxonomy']);
    }

    function project_cpt()
    {
        $labels = [
            'name'               => 'Projets',
            'singular_name'      => 'projet',
            'menu_name'          => 'Projets',
            'name_admin_bar'     => 'Projet',
            'add_new'            => 'Ajouter un projet',
            'add_new_item'       => 'Ajouter un nouveau projet',
            'new_item'           => 'Nouveau projet',
            'edit_item'          => 'Editer un projet',
            'view_item'          => 'Voir le projet',
            'all_items'          => 'Voir tous les projets',
            'search_items'       => 'Rechercher un projet',
            'not_found'          => 'Aucun projet trouvé',
            'not_found_in_trash' => 'Aucun projet trouvé dans la corbeille',
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'label' => 'Projets',
            'menu_position' => 3,
            // https://developer.wordpress.org/resource/dashicons
            'menu_icon' => 'dashicons-paperclip',
            'hierarchical' => false,
            'has_archive' => true,
            'rewrite' => [
                'slug' => 'mes-projets'
            ],
            'supports' => [
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'custom-fields',
                'author'
            ],
            'show_in_rest' => true
            
        ];

        register_post_type('project', $args);
    }

    function project_register_taxonomy()
    {
        $labels=[
            'name'                       => 'Technos',
            'singular_name'              => 'Techno',
            'menu_name'                  => 'Technos',
            'all_items'                  => 'Tous les technos',
            'new_item_name'              => 'Nouvelle techno',
            'add_new_item'               => 'Ajouter une techno',
            'update_item'                => 'Mettre à jour une techno',
            'edit_item'                  => 'Editer une techno',
            'view_item'                  => 'Voir toutes les technos',
            'separate_items_with_commas' => 'Séparer les techno avec une virgule',
            'add_or_remove_items'        => 'Ajouter ou supprimer une techno',
            'choose_from_most_used'      => 'Choisir parmis les technos les plus utilisées',
            'popular_items'              => 'technos populaires',
            'search_items'               => 'Rechercher une techno',
            'not_found'                  => 'Aucune techno trouvée',
            'items_list'                 => 'Lister les technos',
            'items_list_navigation'      => 'Lister les technos',
            ];


            $args = [
                'labels' => $labels,
                'public' => true,
                'hierarchical' => true,
                'show_admin_column' => true,
                'rewrite' => [
                    'slug' => 'technos'
                ],
                'show_in_rest' => true    
            ];
               
            register_taxonomy( 'technos',
            'project', $args);   
    }

    /*----------------------PLUG ACTIV/DEACTIV---------------------------*/
    public function portfolio_cpt_activate()
    {
        $this->project_cpt();
        $this->project_register_taxonomy();

        flush_rewrite_rules();
    }
    public function portfolio_cpt_deactivate()
    {
        // à la désactivation du plugin...
        flush_rewrite_rules();
    }
}

$portfolio_cpt = new Portfolio_cpt();
register_activation_hook(__FILE__, [$portfolio_cpt, 'portfolio_cpt_activate']);
register_deactivation_hook(__FILE__, [$portfolio_cpt, 'portfolio_cpt_deactivate']);