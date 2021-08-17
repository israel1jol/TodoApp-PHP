<?php include_once 'inc/header.php'; ?>
    <div id="container-wrapper">
        <div class='contain'>
            <div class="d-flex justify-content-center m-3">
                <div class='p-4 badge-dark m-2'>My Todos</div>
                    <input type='button' value='Add todo' class='btn btn-primary btn-sm m-2' id='add-btn' onclick='add_modal()'>
            </div>
            <ul class='list-group'>
                <?php foreach($todos as $todo_arr): ?>
                <li class="list-group-item m-2">
                    <p class="lead"><?php echo $todo_arr['title']; ?></p>
                    <form action="todos.php" method="POST">
                        <input type="hidden" name="pk" value="<?php echo $todo_arr['id']; ?>">
                        <input type="submit" name="is_comp" class="btn <?php echo $todo_arr['is_completed'] == 1 ? 'btn-success' : 'alert-danger'; ?> m-2" value=<?php echo $todo_arr['is_completed'] == 1 ? 'complete' : 'incomplete'; ?>>
                    </form>
                    <form action="todos.php" method="post">
                        <input type="hidden" name="pk" value="<?php echo $todo_arr['id']; ?>">
                        <input type="submit" class="btn m-2 btn-danger" value="Delete" name="del">
                    </form>
                </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>

<?php include_once 'inc/footer.php'; ?>