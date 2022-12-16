<?php
include('server.php');
include('includes/header.php'); ?>

<div id="wrapper">

<h1 class="center">Login</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ; ?>" method="post" >
    <fieldset>
        <label>Username</label>
        <input type="text" name="user_name" value="<?php if(isset($_POST['user_name'])) echo $_POST['user_name'] ;?>">
        <label>Password</label>
        <input type="password" name="password">

        <button type="submit" class="btn" name="login_user">Login</button>

        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>' ">Reset</button>

        <?php include('errors.php');?>
    </fieldset>
</form>
    <h3>Not a member?</h3>
    <span class="block"><a href="register.php">Register Page!</a></span>

</div>
<?php include('includes/footer.php');