<?php 

// $mahasiswa = [
//     [
//         "nama" => "Nur Achmad Agus Ismail",
//         "nik" => "MGF17020158",
//         "email" => "agusmis@kokola.co.id"
//     ],
//     [
//         "nama" => "Arief Yuliansya",
//         "nik" => "MGF17020148",
//         "email" => "yuliansyah@kokola.co.id"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', 'P4s$w0rd');
$db = $dbh->prepare('SELECT * FROM karyawan');
$db->execute();
$karyawan = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($karyawan);
echo $data;

?>