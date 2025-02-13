<?php
session_start();
require 'filter_logic.php'; // Подключение к базе данных

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username_or_email = $_POST['username_or_email']; //получает введённое пользователем
    // имя или email из формы и сохраняет в переменную $username_or_email.
    $password = $_POST['password'];

    // Поиск пользователя в базе данных
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username_or_email OR email = :username_or_email");
    $stmt->execute(['username_or_email' => $username_or_email]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password_hash'])) {
        // Успешный вход, сохраняем данные пользователя в сессию
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];  // Сохраняем имя пользователя

        // Перенаправляем на главную страницу
        header("Location: эксперимент.php");
        exit;
    } else {
        $error = "Неверный логин или пароль.";
    }
}
?>
