<?php 


function section_leftsidebar(){


vc_map(array(

      'name' => __('Left sidebar','mamurjor'),
      'description' => 'this is first addon',
      'base' => 'section_leftsidebar',
      'category' => 'project',
      'icon' => 'fa fa-map',
      'params' => array(

        array(

            'param_name' => 'sec_left_title',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

        array(

            'param_name' => 'sec_left_desc',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
         array(

            'param_name' => 'sec_left_title_one',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

        array(

            'param_name' => 'sec_left_descrip',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
         array(

            'param_name' => 'sec_left_title_two',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_left_title_three',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_left_title_four',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_left_title_five',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_left_title_six',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_left_title_seven',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_left_title_eight',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),

         array(

            'param_name' => 'sec_left_title_nine',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_left_title_ten',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_left_title_eleven',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
         array(

            'param_name' => 'sec_left_image',
            'type' => 'attach_image',
            'heading'=> 'img',      
        ),
          array(

            'param_name' => 'sec_left_desc_two',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
         array(

            'param_name' => 'sec_left_img_one',
            'type' => 'attach_image',
            'heading'=> 'img',      
        ),
        array(

            'param_name' => 'sec_left_title_tweleve',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
          array(

            'param_name' => 'sec_left_desc_three',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),
        array(

            'param_name' => 'sec_left_img_three',
            'type' => 'attach_image',
            'heading'=> 'Title',      
        ),
        array(

            'param_name' => 'sec_left_title_thirten',
            'type' => 'textfield',
            'heading'=> 'Title',      
        ),
          array(

            'param_name' => 'sec_left_desc_four',
            'type' => 'textarea',
            'heading'=> 'Description',
            
        ),


      )

  ));



}
add_action("vc_before_init","section_leftsidebar");



function project_section_leftsidebar($attr){

 extract(
shortcode_atts(array(

 'sec_left_title' => 'This is title',
 'sec_left_desc' => '',
 'sec_left_title_one' => '',
 'sec_left_descrip' => 'This is title',
 'sec_left_title_two' => 'This is title',
 'sec_left_title_three' => '',
 'sec_left_title_four' => 'This is title',
 'sec_left_title_five' => 'This is title',
 'sec_left_title_six' => 'This is title',
 'sec_left_title_seven' => 'This is title',
 'sec_left_title_eight' => 'This is title',
 'sec_left_title_nine' => 'This is title',
 'sec_left_title_ten' => 'This is title',
 'sec_left_title_eleven' => 'This is title',
 'sec_left_image' => '',
 'sec_left_desc_two' => 'This is title',
 'sec_left_img_one' => '',
 'sec_left_title_tweleve' => 'This is title',
 'sec_left_desc_three' => 'This is title',
 'sec_left_img_three' => '',
 'sec_left_title_thirten' => 'This is title',
 'sec_left_desc_four' => 'This is description',
 
),$attr)
);

ob_start();
?>





<section id="main" class="wrapper style1">
				<header class="major">
					<h2><?php echo esc_html($sec_left_title);?></h2>
					<p><?php echo esc_html($sec_left_desc);?></p>
				</header>
				<div class="container">
					<div class="row">
						<div class="4u">
							<section>
								<h3><?php echo esc_html($sec_left_title_one);?></h3>
								<p><?php echo esc_html($sec_left_descrip);?></p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
							<hr />
							<section>
								<h3><?php echo esc_html($sec_left_title_two);?></h3>
								<ul class="alt">
									<li><a href="#"><?php echo esc_html($sec_left_title_three);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_left_title_four);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_left_title_five);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_left_title_six);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_left_title_seven);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_left_title_eight);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_left_title_nine);?></a></li>
									<li><a href="#"><?php echo esc_html($sec_left_title_ten);?></a></li>
								</ul>
							</section>
						</div>
						<div class="8u skel-cell-important">
							<section>
								<h2><?php echo esc_html($sec_left_title_eleven);?></h2>
                                  <?php 
  $sec_image_one = wp_get_attachment_image_src($sec_left_image,'full');

  if($sec_image_one ){ ?>

   <a href="#" class="image fit"><img src="<?php echo esc_url($sec_image_one[0]);?>" alt="" /></a>

  <?php
  }
?>
								
								<p><?php echo esc_html($sec_left_desc_two);?></p>
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
								
								<h3><?php echo esc_html($sec_left_title_tweleve);?></h3>
								<p><?php echo esc_html($sec_left_desc_three);?></p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
                                                                                         <?php 
  $sec_image_three = wp_get_attachment_image_src($sec_left_img_three,'full');

  if($sec_image_three ){ ?>

   <a href="#" class="image fit"><img src="<?php echo esc_url($sec_image_three[0]);?>" alt="" /></a>

  <?php
  }
?>
								
								<h3><?php echo esc_html($sec_left_title_thirten);?></h3>
								<p><?php echo esc_html($sec_left_desc_four);?></p>
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
add_shortcode("section_leftsidebar","project_section_leftsidebar");




















?>