<!DOCTYPE HTML>

<html>
<?php
session_start();
?>


<?php
include 'db.php';

$name = $_SESSION['name'];

if(isset($_POST['submit'])){//to run PHP script on submit

$ear=$_POST['ear'];
$komen=$_POST['komen'];
$check = 'Murid berkemungkinan mempunyai masalah pendengaran'; 
$check1 = 'Murid berkemungkinan tidak mempunyai masalah pendengaran';

$count = count($ear);
if ($count>=3){
$chk=$check;
}
else{ 
$chk=$check1;
}

$telinga=""; 
$flag=0; 
foreach($ear as $entry){  
$telinga .= $entry." , "; 
$flag=1; 
} 
if($flag==1){ 
$telinga=rtrim($telinga);
  
   $query="INSERT INTO ear(NamaMurid,chk,result,komen) VALUES ('$name','$chk','$telinga','$komen')";
   $result = mysql_query($query) or die (mysql_error());     
	
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
</script>

<script>
function validate(){
var elem=document.forms['3M'].elements['3M[]'];
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
				
			  
                <h1><u><b>Ujian 3: Tahap Penguasaan Mendengar, Membaca dan Menulis</b></u></h1>
                <center><p>Ujian ini adalah bagi mengenal pasti kemampuan murid dalam mendengar, membaca dan menulis (3M).<br><br>
                <strong>ARAHAN:</strong>Murid dikehendaki mendengar ayat yang diberi dan menulis kembali ayat tersebut.<br>Tekan butang 'CONTOH' untuk melihat contoh ayat</p>
                
               
<center><object width="800" height="800" data="3M.swf">
</object></center>

<br><br><br>
<p><strong>Arahan :</strong> Murid dikehendaki menyebut dan membezakan antara dua perkataan yang hampir sama.<br>Tekan tulisan untuk membunyikan perkataan.</p>
<object width="800" height="800" data="EarTest2.swf"></object>

<br><br><br>
<p><strong>Arahan :</strong> Murid dikehendaki membaca ayat satu persatu dan menceritakan kembali keseluruhan ayat.<br>Tekan tulisan untuk membunyikan perkataan.</p>
<object width="800" height="800" data="EarTest33.swf"></object>

<center><form name="3M" method="post" ACTION = "Numbertest.php" onSubmit="return validate();">
<h3>Senarai semak pengamatan Mendengar, Membaca dan Menulis</h3>

<br><br>
<h3>Mengeja</h3>

 <table width="350" height="100" border="1">
  <tr>
    <td>Murid sukar mengeja perkataan mudah.</td>
    <td><input type="checkbox" name="3M[]" id="eye" value="Murid sukar mengeja perkataan mudah" />   
  </tr>
  
    <tr>
    <td>Murid sering mengeja perkataan yang tiada langsung kaitan dengan perkataan asal.</td>
    <td><input type="checkbox" name="3M[]" id="eye" value="Murid sering mengeja perkataan yang tiada langsung kaitan makna dengan perkataan asal" />   
  </tr>
  
    <tr>
    <td>Murid keliru membezakan bunyi abjad yang hampir sama dalam suku kata.</td>
    <td><input type="checkbox" name="3M[]" id="eye" value="Murid keliru membezakan bunyi abjad yang hampir sama dalam suku kata" />   
  </tr>       
</table>

<br><br>
<h3>Membaca</h3>

 <table width="350" height="100" border="1">
   <tr>
    <td>murid tidak boleh bercerita kembali.</td>
    <td><input type="checkbox" name="ear[]" id="ear" value="murid tidak boleh bercerita kembali" />    
  </tr>
  <tr>
    <td><p>Murid ketinggalan dalam kebolehan membaca berbanding rakan sebaya.</p>
      <p>Kesalahan yang kerap dilakukan oleh murid semasa membaca ialah:</p></td>
    <td><input type="checkbox" name="3M[]" id="eye" value="Murid ketinggalan dalam kebolehan membaca berbanding rakan sebaya" />   
  </tr>
  
  <tr>
    <td>menggugurkan perkataan.</td>
    <td><input type="checkbox" name="3M[]" id="eye" value="murid menggugurkan perkataan semasa membaca" />   
  </tr>
  
  <tr>
    <td>menambah perkataan pada bacaannya.</td>
    <td><input type="checkbox" name="3M[]" id="eye" value="murid menambah perkataan pada bacaannya" />   
  </tr>
  
    <tr>
    <td>melangkau baris.</td>
    <td><input type="checkbox" name="3M[]" id="eye" value="murid melangkaui baris semasa membaca" />   
  </tr>
  
    <tr>
    <td>menggantikan perkataan.</td>
    <td><input type="checkbox" name="3M[]" id="eye" value="murid menggantikan perkataan pada bacaannya" />   
  </tr>       
</table>


<br><br>
<h3>Menulis</h3>

 <table width="350" height="100" border="1">
   <tr>
    <td><p>Murid menulis lambat berbanding dengan rakan sebaya.</p>
      <p>Murid menulis secara terbalik:</p></td>
    <td><input type="checkbox" name="3M[]" id="3M" value="Murid menulis lambat berbanding dengan rakan sebaya" />   
  </tr>
  
    <tr>
    <td>abjad-abjad tertentu.</td>
    <td><input type="checkbox" name="3M[]" id="3M" value="Murid menulis secara terbalik abjad-abjad tertentu" />   
  </tr>
  
    <tr>
    <td>perkataan.</td>
    <td><input type="checkbox" name="3M[]" id="3M" value="Murid menulis secara terbalik perkataan tertentu" />   
  </tr>
  
  <br><br>
  
   <tr>
    <td>Murid menjalani ujian dengan lancar.</td>
    <td><input type="checkbox" name="3M[]" id="3M" value="Murid menjalani ujian dengan lancar" />    
  </tr>
         
</table>

<br><br>
Sila beri komen penilai di bawah untuk menambah maklumat lanjut tentang murid: <textarea name="komen" rows="5" cols="5" id="komen" value=" "> </textarea>

<br><br>
<input type="submit" name="submit" id="add" value="NEXT">
</form></center>
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