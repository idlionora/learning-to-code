const todoList = ['Belajar HTML', 'Belajar JavaScript'];

const todoInput = document.getElementById('todolist-input');
const addTodoBtn = document.getElementById('btn-addtodo');
const cancelEditBtn = document.getElementById('btn-edit-cancel');
const confirmEditBtn = document.getElementById('btn-edit-confirm');
const todoListContainer = document.getElementById('todo-entry-container');
let selectedTodoIndex = null;

console.log(cancelEditBtn);
console.log(confirmEditBtn);

function showTodoList() {
	let todoEntries = '';
	todoList.forEach((todo, index) => {
		todoEntries += `
        <li class="todo-entry">
            <p class="todo-text">${todo}</p>
            <div class="todo-slide">
                <button class="btn-edittodo" aria-label="edit" onclick="editTodo(${index})"><i class="fas fa-pen" aria-hidden="true"></i></button>
                <button class="btn-deletetodo" aria-label="delete" onclick="deleteTodo(${index})"><i class="fas fa-trash" aria-hidden="true"></i></button>
            </div>
        </li>
        `;
	});
	todoListContainer.innerHTML = todoEntries;
};

function addTodo() {
	todoList.push(todoInput.value);
	todoInput.value = '';
	addTodoBtn.classList.remove('active');
	showTodoList();
};

function editTodo(index) {
    cancelEditBtn.classList.remove("hide");
    confirmEditBtn.classList.remove("hide");
    addTodoBtn.classList.add("hide");
    todoInput.value = todoList[index];
    selectedTodoIndex = index;
};

function cancelEdit() {
    cancelEditBtn.classList.add("hide");
    confirmEditBtn.classList.add("hide");
    addTodoBtn.classList.remove("hide");
    todoInput.value = "";
    selectedTodoIndex = null;
};

function confirmEdit() {
    todoList[selectedTodoIndex] = todoInput.value;
    cancelEdit();
    showTodoList();
};

function deleteTodo(index) {
    todoList.splice(index, 1);
    showTodoList()
};

todoInput.addEventListener('keyup', (e) => {
	let todoValue = e.target.value;
	if (todoValue.trim().length != 0) {
		addTodoBtn.classList.add('active');
	} else {
		addTodoBtn.classList.remove('active');
	}
});

addTodoBtn.addEventListener('click', addTodo);
cancelEditBtn.addEventListener('click', cancelEdit);
confirmEditBtn.addEventListener("click", confirmEdit);

showTodoList();
