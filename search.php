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
  		
		<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
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
			    <h2>Instrumen ini bertujuan membantu <br/>
			      guru mengesan murid yang mempunyai<br/>
			      masalah dalam pembelajaran. </h2>
			    <!--
					<p>Tellus erat mauris ipsum fermentum<br />
					etiam vivamus nunc nibh morbi.</p>
					-->
		      </header>
			  <footer class="major container small">
<?php
if(isset($_POST['submit'])){ 
	  if(preg_match("/[A-Za-z]+/", $_POST['name'])){ 
	  $con= new mysqli("127.0.0.1","root","","diagnosticdb");
      $_SESSION['name'] = $name = $_POST['name'];
	 
	 $name = htmlspecialchars($name); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
       $name = mysql_real_escape_string($name);
        // makes sure nobody uses SQL injection

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	  
	  echo "<h2>HASIL CARIAN</h2>";
echo "<br><br>";	  

echo "<h4>Maklumat diri murid</h4>";
$result = mysqli_query($con, "SELECT * FROM daftar
    WHERE NamaMurid LIKE '%{$name}%'");
	
while ($row = mysqli_fetch_array($result)){
echo '<table width="500" border="1">
	<tr>
    <td>Nama Penilai: </td>
    <td><input type="text" value="'.$row['NamaPenilai'].'" readonly></td>
  </tr> 
   <tr>
    <td>Nama Murid: </td>
    <td>  <input type="text" value="'.$row['NamaMurid'].'" readonly></td>
  </tr>
  <tr>
    <td>Umur: </td>
    <td>  <input type="text" value="'.$row['Umur'].'" readonly></td>
  </tr>
  <tr>
    <td>Sijil: </td>
    <td>  <input type="text" value="'.$row["sijil"].'" readonly></td>
  </tr>
  <tr>
    <td>Jantina: </td>
    <td>  <input type="text" value="'.$row["Jantina"].'" readonly></td>
  </tr>
  <tr>
    <td>Etnik: </td>
    <td>  <input type="text" value="'.$row["Etnik"].'" readonly></td>
  </tr>
   <tr>
    <td>Kesihatan: </td>
    <td>  <input type="text" value="'.$row["Kesihatan"].'" readonly></td>
  </tr>
  <tr>
    <td>Negeri: </td>
    <td>  <input type="text" value="'.$row["Negeri"].'" readonly></td>
  </tr>
  <tr>
    <td>Tarikh: </td>
    <td>  <input type="text" value="'.$row["time"].'" readonly></td>
  </tr>
</table>';

$_SESSION['nameP'] = $row['NamaPenilai'];
$_SESSION['nameS'] = $row['NamaMurid'];
$_SESSION['umur'] = $row['Umur'];
$_SESSION['sijil'] = $row["sijil"];
$_SESSION['jantina'] = $row["Jantina"];
$_SESSION['etnik'] = $row["Etnik"];
$_SESSION['kesihatan'] = $row['Kesihatan'];
$_SESSION['negeri'] = $row["Negeri"];
$_SESSION['time'] = $row["time"];
}	
	
echo "<br><br>";
$result1 = mysqli_query($con, "SELECT * FROM eye
    WHERE NamaMurid LIKE '%{$name}%'");
echo "<h4>Senarai Pengamatan Penglihatan murid</h4>";	
while ($row=mysqli_fetch_array($result1)){
echo '<table width="500" border="1">
<tr>
   <td>Keputusan: </td>
    <td><input type="text" value="'.$row['chk'].'" readonly>
  </tr>   
  <tr>
    <td>Mata Kanan: </td>
    <td>  <input type="text" value="'. $row['matakanan'].'" readonly></td>
  </tr>
  <tr>
    <td>Mata Kiri: </td>
    <td>  <input type="text" value="'.$row['matakiri'].'" readonly></td>
  </tr>
  <tr>
    <td>Senarai Semak: </td>
    <td><textarea rows="5" cols="50" readonly>'.$row['result'].'</textarea></td>
  </tr>
   <tr>
    <td>Komen: </td>
    <td><textarea rows="5" cols="50" readonly>'.$row['komen'].'</textarea></td>
  </tr>
</table>';

$_SESSION['chk'] = $row['chk'];
$_SESSION['matakanan'] = $row['matakanan'];
$_SESSION['matakiri'] = $row['matakiri'];
$_SESSION['result'] = $row['result'];
$_SESSION['komen'] = $row['komen'];
}

echo "<br><br>";
$result2 = mysqli_query($con, "SELECT * FROM ear
    WHERE NamaMurid LIKE '%{$name}%'");
	echo "<h4>Senarai Pengamatan Pendengaran murid</h4>";		
while ($row = mysqli_fetch_array($result2)){
echo  '<table width="500" border="1">
<tr>
   <td>Keputusan: </td>
    <td><input type="text" value="'.$row['chk'].'" readonly>
  </tr>   
  <tr>
    <td>Senarai Semak: </td>
    <td> <textarea rows="5" cols="50" readonly>'.$row['result'].'</textarea></td>
  </tr>
   <tr>
    <td>Komen: </td>
    <td>  <textarea rows="5" cols="50" readonly>'.$row['komen'].'</textarea></td>
  </tr>
</table>';

$_SESSION['chk1'] = $row['chk'];
$_SESSION['result1'] = $row['result'];
$_SESSION['komen1'] = $row['komen'];
}


echo "<br><br>";
$result3 = mysqli_query($con, "SELECT * FROM 3M
    WHERE NamaMurid LIKE '%{$name}%'");
	echo "<h4>Senarai Pengamatan Mendengar,Membaca dan Menulis murid</h4>";		
while ($row = mysqli_fetch_array($result3)){
	echo  '<table width="500" border="1">
	<tr>
   <td>Keputusan: </td>
    <td><input type="text" value="'.$row['chk'].'" readonly>
  </tr>   
  <tr>
    <td>Senarai Semak:</td>
    <td><textarea rows="5" cols="50" readonly>'.$row['result'].'</textarea></td>
  </tr>
   <tr>
    <td>Komen: </td>
    <td>  <textarea rows="5" cols="50" readonly>'.$row['komen'].'</textarea></td>
  </tr>
</table>';

$_SESSION['chk2'] = $row['chk'];
$_SESSION['result2'] = $row['result'];
$_SESSION['komen2'] = $row['komen'];
}

echo "<br><br>";
$result4 = mysqli_query($con, "SELECT * FROM number
    WHERE NamaMurid LIKE '%{$name}%'");
	echo "<h4>Senarai Pengamatan Nombor murid</h4>";				
while ($row = mysqli_fetch_array($result4)){	
	echo  '<table width="500" border="1">
	<tr>
   <td>Keputusan: </td>
    <td><input type="text" value="'.$row['chk'].'" readonly>
  </tr>   
  <tr>
    <td>Senarai Semak: </td>
    <td>  <textarea rows="5" cols="50" readonly>'.$row['result'].'</textarea></td>
  </tr>
   <tr>
    <td>Komen: </td>
    <td>  <textarea rows="5" cols="50" readonly>'.$row['komen'].'</textarea></td>
  </tr>
</table>';

$_SESSION['chk3'] = $row['chk'];
$_SESSION['result3'] = $row['result'];
$_SESSION['komen3'] = $row['komen'];
}

echo "<br><br>";
$result5 = mysqli_query($con, "SELECT * FROM memori
    WHERE NamaMurid LIKE '%{$name}%'");	
echo "<h4>Senarai Pengamatan Kemahiran murid</h4>";		
while ($row = mysqli_fetch_array($result5)){	
	echo  '<table width="500" border="1">
	<tr>
   <td>Keputusan: </td>
    <td><input type="text" value="'.$row['chk'].'" readonly>
  </tr>   
  <tr>
    <td>Senarai Semak: </td>
    <td>  <textarea rows="5" cols="50" readonly>'.$row['result'].'</textarea></td>
  </tr>
   <tr>
    <td>Komen: </td>
    <td>  <textarea rows="5" cols="50" readonly>'.$row['komen'].'</textarea></td>
  </tr>
</table>';

$_SESSION['chk4'] = $row['chk'];
$_SESSION['result4'] = $row['result'];
$_SESSION['komen4'] = $row['komen'];

echo "<br><br>";
echo '<input type="button" value="View to print" onClick="newDoc()">';				
}

echo "<br><br>";
echo "jika senarai pengamatan kosong, Sila tekan salah satu ujian dibawah untuk menyambung kembali ujian ";
echo "<br><br>";
echo '<table width="1000%" border="1" cellpadding="10">
  <tr>
    <td><a href="EyeTest.php"><i>Ujian Penglihatan</i></a></td>
    <td><a href="EarTest.php"><i>Ujian Pendengaran</i></a></td>
    <td><a href="3MTest.php"><i>Ujian Mendengar dan Membaca</i></a></td>
    <td><a href="NumberTest.php"><i>Ujian Nombor dan saiz</i></a></td>
    <td><a href="SkillTest.php"><i>Ujian memori dan psikomotor</i></a></td>
  </tr>
</table>
';

	}			  
		}
?>

              
<script>
function newDoc() {
    window.location.assign("pdf.php")
}
</script>
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