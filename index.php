<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
include "koneksi.php";
 $koneksi = new koneksi();
 $db = $koneksi->getKoneksi();
 $query = $db->query('select * from siswa');

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="edit.php?id=<?= $data['id']; ?>">
            <?= $data['nama'] ?>
        </a>
        
        <a href="proses_hapus.php?id=<?= $data['id']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>
