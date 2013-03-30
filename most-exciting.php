<?php
/*
 * Plugin Name: Most Loco
 * Plugin URI: zao.is
 * Description: Make WordPress more burrito loco!
 * Version: 2013.03.29
 * Author: JustinSainton
 * Author URI: zao.is
 * License: GPLv2 or later
 * TextDomain:
 * DomainPath:
 * Network: false
 */

add_filter( 'gettext', 'most_loco', 99 );
function most_loco( $t ) {
	return "¡$t?";
}
//eof
