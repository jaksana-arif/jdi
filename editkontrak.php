<?php
require "konek.php";
if(isset($_POST["submit"])){

$query="UPDATE kontrak SET id_pegawai ='".$_POST['id_pegawai']."' WHERE id=".$_POST['id'];
	if ($connect->query($query) === TRUE) {
} else {
  echo "Error: " . $query . "<br>" . $connect->error;
}
header("Location: index.php");
die();
}else{
$id=$_GET['id'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="post" action=""> 
	<input type="number" name="id" value="<?php echo $id; ?>"></input>
	<label>id pegawai :</label><input type="number" name='id_pegawai'></input>
	<label> isi kontrak :</label><input type="text" name='isi_kontrak'></input>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>