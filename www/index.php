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
                    <li><a href="#intro">Home</a></li>
                    <li><a href="#work">Category</a></li>
					<li><a href="map.php">Maps</a></li> 
                    <li><a href="#team">About Us</a></li>
		        </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#intro">Home</a></li>
                    <li><a href="#work">Category</a></li>
					<li><a href="map.php">Maps</a></li> 
                    <li><a href="#team">About Us</a></li>
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--hidden menu: only admin can see-->
<?php session_start();
    if(isset($_SESSION['user'])){ 
?>
  <div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
       <i class="large mdi-social-person"></i>
    </a>
    <ul>
      <li><a href="new_article.php"class="btn-floating red"><i class="material-icons">note_add</i></a></li>
      <li><a href="logout.php"class="btn-floating red"><i class="material-icons">power_settings_new</i></a></li>
    </ul>
  </div>
<?php 
    }else{}
 ?>

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">Point of Interest</b>
                <b>Around</b>
                <b>Inside</b>
            </span>
			<span>UGM</span> 
        </h1>
    </div>
</div>

<!--Intro and service-->
<div class="section scrollspy" id="intro">
    <div class="container">
        <div class="row">
            <div  class="col s12">
				<?php include 'maps.php';?>
            </div>
        </div>
    </div>
</div>

<!--Work-->
<div class="section scrollspy" id="work">
    <div class="container">
        <h2 class="header text_b">Categories </h2>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/food.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Food <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="article.php?cat=food">Food</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Food <i class="mdi-navigation-close right"></i></span>
                        <p>Places where you can eat or buy food.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/cozy.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Fotocopy <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="article.php?cat=fotocopy">Fotocopy</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Fotocopy <i class="mdi-navigation-close right"></i></span>
                        <p>Places where you can fotocopy stuff and also print your work and some shit</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/uc.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Accommodation <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="article.php?cat=accommodation">Accommodation</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Accommodation <i class="mdi-navigation-close right"></i></span>
                        <p>Places to stay overnight.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/gsp.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Campus <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="article.php?cat=campus">Campus</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Campus <i class="mdi-navigation-close right"></i></span>
                        <p>Campus in UGM.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/masjid.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Tempat Ibadah <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="article.php?cat=Ibadah">Tempat Ibadah</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Tempat Ibadah<i class="mdi-navigation-close right"></i></span>
                        <p>Places to pray</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project6.jpeg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Tempat Belanja <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="article.php?cat=Belanja">Tempat Belanja</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Tempat Belanja <i class="mdi-navigation-close right"></i></span>
                        <p>Places to shop</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img/ugm.jpg"></div>
</div>

<!--Team-->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b"> Our Team </h2>
        <div class="row">
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/igun.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Gunawan <br/>
                            <small><em><a class="red-text text-darken-1" href="#">CEO</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/rizqi.gunawan?fref=ts">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/JOJO.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Joshua<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Designer</a></em></small>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joshua.rumi?fref=ts">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/pras.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            Prasetyo <br/>
                            <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/prasetyo.rezpect">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/sania.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            Sania <br/>
                            <small><em><a class="red-text text-darken-1" href="#">Ad Marketting</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/dgibon?fref=ts">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/ayuk.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            Ayu <br/>
                            <small><em><a class="red-text text-darken-1" href="#">Manager</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/profile.php?id=100010218730792&fref=ts">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/mub.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Mubarak<br/>
                            <small><em><a class="red-text text-darken-1" href="#">CMO</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/mubarak.n.13?fref=ts">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
                   

    <!--  Scripts-->
    <script src="min/plugin-min.js"></script>
    <script src="min/custom-min.js"></script>
  </body>
</html>