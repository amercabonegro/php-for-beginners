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
        
        //it can be array_filter
        $filteredBooks2 = array_filter($books, function($book){
            return $book['releaseYear'] === 1967;
        });

require "index.view.php";