<?php
//$nama =$_GET['nama'];
//$kelas =$_GET['id_kelas']
$database = new PDO('mysql:host=localhost;dbname=mutu','root',"");
$query = $database->query('insert into siswa values("1","Nia Melinda","1")');