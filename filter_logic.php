<?php
// Подключение к базе данных через PDO
$servername = "localhost";
$username = "root"; // Имя пользователя MySQL
$password = ""; // Пароль MySQL
$dbname = "averia"; // Название базы данных

try {
    // Создаем экземпляр PDO для подключения
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Устанавливаем режим обработки ошибок PDO на исключения
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Если ошибка подключения
    die("Ошибка подключения: " . $e->getMessage());
}

// Получение параметров фильтра
$animal_name = isset($_GET['animal_name']) ? $_GET['animal_name'] : '';
$owner_name = isset($_GET['owner_name']) ? $_GET['owner_name'] : '';
$birth_year_min = isset($_GET['birth_year_min']) ? $_GET['birth_year_min'] : '';
$birth_year_max = isset($_GET['birth_year_max']) ? $_GET['birth_year_max'] : '';

// Формирование SQL-запроса с использованием плейсхолдеров для предотвращения SQL-инъекций
$sql = "SELECT animals.id AS animal_id, animals.photo, animals.name AS animal_name, animals.description, animals.birth_year, owners.name AS owner_name 
        FROM animals 
        JOIN owners ON animals.owner_id = owners.id 
        WHERE 1=1";

// Создаем массив для параметров запроса
$params = [];

// Фильтрация по имени животного
if (!empty($animal_name)) {
    $sql .= " AND animals.name LIKE :animal_name";
    $params[':animal_name'] = '%' . $animal_name . '%';
}

// Фильтрация по имени владельца
if (!empty($owner_name)) {
    $sql .= " AND owners.name LIKE :owner_name";
    $params[':owner_name'] = '%' . $owner_name . '%';
}

// Фильтрация по диапазону года рождения
if (!empty($birth_year_min)) {
    $sql .= " AND animals.birth_year >= :birth_year_min";
    $params[':birth_year_min'] = $birth_year_min;
}
if (!empty($birth_year_max)) {
    $sql .= " AND animals.birth_year <= :birth_year_max";
    $params[':birth_year_max'] = $birth_year_max;
}

// Подготовка SQL-запроса с использованием PDO
$stmt = $conn->prepare($sql);

// Выполнение запроса с параметрами
$stmt->execute($params);

// Получение результатов
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>