const modal = `
        <div class="animated-modal">
            <div class='custom-modal'>
                <h3>Add Todo</h3>
                <i class='cancel-btn' onclick='remove_modal()'>&times;</i>
                <form action='todos.php' method='post' id='custom-modal-form'>
                    <div class='form-group'>
                        <label>Name</label>
                        <input type='text' name='todo-name' class='form-control-sm' required autofocus>
                    </div>
                    <div class='form-group'>
                        <label>Completed</label>
                        <select name='todo-comp' class="form-control-sm">
                            <option>complete</option>
                            <option>incomplete</option>
                        </select>
                    </div>
                    <input type='submit' value='Submit Todo' class='btn btn-success btn-sm' name="add-todo">
                </form>
            </div>
        </div>
    `;


function add_modal(){
    let container = $('container-wrapper');
    container.innerHTML += modal;
}
function remove_modal(){
    let container = $('container-wrapper');
    container.lastElementChild.className = 'deanimated-modal';
    setTimeout(()=>{
        container.removeChild(container.lastElementChild);
    }, 2000)
}



function $(id){
    return document.getElementById(id);
}