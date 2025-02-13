<?php
session_start();

// Проверка, если пользователь уже авторизован
if (isset($_SESSION['user_id'])) {
    // Перенаправляем авторизованного пользователя в личный кабинет или на главную
    header("Location: эксперимент.php"); // Замените account.php на страницу личного кабинета
    exit();
}
?>
<?php include 'login_logic.php'; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <!-- Подключение Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            padding: 2rem;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <h2 class="text-center">Вход</h2>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>
            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="username_or_email">Имя пользователя или Email</label>
                    <input type="text" class="form-control" id="username_or_email" name="username_or_email" placeholder="Введите имя пользователя или Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Введите пароль" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Войти</button>
                <p class="text-center mt-3">Нет аккаунта? <a href="register.php">Зарегистрироваться</a></p>
            </form>
        </div>
    </div>
</div>
<!-- Подключение Bootstrap JavaScript (необходимо для некоторых компонентов Bootstrap) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
