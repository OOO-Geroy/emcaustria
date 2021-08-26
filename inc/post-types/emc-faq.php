<?
add_action('init', 'emc_faq_init');
function emc_faq_init(){
	register_post_type('emc_faq', array(
		'labels'             => array(
			'name'               => 'FAQ List',
			'singular_name'      => 'FAQ List',
			'add_new'            => 'Add new',
			'add_new_item'       => 'Add new FAQ list',
			'edit_item'          => 'Edit FAQ list',
			'new_item'           => 'New FAQ List',
			'view_item'          => 'View FAQ List',
			'search_items'       => 'Find FAQ List',
			'not_found'          => 'Nothing found',
			'not_found_in_trash' => 'Nothing found',
			'parent_item_colon'  => '',
			'menu_name'          => 'FAQ Lists'

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