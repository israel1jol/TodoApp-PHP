<?php include_once 'inc/header.php'; ?>
<div class="bg-dark text-white p-3 d-flex align-items-center">
    <div class="p-4">
        <h3 class=" p-3 text-center">SIGN UP</h3>
        <form action="signup.php" method="POST" id="signup-form">
            <?php if (isset($error)): ?>
                <div class="aler alert-warning"><?php echo $error; ?></div>
            <?php else: ?>  
                <div></div>
            <?php endif ?>
            <div class="form-group">
                <label for="">FirstName</label>
                <input type="text" name="fname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">LastName</label>
                <input type="text" name="lname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="pwd" class="form-control" required>
            </div>
            <input type="submit" value="Sign Up" class="btn btn-primary" name="submit">
        </form>
    </div>
</div>
<?php include_once 'inc/footer.php'; ?>