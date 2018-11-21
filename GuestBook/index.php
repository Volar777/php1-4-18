<?php
include __DIR__ . '/lib/functions.php';
$path = __DIR__ . '/data/GuestBook.txt';
if(isset($_POST['comment'])){
    $lastLine = trim($_POST['comment']);
    saveNewLine($path,$lastLine);
}
$arrLines = getArrLines($path);
?>
<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Гостевая книга</title>
</head>
<body>
<h1> Гостевая книга</h1>
<?php
foreach($arrLines as $line){
?>
    <p> <?php echo $line;?></p>
<?php
}
?>
<form method="post">
<p><textarea name="comment"></textarea></p>
<p><button type="submit">Отправить</button></p>
</form>

</body>
</html>