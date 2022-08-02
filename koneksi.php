<?php

$dbh = new PDO ('mysql:host=localhost;dbname=sakola',"root","");

$query = $dbh->query('select * from student');

?>

<h1>Data siswa</h1>

<?php while($result = $query->fetch()){?>
      <p><?= $result ['nama']; ?>
<?php  } ?>       
