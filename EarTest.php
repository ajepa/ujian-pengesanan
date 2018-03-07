<!DOCTYPE HTML>

<html>
<?php
session_start();
?>

<?php
include 'db.php';

$name = $_SESSION['name'];

if(isset($_POST['submit'])){//to run PHP script on submit

$eye=$_POST['eye'];
$matakanan=$_POST['matakanan'];
$matakiri=$_POST['matakiri'];
$komen=$_POST['komen'];
$check = 'Murid berkemungkinan mempunyai masalah penglihatan'; 
$check1 = 'Murid berkemungkinan tidak mempunyai masalah penglihatan';
$eye1 = '20/30 - Penglihatan normal';
$eye2 = '20/20 - Penglihatan normal';
$eye3 = '20/10 - Penglihatan tajam';

$count = count($eye);
if ($matakanan == $eye1 || $matakanan == $eye2 || $matakanan == $eye3){ 
	if ($matakiri == $eye1 || $matakiri == $eye2 || $matakiri == $eye3){
			$chk=$check1;
		}		
		else{
			 $chk=$check;
		}
}
else{ 
$chk=$check;
}

$mata=""; 
$flag=0; 
foreach($eye as $entry){ 
$mata .= $entry." , "; 
$flag=1; 
} 
if($flag==1){ 
$mata=rtrim($mata);
	
  $query="INSERT INTO eye(NamaMurid,matakanan,matakiri,chk,result,komen) VALUES ('$name','$matakanan','$matakiri','$chk','$mata','$komen')";
  
  mysql_query($query) or die (mysql_error());
}
}

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
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
        
        <script src="sweetalert-master/lib/sweet-alert.min.js"></script> 
        <link rel="stylesheet" type="text/css" href="sweetalert-master/lib/sweet-alert.css">
        
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
 
function validate(){
var elem=document.forms['ear'].elements['ear[]'];
len=elem.length-1;
chkvalue='';
for(i=0; i<=len; i++)
{
if(elem[i].checked)chkvalue=elem[i].value;	
}
if(chkvalue=='')
{
sweetAlert("Sila tanda salah satu keputusan pengamatan", "Tanda 'murid menjalani ujian dengan lancar' jika murid tiada masalah menjalani ujian!", "error");
return false;
}
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
              
              <footer class="major container small">
  
                <h1><u><b>Ujian 2: Tanda-Tanda Masalah  Pendengaran </b></u></h1>
                <center><p>Ujian pendengaran ini adalah untuk menguji tahap pendengaran murid sama ada mengetahui bunyi yang diberikan.<br><br>
                <strong>ARAHAN:</strong>
                Murid dikehendaki menutup mata dan cuba mendengar bunyi yang diberi dan memberitahu apakah bunyi tersebut.<br>Tekan butang 'play' untuk mendengar bunyi dan butang 'stop' untuk memberhentikan bunyi.</p>
             
<object width="800" height="800" data="EarTest1.swf"></object>

<br><br><br>
<p><strong>Arahan :</strong> Murid dikehendaki menekan arah yang diberitahu oleh penilai.<br>Tekan gambar untuk membunyikan.</p>
<object width="800" height="800" data="EarTest4.swf"></object>

<br><br><br>
<center><form name="ear" form method="post" action="3MTest.php" onSubmit="return validate();" >
<h3>Senarai semak pengamatan pendengaran murid</h3>

 <table width="350" height="100" border="1">
  <tr>
    <td>Murid tidak mengecam dan membezakan pelbagai jenis bunyi yg diberi.</td>
    <td><input type="checkbox" name="ear[]" id="ear" value="Murid tidak mengecam dan membezakan pelbagai jenis bunyi yg diberi" />    
  </tr>
  
  <tr>
    <td>Murid tidak boleh menjawab soalan dengan ayat yang mudah.</td>
    <td><input type="checkbox" name="ear[]" id="ear" value="Murid tidak boleh menjawab soalan dengan ayat yang mudah" />    
  </tr>
  
  <tr>
    <td>Murid mempunyai masalah dalam bertutur.</td>
    <td><input type="checkbox" name="ear[]" id="ear" value="Murid mempunyai masalah dalam bertutur" />    
  </tr>

  <tr>
    <td>Murid tidak boleh menunjuk arah bunyi yang diberitahu.</td>
    <td><input type="checkbox" name="ear[]" id="ear" value="Murid tidak boleh menunjuk arah bunyi yang diberitahu" />    
  </tr>
  
  <tr>
    <td>Murid tidak mempunyai hubungan mata (eye contact) ketika berkomunikasi.</td>
    <td><input type="checkbox" name="ear[]" id="ear" value="Murid tidak mempunyai hubungan mata (eye contact) ketika berkomunikasi" />    
  </tr>
  
  <tr>
    <td>Kebolehan lisan dalam bahasa yang difahami murid tidak setanding dengan rakan sebaya.</td>
    <td><input type="checkbox" name="ear[]" id="ear" value="Kebolehan lisan dalam bahasa yang difahami murid tidak setanding dengan rakan sebaya" />    
  </tr>
  
  <br><br>
  
   <tr>
    <td>Murid menjalani ujian dengan lancar.</td>
    <td><input type="checkbox" name="ear[]" id="ear" value="Murid menjalani ujian dengan lancar" />    
  </tr>
        
</table>

<br><br>
Sila beri komen penilai di bawah untuk menambah maklumat lanjut tentang murid: <textarea name="komen" rows="5" cols="5" id="komen" value=" "> </textarea>
<br><br>
<input type="submit" name="submit" id="add" value="NEXT">
</form></center>
			</div>



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
						
				</div>
			</div>

	</body>
</html>