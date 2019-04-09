<?php 


function section_two(){


vc_map(array(

      'name' => __('Section two','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_two',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'sec_two_title',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_two_desc',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),

           array(

            'param_name' => 'sec_two_img',
            'type' => 'attach_image',
            'heading'=> 'img',      
        ),

        array(

            'param_name' => 'sec_two_title_one',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_two_desc_one',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),

           array(

            'param_name' => 'sec_two_img_one',
            'type' => 'attach_image',
            'heading'=> 'img',      
        ),

          array(

            'param_name' => 'sec_two_title_two',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_two_desc_two',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),

      )

  ));



}
add_action("vc_before_init","section_two");



function project_section_two($attr){

 extract(
shortcode_atts(array(

 'sec_two_title' => 'This is title',
 'sec_two_desc' => 'This is description',
 'sec_two_img' => '',
 'sec_two_title_one' => 'This is title',
 'sec_two_desc_one' => 'This is title',
 'sec_two_img_one' => '',
 'sec_two_title_two' => 'This is title',
 'sec_two_desc_two' => 'This is title',
 
),$attr)
);

ob_start();
?>


<section id="two" class="wrapper style2">
				<header class="major">
					<h2><?php echo esc_html($sec_two_title);?></h2>
					<p><?php echo esc_html($sec_two_desc);?></p>
				</header>
				<div class="container">
					<div class="row">
						<div class="6u">
							<section class="special">
                              <?php 
  $sec_img_one = wp_get_attachment_image_src($sec_two_img,'full');

  if($sec_img_one ){ ?>

   <a href="#" class="image fit"><img src="<?php echo esc_url($sec_img_one[0]);?>" alt="" /></a>

  <?php
  }
?>
								
								<h3><?php echo esc_html($sec_two_title_one);?></h3>
								<p><?php echo esc_html($sec_two_desc_one);?></p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">

                                                      <?php 
  $sec_img_two = wp_get_attachment_image_src($sec_two_img_one,'full');

  if($sec_img_two ){ ?>

   <a href="#" class="image fit"><img src="<?php echo esc_url($sec_img_two[0]);?>" alt="" /></a>

  <?php
  }
?>
								<h3><?php echo esc_html($sec_two_title_two);?></h3>
								<p><?php echo esc_html($sec_two_desc_two);?></p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</section>




<?php

return ob_get_clean();




}
add_shortcode("section_two","project_section_two");




















?>