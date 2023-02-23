<?php
$post = $wp_query->post;
if ( in_category('servicios') ) {
include(TEMPLATEPATH . '/single-servicios.php'); } 

elseif ( in_category('trabajos') ) {
include(TEMPLATEPATH . '/departamentous.php'); }

else {
include(TEMPLATEPATH . '/single-generico.php');
}
?>