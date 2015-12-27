<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Point of Interest UGM</title>

    <!-- CSS  -->
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
    <link href="min/style.css" type="text/css" rel="stylesheet" >
    <link href="css/stylemap.css" type="text/css" rel="stylesheet" >
</head>
<body id="top" class="scrollspy">

<!-- Pre Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="index.php" id="logo-container" class="brand-logo"> <i class="mdi-action-polymer">UGM</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#work">Category</a></li>
					          <li><a href="map.php">Maps</a></li>
                    <li><a href="index.php#team">About Us</a></li>
		        </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#work">Category</a></li>
                    <li><a href="map.php">Maps</a></li>
                    <li><a href="index.php#team">About Us</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Hero-->


<?php
  include 'koneksi.php';
  $id=$_GET['id'];
  $query=mysql_query("select *,(X(koordinat)) as lat, (Y(koordinat)) as lng FROM map where id = $id");
  $data=mysql_fetch_array($query);


  if(isset($_POST['submit'])){
  $nama=$_POST['nama'];
  $lng=$_POST['lng'];
  $lat=$_POST['lat'];
  $desc=$_POST['desc'];
    if($nama=="" || $lng=="" || $lat=="" || $desc==""){
      $error="Field tidak boleh kosong";
    }
  mysql_query("update map set nama='$nama', koordinat=GeomFromText('POINT($lat $lng)',0), deskripsi='$desc' where id='$id'");
  header("location:map.php");
  }

?>

<div class="container">
	<div class="row center-align">
	<h4>Ubah Data</h4>
	<form class="col s6 offset-s3" method="post" action="">
      <div class="row">
        <div class="input-field col s12">
          <input type="hidden" name="id">
          <input type="text" name="nama" class="validate" value="<?php echo $data['nama']; ?>">
          <label for="loc_name">Nama Lokasi</label>
        </div>
        <div class="input-field col s12">
          <input type="text" name="lat" class="validate" value="<?php echo $data['lat']; ?>">
          <label for="latitude">Latitude</label>
        </div>
        <div class="input-field col s12">
          <input type="text" name="lng" class="validate" value="<?php echo $data['lng']; ?>">
          <label for="longitude">Longitude</label>
        </div>
        <div class="input-field col s12">
          <textarea class="materialize-textarea" name="desc"><?php echo $data['deskripsi']; ?></textarea>
          <label for="description">Deskripsi</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" name="submit" type="submit">Submit</button>
	</form>
  </div>
</div>

    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
  </body>
</html>