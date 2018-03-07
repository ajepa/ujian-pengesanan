<!DOCTYPE HTML>

<html>
<?php
session_start();
?>


<?php
include 'db.php';

$name = $_SESSION['name'];

if(isset($_POST['submit'])){//to run PHP script on submit

$mmm=$_POST['3M'];
$komen=$_POST['komen'];
$check = 'Murid berkemungkinan mempunyai masalah Membaca,Menulis dan Mengeja'; 
$check1 = 'Murid tidak mempunyai masalah Membaca,Menulis dan Mengeja';

$count = count($mmm);
if ($count>=6){
$chk=$check;
}
else{ 
$chk=$check1;
}


$baca=""; 
$flag=0; 
foreach($mmm as $entry){ 
$baca .= $entry." , "; 
$flag=1; 
} 
if($flag==1){ 
$baca=rtrim($baca); 
	
   $query="INSERT INTO 3M(NamaMurid,chk,result,komen) VALUES ('$name','$chk','$baca','$komen')";     

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
 
function validate(){
var elem=document.forms['num'].elements['num[]'];
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
				
			  
                <h1><u><b>Ujian 4: Tahap Penguasaan Nombor</b></u></h1>
                <center><p>Ujian nombor ini adalah untuk menguji tahap pengetahuan dan kemampuan murid mengenal pasti nombor.<br><br>
                <strong>ARAHAN:</strong>murid dikehendaki menyebut nombor yang ditunjukkan oleh penilai.<br>Tekan nombor untuk mendengar bunyi</p>
             
<object width="800" height="800" data="NumberTest.swf"></object>

<br><br><br>
<p><strong>Arahan :</strong> murid dikehendaki mengenalpasti saiz objek dan bilangan objek.<br>Tekan button NEXT untuk meneruskan.</p>
<object width="800" height="800" data="NumberTest2.swf"></object>

<br><br><br>
<p><strong>Arahan :</strong> murid diminta untuk mengenalpasti dan mensuai padankan nombor dengan jumlah objek.<br>Tarik nombor dan letakkan di petak bintang.</p>
<object width="800" height="800" data="NumberTest3.swf"></object></center>

<br><br><br>
<center><form name="num" form method="post" action="SkillTest.php" onSubmit="return validate();" >
<h3>Senarai semak pengamatan pendengaran murid</h3>

 <table width="350" height="100" border="1">
  <tr>
    <td>murid tidak boleh membezakan konsep banyak dan sedikit.</td>
    <td><input type="checkbox" name="num[]" id="num" value="murid tidak boleh membezakan konsep banyak dan sedikit" />
  </tr>
  
  <tr>
    <td>Murid bermasalah menamakan objek.</td>
    <td><input type="checkbox" name="skill[]" id="3M" value="Murid bermasalah menamakan objek" />  
  </tr>
  
  <tr>
    <td>murid tidak boleh membezakan saiz.</td>
    <td><input type="checkbox" name="num[]" id="num" value="murid tidak boleh membezakan saiz" />
    </tr> 
    
    <tr>
    <td>murid tidak mengenal angka 0 hingga 9.</td>
    <td><input type="checkbox" name="num[]" id="num" value="murid tidak mengenal angka 0 hingga 9" />
    </tr>  
    
    <tr>
    <td>murid tidak boleh membilang dalam lingkungan 10 secara lisan.</td>
    <td><input type="checkbox" name="num[]" id="num" value="murid tidak boleh membilang dalam lingkungan 10 secara lisan" />
    </tr>
    
    <br><br>
    
     <tr>
    <td>Murid menjalani ujian dengan lancar.</td>
    <td><input type="checkbox" name="num[]" id="num" value="Murid menjalani ujian dengan lancar" />    
  </tr>
          
</table>

<br><br>
Sila beri komen penilai di bawah untuk menambah maklumat lanjut tentang murid: <textarea name="komen" rows="5" cols="5" id="komen" value=" "> </textarea>

<br>
<input type="submit" name="submit" value="NEXT""/>
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