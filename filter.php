<?php
session_start();

// Проверяем, авторизован ли пользователь
if (!isset($_SESSION['user_id'])) {
    header("Location: эксперимент.php"); // Перенаправляем на страницу входа, если не авторизован
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фильтрация животных</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<main class="container mt-5">
    <h2>Фильтрация животных</h2>

    <!-- Форма фильтрации -->
    <form id="filter-form" class="row g-3">
        <div class="col-md-4">
            <label for="animal_name" class="form-label">Имя животного</label>
            <input type="text" class="form-control" id="animal_name" name="animal_name" placeholder="Введите имя животного">
        </div>
        <div class="col-md-4">
            <label for="owner_name" class="form-label">Имя владельца</label>
            <input type="text" class="form-control" id="owner_name" name="owner_name" placeholder="Введите имя владельца">
        </div>
        <div class="col-md-4">
            <label for="birth_year_min" class="form-label">Год рождения (от)</label>
            <input type="number" class="form-control" id="birth_year_min" name="birth_year_min" placeholder="Минимальный год рождения">
        </div>
        <div class="col-md-4">
            <label for="birth_year_max" class="form-label">Год рождения (до)</label>
            <input type="number" class="form-control" id="birth_year_max" name="birth_year_max" placeholder="Максимальный год рождения">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Применить фильтр</button>
            <button type="reset" class="btn btn-danger">Очистить фильтр</button>
        </div>
    </form>

    <!-- Здесь будут отображаться результаты фильтрации -->
    <div id="filter-results" class="mt-5">
        <!-- Результаты фильтрации будут загружаться сюда через AJAX -->
    </div>
</main>

<!-- Подключение jQuery для работы с AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Обработчик отправки формы с использованием AJAX
    $('#filter-form').on('submit', function(event) {
        event.preventDefault(); // Предотвращаем стандартное действие формы

        $.ajax({
            url: 'filter_view.php', // Путь к PHP-файлу для обработки фильтрации
            method: 'GET',
            data: $(this).serialize(), // Получаем данные формы
            success: function(response) {
                $('#filter-results').html(response); // Вставляем результаты под форму
            },
            error: function() {
                $('#filter-results').html('<p class="alert alert-danger">Ошибка загрузки данных.</p>');
            }
        });
    });
    // Автоматически установить минимальный и максимальный год рождения из базы данных
    $(document).ready(function() {
        $.ajax({
            url: 'get_birth_year_range.php', // Путь к PHP-файлу для получения минимального и максимального года рождения
            method: 'GET',
            success: function(response) {
                const range = JSON.parse(response);
                $('#birth_year_min').attr('min', range.min).attr('value', range.min);
                $('#birth_year_max').attr('max', range.max).attr('value', range.max);
            },
            error: function() {
                console.log('Ошибка загрузки диапазона годов рождения.');
            }
        });
    });
</script>

</body>
</html>

