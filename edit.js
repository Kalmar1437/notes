
function showEditForm(){
    let id = this.id;
    let button = document.getElementById(`${id}`);

    let value = button.parentElement.previousElementSibling.firstElementChild.innerText;
    let form = button.parentElement.previousElementSibling;
    form.colSpan = '3';
    form.style.width = '100%';
    form.innerHTML = `
    <form action=\'editNote.php\' method=\'post\' class=\'editForm\'>
        <input class=\"input\" type=\"text\" name=\"editedNote\" id =\"editInput\" value=\'${value}\'>
        <input class=\'hiddenId\' type=\"text\" name=\"id\" value=\'${id}\'>
        <button type=\'submit\' name=\'edited\' class=\'formButtons\'>submit</button>
        <button class=\'formButtons\'>cancel</button>
    </form>`;
    button.style.display = 'none';
    function cancel(){
        button.style.display = 'inline-block';
        form.colSpan = '2';
        form.style.width = '80%';
        form.innerHTML = `<div class = \'note\'>${value}</div>`;
    }
    document.querySelectorAll(".cancel").forEach(item => item.onclick=cancel);

}

document.querySelectorAll(".edit").forEach(item => item.onclick=showEditForm);

