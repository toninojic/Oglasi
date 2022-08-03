<div class="post-ad-form">
    <form action="index.php?page=post-ad" enctype="multipart/form-data" method="POST"> 

        <p>Heading:</p>
        <input type="text" name="heading" placeholder="Enter your add heading"/>

        <p>Phone number:</p>
        <input type="text" name="phoneNumber" placeholder="Enter your phone number"/>

        <p>Description:</p>
        <textarea name="description" placeholder="Enter your ad content" class="new-ad"></textarea>

        <select name="city">
                <?php
                foreach($cityModel->getAll() as $city) {
                ?>
                    <option value="<?php echo $city['id']?>"><?php echo $city['city']?></option>
                <?php
                }
                ?>
        </select>  

        <p>Photo:</p>
        <input type="file" name="file" id="file" class="inputfile" />
        <label for="file">Choose a file</label>
        <div class="error">
            <?php if(count($_POST) > 0) {
                foreach($errors as $error) {
                ?> <li> <?php echo $error; ?> </li> <?php }
                }
                ?>
        </div>
        
        <input id="post" type="submit" value="Submit"/><br /><br />
    </form>
</div>