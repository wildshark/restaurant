<?php

try {
    $db = new PDO('sqlite:db/restaurant.db'); 
}catch (Exception $e) {
    echo "Unable to connect";
    echo $e->getMessage();
    exit;
}

function menu(){

    return"
        <ul class='navbar-nav menu-open'>
            <li>
                <a href='?_page=home'>Home</a>
            </li>
            <li>
                <a href='?_page=lunch'>Lunch</a>
            </li>
            <li>
                <a href='?_page=dinner'>Dinner</a>
            </li>
            <li>
                <a href='?_page=others'>Others</a>
            </li>
        </ul>";
}

?>