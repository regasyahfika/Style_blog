<?php
  require 'admin/koneksi.php';

  // cek apakah data sudah dikirim
  if (isset($_POST['nama'], $_POST['email'], $_POST['notelp'], $_POST['comen'])) {
    $nama = mysqli_escape_string($koneksi, $_POST['nama']);
    $email = mysqli_escape_string($koneksi, $_POST['email']);
    $telp = mysqli_escape_string($koneksi, $_POST['notelp']);
    $comen = mysqli_escape_string($koneksi, $_POST['comen']);
    // query insert
    $query = 'INSERT INTO komentar (nama, email, telp, komen) VALUE("'.$nama.'", "'.$email.'", "'.$telp.'", "'.$comen.'")';
    // jalankan query insert
    $insert = mysqli_query($koneksi, $query);

    if ($insert) {
      echo "<script>alert('Terimakasih Telah Menyampaikan Pesan'); window.location = 'contact.php'; </script>";
    }else{
    	echo "<script>alert('Gagal'); window.location = 'contact.php'; </script>";
    }
  }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Style Blog a Blogging Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="icon" type="image/x-icon" href="images/favicon2.ico">
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="header" id="ban">
		<div class="container">
			<div class="head-left">
				<div class="header-search">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="text" name="Search" placeholder="Search...">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
				</div>
			</div>
			<div class="header_right">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-7" id="link-effect-7">
						<ul class="nav navbar-nav">
							<li class="active act"><a href="index.php">Home</a></li>
							<li><a href="about.php">About</a></li>
<!-- 							<li><a href="features.html">Features</a></li>
							<li><a href="travel.html">Travel</a></li>
							<li><a href="fashion.html">Fashion</a></li>
							<li><a href="music.html">Music</a></li> -->
							<li><a href="contact.php">Contact</a></li>
							<li><a href="admin/index.php">Login</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			</div>
			<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
					<ul>
						<li><a href="#"> </a></li>
						<li><a href="#" class="pin"> </a></li>
						<li><a href="#" class="in"> </a></li>
						<li><a href="#" class="be"> </a></li>
						
						<li><a href="#" class="vimeo"> </a></li>
					</ul>
				</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
	<!--start-main-->
	<div class="header-bottom">
		<div class="container">
			<div class="logo">
				<h1><a href="index.html">STYLE BLOG</a></h1>
				<p><label class="of"></label>LET'S MAKE A PERFECT STYLE<label class="on"></label></p>
			</div>
		</div>
	</div>
<!-- banner -->

<div class="banner-1">

</div>

	<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
			<div class="contact-section">
				<h2 class="w3">CONTACT</h2>
					
				
					<div class="contact-grids">
						<div class="col-md-8 contact-grid">
							
							<p>Keluh Kesal sampaikan disini</p>
							<form method="post">
								<input type="text" name="nama" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="text" name="notelp" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
								<textarea type="text" name="comen" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Special Instruction/Comments...';}" required="">Special Instruction/Comments...</textarea>
								<input type="submit" value="Send">
							</form>
						</div>
						<div class="col-md-4 contact-grid1">
							<h4>Address</h4>
							<div class="contact-top">
								
								
								<div class="clearfix"></div>
							</div>
							<ul>
									<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Office : 0041-456-3692</li>
									<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Mobile : 0200-123-4567</li>
									<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> <a href="#"></a><a href="mailto:info@example.com">info@example.com</a></li>
									<li><i class="glyphicon glyphicon-print" aria-hidden="true"></i> Fax : 0091-789-456100</li>
								</ul>

						</div>
						<div class="clearfix"></div>
					</div>
					<div class="google-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424145.8679554096!2d150.65178930803913!3d-33.847403996396665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney+NSW%2C+Australia!5e0!3m2!1sen!2sin!4v1470643502584" allowfullscreen></iframe>
					</div>
				
			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				
				
				<div class="blo-top1">
							
					<div class="tech-btm">
					<div class="search-1">
							<form action="#" method="post">
								<input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
								<input type="submit" value=" ">
							</form>
						</div>
					<h4>Popular Posts </h4>
					<?php
		                $sql = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id ASC LIMIT 5");
		                while($data= mysqli_fetch_array($sql)):
		                ?>
						<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<div class="blog-grid-left">
								<a href="singlepage.php?id=<?php echo $data['id']; ?>"></a><img src="admin/asset/images/<?php echo $data['gambar']; ?>" class="img-responsive" alt=""></a>
							</div>
							<div class="blog-grid-right">
								
								<h5><a href="singlepage.html"><?php echo $data['judul_berita']; ?></a> </h5>
							</div>
							<div class="clearfix"> </div>
						</div>
					<?php endwhile; ?>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-grids">
							
							
							<div class="clearfix"> </div>
						</div>
						<div class="insta">
					<h4>Instagram</h4>
						<ul>
							
							<li><a href="singlepage.html"><img src="images/t1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/m1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/f1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/m2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/f2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/t2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/f3.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/t3.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="singlepage.html"><img src="images/m3.jpg" class="img-responsive" alt=""></a></li>
						</ul>
					</div>
					
					<p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at pro</p>
					<div class="twt">
					
						<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag" style="position: static; visibility: visible; width: 166px; height: 28px;" data-hashtag="TwitterStories"></iframe>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
					</div>
					
					
					
				</div>
				
			
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
<div class="footer">
		<div class="container">
			<div class="col-md-4 footer-left">
				<h4>About Me</h4>
				<p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
				<img src="images/t4.jpg" class="img-responsive" alt="">
					<div class="bht1">
						<a href="singlepage.html">Read More</a>
					</div>
			</div>
			<div class="col-md-4 footer-middle">
			<h4>Latest Tweet</h4>
			<div class="mid-btm">
				<p>Sed do eiusmod tempor Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
				<a href="https://w3layouts.com/">https://w3layouts.com/</a>
			</div>
			
				<p>Consectetur adipisicing Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod .</p>
				<a href="https://w3layouts.com/">https://w3layouts.com/</a>
		
			</div>
			<div class="col-md-4 footer-right">
				<h4>Newsletter</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
						<div class="name">
							<form action="#" method="post">
								<input type="text" placeholder="Your Name" required="">
								<input type="text" placeholder="Your Email" required="">
								<input type="submit" value="Subscribed Now">
							</form>
						
						</div>	
						
							<div class="clearfix"> </div>
					
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="copyright">
				<div class="container">
					<p>© 2017 Style Blog. All rights reserved | Design by <a href="http://amcc.or.id/">W3layouts | &#10084; Divisi Web Programming <img src="images/favicon.ico"> | Rega Syahfika</a></p>
				</div>
			</div>
</body>
</html>