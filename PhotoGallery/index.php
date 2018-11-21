<?php

include __DIR__ . '/lib/functions.php';
$path = __DIR__ . '/foto';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if(incomingFile($path) !== true and isset($_FILES['img'])){
    ?>
<p>Не тот тип файла</p>
<?php }

$img = myFilels($path);
foreach ($img as $item)
{ ?>
    <img src='/PhotoGallery/foto/<?php echo $item; ?>'  width="184" ><br>
<?php } ?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <button type="submit">Отправить</button>
</form>


</body>
</html>

