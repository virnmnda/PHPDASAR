<?php
$mahasiswa =[
 [
  "nama" => "Virna Dwi Amanda",
  "nrp" => "032415",
  "email" => "virnadwi58@gmail.com",
  "jurusan" => "Teknik Informatika",
  "gambar" => "home.png",
],
[
    "nama" => "muhammad taufiqur",
    "nrp" => "0784573867",
    "email" => "taufiq03@gmail.com",
    "jurusan" => "Teknik teknologi",
    "gambar" => "foto5.jpg"
]
];
?>
<!DOCTYPE html>
<html >
<head>
    <title>Daftar Mahasiasa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) : ?>
<ul>
<img src ="img/home.png">
    <li>Nama : <?= $mhs["nama"]; ?></li>
    <li>NRP : <?= $mhs["nrp"]; ?></li>
    <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    <li>Email : <?= $mhs["email"]; ?></li>
</ul>
<?php endforeach; ?>
    
</body>
</html>
