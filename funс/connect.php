<?php

/*
 * Коннект к БД
 *
 * [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] для проверки на ошибки
 */

$dsn = 'mysql:host=localhost;dbname=english';
$pdo = new PDO($dsn, 'mysql', 'mysql', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
