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

        <div class="single-ad-city">
            City: <?php echo $ad['city_name'];?>
        </div>  

        <div class="single-ad-date">
            Created on: <?php echo date('d-m-Y', strtotime($ad['creation_date']));?><br />
            Expires on: <?php echo date('d-m-Y', strtotime($ad['creation_date']) + 30 * 24 * 60 * 60);?>
        </div>
    </div>  
</div>