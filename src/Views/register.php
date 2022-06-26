<div>
    <h1>This is Register page</h1>
</div>


<div class="register-form">
    
    <form action="index.php?page=register" method="POST">
        Full name:<br />
        <input type="text" name="fullName" placeholder="Enter your full name"/><br />
        Username:<br />
        <input type="text" name="username" placeholder="Enter your username"/><br />
        Email:<br />
        <input type="text" name="email" placeholder="Enter your email"/><br />
        Password:<br />        
        <input type="password" name="password" placeholder="Enter password"/><br />
        Confirm password:  <br />       
        <input type="password" name="passwordConfirm" placeholder="Confirm password"/><br /><br /> 

        <div class="error"><p><?php echo $errors;?></p></div>
        <input type="submit" value="Register"/>
    </form>

</div>