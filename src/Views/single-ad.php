<div class="content">
    <div class="single-ad-heading">
    <?php echo $ad['heading']?>
    </div>
    
    <div class="single-ad-photo">
        <?php
        if(empty($ad['file'])) {
            ?>
            <img src="public/img/camera.png"/>
            <?php
        } else {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($ad['file']) . '" height="180" width="230"/>';

        } 
        ?>
    </div>

    <div class="single-ad-content">
        <div class="single-ad-text">
            <?php echo $ad['description']?>
        </div>
        
        <div class="single-ad-author">
            <?php echo $ad['user_full_name'];?>
        </div>  

        <div class="single-ad-phone">
            <?php echo $ad['phone_number'];?>
        </div>

        <div class="single-ad-category">
            Category: <a href="index.php?page=filter&category_id=<?php echo $ad['category_id']?>"><?php echo $ad['category'];?> </a>
        </div>

        <div class="single-ad-city">
            City: <?php echo $ad['city_name'];?>
        </div>  

        <div class="single-ad-date">
            Created on: <?php echo date('d-m-Y', strtotime($ad['creation_date']));?><br />
            Expires on: <?php echo date('d-m-Y', strtotime($ad['creation_date']) + 30 * 24 * 60 * 60);?>
        </div>
    </div>  

 
</div>

<div class="text">
    <h2>Featured ads:</h2>
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
        
            <div class="about-ad">
                <div class="heading">
                    <?php
                    echo $ad['heading']; 
                    ?>
                </div>
                <div class="phone-number">
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