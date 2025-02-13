<?php include 'filter_logic.php'; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результаты фильтрации</title>
    <!-- Подключение Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Результаты фильтрации</h2>

    <!-- Проверка на наличие результатов -->
    <?php if ($results): ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Фото</th>
                <th>Имя животного</th>
                <th>Описание</th>
                <th>Год рождения</th>
                <th>Имя владельца</th>
            </tr>
            </thead>
            <tbody>
            <!-- Вывод результатов -->
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><img src="<?php echo htmlspecialchars($row['photo']); ?>" alt="Фото животного" width="100"></td>
                    <td><?php echo htmlspecialchars($row['animal_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['description']); ?></td>
                    <td><?php echo htmlspecialchars($row['birth_year']); ?></td>
                    <td><?php echo htmlspecialchars($row['owner_name']); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p class="alert alert-warning">Результаты не найдены.</p>
    <?php endif; ?>
</div>

<!-- Подключение Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Закрытие соединения с базой данных
$conn = null;
?>
