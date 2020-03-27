<?php
/*
Plugin Name: WPSlopes Support
Plugin URI:   https://wpslopes.com
Description: Support acceess to client dashboard
Version:      1.0
Author:       Anji Sandage
Author URI:   https://wpslopes.com/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

/* Start Adding Functions Below this Line */

function my_admin_theme_style() {
wp_enqueue_style('my-admin-theme', plugins_url('wps-support-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
  
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'WPSlopes Support', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
echo '<div class="wps-support"><p><img src="/wp-content/plugins/wps-support/images/wputahlogo-clr.png" alt="wpslopes logo"/> </p>
<h3>Access WPSlopes Client Support </h3>
<a href="https://wpslopes.com/client-login/" target="_blank"><span class="wps-support-button">Submit a Support Ticket</span></a>
<p>If you need help loging in, send an email to <a href="mailto:hello@wpslopes.com">hello@wpslopes.com</a></p>
</div>
<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "Show FAQs";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "Hide FAQs";
	}
} 
</script>
 
<a id="displayText" href="javascript:toggle();">Common WordPress Questions</a>
<div id="toggleText" style="display: none">
	
	<ul>
	  <li><a href="https://www.wpmadesimple.org/guides/wordpress-basics/" target="_blank">The Basics of WordPress</a></li>
	  <li><a href="https://www.wpmadesimple.org/guides/writing-blog-posts/" target="_blank">How to add a new post</a></li>
	  <li><a href="https://www.wpmadesimple.org/guides/editing/" target="_blank">How to edit page content</a></li>
	  <li><a href="https://www.youtube.com/watch?time_continue=36&v=51BtsC5iFmQ" target="_blank">How to edit sidebar and footer content</a></li>
	  <li><a href="https://www.wpmadesimple.org/guides/adding-images/" target="_blank">How to update or change photos</a></li> 
	  <li><a href="https://www.wpmadesimple.org/supplementary-guides/updating-wordpress-menu/" target="_blank">How to update site menus</a></li>
	  <li><a href="https://docs.woocommerce.com/document/managing-products/" target="_blank">How to add products to the shop</a></li>
	  <li><a href="https://yoast.com/wordpress-seo/" target="_blank">How to add SEO keywords and metatags</a></li>
	  <li><a href="https://contactform7.com/getting-started-with-contact-form-7/" target="_blank">How to update form content</a></li>
	  <li><a href="https://easywpguide.com/wordpress-manual/" target="_blank">The Easy WPGuide</a></li>
	  <li><a href="https://blog.udemy.com/wordpress-tutorial" target="_blank">WordPress Tutorials on Udemy</a></li>
</ul>
	</div>';
}
/* Stop Adding Functions Below this Line */
?>
