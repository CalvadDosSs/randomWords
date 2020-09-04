<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/view/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/funс/getWords.php';

$count = htmlspecialchars($_POST['count'], ENT_QUOTES);
$count = intval($count);

if (! is_int($count) || $count == '' || $count == null) {

    $count = 10;
}

$words = getWords($count);

?>

<p class="search_answer">Сколько вывести?</p>

<form action="/" method="post">
    <input type="text" name="count" class="custom_input">
    <input type="submit" class="btn btn-primary" value="Отправить">
</form>

<hr>

<h2>Слова:</h2>

<ul>
    <?php for ($i = 0; $i < $count; $i++) : ?>
        <li><span class="word" title="<?=$words[$i]['translate']?>"><?= $words[$i]['word']; ?></span></li>
    <?php endfor; ?>
</ul>

<p class="hint">* Перевод слова высветится при наведении</p>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/footer.php'; ?>
