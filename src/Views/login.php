<div class="login-form">
    <form action="index.php?page=login" method="POST">
        <p>Username:</p>
        <input type="text" name="username" placeholder="Enter your username">
        <p>Password:</p>
        <input type="password" name="password" placeholder="Enter your password">
        <div class="error"><p><?php echo $errors;?></p></div>
        <input id="login" type="submit" value="Login">
    </form>

</div>