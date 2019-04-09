<?php 


function section_rightsidebar(){


vc_map(array(

      'name' => __('Right sidebar','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_rightsidebar',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'sec_right_title',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

        array(

            'param_name' => 'sec_right_desc',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
         array(

            'param_name' => 'sec_right_title_one',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
          array(

            'param_name' => 'sec_right_image',
            'type' => 'attach_image',
            'heading'=> 'img',      
        ),

        array(

            'param_name' => 'sec_right_descrip',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
         array(

            'param_name' => 'sec_right_title_two',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
          array(

            'param_name' => 'sec_right_des_one',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),

         array(

            'param_name' => 'sec_right_title_three',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_right_title_four',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_right_title_five',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_right_title_six',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_right_title_seven',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_right_title_eight',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_right_title_nine',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_right_title_ten',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_right_title_eleven',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
        array(

            'param_name' => 'sec_left_img_one',
            'type' => 'attach_image',
            'heading'=> 'img',      
        ),
         array(

            'param_name' => 'sec_right_title_tweleve',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
       
          array(

            'param_name' => 'sec_right_desc_two',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
         array(

            'param_name' => 'sec_right_img_three',
            'type' => 'attach_image',
            'heading'=> 'Title',      
        ),
         
       
        array(

            'param_name' => 'sec_right_title_thirten',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
          array(

            'param_name' => 'sec_right_desc_four',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),


      )

  ));



}
add_action("vc_before_init","section_rightsidebar");



function project_section_rightsidebar($attr){

 extract(
shortcode_atts(array(

 'sec_right_title' => 'This is title',
 'sec_right_desc' => '',
 'sec_right_title_one' => '',
 'sec_right_image' => '',
 'sec_right_descrip' => 'This is title',
 'sec_right_title_two' => '',
 'sec_right_des_one' => 'This is title',
 'sec_right_title_three' => 'This is title',
 'sec_right_title_four' => 'This is title',
 'sec_right_title_five' => 'This is title',
 'sec_right_title_six' => 'This is title',
 'sec_right_title_seven' => 'This is title',
 'sec_right_title_eight' => 'This is title',
 'sec_right_title_nine' => 'This is title',
 'sec_right_title_ten' => '',
 'sec_right_title_eleven' => 'This is title',
 'sec_left_img_one' => '',
 'sec_right_title_tweleve' => 'This is title',
 'sec_right_desc_two' => 'This is title',
 'sec_right_img_three' => '',
 'sec_right_title_thirten' => 'This is title',
 'sec_right_desc_four' => 'This is description',
 
),$attr)
);

ob_start();
?>





<section id="main" class="wrapper style1">
				<header class="major">
					<h2><?php echo esc_html($sec_right_title);?></h2>
					<p><?php echo esc_html($sec_right_desc);?></p>
				</header>
				<div class="container">
					<div class="row">
						<div class="8u">
							<section>
								<h2><?php echo esc_html($sec_right_title_one);?></h2>

                                     <?php 
  $sec_image_right = wp_get_attachment_image_src($sec_right_image,'full');

  if($sec_image_right ){ ?>

   <a href="#" class="image fit"><img src="<?php echo esc_url($sec_image_right[0]);?>" alt="" /></a>

  <?php
  }
?>
								
								<p><?php echo esc_html($sec_right_descrip);?></p>
							</section>
						</div>
						<div class="4u">
							<section>
								<h3><?php echo esc_html($sec_right_title_two);?></h3>
								<p><?php echo esc_html($sec_right_des_one);?></p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
							<hr />
							<section>
								<h3><?php echo esc_html($sec_right_title_three);?></h3>
								<ul class="alt">
									<li><a href="#"><?php echo esc_html($sec_right_title_four);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_right_title_five);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_right_title_six);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_right_title_seven);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_right_title_eight);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_right_title_nine);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_right_title_ten);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_right_title_eleven);?></a></li>
								</ul>
							</section>
						</div>
					</div>


                    
					<hr class="major" />
					<div class="row">
						<div class="6u">
							<section class="special">
                                                             <?php 
  $sec_image_two = wp_get_attachment_image_src($sec_left_img_one,'full');

  if($sec_image_two ){ ?>

   <a href="#" class="image fit"><img src="<?php echo esc_url($sec_image_two[0]);?>" alt="" /></a>

  <?php
  }
?>
								
								<h3><?php echo esc_html($sec_right_title_tweleve);?></h3>
								<p><?php echo esc_html($sec_right_desc_two);?></p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
                                                                                         <?php 
  $sec_image_three = wp_get_attachment_image_src($sec_right_img_three,'full');

  if($sec_image_three ){ ?>

   <a href="#" class="image fit"><img src="<?php echo esc_url($sec_image_three[0]);?>" alt="" /></a>

  <?php
  }
?>
								
								<h3><?php echo esc_html($sec_right_title_thirten);?></h3>
								<p><?php echo esc_html($sec_right_desc_four);?></p>
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
add_shortcode("section_rightsidebar","project_section_rightsidebar");




















?>