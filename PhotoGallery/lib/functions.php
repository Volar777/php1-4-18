<?php

/**
 * Функция фозвращет массив имен фото из указаной директории
 * @return array - массив имен фото
 */
function myFilels ()
{
    $path = __DIR__ . '/../foto';
    $nameFilse = scandir($path);
    $images = [];
    foreach ($nameFilse as $name) {
        $parsName = pathinfo($name);
        if ('jpg' == $parsName['extension'] || 'png' == $parsName['extension']) {
            $images[] = $name;
        }
    }
    return $images;
}

/**
 * Функция проверяет тип файла и записывает в директорию с фото
 * @return bool - если нужный тип файла, то возвращает true, если не нужный тип файла, то возвращает тип файла
 */
function incomingFile()
{
    $path = __DIR__ . '/../foto';
    if (isset($_FILES['img']) ) {
        if ('image/jpeg' === $_FILES['img']['type'] || 'image/png'  === $_FILES['img']['type']) {
            if (0 == $_FILES['img']['error']) {
                move_uploaded_file(
                    $_FILES['img']['tmp_name'],
                    $path . '/' . $_FILES['img']['name']
                );
            }
            return true;
        } else{
            return false;
        }
    }
}
