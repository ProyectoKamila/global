<?php get_header(); ?>
<?php include 'view/home.php'; ?>
<header>
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo home_url(''); ?>"><img src="<?= get_sub_field('logo'); ?>" alt="<?= get_sub_field('titulo'); ?>"/></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul id="menu-landing-page-navigation-menus" class="nav navbar-nav navbar-scroll">
                    <li id="menu-item-174" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-174"><a title="Regresar" href="<?=$_SERVER["HTTP_REFERER"]?>/#Products">Regresar</a></li>
                </ul>
            </div>        
        </div>
    </div>
</header>

<?php get_footer(); ?>