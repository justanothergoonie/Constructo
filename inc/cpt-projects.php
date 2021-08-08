<?php
// Register Custom Post Type
function constructo_cpt_projects()
{

    $labels = array(
        'name'                  => _x('Projects', 'Post Type General Name', 'constructo'),
        'singular_name'         => _x('Project', 'Post Type Singular Name', 'constructo'),
        'menu_name'             => __('Projects', 'constructo'),
        'name_admin_bar'        => __('Projects', 'constructo'),
        'archives'              => __('Item Archives', 'constructo'),
        'attributes'            => __('Item Attributes', 'constructo'),
        'parent_item_colon'     => __('Parent Item:', 'constructo'),
        'all_items'             => __('All Items', 'constructo'),
        'add_new_item'          => __('Add New Item', 'constructo'),
        'add_new'               => __('Add New', 'constructo'),
        'new_item'              => __('New Item', 'constructo'),
        'edit_item'             => __('Edit Item', 'constructo'),
        'update_item'           => __('Update Item', 'constructo'),
        'view_item'             => __('View Item', 'constructo'),
        'view_items'            => __('View Items', 'constructo'),
        'search_items'          => __('Search Item', 'constructo'),
        'not_found'             => __('Not found', 'constructo'),
        'not_found_in_trash'    => __('Not found in Trash', 'constructo'),
        'featured_image'        => __('Featured Image', 'constructo'),
        'set_featured_image'    => __('Set featured image', 'constructo'),
        'remove_featured_image' => __('Remove featured image', 'constructo'),
        'use_featured_image'    => __('Use as featured image', 'constructo'),
        'insert_into_item'      => __('Insert into item', 'constructo'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'constructo'),
        'items_list'            => __('Items list', 'constructo'),
        'items_list_navigation' => __('Items list navigation', 'constructo'),
        'filter_items_list'     => __('Filter items list', 'constructo'),
    );
    $args = array(
        'label'                 => __('Project', 'constructo'),
        'description'           => __('Past projects we have worked on', 'constructo'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-art',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type('projects', $args);
}
add_action('init', 'constructo_cpt_projects', 0);