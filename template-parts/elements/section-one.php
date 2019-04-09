<?php 


function section_one(){


vc_map(array(

      'name' => __('Section one','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_one',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'sec_one_title',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_one_desc',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),

           array(

            'param_name' => 'sec_one_icon',
            'type' => 'iconpicker',
            'heading'=> 'icon',      
        ),

        array(

            'param_name' => 'sec_one_title_one',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_one_desc_one',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),

           array(

            'param_name' => 'sec_one_icon_one',
            'type' => 'iconpicker',
            'heading'=> 'Icon',      
        ),

          array(

            'param_name' => 'sec_one_title_two',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_one_desc_two',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),

           array(

            'param_name' => 'sec_one_icon_two',
            'type' => 'iconpicker',
            'heading'=> 'Icon',      
        ),

           array(

            'param_name' => 'sec_one_title_three',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_one_desc_three',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),

      )

  ));



}
add_action("vc_before_init","section_one");



function project_section_one($attr){

 extract(
shortcode_atts(array(

 'sec_one_title' => 'This is title',
 'sec_one_desc' => 'This is description',
 'sec_one_icon' => '',
 'sec_one_title_one' => 'This is title',
 'sec_one_desc_one' => 'This is title',
 'sec_one_icon_one' => '',
 'sec_one_title_two' => 'This is title',
 'sec_one_desc_two' => 'This is title',
 'sec_one_icon_two' => '',
 'sec_one_title_three' => 'This is title',
 'sec_one_desc_three' => 'This is title',
 
),$attr)
);

ob_start();
?>


<section id="one" class="wrapper style1">
				<header class="major">
					<h2><?php echo esc_html($sec_one_title);?></h2>
					<p><?php echo esc_html($sec_one_desc);?></p>
				</header>
				<div class="container">
					<div class="row">
						<div class="4u">
							<section class="special box">
								<i class="icon fa-area-chart major"><span class="<?php echo esc_html($sec_one_icon);?>"></span></i>
								<h3><?php echo esc_html($sec_one_title_one);?></h3>
								<p><?php echo esc_html($sec_one_desc_one);?></p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<i class="icon fa-area-chart major"><span class="<?php echo esc_html($sec_one_icon_one);?>"></span></i>
								<h3><?php echo esc_html($sec_one_title_two);?></h3>
								<p><?php echo esc_html($sec_one_desc_two);?></p>
							</section>
						</div>
						<div class="4u">
							<section class="special box">
								<i class="icon fa-area-chart major"><span class="<?php echo esc_html($sec_one_icon_two);?>"></span></i>
								<h3><?php echo esc_html($sec_one_title_three);?></h3>
								<p><?php echo esc_html($sec_one_desc_three);?></p>
							</section>
						</div>
					</div>
				</div>
			</section>




<?php

return ob_get_clean();




}
add_shortcode("section_one","project_section_one");




















?>