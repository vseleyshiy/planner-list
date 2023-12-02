function deleteTask(taskId) {
    if(confirm('Вы уверены, что хотите удалить эту задачу?')) {
        fetch(`delete_task.php?id=${taskId}`, {
            method: 'GET'
        })
        .then(() => {
            window.location.reload();
        })
        .catch(Error => {
            alert('Произошла ошибка при удалении задачи');
        });
    }
}

function loadTask() {
    fetch('get_tasks.php')
    .then(Response => Response.json())
    .then(data=> {
        const taskList = document.getElementById('task-list');

        taskList.innerHTML = '';

        data.forEach(task => {
            const listItem = document.createElement('li');
            const taskDate = new Date(task.task_date + 'Т' + task.task_time);
            const currentDate = new Date();

            listItem.innerHTML = `Дата: ${task.task_date}<br>Время: ${task.task_time}<br>Задача: ${task.task}<br>Важность: ${task.priority}`;
            listItem.classList = 'list-item';

            if (taskDate < currentDate) {
                listItem.style.backgroundColor = 'red';
            } else if (taskDate.toDateString() === currentDate.toDateString()){
                listItem.style.backgroundColorcolor = 'green';
            }

            listItem.innerHTML += `<button class='delete-button' onclick = "deleteTask(${task.id})">Удалить</button>`;
            taskList.appendChild(listItem);
        });
    })
    .catch(Error => {
        alert('Произошла ошибка при загрузке задач.'); 
    });
}

loadTask();