<?php

/*
 * Подключение файла коннекта к БД
 * $pdo объявлена в файле с подключением, экземпляр класса PDO
 */

function addNewWord($word, $translate) {

    require_once $_SERVER['DOCUMENT_ROOT'] . '/funс/connect.php';

    $sql = "INSERT INTO words (word, translate) VALUES (:word, :translate);";

    if ($word != '' && $translate != '') {
        $query = $pdo->prepare($sql);
        $query->execute(['word' => $word, 'translate' => $translate]);

        return '<p class="alert alert-success">Слово добавлено</p>';
    } else {

        return '<p class="alert alert-danger">Введите слово</p>';
    }
}
