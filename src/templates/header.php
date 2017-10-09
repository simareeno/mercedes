<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
<title>

<?php if (is_front_page()) {
  echo 'Запчасти Мерседес бенц купить бу. Каталог запчастей, цены. Мастермерс';
} elseif (is_category()) {

  $category = get_category( get_query_var( 'cat' ) );
  $catgoryID = $category->cat_ID;
  $child = get_category($catgoryID);
  $parent = $child->parent;
  $parent_name = get_category($parent);
  $parent_name = $parent_name->name;

  if ($parent_name == 'Запчасти') :
    echo 'Запчасти для Mercedes ';
    echo single_cat_title();
    echo ' купить бу. Каталог запчастей, цены. Мастермерс';
  else :
    echo single_cat_title();
    echo ' для Мерседес бенц ';
    echo $parent_name;
    echo ' купить бу. Каталог запчастей, цены. Мастермерс';
  endif;

} else {
  echo wp_title("",true);
  echo '. Мастермерс';
}

?>

</title>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="description" content="<?php if(get_post_meta($post->ID, "description", true) !='' ) echo get_post_meta($post->ID, "description", true); else bloginfo('description');?>" />
<meta name="keywords" content="<?php if(get_post_meta($post->ID, "keywords", true) != '') echo get_post_meta($post->ID, "keywords", true); else echo strtolower(get_bloginfo('name'));?>" />
<link rel="apple-touch-icon" sizes="57x57" href="/resources/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/resources/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/resources/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/resources/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/resources/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/resources/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/resources/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/resources/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/resources/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/resources/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/resources/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/resources/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/resources/images/favicon/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/resources/images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="/resources/styles/style.css">
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter46187913 = new Ya.Metrika({ id:46187913, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46187913" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>
