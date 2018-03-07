<!DOCTYPE HTML>
<!--
	Directive by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Ujian Pengesanan Masalah Pembelajaran</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
        <script src="js/validate.js"></script>
  
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
        
        <!-- This is what you need -->
  <script src="sweetalert-master/lib/sweet-alert.js"></script>
  <link rel="stylesheet" href="sweetalert-master/lib/sweet-alert.css">
  <!--.......................-->
        
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        
               
        <script language='JavaScript' type='text/JavaScript'> 
 // http://html-generator.weebly.com/html-right-click-disable-code.html 
 var tenth = ''; 
 
 function ninth() { 
   if (document.all) { 
     (tenth); 
     swal ("Oops...", "Right click disable!", "error");
     return false; 
   } 
 } 
 
 function twelfth(e) { 
   if (document.layers || (document.getElementById && !document.all)) { 
     if (e.which == 2 || e.which == 3) { 
       (tenth); 
       return false; 
     } 
   } 
 } 
 if (document.layers) { 
   document.captureEvents(Event.MOUSEDOWN); 
   document.onmousedown = twelfth; 
 } else { 
   document.onmouseup = twelfth; 
   document.oncontextmenu = ninth; 
 } 
 document.oncontextmenu = new Function('alert("Right Click Disable"); return false')
</script>

<script> 
function popup(){
	swal({   title: "Sweet!",   text: "Here's a custom image.", imageUrl:"images/thumbs-up.jpg" });
	} 
  </script>
        
	</head>
	<body>

		<!-- Header -->
			<div id="header">
				<span class="logo icon fa-paper-plane-o"></span>
				<h1>SELAMAT DATANG</h1>
				<p>Sistem Ujian Pengesanan ini adalah versi BETA</p>
			</div>

		<!-- Main -->
			<div id="main">
			 
			  <header class="major container small">
               <img src = "UPSI.png" width="715"/>
			    <h2>Instrumen ini bertujuan membantu  
					<br/>
					 guru mengesan murid yang mempunyai<br/> masalah dalam pembelajaran.
                    </h2>
					<!--
					<p>Tellus erat mauris ipsum fermentum<br />
					etiam vivamus nunc nibh morbi.</p>
					-->
			  </header>
				
			  <div class="box alt container">
					<section class="feature left">
					  <a href="Definition.html" class="image icon fa-signal"><img src="raising-special-kids.gif" alt="" /></a>
						<div class="content">
							<h3>Tentang ujian</h3>
							<p>Instrumen Pengesanan Murid Bermasalah Dalam Pembelajaran merupakan satu alat untuk  mengesan murid yang berkebarangkalian mempunyai ciri-ciri berkeperluan khas. Instrumen ini bertujuan membantu guru mengesan murid yang mempunyai masalah dalam pembelajaran.</p>
						</div>
					</section>
					<section class="feature right">
						<a href="Types.html" class="image icon fa-code"><img src="sesame street.jpg" alt="" onClick="popup()" /></a>
						<div class="content">
							<h3>Definisi</h3>
						  <p> Masalah pembelajaran didefinisikan sebagai masalah dalam satu atau lebih daripada proses asas psikologi melibatkan pemahaman atau penggunaan bahasa sama ada pertuturan atau penulisan di mana masalah yang dihadapi mengakibatkan kebolehan mendengar, berfikr, bertutur dan membaca yang tidak sempurna.</p>
						</div>
					</section>
					<section class="feature left">
						<a href="Terms.php"  class="image icon fa-mobile"><img src="eeg-autism.jpg" onClick="popup()"/></a>
						<div class="content">
							<h3>Ujian Pengesanan Masalah Pembelajaran</h3>
						  <p>Sila tekan gambar di sebelah untuk mula mengambil ujian pengesanan</p>
						</div>
					</section>
				</div>
							
			  <footer class="major container small">
              
              <h3>Cari Murid: </h3>
                       <p>*Sila masukkan nama penuh murid dengan huruf besar</p> 
	    <form  method="post" action="search.php"  id="searchform"> 
	      <input  type="text" name="name"><br> 
	      <input  type="submit" name="submit" value="Search"> 
	    </form> 
		
	</div>
			
<!-- Footer -->
			<div id="footer">
				<div class="container small">
<header class="major last">
						<h2>Contact developer</h2>
					</header>
<?php 
if (isset($_POST["submit"])){ 
$ToEmail = 'jeppa91@gmail.com'; 
$EmailSubject = 'Comment Screening test'; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Name: ".$_POST["name"].""; 
$MESSAGE_BODY .= "Email: ".$_POST["email"].""; 
$MESSAGE_BODY .= "Message: ".nl2br($_POST["message"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure");
echo "Message sent"; 
}
?>    
					<form method="post" action="#">
						<div class="row collapse-at-2">
							<div class="6u">
								<input type="text" name="name" placeholder="Name" />
							</div>
							<div class="6u">
								<input type="email" name="email" placeholder="Email" />
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<textarea name="message" placeholder="Message" rows="6"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="12u">
								<ul class="actions">
									<li><input type="submit" name="submit" value="Send Message" /></li>
								</ul>
							</div>
						</div>
					</form>
                


					<ul class="icons">
						<li><a href="https://twitter.com/ajepa" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/ajeppa" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://instagram.com/ajeppa" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					
					<ul class="copyright">
						<li>&copy; All rights reserved.</li><li>Developer: WAN AZAM AZFAR BIN WAN MOHAMAD</li>
					</ul>
                    
				</div>
			</div>

	</body>
</html>