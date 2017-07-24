<?php

function create_my_taxonomies() {
    register_taxonomy(
        'product_categories',
        'catalog',
        array(
            'labels' => array(
                'name' => 'Категории',
                'add_new_item' => 'Добавить категорию',
                'new_item_name' => "Добавить новую категорию"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );

	register_taxonomy(
        'services_categories',
        'service',
        array(
            'labels' => array(
                'name' => 'Категории',
                'add_new_item' => 'Добавить категорию',
                'new_item_name' => "Добавить новую категорию"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}

function custom_post_type() {
	$productLabels = array(
		'name' => 'Запчасти',
		'singular_name' => 'Запчасть', // админ панель Добавить->Функцию
		'add_new' => 'Добавить запчасть',
		'add_new_item' => 'Добавить запчасть', // заголовок тега <title>
		'edit_item' => 'Редактировать запчасть',
		'new_item' => 'Новая запчасть',
		'all_items' => 'Все запчасти',
		'view_item' => 'Просмотр запчастей на сайте',
		'search_items' => 'Искать запчасти',
		'not_found' =>  'Запчастей не найдено.',
		'not_found_in_trash' => 'В запчастях нет настроек.',
		'menu_name' => 'Запчасти' // ссылка в меню в админке
	);

	$serviceLabels = array(
		'name' => 'Услуги',
		'singular_name' => 'Услуга', // админ панель Добавить->Функцию
		'add_new' => 'Добавить услугу',
		'add_new_item' => 'Добавить услугу', // заголовок тега <title>
		'edit_item' => 'Редактировать услугу',
		'new_item' => 'Новая услуга',
		'all_items' => 'Все услуги',
		'view_item' => 'Просмотр услуг на сайте',
		'search_items' => 'Искать услуги',
		'not_found' =>  'Услуг не найдено.',
		'not_found_in_trash' => 'В услугах нет настроек.',
		'menu_name' => 'Услуги сервиса' // ссылка в меню в админке
	);

	$productArgs = array(
		'label'               => __( 'products' ),
		'labels'              => $productLabels,
		'supports'            => array( 'title', 'excerpt' ),
		'menu_icon' => 'dashicons-admin-generic',
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 2,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	$serviceArgs = array(
		'label'               => __( 'services' ),
		'labels'              => $serviceLabels,
		'supports'            => array( 'title', 'excerpt' ),
		'menu_icon' => 'dashicons-admin-tools',
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 3,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	register_post_type( 'catalog', $productArgs );
	register_post_type( 'service', $serviceArgs );
}

add_action( 'init', 'custom_post_type', 0 );
add_action( 'init', 'create_my_taxonomies', 0 );

function remove_menus(){

  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack*
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  remove_menu_page( 'plugins.php' );                //Plugins
  remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  remove_menu_page( 'options-general.php' );        //Settings
  remove_menu_page('edit.php?post_type=acf');

}
add_action( 'admin_menu', 'remove_menus' );

add_filter('acf/settings/show_admin', '__return_false');

function remove_acf_menu() {
	remove_menu_page('edit.php?post_type=acf');
}

function remove_wp_logo( $wp_admin_bar ) {
	$wp_admin_bar->remove_node('wp-logo');
}


function mytheme_admin_bar_render() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}

add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );
add_action( 'admin_menu', 'remove_acf_menu', 999);
add_action('admin_bar_menu', 'remove_wp_logo', 999);


function loginRedirect( $redirect_to, $request, $user ){
    if( is_array( $user->roles ) ) {
        return "/wp-admin/edit.php?post_type=product";
    }
}

add_filter("login_redirect", "loginRedirect", 10, 3);

?>
