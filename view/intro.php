<section id="intro" class="contain colorbg">
	<div class="container">
		<div class="row">
        	<div class="vc_col-sm-6 wpb_column column_container wow bounceInDown" data-wow-delay="0.2s">
        		<div class="wpb_wrapper ">
                	<div class="wpb_text_column wpb_content_element ">
                		<div class="wpb_wrapper">
                			<h3 class="headline"><?php the_field('titulo', 'options'); ?></h3>
                            <?php the_field('contenido', 'options'); ?>
                		</div> 
                	</div> 
        		</div> 
        	</div> 
        	<div class="vc_col-sm-6 wpb_column column_container wow bounceInDown" data-wow-delay="0.6s">
        		<div class="wpb_wrapper ">
                	<div class="wpb_single_image wpb_content_element img-responsive pull-right vc_align_left">
                		<div class="wpb_wrapper">
                			<img width="468" height="579" src="<?php the_field('imagen', 'options'); ?>" class=" vc_box_border_grey attachment-full" alt="<?php the_field('titulo', 'options'); ?>"/>
                		</div> 
                	</div> 
        		</div> 
        	</div> 
		</div>
	</div>
</section>