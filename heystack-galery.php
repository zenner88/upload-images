<div class="container">
    <div class="row">
        <div class="portfolio-item row">
        <?php
            // List heystack 
            $CLheystack = $url.$LISTheystack;
            $datah = file_get_contents($CLheystack);
            $lheystack = json_decode($datah); 
            foreach ($lheystack as $lheystacks) {
        ?>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href=<?php echo $heystackFolder.$lheystacks->filename;?> class="fancylight popup-btn" data-fancybox-group="light"> 
                <img class="img-fluid" src=<?php echo $heystackFolder.$lheystacks->filename;?> alt="">
                </a>
            </div>
        <?php } ?>
        </div>
    </div>
</div>