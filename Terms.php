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

<style>
table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 10px;
}
 </style>
        
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
				
<br><br><br>
<center><form name="terms" form method="post" action="Registration.php" onSubmit="validate()" >

<table width="400" height="400" border="5" >
  <tr>
    <th width="50%" bgcolor="#00FFFF" scope="col">KRITERIA MURID YANG HENDAK DINILAI</th>
    <th width="50%" bgcolor="#00FFFF" scope="col">KRITERIA PENILAI</th>
  </tr>
  <tr>
    <td>Murid telah melalui proses pembelajaran untuk tempoh tidak kurang daripada enam bulan<br> 
        
        •	Murid mempunyai kesukaran dalam penguasaan kemahiran membaca, menulis dan mengira<br>  
        
        •	Murid mempunyai prestasi yang rendah dalam mata pelajaran akademik<br>
        
        •	Murid telah diberi langkah-langkah pemulihan melalui program pemulihan dalam kelas atau Program Pemulihan Khas</td>
        
    <td>Penilai hendaklah telah mengajar murid yang hendak dinilai sekurang-kurangnya selama enam bulan<br>

•	Contoh guru yang boleh menjadi penilai:<br>
i)	guru LINUS<br>
ii)	guru kelas<br>
iii)	guru Pemulihan Khas<br> 
iv)	guru Bahasa Malaysia<br>
v)	guru Matematik</td>
  </tr>
</table>

<input type="checkbox" name="checkbox" id="term" value="check">Saya telah membaca semua peraturan untuk menjalankan ujian ini<br>

<br>
<input type="submit" name="submit" value="NEXT" onclick="if(!this.form.checkbox.checked){alert('Sila tanda untuk meneruskan');return false}"/>
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
						
				</div>
			</div>

	</body>
</html>