const todoList = ["Belajar HTML", "Belajar JavaScript"];

const todoInput = document.getElementById("todolist-input");
const addBtn = document.getElementById('btn-addtodo');
const todoListContainer = document.getElementById("todo-entry-container");

function showTodoList() {
    let todoEntries = "";
    todoList.forEach((todo, index) => {
        todoEntries += `
        <li class="todo-entry">
            <p class="todo-text">${todo}</p>
            <div class="todo-slide">
                <button class="btn-edittodo" aria-label="edit" onclick="editTodo(${index})"><i class="fas fa-pen" aria-hidden="true"></i></button>
                <button class="btn-deletetodo" aria-label="delete" onclick="deleteTodo(${index})"><i class="fas fa-trash" aria-hidden="true"></i></button>
            </div>
        </li>
        `
    });
    todoListContainer.innerHTML = todoEntries;
}

function addTodo() {
    todoList.push(todoInput.value);
    todoInput.value = "";
    addBtn.classList.remove("active");
    showTodoList();
}

todoInput.addEventListener("keyup", e => {
    let todoValue = e.target.value;
    if (todoValue.trim().length != 0) {
		addBtn.classList.add('active');
	} else {
		addBtn.classList.remove('active');
	}
});

addBtn.addEventListener("click", addTodo)
showTodoList();
