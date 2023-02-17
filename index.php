<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>homepage</title>
      <link rel="stylesheet" href="assets/home/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/home/fonts/font-awesome.min.css">
      <link rel="stylesheet" href="assets/home/css/user.css">
   </head>
   <body>
      <nav class="navbar navbar-default">
         <div class="container">
            <div class="navbar-header">
	       <img src="gaya-ku logo.png">
               <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
	<div class="collapse navbar-collapse" id="navcol-1">
		<ul class="nav navbar-nav navbar-left">
				<li class="active" role="presentation"><a href="index.php"><b>HOME</b></a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
        		    	<?php 
                		     	session_start();
			     		if (isset($_SESSION['registrasi'])) {
						session_destroy();
                	     			?>
						<li class="active" role="presentation"><a>Akun anda telah dibuat, silahkan melakukan login! --> </a></li>
                		  		<li class="active" role="presentation"><a href="login.php"><b><font color="green">LOGIN</font></b></a></li>
                	  			<?php 
					}
                		     	else if (isset($_SESSION['session_realname'])) {
						?>
         			        	<li class="active" role="presentation"><a>Selamat datang, <b><?php echo $_SESSION['session_realname']; ?></b>!</a></li>
						<?php
						if ($_SESSION['session_realname'] == "Administrator") {
                		     			?>
                		 	 		<li class="active" role="presentation"><a href="access.php?controller=User&function=readUser">MANAGE USER </a></li>
                		 	 		<?php
						} else {
							?>
							<li class="active" role="presentation"><a href="access.php?controller=Iklan&function=createIklan"><font color="orange"><b>+Iklan</b></font></a></li>
							<?php
						}
						?>
                		 	 	<li class="active" role="presentation"><a href="profile.php">PROFIL </a></li>
						<?php
                		     	} else {
                		     		?>
                		  		<li class="active" role="presentation"><a href="login.php"><b><font color="green">LOGIN</font></b></a></li>
                		  		<?php
                		     	}
               			?>
			</ul>
            	</div>
         </div>
      </nav>
      <div class="carousel slide" data-ride="carousel" id="carousel-1">
         <div class="carousel-inner" role="listbox">
            <div class="item">
               <img class="img-responsive" src="assets/home/img/college_hero2.jpg" alt="Slide Image">
               <div class="carousel-caption">
                  <p>GAYA-KU </p>
               </div>
            </div>
            <div class="item">
               <img src="assets/home/img/hp_hero.jpg" alt="Slide Image" width="1350">
               <div class="carousel-caption">
                  <h3> </h3>
                  <p>GAYA-KU </p>
               </div>
            </div>
            <div class="item active">
               <img src="assets/home/img/prosports_hero.jpg" alt="Slide Image">
               <div class="carousel-caption">
                  <h3> </h3>
                  <p>GAYA-KU </p>
               </div>
            </div>
         </div>
         <div>
            <a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
         </div>
         <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2" class="active"></li>
         </ol>
      </div>
      <i class="glyphicon glyphicon-search"></i>
      <input type="search">
      <section class="testimonials">
         <h2 class="text-center"> GAYA-KU </h2>
         <blockquote>
            <p>TAMPIL BEDA </p>
         </blockquote>
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">BARANG </a>
                  <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
               </div>
               <div class="collapse navbar-collapse" id="navcol-2">
                  <ul class="nav navbar-nav navbar-right">
                     	<li class="active" role="presentation"><a href="#">SEPATU </a></li>
                     	<li class="active" role="presentation"><a href="baju.html">BAJU </a></li>
                     	<li class="active" role="presentation"><a href="#">TOPI </a></li>
                     	<li class="active" role="presentation"><a href="#">TAS </a></li>
                     	<li class="active" role="presentation"><a href="#">CELANA </a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </section>
      <div class="row">
         <div class="col-lg-offset-2 col-md-4">
            <div class="thumbnail"><img src="assets/home/img/adidas-logo2.jpg"></div>
         </div>
         <div class="col-lg-offset-0 col-md-4">
            <div class="thumbnail"><img src="assets/home/img/cap-dbl-store2.jpg" width="1000px" height="200"></div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-offset-2 col-md-4">
            <div class="thumbnail"><img src="assets/home/img/dubnation.jpg"></div>
         </div>
         <div class="col-lg-offset-0 col-md-4">
            <div class="thumbnail"><img src="assets/home/img/linkpage_shareimage.jpg"></div>
         </div>
      </div>

      <footer class="site-footer">
         <div class="container">
            <div class="row">
		<div class="collapse navbar-collapse" id="navcol-2">
                  	<ul class="nav navbar-nav navbar-left">
                  		<h5>GAYA-KU© 2017</h5>
                  		<h6>Head office: 
            			<footer>JL.MAYJEND PANJAITAN NO.39A</footer></h6>
                	</ul>	
			<ul class="nav navbar-nav navbar-right">
                  		<div class="col-sm-6 social-icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
				</div>
                  	</ul>
               </div>
         </div>
      </footer>
      <script src="assets/home/js/jquery.min.js"></script>
      <script src="assets/home/bootstrap/js/bootstrap.min.js"></script>
	<div class="col-sm-6 social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
   </body>
</html>