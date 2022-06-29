<div class="container">
    <div class="row">
        <div class="portfolio-item row">
        <?php
            // List heystack 
            $CLpotrait = $url.$LISTpotrait;
            $datah = file_get_contents($CLpotrait);
            $lpotrait = json_decode($datah); 
            foreach ($lpotrait as $lpotraits) {
        ?>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href=<?php echo $potraitFolder.$lpotraits->portrait_filename;?> class="fancylight popup-btn" data-fancybox-group="light"> 
                <img class="img-fluid" src=<?php echo $potraitFolder.$lpotraits->portrait_filename;?> alt="">
                </a>
            </div>
        <?php } ?>
        </div>
    </div>
</div>