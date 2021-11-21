// Step 1 - Get the task from input field
const add = document.getElementById("add");
add.addEventListener("click", e => {
  let value = document.querySelector("#newtask input").value;
  if (value.length == 0) {
    alert("Please enter a task");
    return false;
  }

  addTodoItem(value);
});

// Step 2 - Add the task in todo list
function addTodoItem(task) {
  let randomNo = Math.floor(Math.random() * 9999);
  let id = "task-" + randomNo;

  let html =
    '<div id="' +
    id +
    '" class="task"><span id="taskname">' +
    task +
    '</span><button class="delete" onclick="deleteItem(' +
    randomNo +
    ')" ><i class="fa fa-trash-alt"></i></button></div>';

  document.querySelector("#tasks").innerHTML += html;
  document.querySelector("#newtask input").value = "";
}

// Step 3 - Delete the task
function deleteItem(randomNo) {
  let id = "task-" + randomNo;
  document.getElementById(id).remove();
}
