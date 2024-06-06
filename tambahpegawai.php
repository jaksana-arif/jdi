<?php
if(isset($_POST["submit"])){
require "konek.php";
$query="INSERT INTO `pegawai` VALUES ('','".$_POST['nama']."', ".$_POST['jabatan'].")";
	if ($connect->query($query) === TRUE) {
} else {
  echo "Error: " . $query . "<br>" . $connect->error;
}
header("Location: index.php");
die();
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
	<label>nama :</label><input type="text" name='nama'></input>
	<label> jabatan :</label><input type="number" name='jabatan'></input>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>