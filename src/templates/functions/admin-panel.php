<?php

function remove_menus(){
    remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page( 'jetpack' );                    //Jetpack*
    // remove_menu_page( 'edit.php' );                   //Posts
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
// add_action( 'admin_menu', 'remove_acf_menu', 999);
add_action('admin_bar_menu', 'remove_wp_logo', 999);


function loginRedirect( $redirect_to, $request, $user ){
    if( is_array( $user->roles ) ) {
        return "/wp-admin/edit.php";
    }
}

add_filter("login_redirect", "loginRedirect", 10, 3);

function my_login_logo() { ?>
    <style type="text/css">
			#login h1 a, .login h1 a {
					background-image: url(/resources/images/logo@3x.png);
					width:320px;
					background-size: 320px;
					background-repeat: no-repeat;
				}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

update_option('image_default_link_type','none');

?>
