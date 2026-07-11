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
                'purchaseUrl' => 'http://example.com/Philip',
                'releaseYear' => 1967,
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'purchaseUrl' => 'http://example.com/Andy',
                'releaseYear' => 2000,
            ],
        ];

        function filter($items, $fn){
            $filteredItems = [];

            foreach ($items as $item){
                if($fn($item)){
                    $filteredItems[] = $item;
                }
            }

            return $filteredItems;
        };

        $filteredBooks = filter($books, function($book){
            return $book['releaseYear'] === 1967;
        });
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