<?php /* Template Name: Contact */ ?>

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
 <?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		$title = get_the_title();
        $text = CFS()->get( 'text' );
        $img = CFS()->get( 'my_file' );

	} // end while
} // end if
?>

<h3><?php echo $title; ?></h3>
<p><?php echo $text; ?></p>
 <footer>
   <?php wp_footer(); ?>
 </footer>
 </body>
</html>
