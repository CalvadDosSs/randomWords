<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/view/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/funс/addNewWord.php';

$word = htmlspecialchars($_POST['new_word'], ENT_QUOTES);
$translate = htmlspecialchars($_POST['new_translate'], ENT_QUOTES);

?>

<h2 class="add_h2">Добавить новое слово</h2>

<?php echo addNewWord($word, $translate); ?>

<form action="/add.php" method="post">
    <input type="text" name="new_word" id="new_word" class="custom_input custom_input_add" required>
    <label for="new_word" class="add_new_word_text">Новое слово</label> <br />
    <input type="text" name="new_translate" id="new_translate" class="custom_input" required>
    <label for="new_translate" class="add_new_word_text">Перевод слова</label> <br />
    <input type="submit" class="btn btn-primary custom_btn_add" value="Отправить">
</form>

<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/view/footer.php';
