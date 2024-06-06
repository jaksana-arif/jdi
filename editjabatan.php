<?php
require "konek.php";
if(isset($_POST["submit"])){

$query="UPDATE jabatan_pegawai SET jabatan ='".$_POST['jabatan']."' WHERE id=".$_POST['id'];
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
	<label>jabatan :</label><input type="text" name='jabatan' ></input>
	<input type="submit" name="submit" value="submit"></input>
</form>
</body>
</html>