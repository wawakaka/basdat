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

<!--hidden menu: only admin can see-->
<?php
    include 'koneksi.php';
    error_reporting("E_ALL");
    $cat=$_GET['cat'];
    if(!isset($_GET['id'])){
        $n=mysql_query("SELECT id FROM lengkap where kategori = '$cat' limit 0,1 ");
        $m=mysql_fetch_array($n);
        $id=$m[0];
    }else{
        $id=$_GET['id'];
    }
    $sql=mysql_query("select * from lengkap where kategori = '$cat'");
    $sql1=mysql_query("select * from lengkap where kategori = '$cat' and id = $id");

    session_start();
    if(isset($_SESSION['user'])){
?>
  <div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
       <i class="large mdi-social-person"></i>
    </a>
    <ul>
        <li><a href="new_article.php"class="btn-floating red"><i class="material-icons">note_add</i></a></li>
        <li><a href="edit_article.php?id=<?php echo $id; ?>" class="btn-floating green"><i class="material-icons">mode_edit</i></a></li>
        <li><a href="logout.php"class="btn-floating red"><i class="material-icons">power_settings_new</i></a></li>
    </ul>
  </div>
<?php 
    }else{}
 ?>


<!--Hero-->
<div class="container">
    <div class="row" style="margin-bottom: 0px !important">
        <div class="col s3">
            <h4>List Judul</h4>
            <?php
                while ($d=mysql_fetch_array($sql)) {
                    echo "<a href='?cat=$cat&id=$d[0]'>$d[1]</a><br>";
                }
            ?>
        </div>
        <div class="col s9" style="border-left:3px solid black;bottom:0px; height: 100vh">
        <?php 
            $data=mysql_fetch_array($sql1);
        ?>
        <center><h4><?php echo $data['judul'];?></h4></center>
            <?php 
                echo $data['isi'];
            ?>
            <br>
            <br>
        </div>
    </div>
</div>





    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
  </body>
</html>