<?php

$dbh = new PDO ('mysql:host=localhost;dbname=mutu',"root","");

$query = $dbh->query('select * from siswa');

while($data = $query->fetch()){
      echo"<p>".$data ['nama']. "</p>";

 }      


 
