<!-- Start contacto-->

    <section id="contact" class="contain colorbg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="divider clearfix"></div>
					<h4 class="heading wow flipInX" data-wow-delay="0.2s"><span>Contacto</span></h4>
				</div>
			</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="row">
					
	<div class="vc_col-sm-12 wpb_column column_container">
		<div class="wpb_wrapper contact-wrapper">
			<i class="fa fa-envelope icon-title wow rotateIn" data-wow-delay="0.4s"></i><div role="form" class="wpcf7" id="wpcf7-f128-p35-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form name="" action="https://demowp.cththemes.com/lotek/#wpcf7-f128-p35-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="128"/>
<input type="hidden" name="_wpcf7_version" value="4.2.1"/>
<input type="hidden" name="_wpcf7_locale" value="en_US"/>
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f128-p35-o1"/>
<input type="hidden" name="_wpnonce" value="d7207f4352"/>
</div>
<div class="contact-body wow rotateInDownLeft" data-wow-delay="0.4s">
<p><strong>Dirección :</strong> <?php the_field('direccion', 'options'); ?><br/>
<strong>Teléfono :</strong>  <?php the_field('telefono', 'options'); ?> - <strong>Email :</strong> <?php the_field('email', 'options'); ?></p>
<div class="clearfix"></div>

<ul class="listForm cbp-so-section">
<li class="first-list cbp-so-side cbp-so-side-left">
		<span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" maxlength="4" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control input-name input-lg" aria-required="true" aria-invalid="false" placeholder="Nombre completo . . ."/></span>
	</li>
<li class="cbp-so-side cbp-so-side-right">
                <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control input-email input-lg" aria-required="true" aria-invalid="false" placeholder="Email . . ."/></span>
	</li>
<li class="full-list cbp-so-side cbp-so-side-bottom">
		<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="9" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control input-message input-lg" aria-required="true" aria-invalid="false" placeholder="Tu mensaje . ."></textarea></span>
	</li>
<li class="full-list text-center cbp-so-side cbp-so-side-bottom">
		<input type="submit" value="Enviar Mensaje" class="wpcf7-form-control wpcf7-submit btn btn-default btn-lg"/>
	</li>
</ul>
</div>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div>
		</div> 
	</div> 

				</div>
				<div class="divider pull-left"></div>
			</div>
		</div>
		</div>
	</section>
	


	<!-- Start footer -->
	<footer>
		<div class="container">
			<div class="row">
							    							    			</div>
			<div class="row">
			
				<div class="col-md-12">
					<a href="#home" class="totop wow rotateIn btn-scroll" data-wow-delay="0.4s"><i class="fa fa-chevron-up"></i></a>
					<p class= "tr">Síguenos por las redes sociales</p>
                    <a href="<?php the_field('facebook', 'options'); ?>" class="iconlink social-network wow bounceInDown" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a>
                    <a href="<?php the_field('twitter', 'options'); ?>" class="iconlink social-network wow bounceInDown" data-wow-delay="0.4s"><i class="fa fa-twitter"></i></a>
                    <a href="<?php the_field('google_plus', 'options'); ?>" class="iconlink social-network wow bounceInDown" data-wow-delay="0.6s"><i class="fa fa-google-plus"></i></a>
                    <!--<a href="#" class="iconlink social-network wow bounceInDown" data-wow-delay="0.8s"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="iconlink social-network wow bounceInDown" data-wow-delay="1s"><i class="fa fa-pinterest"></i></a>-->
				</div>
			</div>
		</div>
		<div class="subfooter">
			<p class="copyrigh">2015 © Copyright. Estación Global. Todos los derechos reservados.</p>
            <p class="copyrigh">
                <a href="https:www.proyectokamila.com"> Desarrollado por Proyecto Kamila</a>	
            </p>
        </div>
	</footer>
   
<?php 
$img = get_field('img_fondo', 'options'); 
//debug($img);
$urlall;
$i = 1;
foreach($img as $img1){
    //debug($img1);
    if($i == 1){
        if(isset($img1['img']['url'])){
            $urlall = '"'.$urlall.$img1['img']['url'].'"';
        }
    }
    if($i >= 2){
        if(isset($img1['img']['url'])){
            $urlall = $urlall.',"'.$img1['img']['url'].'"';
        }
            
        
    }
    $i++;
}
//debug($urlall);

?>
	<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.form.min.js%2cqver%3d3.51.0-2014.06.20.pagespeed.jm.RVBOol6lkO.js'></script>
    <script type='text/javascript'>var _wpcf7={"loaderUrl":"<?php bloginfo('template_url'); ?>\/images\/ajax-loader.gif","sending":"Sending ..."};</script>
    <script src="<?php bloginfo('template_url'); ?>/otro/p.js"></script><script>eval(mod_pagespeed_Xvfl0HzUGZ);</script>
    <script>eval(mod_pagespeed_9LUPGw791f);</script>
    <script>eval(mod_pagespeed_aAInO4Yw8J);</script>
    <script>eval(mod_pagespeed_QUZ4$4EE0s);</script>
    <script>eval(mod_pagespeed_yARAb3A9y3);</script>
    <script>eval(mod_pagespeed_CnbBg$o2QI);</script>
    <script>eval(mod_pagespeed_t2ncHFTZ5f);</script>
    <script type='text/javascript'>var newphotos=[<?= $urlall?>];</script>
    <script src="<?php bloginfo('template_url'); ?>/otro/s.js"></script><script>eval(mod_pagespeed_hm7F4gvPcq);</script>
    <script>eval(mod_pagespeed_Zm4SW4OURM);</script>
    <script>eval(mod_pagespeed_bmnmmPU2p4);</script>
    <script>eval(mod_pagespeed_uR5vWwJR_d);</script>
    <script>eval(mod_pagespeed_ApyadNaV4y);</script>
    <script>eval(mod_pagespeed_sckl$dlXjg);</script>
    <script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.fitvids9c92.js?ver=4.2.3'></script>
    <script src="<?php bloginfo('template_url'); ?>/js/custom.js%2cqver%3d%3d4.2.3%2btheme-option%2c_demosetting.js%2cqver%3d%3d4.2.3.pagespeed.jc.xbvwevB41A.js"></script><script>eval(mod_pagespeed_A7uOCakKli);</script>
    <script>eval(mod_pagespeed_plYirOEeTz);</script>
    <script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/js_composer_front7035.js?ver=4.3.4'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript">
	 
	 $(document).ready(function() {
        console.log('el documento está preparado');
        	   
		    $(".stylechanger li a").click(function(){
		        $("#skin-css").attr("href",$(this).attr('rel'));
	        return false;});
	        
	       // $(".openpanel0").click(function(){
	           
        //         return false
	       // });
	        $(".openpanel1").click(function(){
	            $(".demo-panel1").addClass("block");
	            $(".demo-panel1").removeClass("none");
	            $(this).toggleClass("active");
	            
	            $('.openpanel0').removeClass("active");
	            $(".demo-panel0").addClass("none");
	            $('.openpanel2').removeClass("active");
	            $(".demo-panel2").addClass("none");
	            $('.openpanel3').removeClass("active");
	            $(".demo-panel3").addClass("none");
                return false
	        });
	        $(".openpanel2").click(function(){
	            $(".demo-panel2").addClass("block");
	            $(".demo-panel2").removeClass("none");
	            $(this).toggleClass("active");
	            
	            $('.openpanel1').removeClass("active");
	            $(".demo-panel1").addClass("none");
	            $('.openpanel0').removeClass("active");
	            $(".demo-panel0").addClass("none");
	            $('.openpanel3').removeClass("active");
	            $(".demo-panel3").addClass("none");
                return false
	        });
	        $(".openpanel3").click(function(){
	            $(".demo-panel3").addClass("block");
	            $(".demo-panel3").removeClass("none");
	            $(this).toggleClass("active");
	            
	            $('.openpanel1').removeClass("active");
	            $(".demo-panel1").addClass("none");
	            $('.openpanel2').removeClass("active");
	            $(".demo-panel2").addClass("none");
	            $('.openpanel0').removeClass("active");
	            $(".demo-panel0").addClass("none");
                return false
	        });
	   
    });
		
		
		function ot(id){
		        $(".demo-panel"+id).removeClass("block");
		        $(".demo-panel"+id).addClass("none");
		        $('.openpanel'+id).attr('onclick','show(id);');
		        console.log("ot"+id);
		        
		    }
		    function show (id){
	            console.log("show"+id);
	            
	            $(".demo-panel").addClass("none");
	            $(".demo-panel").removeClass("block");
	            $('.op').removeClass("active");
	            console.log("hide");
	            $(".demo-panel"+id).addClass("block");
	            $(".demo-panel"+id).removeClass("none");
	            $(this).toggleClass("active");
	            $('.op').attr('onclick','show(id);');
	            $('.openpanel'+id).attr('onclick','ot(id);');
                
	        }
</script>
  </body>
</html>