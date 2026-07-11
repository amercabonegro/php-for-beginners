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
            [
                'name' => 'Do androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'purchaseUrl' => 'http://example.com/Philip'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://example.com/Andy'
            ],
        ];

        $filterByAuthor = function($items, $key, $value){
            $filteredItems = [];

            foreach ($items as $item){
                if($item[$key] === $value){
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        };

        $filteredBooks = $filterByAuthor($books, 'author', 'Philip K. Dick');
    ?>
    <ul>
        <?php foreach($filteredBooks as $book):?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>