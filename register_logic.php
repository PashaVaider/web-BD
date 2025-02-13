<?php
session_start();
require 'filter_logic.php'; // Подключение к базе данных

// Проверяем, если пользователь уже авторизован
if (isset($_SESSION['user_id'])) {
    echo "Вы уже авторизованы как " . $_SESSION['username'] . ". <a href='logout.php'>Выйти</a>";
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    //выражение для проверки  пароля
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\s\-_!@#$%^&*(),.+=<>?\/|`~])[a-zA-Z\d\s\-_!@#$%^&*(),.+=<>?\/|`~]{7,}$/";

    // Валидация данных
    if (empty($username) || empty($email) || empty($password) || empty($password_confirm)) {
        $error = "Все поля обязательны для заполнения.";
    } elseif ($password !== $password_confirm) {
        $error = "Пароли не совпадают.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Неверный формат email.";
    } elseif (!preg_match($pattern, $password)) {
        $error = "Пароль должен быть длиннее 6 символов,
         содержать большие и маленькие латинские буквы, цифры, спецсимволы, пробел,
          дефис или подчёркивание. Русские буквы не допускаются.";
    } else {
        // Проверка, существует ли пользователь с таким email или username
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email OR username = :username");
        $stmt->execute(['email' => $email, 'username' => $username]);

        if ($stmt->rowCount() > 0) {
            $error = "Имя пользователя или email уже заняты.";
        } else {
            // Хешируем пароль
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

            try {
                // Вставка данных в базу
                $stmt = $conn->prepare("INSERT INTO users (username, email, password_hash) VALUES (:username, :email, :password_hash)");
                $stmt->execute(['username' => $username, 'email' => $email, 'password_hash' => $password_hash]);

                // Перенаправляем на страницу входа
                header("Location: login.php");
                exit;
            } catch (PDOException $e) {
                echo "Ошибка при добавлении данных в базу: " . $e->getMessage();
            }
        }
    }
}
?>
