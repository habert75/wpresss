<?php
 /*
 Plugin Name:cool stuff
 Version: 0.1
 Description:this pluggin helps user move easyly to pages
 Author: Bertrand Habinshuti
 Author URI: http://www.habbert.com
 Plugin URI: http://www.habbert.com
 */
 
 /* Version check */
 global $wp_version;
 $exit_msg='WP Digg This requires WordPress 4.4.2 or newer.
 <a href="http://codex.wordpress.org/Upgrading_WordPress">Please
 update!</a>';
 
 if (version_compare($wp_version,"4.4.2","<"))
 {
 exit ($exit_msg);
 }
 ?>