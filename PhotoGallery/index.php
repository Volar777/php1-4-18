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
    <title>Фото альбом</title>
</head>
<body>
<a href="/PhotoGallery/upload.php">Загрузить фото</a><br>
<h3>Фото альбом</h3>
<?php
$img = myFilels();
foreach ($img as $item)
{ ?>
    <img src='/PhotoGallery/foto/<?php echo $item; ?>'  width="184" ><br>
<?php } ?>

</body>
</html>

