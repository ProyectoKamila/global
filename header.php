  <?php //debug(get_header_image()); ?>
  <?php $r = get_field('info_extra', 'options');
  has_sub_field('info_extra', 'options');
  get_row_layout();
  //debug(get_sub_field('titulo'),false);?>
  
  <?php
  
  if( get_field('info_extra', 'options') )
{
    has_sub_field('info_extra', 'options');
    get_row_layout();
		//debug(get_sub_field('titulo'),false);

		// do something with sub field...
}
  
  ?>
  

  <?php //debug($r); ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title>Estacion Global</title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/xfavicon.png.pagespeed.ic.YBEOBdkcPi.png">
    <script>if(typeof WebFontConfig==="undefined"){WebFontConfig=new Object();}
        WebFontConfig['google']={families:['Open+Sans:400,700']};(function(){var wf=document.createElement('script');wf.src='https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';wf.type='text/javascript';wf.async='true';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(wf,s);})();
    </script>
    <link rel="alternate" type="application/rss+xml" title="Lotek &raquo; Feed" href="feed/index.html"/>
    <link rel="alternate" type="application/rss+xml" title="Lotek &raquo; Comments Feed" href="comments/feed/index.html"/>
    <link rel="alternate" type="application/rss+xml" title="Lotek &raquo; Home Alternative1 Comments Feed" href="home-alternative1-2/feed/index.html"/>
	<script type="text/javascript">window._wpemojiSettings={"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"<?php bloginfo('template_url') ?>\/js\/wp-emoji-release.min.js?ver=4.2.3"}};!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);</script>
	<style type="text/css">img.wp-smiley,img.emoji{display:inline!important;border:none!important;box-shadow:none!important;height:1em!important;width:1em!important;margin:0 .07em!important;vertical-align:-.1em!important;background:none!important;padding:0!important}</style>
    <style id='contact-form-7-css' media='all'>div.wpcf7{margin:0;padding:0}div.wpcf7-response-output{margin:2em .5em 1em;padding:.2em 1em}div.wpcf7 .screen-reader-response{position:absolute;overflow:hidden;clip:rect(1px,1px,1px,1px);height:1px;width:1px;margin:0;padding:0;border:0}div.wpcf7-mail-sent-ok{border:2px solid #398f14}div.wpcf7-mail-sent-ng{border:2px solid red}div.wpcf7-spam-blocked{border:2px solid #ffa500}div.wpcf7-validation-errors{border:2px solid #f7e700}span.wpcf7-form-control-wrap{position:relative}span.wpcf7-not-valid-tip{color:red;font-size:1em;display:block}.use-floating-validation-tip span.wpcf7-not-valid-tip{position:absolute;top:20%;left:20%;z-index:100;border:1px solid red;background:#fff;padding:.2em .8em}span.wpcf7-list-item{margin-left:.5em}.wpcf7-display-none{display:none}div.wpcf7 img.ajax-loader{border:none;vertical-align:middle;margin-left:4px}div.wpcf7 div.ajax-error{display:none}div.wpcf7 .placeheld{color:#888}</style>
    <link rel='stylesheet' id='bootstrap-css' href='<?php bloginfo('template_url'); ?>/css/A.bootstrap.min.css%2cqver%3d4.2.3.pagespeed.cf.JgDvSkmTc5.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='override-css' href='<?php bloginfo('template_url'); ?>/css/A.overwrite.css%2cqver%3d4.2.3.pagespeed.cf.i80fxYwgdV.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='font-awesome-css' href='<?php bloginfo('template_url'); ?>/css/A.font-awesome.css%2cqver%3d4.2.3.pagespeed.cf.RJ_9dEFWy-.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='flexslider-style-css' href='<?php bloginfo('template_url'); ?>/css/A.flexslider.css%2cqver%3d4.2.3.pagespeed.cf.f4-sCA8t6M.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='prettyPhoto-style-css' href='<?php bloginfo('template_url'); ?>/css/A.prettyPhoto.css%2cqver%3d4.2.3.pagespeed.cf.KhYnk-Tccy.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='animation-css' href='<?php bloginfo('template_url'); ?>/css/A.animate.css%2cqver%3d4.2.3.pagespeed.cf.XwcWe--P_a.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='theme-style-css' href='<?php bloginfo('template_url'); ?>/A.style.css%2cqver%3d2014-10-31.pagespeed.cf.Mi7q_9HSjq.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='google-font-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700&amp;ver=4.2.3' type='text/css' media='all'/>
    <link rel='stylesheet' id='skin-css' href='<?php bloginfo('template_url'); ?>/skins/default/A.skin.css%2cqver%3d4.2.3.pagespeed.cf.uKc7XQfVpU.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='skin-css' href='<?php bloginfo('template_url'); ?>/deb.css' type='text/css' media='all'/>
    <style id='custom-style-css' media='all'>p.form-submit{margin-left:15px;text-align:center}#lotek_submit{display:inline-block;padding:6px 12px 8px 12px;margin-bottom:0;font-size:14px;font-weight:400;line-height:1.428571429;text-align:center;white-space:nowrap;vertical-align:middle;cursor:pointer;border:1px solid transparent;border-radius:2px;-webkit-transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out;-o-transition:all .3s ease-in-out;-ms-transition:all .3s ease-in-out;transition:all .3s ease-in-out}#lotek_submit{color:#2c323a;background:none;border-color:#2c323a}#lotek_submit:hover,#lotek_submit:focus,#lotek_submit:active,#lotek_submit.active{color:#fff;background-color:#2c323a;border-color:#2c323a}#lotek_submit{font-size:24px;line-height:28px;border:2px solid;padding:15px 30px 20px 30px;border-radius:4px}.flexslider{border:none;border-radius:0px;-webkit-border-radius:0px;-moz-border-radius:0px;box-shadow:none;-webkit-box-shadow:none;-moz-box-shadow:none}.flex-direction-nav .flex-next{text-align:initial}.flexslider:hover .flex-prev{opacity:1;left:-60px}.flexslider:hover .flex-next{opacity:1;right:-60px}@media screen and (max-width:860px){.flexslider:hover .flex-prev{opacity:1;left:0}.flexslider:hover .flex-next{opacity:1;right:0}}.blog .flexslider .flex-prev{opacity:.5;left:0px}.blog .flexslider .flex-next{opacity:.5;right:0px}.error404{position:relative;float:left;width:100%;margin:0;padding:0}.error404 i{margin-top:-48px;z-index:999}.author-info>.media-heading{color:#2c323a}.author-social{font-size:1.5em}.author-social a{color:#fff}.archive.date{font-weight:400;font-size:14px;line-height:24px;padding:0;margin:0}.pager{padding:30px 30px 0}.container-fluid>.row>.wpb_column{padding:0px!important}</style>
    <style id='custom-style-inline-css' type='text/css'>#no-use{margin:0 auto}.features-body{padding-bottom:10px}</style>
    <link rel='stylesheet' id='js_composer_front-css' href='<?php bloginfo('template_url'); ?>/css/A.js_composer.css%2cqver%3d4.3.4.pagespeed.cf.hdySQEV9QU.css' type='text/css' media='all'/>
    <style id='js_composer_custom_css-css' media='screen'></style>
    <script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery.js%2cqver%3d1.11.2.pagespeed.jm.0kUhGt7Mm3.js'></script>
    <script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/jquery-migrate.min.js%2cqver%3d1.2.1.pagespeed.jm.mhpNjdU8Wl.js'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php bloginfo('template_url'); ?>/xml/wlwmanifest.xml"/> 
    <meta name="generator" content="WordPress 4.2.3"/>
    <link rel='canonical' href='index.html'/>
    <link rel='shortlink' href='index.html'/>

    <body class="home page page-id-35 page-template page-template-homepage page-template-homepage-php wpb-js-composer js-comp-ver-4.3.4 vc_responsive">