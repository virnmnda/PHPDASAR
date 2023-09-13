<?php
//$_GET
$mahasiswa =[
    [
     "nama" => "Virna Dwi Amanda",
     "nrp" => "032415",
     "email" => "virnadwi58@gmail.com",
     "jurusan" => "Teknik Informatika",
     "gambar" => "foto5.jpg"
   ],
   [
       "nama" => "Muhammad Taufiqur",
       "nrp" => "0784573867",
       "email" => "taufiq03@gmail.com",
       "jurusan" => "Teknik teknologi",
       "gambar" => "home.png"
   ]
   ];
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul> 
<?php foreach ( $mahasiswa as $mhs) : ?>
    <li>
    <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp= 
    <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?> 
    &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
 </li>
<?php endforeach; ?>  
</ul> 

</body>
</html>