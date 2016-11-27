<?php
/**
 * Plugin Name
 *
 * @package     ImageExpander
 * @author      Kristoffer Lorentsen
 * @copyright   2016 Lorentsen Utvikling
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Image Expander
 * Plugin URI:  https://github.com/krilor/imgexpand
 * Description: Responsive image explander made for the future.
 * Version:     1.0.0
 * Author:      Kristoffer Lorentsen
 * Author URI:  https://www.lorut.no
 * Text Domain: imgexpand
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * imgexpand_resources
 *
 * Adds inline CSS and JS to facilitate image expansion
 */
function imgexpand_resources() {

  if( !is_admin() ) {
    wp_enqueue_style( 'imgextend-css', plugin_dir_url( __FILE__ ) . 'imgextend.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'imgextend-js', plugin_dir_url( __FILE__ ) . 'imgextend.js', array(), '1.0.0', true );
  }

}
add_action( 'wp_enqueue_scripts', 'imgexpand_resources' );

 ?>
