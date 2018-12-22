<?php
include __DIR__ . '/lib/functions.php';
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Загрузка фото</title>
</head>
<body>
<h3>Загрузка фото форматов image/png</h3>
<?php
if (isset($_FILES['img'])) {
    if (incomingFile() === true ) {
        ?>
        <p>Файл загружен успешно</p>
    <?php } else { ?>
        <p>Не тот формат файла</p>
        <?php
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <button type="submit">Отправить</button>
</form>
<br><a href="/PhotoGallery/index.php">Вернуться в фото альбом</a><br>
</body>
</html>

