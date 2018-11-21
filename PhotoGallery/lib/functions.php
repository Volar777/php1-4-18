<?php

/**
 * Функция фозвращет массив имен фото из указаной директории
 * @param $path - директория для с фото
 * @return array - массив имен фото
 */
function myFilels ($path)
{
    $nameFilse = scandir($path);
    $images = [];
    foreach ($nameFilse as $name) {
        $parsName = pathinfo($name);
        if ('jpg' == $parsName['extension'] or 'png' == $parsName['extension']) {
            $images[] = $name;
        }
    }
    return $images;
}
//C:\OSPanel\domains\php1-4-local-18\PhotoGallery\lib\functions.php
/**
 * Функция проверяеттип файла и записывает в директорию с фото
 * @param $path - директория для с фото
 * @return bool - если нужный тип файла, то возвращает true, если не нужный тип файла, то возвращает тип файла
 */
function incomingFile($path)
{
    if (isset($_FILES['img']) ) {
        if ('image/jpeg' === $_FILES['img']['type'] or 'image/png'  === $_FILES['img']['type']) {
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
