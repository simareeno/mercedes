<?php

function create_my_taxonomies() {
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
	$serviceLabels = array(
		'name' => 'Услуги',
		'singular_name' => 'Услугу', // админ панель Добавить->Функцию
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

	$serviceArgs = array(
		'label'               => __( 'services' ),
		'labels'              => $serviceLabels,
		'supports'            => array( 'title', 'excerpt' ),
		'menu_icon' => 'dashicons-admin-tools',
		'hierarchical'        => true,
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

	register_post_type( 'service', $serviceArgs );
}

add_action( 'init', 'custom_post_type', 0 );
add_action( 'init', 'create_my_taxonomies', 0 );

?>
