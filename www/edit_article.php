<?php
  session_start();
  include 'koneksi.php';
  if(isset($_SESSION['user'])){
    $id=$_GET['id'];
    $error="";
    $mes="";
  if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $judul=$_POST['jdl'];
    $kategori=$_POST['kategori'];
    $isi=$_POST['isine'];
    $idm=$_POST['id_map'];
    $loc=$_POST['lokasi'];
    $lat=$_POST['lati'];
    $lng=$_POST['longi'];
    $desc=$_POST['deskripsi'];
    if($kategori==""){
      $kategori=1;
    }
    if($judul=="" || $isi=="" || $loc_name="" || $lat=="" || $lng=="" || $desc==""){
      $error="Field tidak boleh kosong";
    }

    if($error==""){
      //update map data to db
      $query1=mysql_query("UPDATE map SET nama='$loc', koordinat=GeomFromText('POINT($lng $lat)',0), deskripsi='$desc' where id='$idm';");
      //update article data to db
      $query2=mysql_query("UPDATE artikel set judul='$judul',kategori='$kategori',isi='$isi' where id='$id';");
      $mes="Article Was Updated";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Update Article</title>

    <!-- CSS  -->
     <link href="css/fontmaterial.css" rel="stylesheet">
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
    <link href="min/style.css" type="text/css" rel="stylesheet" >
    <link href="css/stylemap.css" type="text/css" rel="stylesheet" >
     
</head>
<body>
<div class="container">
<?php 
    $sql=mysql_query("select * from lengkap where id= '$id'");
    $data=mysql_fetch_array($sql);
?>
  <span class="red-text"><h5><?php echo $error;?></h5></span>
  <span class="blue-text"><h5><?php echo $mes;?></h5></span>
  <form action="" method="POST" class="col s6 offset-s3">
      <div class="row">
        <div class="input-field col s12 m6">
          <input type="text"  name="jdl" class="validate" length="50" maxlength="50" value="<?php echo $data['1'];?>">
          <input type="hidden" name="id" value="<?php echo $data['0'];?>">
          <label>Judul</label>
        </div>
         <div class="input-field col s12 m6">
          <select name="kategori">
            <?php
              $kat=mysql_query("select * from kategori");
              while($k=mysql_fetch_array($kat)){
              if($k['1']==$data['2']){
                echo '<option value='.$k['0'].' selected >'.$k['1'].'</option>';
              } else {
                echo '<option value='.$k['0'].' >'.$k['1'].'</option>';
              }
              }
            ?>
          </select>
          <label>Kategori</label>
        </div>
        <div class="input-field col s12">
          <textarea name="isine" id="editor1" rows="30" cols="80"><?php echo $data['3'];?></textarea>
      </div>
        <div class="input-field col s12">
          <input type="hidden" name="id_map" value="<?php echo $data['4']?>">
          <input type="text" name="lokasi" class="validate" length="50" maxlength="50" value="<?php echo $data['5'];?>">
          <label>Nama Lokasi</label>
        </div>
        <div class="input-field col s12 m6">
          <input type="text" name="longi" class="validate" value="<?php echo $data['6'];?>">
          <label>Longitude</label>
        </div>
        <div class="input-field col s12 m6">
          <input type="text" name="lati" class="validate" value="<?php echo $data['7'];?>">
          <label>Latitude</label>
        </div>
        <div class="input-field col s12">
          <textarea name="deskripsi" class="materialize-textarea" length="300" maxlength="300"><?php echo $data['8'];?></textarea>
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