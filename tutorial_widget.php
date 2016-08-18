<?php
/**
 * Plugin Name:BizzyWeb Documentation Links Widget
 * Plugin URI: http://BizzyWeb.com
 * Description: This plugin adds a custom widget to the dashboard for tutorial information.
 * Version: 1.0.0
 * Author: Andy Wojtowski
 * Author URI: http://randomthoughtsandstylings.com
 * License: GPL2
 */
 
add_action( 'wp_dashboard_setup', 'register_my_dashboard_widget' );
function register_my_dashboard_widget() {
	wp_add_dashboard_widget(
		'bw_dashboard_widget',
		'BizzyWeb Documentation',
		'bw_dashboard_widget_display'
	);
	
}

//add_action( 'wp_dashboard_setup', 'register_my_dashboard_widget' );

function bw_dashboard_widget_display() {
	?>

    <p>We have gathered some of the best information you will need to get started editing your website.<br /><br />
           <strong style="font-size:1.2em">Wordpress 101</strong><br/>
           <p style="padding-left:1em;"><strong><a href="http://bizzyweb.com/support/video-tutorials/the-dashboard/ " target="_blank">The Dashboard</a><br/>
           <a href="http://bizzyweb.com/support/video-tutorials/posts-tutorial/" target="_blank">Posts</a><br/>
           <a href="http://bizzyweb.com/support/video-tutorials/pages-tutorial/" target="_blank">Pages</a><br/>
           <a href="http://bizzyweb.com/support/video-tutorials/the-visual-editor/" target="_blank">The Editor</a><br/>
           <a href="http://bizzyweb.com/support/video-tutorials/working-with-images/" target="_blank">Images</a><br/>
           <a href="http://bizzyweb.com/support/video-tutorials/the-media-library/" target="_blank">Media</a><br/>
           <a href="http://bizzyweb.com/support/video-tutorials/appearance/" target="_blank">Appearance</a><br/>
           <a href="http://bizzyweb.com/support/video-tutorials/organizing-content/" target="_blank">Content Organization</a><br/>
           <a href="https://www.gravityhelp.com/documentation/"target="_blank">Forms</a><br/>
           <a href="http://www.themepunch.com/revslider-doc/slider-revolution-documentation/"target="_blank">Sliders</a></strong><br/></p>
		   <strong style="font-size:1.2em">Additional Resources</strong><br/>
           <p style="padding-left:1em;"><strong><a href="http://bizzyweb.com/bizzywebinars/" target="_blank">BizzyWebinars Archives</a><br/>
           </strong></p>
           If you have additional needs please go to <a href="http://bizzyweb.com/support/" target="_blank">bizzyweb.com/support/</a> and one of our support staff will be there to help.
    </p>
           
      <?php
}

