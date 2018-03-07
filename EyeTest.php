<!DOCTYPE HTML>
<!--
	Directive by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<?php
session_start();
$name = $_SESSION['name'];
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
        
        <script src="sweetalert-master/lib/sweet-alert.min.js"></script> <link rel="stylesheet" type="text/css" href="sweetalert-master/lib/sweet-alert.css">
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
	
var elem=document.forms['eye'].elements['matakanan'];
len=elem.length-1;
chkvalue='';
for(i=0; i<=len; i++)
{
if(elem[i].checked)chkvalue=elem[i].value;	
}
if(chkvalue=='')
{
sweetAlert("Oops...", "Sila tanda markah mata kanan!", "error");
return false;
}

var elem=document.forms['eye'].elements['matakiri'];
len=elem.length-1;
chkvalue='';
for(i=0; i<=len; i++)
{
if(elem[i].checked)chkvalue=elem[i].value;	
}
if(chkvalue=='')
{
sweetAlert("Oops...", "Sila tanda markah mata kiri!", "error");
return false;
}	

var elem=document.forms['eye'].elements['eye[]'];
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
				
			  
                <h1><u><b>Ujian 1: Tanda-Tanda Masalah  Penglihatan </b></u></h1>
                <center><p>Ujian ini ialah ujian yang digunakan untuk mengukur ketajaman penglihatan mata.<br>
                ARAHAN:<br>
                Murid hendaklah berada 2 meter jauh dengan selari dengan gambarajah.<br>
Untuk memeriksa mata kiri, murid diminta menutup mata kanannya dengan tangan dan sebaliknya.<br> Murid diminta untuk menyebut satu persatu objek dengan nada yang kuat.<br>Tekan 'Stop' apabila murid sudah tidak mampu meneruskan dan catat markah.</p></center>
                            
<center><object width="600" height="600" data="EyeTest.swf">
</object></center>

<center><form name="eye" method="post" action="EarTest.php"  onSubmit="return validate();">
<h3>Senarai Semak Pengamatan Penglihatan murid</h3>

<tr><td>
<p>Mata Kanan</p>                                                   
<input type="radio" name="matakanan" id="matakanan" value="20/200 - Penglihatan bermasalah">20/200
<input type="radio" name="matakanan" id="matakanan" value="20/100 - Penglihatan bermasalah">20/100
<input type="radio" name="matakanan" id="matakanan" value="20/70 - Penglihatan bermasalah">20/70           
<input type="radio" name="matakanan" id="matakanan" value="20/50 - Penglihatan bermasalah">20/50<br>
<input type="radio" name="matakanan" id="matakanan" value="20/40 - Penglihatan bermasalah">20/40                 
<input type="radio" name="matakanan" id="matakanan" value="20/30 - Penglihatan normal">20/30                      
<input type="radio" name="matakanan" id="matakanan" value="20/20 - Penglihatan normal">20/20           
<input type="radio" name="matakanan" id="matakanan" value="20/10 - Penglihatan Tajam">20/10 
</td>

<td>
<br><br>
<p>Mata Kiri</p>
<input type="radio" name="matakiri" id="matakiri" value="20/200 - Penglihatan bermasalah">20/200
<input type="radio" name="matakiri" id="matakiri" value="20/100 - Penglihatan bermasalah">20/100
<input type="radio" name="matakiri" id="matakiri" value="20/70 - Penglihatan bermasalah">20/70
<input type="radio" name="matakiri" id="matakiri" value="20/50 - Penglihatan bermasalah">20/50<br>
<input type="radio" name="matakiri" id="matakiri" value="20/40 - Penglihatan bermasalah">20/40
<input type="radio" name="matakiri" id="matakiri" value="20/30 - Penglihatan normal">20/30
<input type="radio" name="matakiri" id="matakiri" value="20/20 - Penglihatan normal">20/20
<input type="radio" name="matakiri" id="matakiri" value="20/10 - Penglihatan Tajam">20/10
</td></tr>

<br><br>
 <table width="350" height="100" border="1">
  <tr>
    <td>murid cuba mendekatkan muka ke skrin.</td>
    <td><input type="checkbox" name="eye[]" id="eye" value="murid cuba mendekatkan muka ke skrin" />   
  </tr> 
  
<br><br>
 <tr>
    <td>Murid menjalani ujian dengan lancar.</td>
    <td><input type="checkbox" name="eye[]" id="eye" value="Murid menjalani ujian dengan lancar" />    
  </tr>
           
</table>

Sila beri komen penilai di bawah untuk menambah maklumat lanjut tentang murid: <textarea name="komen" rows="5" cols="5" id="komen" value=" "></textarea>

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