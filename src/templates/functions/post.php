<?php

function dev_edit_admin_menus() {
    global $menu;
    global $submenu;

    $menu[5][0] = 'Запчасти'; // Change Posts to Houses
    $submenu['edit.php'][5][0] = 'Запчасть';
    $submenu['edit.php'][10][0] = 'Добавить запчасть';
    // $submenu['edit.php'][16][0] = 'House Tags';
}

function dev_change_post_object() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Запчасть';
    $labels->singular_name = 'Запчасть';
    $labels->add_new = 'Добавить запчасть';
    $labels->add_new_item = 'Добавить запчасть';
    $labels->edit_item = 'Изменить запчасть';
    $labels->new_item = 'Запчасть';
    $labels->view_item = 'Посмотреть запчасть';
    $labels->search_items = 'Найти запчасть';
    $labels->not_found = 'Запчасти не найдены';
    $labels->not_found_in_trash = 'Нет запчастей в корзине';
    $labels->all_items = 'Все запчасти';
    $labels->menu_name = 'Запчасти';
    $labels->name_admin_bar = 'Запчасть';
}

add_action( 'admin_menu', 'dev_edit_admin_menus' );
add_action( 'init', 'dev_change_post_object' );

?>
