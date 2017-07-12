<?php
/**
* Une page de maintenance personnalisée.
*/
$protocol = "HTTP/1.0";
if ( "HTTP/1.1" == $_SERVER["SERVER_PROTOCOL"] )
  $protocol = "HTTP/1.1";
header( "$protocol 503 Service Unavailable", true, 503 );
header( "Retry-After: 3600" );
get_header(); ?>

<div id="inner-content" class=" wrap cf">

  <main id="main" class=" col-xs-12 col-sm-6 col-md-9 col-lg-9 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
<h1><?php _e('the website in maintenance mode ');?></h1>


</main>
  </div><!-- inner content -->

</div><!-- site-content -->

<?php get_footer(); ?>
<?php die(); ?>
