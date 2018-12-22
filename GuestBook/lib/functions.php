<?php

/**
 * Функция читать текстовый файл и возвращет массив строчек
 * @param $path - путь до файла
 * @return array|bool
 */
function getArrLines(){
    $path = __DIR__ . '/../data/GuestBook.txt';
    $str = file_get_contents($path);
     return explode(PHP_EOL, $str);
}

/**
 * Функция добавляет строчку в конец файла
 * @param $path - путь до файла
 * @param $lastLine - добавляемая строка
 */
function saveNewLine($lastLine){
    $path = __DIR__ . '/../data/GuestBook.txt';
    $arrLines = getArrLines($path);
    $arrLines[] = $lastLine;
    $stringWithAllLines = implode(PHP_EOL,$arrLines);
    file_put_contents($path,$stringWithAllLines);
}
