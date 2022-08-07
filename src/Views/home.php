</div>
        <div class="category-filter">
            <a href="index.php?page=filterd&category_id=0">All categories</a>
            <?php
            foreach($categoriesModel->getAll() as $category) {
            ?>
                <a href="index.php?page=filter&category_id=<?php echo $category['id']?>"><?php echo $category['category']?></a>
            <?php
            }
            ?>
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
</div>