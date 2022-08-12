<?php


$database = new PDO('mysql:host=localhost;dbname=mutu','root',"");
$query = $database->query('DELETE FROM siswa where id=2');