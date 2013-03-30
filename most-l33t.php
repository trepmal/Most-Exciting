<?php
/*
 * Plugin Name: Most l33t
 * Plugin URI: trepmal.com
 * Description: Make WordPress more l33t
 * Version: 2013.03.29
 * Author: Kailey Lampert
 * Author URI: kaileylampert.com
 * License: GPLv2 or later
 * TextDomain:
 * DomainPath:
 * Network: false
 */

add_filter( 'gettext', 'most_l33t', 99 );
function most_l33t( $t ) {
	return strtolower( str_replace( array( 'a', 'e', 'i', 'o'), array( '4', '3', '1', '0'), $t ) );
}
//eof