<!-- Start programacion -->

    <section id="features" class="contain darkbg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="divider clearfix"></div>
					<h4 class="heading wow flipInX" data-wow-delay="0.2s"><span>Emisoras Aliadas</span></h4>
				</div>
			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
			
	<div class="vc_col-sm-12 wpb_column column_container">
		<div class="wpb_wrapper Products-wrapper">
			<i class="fa fa-thumbs-up icon-title wow rotateIn animated" data-wow-delay="0.4s"></i>
            <ul class="products_list wow fadeInUp " data-wow-delay="0.4s">
                <?php
                    if( get_field('Aliados', 'options') ){
                        
                        $ss = get_field('Aliados', 'options');
                        //debug($ss);
                        $j = 0;
                        $r = 0;
                        foreach($ss as $s){
                            //debug($s);
                ?>
                <li>
                    <div class="image-wrapper">
                        <div class="image-caption">
                            <a href="#" class="zoom tgg" id="tgg"><i class="fa fa-search-plus"></i></a>
                            <div class="image-title">
                                <?= $s['nombre']; ?>
                            </div>
                        </div>
                        <img src="<?= $s['logo']; ?>" class="img-responsive" alt="Facete deleniti constituam" style="min-width: 100%;"/>
                    </div>
                    <div id="<?= $j; ?>" class="darkbg"></div>
                </li>
                <?php
                if($r==4 ){?>
                <div class="clearfix"></div>
                    <?php
                    $r =0;
                }
                ?>
                <?php $j = $j +1;$r = $r +1; } ?>
            <?php $cont = $j;} ?>

<!--

<li>
<div class="image-wrapper">
<div class="image-caption">
<a href="wp-content/uploads1/2014/11/10.jpg" class="zoom"><i class="fa fa-search-plus"></i></a>
<div class="image-title">Facete deleniti constituam</div>
</div>
<img src="wp-content/uploads1/2014/11/x10.jpg.pagespeed.ic.iqFaSKxWce.jpg" class="img-responsive" alt="Facete deleniti constituam"/>
</div>
</li>



<li>
<div class="image-wrapper">
<div class="image-caption">
<a href="wp-content/uploads1/2014/11/9.jpg" class="zoom"><i class="fa fa-search-plus"></i></a>
<div class="image-title">Facete deleniti constituam</div>
</div>
<img src="wp-content/uploads1/2014/11/x9.jpg.pagespeed.ic.DgxAJdhf1i.jpg" class="img-responsive" alt="Facete deleniti constituam"/>
</div>
</li>



<li>
<div class="image-wrapper">
<div class="image-caption">
<a href="wp-content/uploads1/2014/11/8.jpg" class="zoom"><i class="fa fa-search-plus"></i></a>
<div class="image-title">Facete deleniti constituam</div>
</div>
<img src="wp-content/uploads1/2014/11/x8.jpg.pagespeed.ic.xZJXSxraHA.jpg" class="img-responsive" alt="Facete deleniti constituam"/>
</div>
</li>


<li>
<div class="image-wrapper">
<div class="image-caption">
<a href="wp-content/uploads1/2014/11/6.jpg" class="zoom"><i class="fa fa-search-plus"></i></a>
<div class="image-title">Facete deleniti constituam</div>
</div>
<img src="wp-content/uploads1/2014/11/x6.jpg.pagespeed.ic.XOPWIIcsNu.jpg" class="img-responsive" alt="Facete deleniti constituam"/>
</div>
</li>



<li>
<div class="image-wrapper">
<div class="image-caption">
<a href="wp-content/uploads1/2014/11/5.jpg" class="zoom"><i class="fa fa-search-plus"></i></a>
<div class="image-title">Facete deleniti constituam</div>
</div>
<img src="wp-content/uploads1/2014/11/x5.jpg.pagespeed.ic.JXY1UD5xk2.jpg" class="img-responsive" alt="Facete deleniti constituam"/>
</div>
</li>


<li>
<div class="image-wrapper">
<div class="image-caption">
<a href="wp-content/uploads1/2014/11/4.jpg" class="zoom"><i class="fa fa-search-plus"></i></a>
<div class="image-title">Facete deleniti constituam</div>
</div>
<img src="wp-content/uploads1/2014/11/x4.jpg.pagespeed.ic.eDFQjdsDHS.jpg" class="img-responsive" alt="Facete deleniti constituam"/>
</div>
</li>

 <li>
<div class="image-wrapper">
<div class="image-caption">
<a href="wp-content/uploads1/2014/11/4.jpg" class="zoom"><i class="fa fa-search-plus"></i></a>
<div class="image-title">Facete deleniti constituam</div>
</div>
<img src="wp-content/uploads1/2014/11/x4.jpg.pagespeed.ic.eDFQjdsDHS.jpg" class="img-responsive" alt="Facete deleniti constituam"/>
</div>
</li>


 <li>
<div class="image-wrapper">
<div class="image-caption">
<a href="wp-content/uploads1/2014/11/4.jpg" class="zoom"><i class="fa fa-search-plus"></i></a>
<div class="image-title">Facete deleniti constituam</div>
</div>
<img src="wp-content/uploads1/2014/11/x4.jpg.pagespeed.ic.eDFQjdsDHS.jpg" class="img-responsive" alt="Facete deleniti constituam"/>
</div>
</li>

 <li>
<div class="image-wrapper">
<div class="image-caption">
<a href="wp-content/uploads1/2014/11/4.jpg" class="zoom"><i class="fa fa-search-plus"></i></a>
<div class="image-title">Facete deleniti constituam</div>
</div>
<img src="wp-content/uploads1/2014/11/x4.jpg.pagespeed.ic.eDFQjdsDHS.jpg" class="img-responsive" alt="Facete deleniti constituam"/>
</div>
</li>
-->


</ul>
		</div> 
	</div> 

		</div>
		</div>
	</section>