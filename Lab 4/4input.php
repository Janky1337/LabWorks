<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['type'], $_POST['cost'])) {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['type'] = $_POST['type'];
    $_SESSION['cost'] = $_POST['cost'];
    
    header('Location: 4output.php');
    exit;
}
?>
<h3>Введите данные о страховке:</h3>
<form method="post">
    Название страховки: <input type="text" name="name" value="<?= isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : '' ?>" required><br>
    Тип страховки: <input type="text" name="type" value="<?= isset($_SESSION['type']) ? htmlspecialchars($_SESSION['type']) : '' ?>" required><br>
    Стоимость: <input type="number" name="cost" value="<?= isset($_SESSION['cost']) ? htmlspecialchars($_SESSION['cost']) : '' ?>" required><br>
    <button type="submit">Сохранить</button>
</form>