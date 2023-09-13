<?php
$mahasiswa =[
 ["Virna Dwi Amanda", "032415", "Teknik Informatika", "virnadwi58@gmail.com"],
             ["mandaa", "0531875", "Teknik Industri", "manda12@gmail.com"],
             ["muhammad taufiqur", "0784573867",  "Teknik teknologi", " taufiq03@gmail.com"]
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
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
    
</body>
</html>