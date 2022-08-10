<?php

    $database = new PDO ("mysql:host=localhost;dbname=minimarket","root","");
    $squery = $database->query('select * from pembeli');


    while ($data = $squery->fetch()){
    echo "<p>".$data["namapembeli"]."</p>";
    }