<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoApp</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="navbar navbar-light bg-light text-dark p-1">
        <h3><a href="index.php" class="nav-link">MyTodoApp</a></h3>
        <?php if(isset($user)) : ?>
        <div class="d-flex"> 
            <div class="btn-lg m-2 alert-primary"><?php echo $user; ?></div>
            <a href="logout.php" class="btn btn-secondary m-2">LogOut</a>
        </div>
        <?php endif ?>
    </div>