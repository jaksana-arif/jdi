<?php
require "konek.php";
$query="Select * FROM jabatan_pegawai";
$exe=mysqli_query($connect, $query);
$i=0;

echo "<a href='tambahjabatan.php' class='btn btn-info'>Tambah Jabatan</a>";

echo "<table class='table table-hover table-light'>";


while ($r=mysqli_fetch_assoc($exe)) {

	if ($i<1) {
		echo "<tr>";
		foreach ($r as $k => $s) {
			
			echo "<th>".$k."</th>";
		}
		echo "<th>aksi</th></tr>";	
	}
	echo "<tr>";
	foreach ($r as $k => $s) {
		echo "<td>".$s."</td>";
	}
	echo "<td><a href='editjabatan.php?id=".$r['id']."' class='btn btn-primary' >edit</a><button class='btn btn-danger' onclick='hapusjabatan(".$r['id'].")'>hapus</button><td></tr>";
	$i++;
}

echo " </table>";


?>