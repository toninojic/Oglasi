<div>
    <h1>This is Login page</h1>
</div>


<div class="login">

    <form action="index.php?page=login" method="POST">
        <p>Username:</p><br />
        <input type="text" name="username" placeholder="Enter your username"><br />
        <p>Password:</p><br />
        <input type="password" name="password" placeholder="Enter your password"><br />
        <input type="submit" value="Login">
        <div class="error"><p><?php echo $errors;?></p></div>
    </form>

</div>