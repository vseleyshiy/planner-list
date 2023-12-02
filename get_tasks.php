<?php 
$host = 'localhost';
$username = 'root';
$password = 'mysql';
$database = 'test';
$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die('Ошибка подключения: ' . mysqli_connect_error());
};

$query = "SELECT * FROM tasks ORDER BY task_date ASC, task_time ASC";

$result = mysqli_query($connection, $query);

$tasks = array();

while ($row = mysqli_fetch_assoc($result)) {
    $tasks[] = $row;
}

echo json_encode($tasks);

mysqli_close($connection);
?>