<?php
    if( get_field('Aliados', 'options') ){
        $ss = get_field('Aliados', 'options');
        //debug($ss);
        $j = 0;
        foreach($ss as $s){
            //debug($s);
?>
                <div class="demo-panel demo-panel<?=$j?>">
                    <h6><?= $s['nombre']; ?></h6>
                   <div class="padd">
                       <?= $s['widget']; ?>
                   </div>
                </div> 
            
                <a class="openpanel<?=$j?> op" id ="<?=$j?>" onclick="show(id);" href="#" title=""><img src="<?= $s['logo']; ?>" alt=""/></a>

    <?php $j = $j +1; } ?>
<?php } ?>

<!-- Start demo options --
    <div class="demo-panel demo-panel0">
        <h6>MOVIENDO LA NOCHE.COM.VE</h6>
       <div class="padd">
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
       </div>
    </div>  
    
    <div class="demo-panel demo-panel1">
        <h6>Solar</h6>
       <div class="padd">
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
       </div>
    </div>  
    
    <a class="openpanel1 op" href="#" id="1" onclick="show(id);"title=""><img src="<?php bloginfo('template_url'); ?>/images/solar.jpg" alt="" style="top: 190px;"/></a>
    <div class="demo-panel demo-panel2">
        <h6>Melao Fm</h6>
       <div class="padd">
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
       </div>
    </div>  
    
    <a class="openpanel2 op" href="#" id="2" onclick="show(id);" title=""><img src="<?php bloginfo('template_url'); ?>/images/m.jpg" alt="" style="top: 308px;"/></a>
    <div class="demo-panel demo-panel3">
        <h6>Estación Global</h6>
       <div class="padd">
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
       </div>
    </div>  
    
    <a class="openpanel3 ops" href="#" id="3" onclick="show(id);" title=""><img src="<?php bloginfo('template_url'); ?>/images/estacion.jpg" alt="" style="top: 428px;"/></a>
<!-- End demo options --> 