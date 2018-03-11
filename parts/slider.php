<?php
    $lista = $config['slieder_skills'];
?>
<div class="container carousel-design">
    <div class="row">
        <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
            <button class="arrow-left-carousel-design arrow-design" id="arrow-left-carousel">
                <svg width="50px" height="80px" viewBox="0 0 50 80" xml:space="preserve">
                     <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round"
                               stroke-linejoin="round" points="
	45.63,75.8 0.375,38.087 45.63,0.375 "/> </svg>
            </button>
        </div>
        <div class="col-xs-8 col-sm-10 col-md-10 col-lg-10">
            <div class="row container-slider">
                <?php for ($j = 0; $j < count($lista); $j++) {?>
                <div id="item-<?php echo $j;?>" class="col-xs-12 col-sm-4 col-md-4 col-lg-4 item-carousel<?php if($j>2) echo ' hide-item';?>">
                    <div class="carousel-item carousel-item-design noselect defaultcursor">
                        <span><?php echo $lista[$j];?></span>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1">
            <button class="arrow-right-carousel-design arrow-design" id="arrow-right-carousel">
                <svg xmlns="http://www.w3.org/2000/svg" width="50px"
                     height="80px" viewBox="0 0 50 80" xml:space="preserve">
                     <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round"
                               stroke-linejoin="round" points="
	0.375,0.375 45.63,38.087 0.375,75.8 "/> </svg>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 carousel-indicators-design noselect defaultcursor">
            <ul>
                <?php for ($i=0;$i<ceil(count($lista)/3);$i++) {
                    if ($i==0) {?>
                <li class="active"></li>
                <?php }else{ ?>
                    <li></li>
                <?php }}?>
            </ul>
        </div>
    </div>
</div>