<?php

/**
 * Функция читать текстовый файл и возвращет массив строчек
 * @param $path - путь до файла
 * @return array|bool
 */
function getArrLines($path){
    return file($path,FILE_IGNORE_NEW_LINES);
}

/**
 * Функция добавляет строчку в конец файла
 * @param $path - путь до файла
 * @param $lastLine - добавляемая строка
 */
function saveNewLine($path,$lastLine){
    $arrLines = getArrLines($path);
    $arrLines[] = $lastLine;
    $stringWithAllLines = implode(PHP_EOL,$arrLines);
    file_put_contents($path,$stringWithAllLines);
}
