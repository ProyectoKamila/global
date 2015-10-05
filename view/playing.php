<div class="boplay tgg">
	<a href="#" class="glyphicon" id="tgg">V</a>
</div>
<div class="playing menu">
   <div id="wrapper1">
   	<ul id="slider1">
   		<?php
	        if( get_field('Aliados', 'options') ){
	        	//debug(get_field('Aliados', 'options'));
	            $ss = get_field('Aliados', 'options');
	                while(has_sub_field('Aliados', 'options')){
	                    get_row_layout();
	                    $s = get_sub_field('aliados');
	                	//debug(get_sub_field('directivo'));
	                    //debug($s);
	                    query_posts(array('post_type'=>'aliados', 'p'=>$s->ID));
	                    have_posts(); 
	                    the_post();
	                    //debug(get_field('widget'),false);
	                    ?>
			   		<li>
			   			<div class="container">
			            <div class="row">
			                <div class="col-1 col-md-1 col-sd-1 col-xs-1 mx">
	        		            <img src="<?= pk_thumbnail(get_the_ID()); ?>"></img>
	        		        </div>
			                <div class="col-4 col-md-4 col-sd-4 col-xs-4 mx white">
	        		        	<?php the_title(); ?>
	        		        </div>
			                <div class="col-7 col-md-7 col-sd-7 col-xs-7 mx playing1">
	        		            <?php //echo $s['widget']; ?>
	        		            <?php echo get_field('widget'); ?>
	        		        </div>
			            </div>
			        </div>
			   		</li>
   		<?php
                    }
            }
        ?>
   	</ul>
	<!--<ul id="slider1">
	    <?php
            if( get_field('Aliados', 'options') ){
                $ss = get_field('Aliados', 'options');
                //debug($ss);
                $j = 0;
                foreach($ss as $s){
                    //debug($s);
        ?>
		    <li>
		        <div class="container">
		            <div class="row">
		                <div class="col-1 col-md-1 col-sd-1 col-xs-1 mx">
        		            <img src="<?= $s['logo']; ?>"></img>
        		        </div>
		                <div class="col-4 col-md-4 col-sd-4 col-xs-4 mx white">
        		        	<?= $s['nombre']; ?>
        		        </div>
		                <div class="col-7 col-md-7 col-sd-7 col-xs-7 mx">
        		            <?php //echo $s['widget']; ?>
        		        </div>
		            </div>
		        </div>
		        
		        
		        </li>
	    <?php $j = $j +1; } ?>
    <?php } ?>
	</ul>-->
</div>
</div>