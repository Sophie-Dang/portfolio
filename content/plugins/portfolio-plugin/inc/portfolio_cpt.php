<?php

class Portfolio_cpt
{
    function __construct()
    {
        add_action('init', [$this, 'project_cpt']);
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

    /*----------------------PLUG ACTIV/DEACTIV---------------------------*/
    public function portfolio_cpt_activate()
    {
        $this->project_cpt();

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