<?php 
$host = 'localhost';
$username = 'root';
$password = 'mysql';
$database = 'test';
$connection = mysqli_connect($host, $username, $password, $database);
if (!$connection) {
    die('Ошибка подключения: ' . mysqli_connect_error());
};

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($connection, $_GET['id']);

    $query = "DELETE FROM tasks WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    if($result) {
        
    } else {

    }
}

mysqli_close($connection);
?>