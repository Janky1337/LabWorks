<h3>Введенные данные:</h3>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['name'], $_SESSION['type'], $_SESSION['cost'])) {
    echo "Название страховки: " . htmlspecialchars($_SESSION['name']) . "<br>";
    echo "Тип страховки: " . htmlspecialchars($_SESSION['type']) . "<br>";
    echo "Стоимость: " . htmlspecialchars($_SESSION['cost']);
}
?>