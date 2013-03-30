<?php
/*
 * Plugin Name: Most Confusing
 * Plugin URI: trepmal.com
 * Description: Make WordPress more confusing
 * Version: 2013.03.29
 * Author: Kailey Lampert
 * Author URI: kaileylampert.com
 * License: GPLv2 or later
 * TextDomain:
 * DomainPath:
 * Network: false
 */

add_filter( 'gettext', 'most_confusing', 99 );
function most_confusing( $t ) {
	return "$t??";
}
//eof