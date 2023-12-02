<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Планировщик</title>
</head>

<body>
    <div class="container">
        <h1 class="title">Простой планировщик</h1>
        <div id="app">
            <form action="add_task.php" method="post" class="form">
                <input type="text" name="task" id="task" placeholder="Добавить задачу" required class="input-input">
                <input type="date" name="task_date" id="task_date" required class="input-input">
                <input type="time" name="task_time" id="task_time" required class="input-input">
                <select name="priority" required class="input-input">
                    <option value="low">Низкая важность(low)</option>
                    <option value="medium">Средняя важность(medium)</option>
                    <option value="high">Высокая важность(high)</option>
                </select>
                <button type="submit">Добавить</button>
            </form>
            <ul id="task-list">

            </ul>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>