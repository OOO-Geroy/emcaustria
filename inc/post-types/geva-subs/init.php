<?
add_action('init', 'geva_subs_init');
function geva_subs_init(){
	register_post_type('geva_sub', array(
		'labels'             => array(
			'name'               => 'GEVA Subscriptions',
			'singular_name'      => 'GEVA Subscriptions',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new Subscription',
			'edit_item'          => 'Edit Subscription',
			'new_item'           => 'New Subscription',
			'view_item'          => 'View Subscription',
			'search_items'       => 'Find Subscription',
			'not_found'          => 'Nothing found',
			'not_found_in_trash' => 'Nothing found',
			'parent_item_colon'  => '',
			'menu_name'          => 'GEVA Subscriptions'

		  ),
		'public'             => true,
		'publicly_queryable' => false,
        'exclude_from_search' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'author', 'custom-fields')
	) );
}