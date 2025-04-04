<form method="post">
    <textarea name="text" placeholder="Введите текст..."><?=isset($_POST['text']) ? htmlspecialchars($_POST['text']) : ''?></textarea>
    <br>
    <button type="submit">Посчитать даты</button>
</form>

<?php
if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['text']))
{
    $text = $_POST['text'];
    $сount = 0;

    $pattern = '/\b(0?[1-9]|[12][0-9]|3[01])\.(0?[1-9]|1[0-2])\.(\d{4})\b/'; //Example: 29.3.2005
    preg_match_all($pattern, $text, $matches);
    $сount = count($matches[0]);

    echo "Количество дат: $сount";
}
?>