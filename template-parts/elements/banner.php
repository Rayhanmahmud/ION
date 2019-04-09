<?php 


function banner_section(){


vc_map(array(

      'name' => __('Banner section','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'banner_section',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'banner_title',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'banner_description',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),

          array(

            'param_name' => 'sign_up',
            'type' => 'textfield',
            'heading'=> 'Sign Up',      
        ),

           array(

            'param_name' => 'learn_more',
            'type' => 'textfield',
            'heading'=> 'Learn More',      
        ),
      )

  ));



}
add_action("vc_before_init","banner_section");



function project_banner_section($attr){

 extract(
shortcode_atts(array(

 'banner_title' => 'This is title',
 'banner_description' => 'This is description',
 'sign_up' => 'This is title',
 'learn_more' => 'This is title',
 
),$attr)
);

ob_start();
?>


<section id="banner">
				<div class="inner">
					<h2><?php echo esc_html($banner_title);?></h2>
					<p><?php echo esc_html($banner_description);?></a></p>
					<ul class="actions">
						<li><a href="#content" class="button big special"><?php echo esc_html($sign_up);?></a></li>
						<li><a href="#elements" class="button big alt"><?php echo esc_html($learn_more);?></a></li>
					</ul>
				</div>
			</section>




<?php

return ob_get_clean();




}
add_shortcode("banner_section","project_banner_section");




















?>