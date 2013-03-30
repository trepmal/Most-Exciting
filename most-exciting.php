<?php
/*
 * Plugin Name: Most Exciting
 * Plugin URI: trepmal.com
 * Description: Make WordPress more exciting
 * Version: 2013.03.29
 * Author: Kailey Lampert
 * Author URI: kaileylampert.com
 * License: GPLv2 or later
 * TextDomain:
 * DomainPath:
 * Network: false
 */

add_filter( 'gettext', 'most_exciting', 99 );
function most_exciting( $t ) {
	return "$t!!";
}
//eof