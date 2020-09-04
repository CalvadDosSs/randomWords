<?php

/*
 * Подключение файла коннекта к БД
 * $pdo объявлена в файле с подключением, экземпляр класса PDO
 *
 * Делаем 2 запроса в БД, 1 нужен для получения количества строк id
 * нужно для получения рандомного числа, для вывода случайных слов.
 *
 * После получения случ. числа, делаем проверку в массиве счислами, если нет, то добавляем его в массив и делаем запрос, получаем слово
 * Если число есть, то мы возвращаемся на 1 иттерацию назад, так как $count - заданное число в форме
 *
 * В $words массив со словами получ. из БД.
 */

function getWords($count = 10) {

    require_once $_SERVER['DOCUMENT_ROOT'] . '/funс/connect.php';

    $query = $pdo->query("SELECT COUNT(id) FROM words;");
    $rowCount = $query->fetch(PDO::FETCH_ASSOC);

    $randArray = [];
    $words = [];

    for ($i = 0; $i < $count; $i++) {

        $rand = rand(1, $rowCount['COUNT(id)']);

        if (in_array($rand, $randArray)) {

            $i--;
        } else {

            $randArray[] = $rand;
            $getWord = $pdo->query("SELECT word, translate FROM words WHERE id='$rand';");
            $words[] = $getWord->fetch(PDO::FETCH_ASSOC);
        }
    }

    return $words;
}
