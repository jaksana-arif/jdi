
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
</head>
<body>
	<div class="row">
		<div class="col-md-4">
    	<ul class="nav navbar-nav ">
    		<li><a  href="#" onclick="getpegawai()">pegawai</a></li>
    		<li><a  href="#" onclick="getjabatan()">jabatan pegawai</a></li>
    		<li><a  href="#" onclick="getkontrak()">kontrak</a></li>
        </ul>
    	</div>
    	<div class="col-md-8" id="content">
    		
    	</div>
    </div>

<script>
	 function getjabatan(){

  	  var xhttp;  
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("content").innerHTML = this.responseText;
        }
      };
    xhttp.open("GET","getjabatan.php", true);
    xhttp.send();
  }
   function hapusjabatan(i){
    	if (confirm("yakin hapus data ini?")== true){
 	  var xhttp;  
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            getjabatan();
        }
      };
    xhttp.open("GET","hapusjabatan.php?id="+i, true);
    xhttp.send();
}
  }

 function getpegawai(){

  	  var xhttp;  
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("content").innerHTML = this.responseText;
        }
      };
    xhttp.open("GET","getpegawai.php", true);
    xhttp.send();
  }
  function getkontrak(){

  	  var xhttp;  
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("content").innerHTML = this.responseText;
        }
      };
    xhttp.open("GET","getkontrak.php", true);
    xhttp.send();
  }
</script>

</body>
</html>