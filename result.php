<?php
/* 
    This file is part of PHPCaptcha.

    PHPCaptcha is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    PHPCaptcha is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with PHPCaptcha.  If not, see <https://www.gnu.org/licenses/>.
*/

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
