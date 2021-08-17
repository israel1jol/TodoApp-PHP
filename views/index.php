<?php include_once 'inc/header.php'; ?>
<div class="jumbotron custom-jumbotron text-white">
        <h4>Greetings!!</h4>
        <p class="lead"> 
        This Todo Web App is a user-friendly application that will help
        you assort those tedious and mind straining tasks you can't bother to remember</p>
        <?php if (user_session_is_active()): ?>
            <a href="todos.php" class="btn btn-primary" role="button">Check Your Todos</a>  
        <?php else: ?>  
            <a href="signin.php" class="btn btn-primary" role="button">Sign In</a>
        <?php endif ?>
</div>
<?php include_once 'inc/footer.php'; ?>