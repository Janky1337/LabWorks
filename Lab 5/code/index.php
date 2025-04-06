<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab Work 5. Var 24</title>
</head>
<body>
    <form action="save.php" method="post">
        <label for="email">Email</label>
        <input type="email", name="email" required>
        </br>
        <label for="category">Категория</label>
        <select name="category" required>
            <?php
            if ($folder = opendir('categories/')) {
                while (($file = readdir($folder)) !== false) {
                    if ($file != "." && $file != ".." && is_dir('categories/' . $file)) {
                        $name = ucfirst($file);
                        echo '<option value="' . htmlspecialchars($file) . '">' . htmlspecialchars($name) . '</option>' . "\n";
                    }
                }
                closedir($folder);
            }
            ?>
        </select>
        </br>
        <label for="title">Заголовок</label>
        <input type="text", name="title" required>
        </br>
        <label for="description">Описание</label></br>
        <textarea rows="10" name="description" required></textarea>
        </br>
        <input type="submit" value="Сохранить">
    </form>
    </br></br></br></br>
    <table>
        <thead>
            <th>Категория</th>
            <th>Заголовок</th>
            <th>Описание</th>
        </thead>
        <tbody>
            <tr>
                <?php
                $categoriesDir = 'categories/';

                if ($dh = opendir($categoriesDir)) {
                    while (($category = readdir($dh)) !== false) {
                        if ($category != "." && $category != ".." && is_dir($categoriesDir . $category)) {
                            $categoryPath = $categoriesDir . $category . '/';
                            if ($categoryDH = opendir($categoryPath)) {
                                while (($file = readdir($categoryDH)) !== false) {
                                    if (pathinfo($file, PATHINFO_EXTENSION) === 'txt') {
                                        $title = pathinfo($file, PATHINFO_FILENAME);
                                        
                                        $description = file_get_contents($categoryPath . $file);
                                        $description = htmlspecialchars($description);
                                        $categoryName = ucfirst($category);
                                        
                                        echo '<tr>';
                                        echo '<td>' . htmlspecialchars($categoryName) . '</td>';
                                        echo '<td>' . htmlspecialchars($title) . '</td>';
                                        echo '<td>' . $description . '</td>';
                                        echo '</tr>';
                                    }
                                }
                                closedir($categoryDH);
                            }
                        }
                    }
                    closedir($dh);
                    }
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>