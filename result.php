<?php
header( 'Cache-Control: no-store, no-cache, must-revalidate' );
header( 'Expires: Sun, 1 Jan 2099 12:00:00 GMT' );
header( 'Last-Modified: ' . gmdate('D, d M Y H:i:s') . 'GMT' );

$post_hash = md5( json_encode( $_POST ) );

if( session_start() ) {
  $post_resubmitted = isset( $_SESSION[ 'post_hash' ] ) && $_SESSION[ 'post_hash' ] == $post_hash;
  $_SESSION[ 'post_hash' ] = $post_hash;
  session_write_close();
 } 
else {
  $post_resubmitted = false;
 }

if ( $post_resubmitted ) {
  include('deny.php');
 }
 else {
  include('post.php');
 }
?>
