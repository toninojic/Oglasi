<div class="contact-form">
    <div class="about-us">
        <div class="contact-text">
            <h1>Let's chat. </br> Tell us about your problem. </h1>
            <p>Let's solve something together 🤟</p>
        </div>

        <div class="form">
            <p>Send us a message🚀</p>
            <form action="index.php?page=contact" method="POST">
            <p>Full-name:</p>
            <input class="contact-data" type="text" name="fullname" placeholder="Enter your full-name">
            <p>Subject:</p>
            <input class="contact-data" type="text" name="subject" placeholder="Subject">
            <p>Message:</p>
            <textarea class="contact-message" name="message" placeholder="Enter your message" id="text-area"></textarea>
            <div class="error">
                <?php if(count($_POST) > 0) {
                    foreach($errors as $error) {
                    ?> <li> <?php echo $error; ?> </li> <?php }
                    }
                    ?>
            </div>
            <input id="send" type="submit" value="Send">
        </form>
    </div>
    </div>
</div>