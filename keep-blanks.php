<?php
/*
Plugin Name: Keep Blanks
Plugin URI: http://blog.programet.org/keep-blanks
Description: This plugin helps you to keep the blanks in TinyMCE. 
Version: 1.0
Author: LastLeaf
Author URI: http://blog.programet.org/lastleaf
License: GPLv3
*/

add_filter('tiny_mce_before_init', 'preserve_nbsp_chars');
function preserve_nbsp_chars($initArray) {
    $initArray['entities'] = '160,nbsp,'.$initArray['entities'];
    return $initArray;
}

?>