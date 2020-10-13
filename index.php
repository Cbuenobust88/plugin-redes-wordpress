<?php

/*
Plugin Name: Redes Sociales - Masciem
Plugin URI: http://www.carlosbuenobustios.com
Description: Short Code para incluir barra de redes sociales en WordPress
Author: Carlos Bueno
Version: 1.0
Author URI: http://www.masciem.com
*/

function social_masciem($atts) {

    $args = shortcode_atts(array(
        'facebook' => 'http://www.facebook.com',
        'twitter' => 'http://www.twitter.com',
        'google' => 'http://plus.google.com'
    ), $atts);     
    
    $uf = $args["facebook"];
    $ut = $args["twitter"];
    $ug = $args["google"];
    

    $facebook = "<a href='".$uf."'>Facebook</a>";
    $twitter = "<a href='".$ut."'>Twitter</a>";
    $google = "<a href='".$ug."'>Google</a>";

    
    $redes = $facebook . " " . $twitter . " " . $google;
    return $redes;
}

add_shortcode("social_masciem", "social_masciem");

?>