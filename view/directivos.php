<section id="testimoni" class="contain darkbg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="divider clearfix"></div>
					<h4 class="heading wow flipInX" data-wow-delay="0.2s"><span>Directivos</span></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
                    	<div class="vc_col-sm-12 wpb_column column_container">
                    		<div class="wpb_wrapper testimoni-wrapper">
                    			<i class="fa fa-quote-left icon-title wow rotateIn" data-wow-delay="0.4s"></i>
                    			<div class="flexslider wow rotateInDownLeft" data-wow-delay="0.4s">
                                    <ul class="slides">
                                        <?php
                                            if( get_field('directivos', 'options') ){
                                                $ss = get_field('directivos', 'options');
                                                    while(has_sub_field('directivos', 'options')){
                                                        get_row_layout();
                                                        $s = get_sub_field('directivo');
                                                    	//debug(get_sub_field('directivo'));
                                                        //debug($s,false);
                                                        query_posts(array('post_type'=>'directivos', 'p'=>$s));
                                                        have_posts(); 
                                                        the_post();
                                                        ?>
                                                        <li>
                                                            <div class="testimoni-box">
                                                            <div class="testimoni-avatar">
                                                                <img src="<?= pk_thumbnail(get_the_ID()); ?>" class="img-responsive" alt="<?php the_title(); ?>"/>
                                                            </div>
                                                            <div class="testimoni-text">
                                                                <h3><span><?php the_field('nombre'); ?></span> <?php the_field('apellido'); ?></h3>
                                                                <blockquote>
                                                                    <!--<p>No erat dicat vis. Sea an apeirian inciderint, quo id dico agam cotidieque, pro exerci latine eu. Sea cibo alterum antiopam ei.</p>-->
                                                                    <p><?= max_charlength(get_the_content(), 130, ''); ?></p>
                                                                </blockquote>
                                                                <!--<span class="company-name">Compañia...</span>-->
                                                            </div>
                                                            </div>
                                                        </li>
                                                    <?php
                                                    }
                                            }
                                        ?>
                                        
                                        
                                    </ul>
                                </div>
                    		</div> 
                    	</div> 

				</div>
			</div>
		</div>
	</div>
</section>



