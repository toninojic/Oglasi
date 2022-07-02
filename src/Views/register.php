<div class="register-form">
    <form action="index.php?page=register" method="POST">
        <p>Full name:</p>
        <input type="text" name="fullName" placeholder="Enter your full name"/>
        <p>Username:</p>
        <input type="text" name="username" placeholder="Enter your username"/>
        <p>Email:</p>
        <input type="text" name="email" placeholder="Enter your email"/>
        <p>Password:</p>
        <input type="password" name="password" placeholder="Enter password"/>
        <p>Confirm password:</p>      
        <input type="password" name="passwordConfirm" placeholder="Confirm password"/>
        <div class="error"><p><?php echo $errors;?></p></div>
        <input id="register" type="submit" value="Register"/>
        <p>Already have an account? Please <a href="index.php?page=login">login</a> here.</p>
    </form>

</div>