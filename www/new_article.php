<?php
	session_start();
	include 'koneksi.php';
	if(isset($_SESSION['user'])){
		$kat=mysql_query("select * from kategori");
		$judul=$kategori=$isi=$loc_name=$lat=$lng=$desc=$error=$mes="";

	if(isset($_POST['submit'])){
		$judul=$_POST['jdl'];
		$isi=$_POST['isine'];
		$loc=$_POST['lokasi'];
		$lat=$_POST['lati'];
		$lng=$_POST['longi'];
		$desc=$_POST['deskripsi'];
		if($kategori=""){
			$kategori=1;
		}
		if($judul=="" || $isi=="" || $loc_name="" || $lat=="" || $lng=="" || $desc==""){
			$error="Field tidak boleh kosong";
		}

		if($error==""){
			//input map data to db
			$query1=mysql_query("INSERT INTO map VALUES (NULL,'$loc', GeomFromText('POINT($lng $lat)',0), '$desc');");
			//search last id from map
			$golek=mysql_query("select max(id) from map");
			$golekid=mysql_fetch_array($golek);
			$i=$golekid['0'];
			$kategori=$_POST['kategori'];
			//input article data to db
			$query2=mysql_query("INSERT INTO artikel VALUES (NULL,'$judul','$kategori','$isi','$i');");
			echo ("<SCRIPT LANGUAGE='JavaScript'>alert('Success Add New Article')
				window.location.href='index.php';</SCRIPT>");
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Add New Article</title>

    <!-- CSS  -->
    <link href="css/fontmaterial.css" rel="stylesheet">
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
    <link href="min/style.css" type="text/css" rel="stylesheet" >
    <link href="css/stylemap.css" type="text/css" rel="stylesheet" >
</head>
<body>
<div class="container">
	<span class="red-text"><?php echo $error; ?></span>
	<span class="blue-text"><?php echo $mes; ?></span>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="col s6 offset-s3">
      <div class="row">
       <div class="input-field col s12 m6">
          <input type="text"  name="jdl" class="validate" length="50" maxlength="50">
          <label>Judul</label>
        </div>
         <div class="input-field col s12 m6">
          <select name="kategori">
          	<option value="" selected>Select Category</option>
          	<?php while($k=mysql_fetch_array($kat)){
          		echo '<option value='.$k['0'].'>'.$k['1'].'</option>';
          		}
          	?>
          </select>
          <label>Kategori</label>
        </div>
        <div class="input-field col s12">
      		<textarea name="isine" id="editor1" rows="30" cols="80"></textarea>
  		</div>
        <div class="input-field col s12">
          <input type="text" name="lokasi" class="validate" length="50" maxlength="50">
          <label>Nama Lokasi</label>
        </div>
        <div class="input-field col s12 m6">
          <input type="text" name="longi" class="validate">
          <label>Longitude</label>
        </div>
        <div class="input-field col s12 m6">
          <input type="text" name="lati" class="validate">
          <label>Latitude</label>
        </div>
        <div class="input-field col s12">
          <textarea name="deskripsi" class="materialize-textarea" length="300" maxlength="300"></textarea>
          <label>Deskripsi Map</label>
        </div>
      </div>
      <center><button class="btn waves-effect waves-light" name="submit" type="submit">Submit<i class="material-icons right">send</i></button></center>
	</form>
</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'editor1' );

        $(document).ready(function() {
  			$('select').material_select();
  		});

		$('select').material_select('destroy');

		$(document).ready(function() {
    		$('input#input_text, textarea#textarea1').characterCounter();
  		});
    </script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</html>
<?php
	}else
	header("location:index.php");
?>