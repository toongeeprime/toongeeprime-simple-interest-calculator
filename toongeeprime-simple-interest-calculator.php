<?php defined( 'ABSPATH' ) || exit;

/**
 * A simple interest calculator.
 *
 * @package		toongeeprime-simple-interest-calculator
 * @link		https://github.com/toongeeprime/toongeeprime-simple-interest-calculator
 * @author		ToongeePrime <toongeeprime@gmail.com>
 * @copyright		2022
 * @license		GPL v2 or later
 *
 * Plugin Name:		ToongeePrime Simple Interest Calculator
 * Description:		A simple interest calculator.
 * Version:		1.0
 * Plugin URI:		https://github.com/toongeeprime/toongeeprime-simple-interest-calculator
 * Author:		ToongeePrime
 * Author URI:		https://github.com/toongeeprime/
 * Text Domain:		toongeeprime-simple-interest-calculator
 * Domain Path:		/languages/
 * Requires PHP:	7.0
 * Requires at least:	5.5
 * Tested up to:	5.9
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

require_once plugin_dir_path( __FILE__ ) . 'calculator.php';



/**
 *	Add Calculator stylesheet file to the queue
 */
add_action( 'wp_enqueue_scripts', 'toongeePrime_SI_calc_css_enqueue' );
function toongeePrime_SI_calc_css_enqueue() {

    $dir	=	plugin_dir_url( __FILE__ );
    wp_enqueue_style( 'primeCalc_css', $dir . 'calculator-css.css' );

}


/**
 *	Add Calculator script file to footer
 */
add_action( 'wp_footer', 'toongeePrime_SI_calc_js_enqueue' );
function toongeePrime_SI_calc_js_enqueue() {

    $dir	=	plugin_dir_url( __FILE__ );
    wp_enqueue_script( 'primeCalc_js', $dir . 'calculator-js.js' );

}

