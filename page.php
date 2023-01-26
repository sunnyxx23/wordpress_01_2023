<!DOCTYPE html>
<html>
 <head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   <title><?php bloginfo( 'name' ); ?><?php wp_title( '&mdash;' ); ?></title>
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
  page.php
 <footer>
   <?php wp_footer(); ?>
 </footer>
 </body>
</html>