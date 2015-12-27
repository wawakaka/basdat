<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#2196F3">
    <title>Point of Interest UGM</title>

    <!-- CSS  -->
    <link href="css/fontmaterial.css" rel="stylesheet">
    <link href="min/plugin-min.css" type="text/css" rel="stylesheet">
    <link href="min/custom-min.css" type="text/css" rel="stylesheet" >
    <link href="min/style.css" type="text/css" rel="stylesheet" >

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
                    <li><a href="index.php#intro">Home</a></li>
                    <li><a href="index.php#work">Category</a></li>
                    <li><a href="map.php">Maps</a></li> 
                    <li><a href="index.php#team">About Us</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="index.php#intro">Home</a></li>
                    <li><a href="index.php#work">Category</a></li>
                    <li><a href="map.php">Maps</a></li> 
                    <li><a href="index.php#team">About Us</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--hidden menu: only admin can see-->
<?php 
    session_start();
    include 'koneksi.php';
    if(isset($_SESSION['user'])){
        if(isset($_GET['id'])==NULL){
            $z=mysql_query("select *,(X(koordinat)) as lat,(Y(koordinat))as lng from map where nama='ugm'");
            $h=mysql_fetch_array($z);
            $_GET['id']=$h['id'];
            $id=$_GET['id'];
        }
        if(isset($_GET['id'])!=NULL){
            $id=$_GET['id'];
        }

?>
  <div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large mdi-social-person"></i>
    </a>
    <ul>
      <li><a href="tambah.php"class="btn-floating red"><i class="material-icons">note_add</i></a></li>
      <li><a href="edit.php?id=<?php echo $id;?>" class="btn-floating green"><i class="material-icons">mode_edit</i></a></li>
      <li><a href="logout.php"class="btn-floating red"><i class="material-icons">power_settings_new</i></a></li>
    </ul>
  </div>
<?php 
    }else{}
?>
<div class="row" style="padding: 30px 0px 0px 0px;">
    <form class="col s6 offset-s5" method="GET" action="">
      <div class="row">
        <div class="input-field col s10">
          <select name="id">
            <?php
              $alla=mysql_query("select id,nama,(X(koordinat)) as lat, (Y(koordinat)) as lng,deskripsi FROM map");
              while($a=mysql_fetch_array($alla)){
              if($a['id']==$_GET['id']){
                echo '<option value="'.$a['0'].'" selected >'.$a['1'].'</option>';
              }else{echo '<option value="'.$a['0'].'" >'.$a['1'].'</option>';}
              }
            ?>
          </select>
          <label>Lokasi</label>
        </div>
        <div class="col s2">
            <button class="btn waves-effect waves-light" type="submit">Search</button>
        </div>
    </div>
    </form>
  </div>


<div id="haha">
    <div class="row">
        <div  class="col s12">
            <?php include 'bigmap.php';?>
        </div>
    </div>
</div>

    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
    <script>
       $(document).ready(function() {
    $('select').material_select();
  });

$('select').material_select('destroy');
    </script>
  </body>
</html>