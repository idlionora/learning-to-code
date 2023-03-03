const todoList = ['Belajar HTML', 'Belajar JavaScript'];

const todoInput = document.getElementById('todolist-input');
const addTodoBtn = document.getElementById('btn-addtodo');
const cancelEditBtn = document.getElementById('btn-edit-cancel');
const confirmEditBtn = document.getElementById('btn-edit-confirm');
const todoListContainer = document.getElementById('todo-entry-container');
let todoNodes = [];
let strikedNodes = [];
let selectedTodoIndex = null;

function showTodoList() {
	let todoEntries = '';
	todoList.forEach((todo, index) => {
		todoEntries += `
        <li class="todo-entry">
            <p class="todo-text ${strikedNodes.includes(index) ? 'strike' : ''}">${todo}</p>
            <div class="todo-slide">
                <button class="btn-edittodo" aria-label="edit" onclick="editTodo(${index})"><i class="fas fa-pen" aria-hidden="true"></i></button>
                <button class="btn-deletetodo" aria-label="delete" onclick="deleteTodo(${index})"><i class="fas fa-trash" aria-hidden="true"></i></button>
            </div>
        </li>
        `;
	});
	todoListContainer.innerHTML = todoEntries;

	todoNodes = document.querySelectorAll('.todo-entry');
	todoNodes.forEach((todo, todoIndex) => {
		todo.addEventListener('click', () => slideTodoButtons(todoIndex));
		todo.children[0].addEventListener('click', (e) => {strikeText(todoIndex); e.stopPropagation()});
		todo.children[1].addEventListener('click', (e) => e.stopPropagation());	
	});
}

function addTodo() {
	todoList.push(todoInput.value);
	todoInput.value = '';
	addTodoBtn.classList.remove('active');
	showTodoList();
}

function slideTodoButtons(index) {
	//early return to troubleshoot todoNodes[index] undefined after deleting todo entry
	if (!todoNodes[index]) {
		return;
	}
	const todoButtons = todoNodes[index].children[1];

	if (todoButtons.classList.contains('show')) {
		todoButtons.classList.remove('show');
	} else {
		todoButtons.classList.add('show');
	}
}

function strikeText(index) {
	if (!todoNodes[index]) {
		return;
	}
	const todoText = todoNodes[index].children[0];

	if (!todoText.classList.contains('strike')) {
		todoText.classList.add('strike');
		strikedNodes.push(index);
		return;
	}

	slideTodoButtons(index)
}

function editTodo(index) {
	cancelEditBtn.classList.remove('hide');
	confirmEditBtn.classList.remove('hide');
	addTodoBtn.classList.add('hide');
	todoInput.value = todoList[index];
	selectedTodoIndex = index;
}

function cancelEdit() {
	cancelEditBtn.classList.add('hide');
	confirmEditBtn.classList.add('hide');
	addTodoBtn.classList.remove('hide');
	todoInput.value = '';
	selectedTodoIndex = null;
}

function confirmEdit() {
	const index = selectedTodoIndex;
	todoList[index] = todoInput.value;
	strikedNodes.splice(strikedNodes.indexOf(index), 1);
	cancelEdit();
	showTodoList();
}

function deleteTodo(index) {
	todoList.splice(index, 1);
	strikedNodes.splice(strikedNodes.indexOf(index), 1);
	showTodoList();
}

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
confirmEditBtn.addEventListener('click', confirmEdit);

showTodoList();
