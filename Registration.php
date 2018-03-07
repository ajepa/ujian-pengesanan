<!DOCTYPE HTML>
<html>
<?php
session_start();
?>

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
        
        <script src="sweetalert-master/lib/sweet-alert.js"></script>
 		<link rel="stylesheet" href="sweetalert-master/lib/sweet-alert.css">
        
        <script>		
		function validateForm(){
		 var numbers = /^[a-zA-z]+$/;
   if( document.registration.ev_name.value == "" )
   {	 
	 sweetAlert("Oops...", "Sila masukkan nama penilai!", "error");
     document.registration.ev_name.focus() ;
     return false;
   }
   if( document.registration.std_name.value == "" )
   {
	 sweetAlert("Oops...", "Sila masukkan nama murid!", "error");
     document.registration.std_name.focus() ;
     return false;
   }
   if( document.registration.age.value == "" )
   {
	 sweetAlert("Oops...", "Sila masukkan umur murid!", "error");
	 document.registration.age.focus() ;
     return false;
   }
   if( document.registration.sijil.value == "" )
   {
	 sweetAlert("Oops...", "Sila masukkan sijil kelahiran murid!", "error");
     document.registration.sijil.focus() ;
     return false;
   }
   if( document.registration.jantina.value == "select" )
   {
	 sweetAlert("Oops...", "Sila pilih jantina murid!", "error");
	 document.registration.jantina.focus() ;
     return false;
   }
   if( document.registration.etnik.value == "select" )
   {
	 sweetAlert("Oops...", "Sila pilih etnik murid!", "error");
	 document.registration.etnik.focus() ;
     return false;
   }
   if( document.registration.negeri.value == "select" )
   {
	 sweetAlert("Oops...", "Sila pilih negeri kelahiran murid!", "error");
	 document.registration.negeri.focus() ;
     return false;
   }
   if( document.registration.kesihatan.value == "select" )
   {
	 sweetAlert("Oops...", "Sila pilih negeri kelahiran murid!", "error");
	 document.registration.kesihatan.focus() ;
     return false;
   }
   
   return( true );
}

		function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
	</script>
  		
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
        
        <style>
		.error {color: #FF0000;}
		</style>
        
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
        
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
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

			  <footer class="major container small">
					
<?php
if(isset($_POST['add']))
{
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
   $_SESSION['name'] = $std_name = addslashes ($_POST['std_name']);
   $ev_name = addslashes ($_POST['ev_name']);
   $age = addslashes ($_POST['age']);
   $sijil = addslashes ($_POST['sijil']);
   $jantina = addslashes ($_POST['jantina']);
   $etnik = addslashes ($_POST['etnik']);
   $kesihatan = addslashes ($_POST['kesihatan']);
   $negeri = addslashes ($_POST['negeri']);
}
else
{
   $_SESSION['name'] = $std_name = $_POST['std_name'];
   $ev_name = $_POST['ev_name'];
   $age = $_POST['age'];
   $sijil = ($_POST['sijil']);
   $jantina = ($_POST['jantina']);
   $etnik = ($_POST['etnik']);
   $kesihatan = ($_POST['kesihatan']);
   $negeri = ($_POST['negeri']);
}

$sql = "INSERT INTO daftar ".
       "(NamaMurid,NamaPenilai,Umur,sijil,Jantina,Etnik,Kesihatan,Negeri)".
       "VALUES('$std_name','$ev_name','$age','$sijil','$jantina','$etnik','$kesihatan','$negeri')";
mysql_select_db('diagnosticdb');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

echo "Maklumat murid telah direkod. Sila tekan <a href=\"EyeTest.php\"><i>SINI</i></a> untuk meneruskan";

}
else
{
?>
<h2>Daftar Maklumat Diri</h2>
<p><bold>*Sila isi maklumat murid dengan huruf besar dengan betul untuk rekod</bold></p>
<form name ="registration" id="reg" form method="post"  onsubmit="return validateForm()">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="151">Nama Penilai</td>
<td width="790"><input name="ev_name" type="text" id="ev_name"></td>
</tr>

<tr>
<td width="151">Nama Murid</td>
<td><input name="std_name" type="text" id="std_name"></td>
</tr>

<tr>
<td width="151">Umur Murid(Tahun)</td>
<td><input name="age" type="text" id="age" onkeypress="return isNumberKey(event)"></td>
</tr>

<tr>
<td width="151">Sijil Lahir/KP</td>
<td><input name="sijil" type="text" id="sijil"></td>
</tr>

<tr>
<td width="151">Jantina</td>
<td>
<select name="jantina" form="reg">
	<option id="jantina" value="select">[Select]</option>
	<option id="jantina" value="Lelaki">Lelaki</option>
    <option id="jantina" value="Perempuan">Perempuan</option>
</select>    
</td>
</tr>

<tr>
<td width="151">Etnik</td>
<td>
<select name="etnik">
  <option id="etnik" value="select">[Select]</option>
  <option id="etnik" value="Melayu">Melayu</option>
  <option id="etnik" value="Cina">Cina</option>
  <option id="etnik" value="India">India</option>
  <option id="etnik" value="Sabah">Bumiputra Sabah</option>
  <option id="etnik" value="Sarawak">Bumiputra Sarawak</option>
  <option id="etnik" value="Bumiputra Orang Asli">Bumiputra Orang Asli</option>
  <option id="etnik" value="Lain-lain">Lain-lain</option>
</select>
</td>
</tr>

<tr>
<td width="151">Negeri</td>
<td>
<select name="negeri">
  <option id="negeri" value="select">[Select]</option>
  <option id="negeri" value="Perlis">Perlis</option>
  <option id="negeri" value="Kedah">Kedah</option>
  <option id="negeri" value="PulauPinang">Pulau Pinang</option>
  <option id="negeri" value="Perak">Perak</option>
  <option id="negeri" value="Selangor">Selangor</option>
  <option id="negeri" value="WP Kuala Lumpur">WP Kuala Lumpur</option>
  <option id="negeri" value="Negeri Sembilan">Negeri Sembilan</option>
  <option id="negeri" value="Melaka">Melaka</option>
  <option id="negeri" value="Johor">Johor</option>
  <option id="negeri" value="Pahang">Pahang</option>
  <option id="negeri" value="Terengganu">Terengganu</option>
  <option id="negeri" value="Kelantan">Kelantan</option>
  <option id="negeri" value="Sarawak">Sarawak</option>
  <option id="negeri" value="Sabah">Sabah</option>
</select>
</td>
</tr>

<tr>
<td width="200">Kesihatan Murid</td>
<td>
<select name="kesihatan">
    <option id="kesihatan" value="select">[Select]</option>
	<option id="kesihatan" value="Tiada Masalah">Tiada Masalah</option>
    <option id="kesihatan" value="Lelah">Lelah</option>
    <option id="kesihatan" value="Asma">Asma</option>
    <option id="kesihatan" value="Masalah Jantung">Masalah Jantung</option>
    <option id="kesihatan" value="Leukimia">Leukimia</option>
</select>
</td>
</tr>     

<tr>
<td width="151"></td>
<td><br>
<input name="add" type="submit" id="add"  value="ADD">   <input name="reset" type="reset" id="reset"  value="RESET">
</td>
</tr>

</table>
</form>
<?php
}
?>

	</div>
			
<!-- Footer -->
			<div id="footer">
				<div class="container small">

					<header class="major last">
                    <ul class="icons">
						<li><a href="https://twitter.com/ajepa" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.facebook.com/ajeppa" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://instagram.com/ajeppa" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>
					
					<ul class="copyright">
						<li>&copy; All rights reserved.</li><li>Developer: WAN AZAM AZFAR BIN WAN MOHAMAD</li>
					</ul>
						
					</header>
	
				</div>
			</div>

	</body>
</html>