 <?php get_field('info_extra', 'options');
  has_sub_field('info_extra', 'options');
  get_row_layout();
  get_sub_field('titulo');?>
 <!-- Start home -->
        <section id="home" class="bgslider-wrapper">
            <div id="animated-bg">
                <div id="animated-bg1" class="bg-slider"></div>
                <div id="animated-bg2" class="bg-slider"></div>
                <div id="animated-bg3" class="bg-slider"></div>
            </div>
            <div class="home-contain">
                <div class="container">
                    <div class="row wow fadeInDown" data-wow-delay="0.2s"><div class="col-md-12"> 
    <a class="logo margin120" href="">
      <img class="img-responsive" src="<?=get_sub_field('logo') ?>" alt="Lotek"/>
    </a> 
  </div><div class="col-md-8 col-md-offset-2 home-headline">
    <h4><?=get_sub_field('titulo') ?></h4>
    
  </div></div>

<div class="row wow fadeInUp"><div class="col-md-12">
    <div class="start-page">
      <a class="btn-scroll" href="#intro">Inicio<br/><i class="fa fa-chevron-down"></i></a>
    </div>
    <div class="sparator-line"></div>
  </div></div>                </div>
            </div>
        </section>
        <!-- End home -->