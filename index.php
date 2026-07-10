<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [ 
            "DO Androids Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary",
            "Animal Farm"
        ];
    ?>
    <ul>
        <?php foreach($books as $book) :?>
            <li><?= $book ?></li>
        <?php endforeach;?>
    </ul>
</body>
</html>