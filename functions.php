<?php

// Puts link in excerpts more tag
function new_excerpt_more($more) {
       global $post;
	return '<div class="right"><a class="readmore" href="'. get_permalink($post->ID) . '">Read the full article &raquo;</a></div><br/>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//thumbnail image
add_theme_support( 'post-thumbnails');
set_post_thumbnail_size(300, 160);
add_image_size( 'home-thumb', 300, 160, true);

// Unset image size
function sgr_filter_image_sizes( $sizes) {
		
	unset( $sizes['thumbnail']);
	unset( $sizes['medium']);
	unset( $sizes['large']);
	
	return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'sgr_filter_image_sizes');

// Memanggil fungsi menu agar template support custom menu
register_nav_menu('Primary', 'Primary Menu');

// Iklan diantara post
add_filter('the_content', 'mte_add_incontent_ad');
function mte_add_incontent_ad($content)
{	if(is_single()){
		$content_block = explode('<p>',$content);
		if(!empty($content_block[3]))
		{
			$content_block[3] .=
				'<script>
				/** yusyaif.com **/
				var sitti_pub_id = "BC0021074";
				var sitti_ad_width = "610";
				var sitti_ad_height = "60";
				var sitti_ad_type = "5";
				var sitti_ad_number = "1";
				var sitti_ad_name = "yusyaif.com";
				var sitti_dep_id = "76063";
				</script>
				<script src="http://stat.sittiad.com/delivery/sittiad.b1.js"></script> ';
		}
		for($i=1;$i<count($content_block);$i++)
		{	$content_block[$i] = '<p>'.$content_block[$i];
		}
		$content = implode('',$content_block);
	}
	return $content;	
}

#######################################################################################################################
// function to count views.
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 view";
    }
    return $count.' views';
}

// Add it to a column in WP-Admin
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('Views');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
	if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}

#######################################################################################################################################################################################################################################################################
function paginate() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
 
	$pagination = array(
		'base' => @add_query_arg('page','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'show_all' => true,
		'type' => 'list',
		'next_text' => '&raquo;',
		'prev_text' => '&laquo;'
		);
 
	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
 
	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
 
	echo paginate_links( $pagination );
}

#######################################################################################################################################################################################################################################################################

/*
Plugin Name: wp-days-ago
Version: 2.0.2
Plugin URI: http://www.vegard.net/archives/3781/
Author: Vegard Skjefstad
Author URI: http://www.vegard.net/
Description: Displays the number of years and days since a post or page was written. 

Copyright 2008-2011 Vegard Skjefstad vegard@vegard.net

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function wp_days_ago ($mode = 0, $prepend = "", $append = "",
		$texts = array("Today", "Yesterday", "One week ago", "days ago", "year",
			"years", "ago", "day ago", "days ago", "Just now", "One minute ago", "minutes ago", "1 hour ago", "hours ago", "Some time in the future")) {

		$days = round((strtotime(date("Y-m-d", gmmktime() + (get_option('gmt_offset') * 3600))) - strtotime(date("Y-m-d", get_the_time("U")))) / 86400);

		$minutes = round((strtotime(date("Y-m-d H:i", gmmktime() + (get_option('gmt_offset') * 3600))) - strtotime(date("Y-m-d H:i", get_the_time("U")))) / 60);
		
		$output = $prepend;
				
		if($minutes < 0) {
			$output .= $texts[14];
		} else if($mode == 0 && $minutes < 1440) {
			if($minutes == 0) {
				$output .= $texts[9];
			} else if($minutes == 1) {
				$output .= $texts[10];
			} else if($minutes < 60) {
				$output .= $minutes . " " . $texts[11];
			} else if($minutes < 120) {
				$output .= $texts[12];
			} else {
				$output .= floor($minutes / 60) . " " . $texts[13];
			}
		} else {
			if($days == 0)
				$output = $output . $texts[0];
			elseif($days == 1)
				$output = $output . $texts[1];
			elseif($days == 7)
				$output = $output . $texts[2];
			else {
				$years = floor($days / 365);
				if($years > 0) {
					if($years == 1)
						$yearappend = $texts[4];
					else
						$yearappend = $texts[5];

					$days = $days - (365 * $years);
					if($days == 0)
						$output = $output . $years . " " . $yearappend . " " . $texts[6];
					else if($days == 1)
						$output = $output . $years . " " . $yearappend . ", " . $days . " " . $texts[7];
					else
						$output = $output . $years . " " . $yearappend . ", " . $days . " " . $texts[8];
				} else {
					$output = $output . $days . " " . $texts[3];
				}
			}
		}

		$output = $output . $append;
		
		echo $output;
}

add_filter('Posts', 'wp_days_ago');
?>