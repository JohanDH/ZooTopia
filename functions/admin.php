<?php

// Admin stuff and styles
add_action('admin_head', 'zt_admin_head');
add_action('login_head', 'zt_admin_head');
function zt_admin_head()
{
	echo '<link rel="shortcut icon" href="'.get_bloginfo('template_url').'/images/favicon.ico">';
	echo '<link rel="stylesheet" href="'.get_bloginfo('template_url').'/css/admin.css">';
}
