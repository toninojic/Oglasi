</div>
    <?php
    foreach($ads as $ad) {
        
    ?>    
        <div class="ad">
            <a href="index.php?page=single-ad&id=<?php echo $ad['id']?>">
                <?php
                if(empty($ad['file'])) {
                    ?>
                    <img src="public/img/camera.png"/>
                    <?php
                } else {
                    echo '<img src="data:image/jpeg;base64,' . base64_encode($ad['file']) . '" height="150" width="200"/>';

                } 
                ?>
            </a>

            <div class="ad_city_name">
                <?php echo $ad['city_id']; ?>
            </div>
            
        
            <div class="about_ad">
                <div class="heading">
                    <?php
                    echo $ad['heading']; 
                    ?>
                </div>
                <div class="phone_number">
                    <?php
                    echo $ad['phone_number']; 
                    ?>
                </div>
                <div class="description">
                    <?php
                    ?><p> <?php echo $ad['description']; ?> </p> <?php
                    ?>
                </div>

            </div>
            
        </div>
    <?php    
    }
    ?>
</div>