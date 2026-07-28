<?php

function dd($value){
    echo "<pre>";
        var_dump($value);
    echo "</pre>";

    die();
}

dd($_SERVER);
$heading = "Home";
require "views/index.view.php";