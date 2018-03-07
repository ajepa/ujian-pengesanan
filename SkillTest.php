
<html>
<?php
session_start();
?>


<?php
include 'db.php';

$name = $_SESSION['name'];

if(isset($_POST['submit'])){//to run PHP script on submit

$num=$_POST['num'];
$komen=$_POST['komen'];
$check = 'Murid berkemungkinan mempunyai masalah nombor dan saiz'; 
$check1 = 'Murid berkemungkinan tidak mempunyai masalah nombor dan saiz';

$count = count($num);
if ($count>=2){
$chk=$check;
}
else{ 
$chk=$check1;
}

$number=""; 
$flag=0; 
foreach($num as $entry){ 
$number .= $entry." , "; 
$flag=1; 
} 
if($flag==1){ 
$number=rtrim($number); 
	
   $query="INSERT INTO number(NamaMurid,chk,result,komen) VALUES ('$name','$chk','$number','$komen')";     

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
var elem=document.forms['skill'].elements['skill[]'];
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
				
			  
                <h1><u><b>Ujian 5: Tahap Penguasaan Kemahiran Asas Perkembangan Individu</b></u></h1>
                <center><p>Ujian ini adalah unutk mengenal pasti tahap kemahiran asas murid.<br><br>
                <strong>ARAHAN:</strong>Murid dikehendaki bermain semua permainan dibawah.<br>Penilai diminta untuk membimbing murid</p>
                
               
<center><object width="800" height="800" data="memory.swf">
</object></center>

<center><object width="800" height="800" data="Dot.swf">
</object></center>

<center><form name="skill" method="post" ACTION = "Result.php" onSubmit="return validate();">
<h3>Senarai semak pengamatan Kemahiran Murid</h3>
        
   <table width="350" height="100" border="1">
  <tr>
    <td>Murid mengalami masalah tingkahlaku.</td>
    <td><input type="checkbox" name="skill[]" id="3M" value="Murid mengalami masalah tingkahlaku" />  
  </tr>
  
   <tr>
    <td>Murid mempunyai daya tumpuan yang singkat.</td>
    <td><input type="checkbox" name="skill[]" id="3M" value="Murid mempunyai daya tumpuan yang singkat" />  
  </tr>
  
   <tr>
    <td>Murid tidak boleh menyambung titik-titik.</td>
    <td><input type="checkbox" name="skill[]" id="3M" value="Murid tidak boleh menyambung titik-titik" />  
  </tr>
  
   <tr>
    <td>Murid sering gopoh semasa bertindak.</td>
    <td><input type="checkbox" name="skill[]" id="3M" value="Murid sering gopoh semasa bertindak" />  
  </tr>
  
   <tr>
    <td>Murid sering cuai dalam pergerakan.</td>
    <td><input type="checkbox" name="skill[]" id="3M" value="Murid sering cuai dalam pergerakan" />  
  </tr>
  
   <tr>
    <td>Murid sukar mengikut arahan mudah.</td>
    <td><input type="checkbox" name="skill[]" id="3M" value="Murid sukar mengikut arahan mudah" />  
  </tr>
  
  <br><br>
  
   <tr>
    <td>Murid menjalani ujian dengan lancar.</td>
    <td><input type="checkbox" name="skill[]" id="skill" value="Murid menjalani ujian dengan lancar" />    
  </tr>
  
</table>

<br><br>
Sila beri komen penilai di bawah untuk menambah maklumat lanjut tentang murid: <textarea name="komen" rows="5" cols="5" id="komen" value=" "> </textarea>

<br><br>
<input type="submit" name="submit" id="add" value="FINISH">
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