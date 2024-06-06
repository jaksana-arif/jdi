<?php
require "konek.php";
$query="DELETE FROM `jabatan_pegawai` WHERE id=".$_GET['id'];
$exe=mysqli_query($connect, $query);

?>