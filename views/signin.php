<?php include_once 'inc/header.php'; ?>
<div class="custom-form p-3 d-flex align-items-center bg-dark text-white">
    <div class="mx-auto p-4">
        <h3 class=" p-3">SIGN IN</h3>
            <form action="signin.php" method="POST" id="signin-form">
            <?php if ($error === ''): ?>
                <div></div>
            <?php else: ?>  
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif ?>
                <div class="form-group">
                    <label for="">Username/Email</label>
                    <input type="text" name="user" class="form-control" id="signin-user" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="pwd" class="form-control" id="signin-pwd" required>
                </div>
                <input type="submit" value="Sign In" class="btn btn-primary"><p>Don't have an account?<a class="nav-link" href="signup.php">Sign Up</a></p>
            </form>
    </div>

</div>
<?php include_once 'inc/footer.php'; ?>