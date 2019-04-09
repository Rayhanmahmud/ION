<?php 


function section_three(){


vc_map(array(

      'name' => __('Section three','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_three',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'sec_three_title',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

          array(

            'param_name' => 'sec_three_img',
            'type' => 'attach_image',
            'heading'=> 'img',      
        ),

        array(

            'param_name' => 'sec_three_desc',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),

          array(

            'param_name' => 'sec_three_title_one',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_three_desc_one',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
        
          array(

            'param_name' => 'sec_three_title_two',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_three_title_three',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_three_title_four',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_three_title_five',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_three_title_six',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),


        

      )

  ));



}
add_action("vc_before_init","section_three");



function project_section_three($attr){

 extract(
shortcode_atts(array(

 'sec_three_title' => 'This is title',
 'sec_three_img' => '',
 'sec_three_desc' => '',
 'sec_three_title_one' => 'This is title',
 'sec_three_desc_one' => 'This is title',
 'sec_three_title_two' => '',
 'sec_three_title_three' => 'This is title',
 'sec_three_title_four' => 'This is title',
 'sec_three_title_five' => 'This is title',
 'sec_three_title_six' => 'This is title',
 
),$attr)
);

ob_start();
?>


<section id="three" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="8u">
							<section>
								<h2><?php echo esc_html($sec_three_title);?></h2>
                                    <?php 
  $sec_image = wp_get_attachment_image_src($sec_three_img,'full');

  if($sec_image ){ ?>
  
   <a href="#" class="image fit"><img src="<?php echo esc_url($sec_image[0]);?>" alt="" /></a>

  <?php
  }
?>
								
								<p><?php echo esc_html($sec_three_desc);?></p>
							</section>
						</div>
						<div class="4u">
							<section>
								<h3><?php echo esc_html($sec_three_title_one);?></h3>
								<p><?php echo esc_html($sec_three_desc_one);?></p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
							<hr />
							<section>
								<h3><?php echo esc_html($sec_three_title_two);?></h3>
								<ul class="alt">
									<li><a href="#"><?php echo esc_html($sec_three_title_three);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_three_title_four);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_three_title_five);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_three_title_six);?></a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</section>	




<?php

return ob_get_clean();




}
add_shortcode("section_three","project_section_three");




















?>