<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root"; // Имя пользователя MySQL
$password = ""; // Пароль MySQL
$dbname = "averia"; // Название базы данных

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Запрос на получение минимального и максимального года рождения
$sql = "SELECT MIN(birth_year) AS min_year, MAX(birth_year) AS max_year FROM animals";
$result = $conn->query($sql);

if ($result && $row = $result->fetch_assoc()) {
    // Возвращаем данные в формате JSON
    echo json_encode(['min' => $row['min_year'], 'max' => $row['max_year']]);
} else {
    // Если произошла ошибка
    echo json_encode(['min' => 0, 'max' => 0]);
}

$conn->close();
?>
