<?php 
/*
 Plugin Name: Recent Posts
Plugin URI: http://mtdewvirus.com/code/wordpress-plugins/
Description: Returns a list of the most recent posts.
Version: 1.07
Author: Nick Momrik
Author URI: http://mtdewvirus.com/
*/

function mdv_recent_posts($no_posts = 10, $before = '<li>', $after = '</li>', $hide_pass_post = true, $skip_posts = 0, $show_excerpts = false) {
	global $wpdb;
	$time_difference = get_settings('gmt_offset');
	$now = gmdate("Y-m-d H:i:s",time());
	$request = "SELECT ID, post_title, post_excerpt FROM $wpdb->posts WHERE post_status = 'publish' ";
	if($hide_pass_post) $request .= "AND post_password ='' ";
	$request .= "AND post_date_gmt < '$now' ORDER BY post_date DESC LIMIT $skip_posts, $no_posts";
	$posts = $wpdb->get_results($request);
	$output = '';
	if($posts) {
		foreach ($posts as $post) {
			$post_title = stripslashes($post->post_title);
			$permalink = get_permalink($post->ID);
			$output .= $before . '<a href="' . $permalink . '" rel="bookmark" title="Permanent Link: ' . htmlspecialchars($post_title, ENT_COMPAT) . '">' . htmlspecialchars($post_title) . '</a>';
			if($show_excerpts) {
				$post_excerpt = stripslashes($post->post_excerpt);
				$output.= '<br />' . $post_excerpt;
			}
			$output .= $after;
		}
	} else {
		$output .= $before . "None found" . $after;
	}
	echo $output;
}
?>