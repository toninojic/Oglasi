<form action="index.php?page=post-ad" enctype="multipart/form-data" method="POST">
    <p>Heading:</p>
    <input type="text" name="heading" placeholder="Enter your add heading"/>
    <p>Phone number:</p>
    <input type="text" name="phoneNumber" placeholder="Enter your phone number"/>
    <p>Description:</p>
    <textarea name="description" placeholder="Enter your ad content" class="new-ad"></textarea>
    <p>Photo:</p>
    <input type="file" name="myFile" /><br /><br />

    <!-- <div class="error"><?php echo $errors;?></div> -->
    <input type="submit" value="Submit"/><br /><br />
    </form>