<?php
// Установка заголовка страницы
$title = "Добро пожаловать на мой сайт!";
$header = "Привет, мир!";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e1e1e1;
        }
        header {
            background-color: #2a2a2a;
            color: white;
            padding: 20px;
            text-align: center;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #2a2a2a;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1><?php echo $header; ?></h1>
</header>

<main>
    <h2>Добро пожаловать на мой сайт!</h2>
    <p>Здесь вы можете найти много интересного контента.</p>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Мой Сайт</p>
</footer>

</body>
</html>
