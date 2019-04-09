<?php




function mamurjor_enqueue(){



wp_enqueue_style("project-skel",get_theme_file_uri("css/skel.css"),null,"2.0");
wp_enqueue_style("project-style",get_theme_file_uri("css/style.css"),null,"2.0");
wp_enqueue_style("project-xlarge",get_theme_file_uri("css/style-xlarge.css"),null,"2.0");
wp_enqueue_style("project-style",get_stylesheet_uri());



wp_enqueue_script("project-jquery",get_theme_file_uri("js/jquery.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-skel_js",get_theme_file_uri("js/skel.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-layers",get_theme_file_uri("js/skel-layers.min.js"),array('jquery'),null,"2.0");
wp_enqueue_script("project-init",get_theme_file_uri("js/init.js"),array('jquery'),null,"2.0");


}
add_action("wp_enqueue_scripts","mamurjor_enqueue");









?>