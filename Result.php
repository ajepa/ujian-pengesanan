<!DOCTYPE HTML>

<html>
<?php
session_start();
?>


<?php
include 'db.php';

$name = $_SESSION['name'];

if(isset($_POST['submit'])){//to run PHP script on submit

$skill=$_POST['skill'];
$komen=$_POST['komen'];
$check = 'Murid berkemungkinan mempunyai masalah menguasai kemahiran asas'; 
$check1 = 'Murid berkemungkinan tidak mempunyai masalah kemahiran asas';

$count = count($skill);
if ($count>=3){
$chk=$check;
}
else{ 
$chk=$check1;
}

$skills=""; 
$flag=0; 
foreach($skill as $entry){ 
$skills .= $entry." , "; 
$flag=1; 
} 
if($flag==1){ 
$skills=rtrim($skills); 
	
   $query="INSERT INTO memori(NamaMurid,chk,result,komen) VALUES ('$name','$chk','$skills','$komen')";     

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
        <script src="js/validate.js"></script>
        
        <script src="sweetalert-master/lib/sweet-alert.js"></script>
 		<link rel="stylesheet" href="sweetalert-master/lib/sweet-alert.css">
  		
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
$db = new PDO('mysql:host=127.0.0.1;dbname=diagnosticdb', 'root', '');

echo "<h1><bold>Senarai penuh keputusan pengamatan ujian pengesanan<bold></h1>";

$name = $_SESSION['name'];

$stmt = $db->query("SELECT * FROM daftar
    WHERE NamaMurid LIKE '%{$name}%'");
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
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

echo "<h4>Senarai Pengamatan Penglihatan Pelajar</h4>";
$stmt1 = $db->query("SELECT * FROM eye
    WHERE NamaMurid LIKE '%{$name}%'");
 while($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {	
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

echo "<h4>Senarai Pengamatan Pendengaran Pelajar</h4>";
$stmt2 = $db->query("SELECT * FROM ear
    WHERE NamaMurid LIKE '%{$name}%'");
 while($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {	
 echo  '<table width="500" border="1">
 <tr>
    <td>Keputusan: </td>
    <td><input type="text" value="'.$row['chk'].'" readonly></td>
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
echo "<h4>Senarai Pengamatan Mendengar,Membaca dan Menulis Pelajar</h4>";
$stmt3 = $db->query("SELECT * FROM 3M
    WHERE NamaMurid LIKE '%{$name}%'");
 while($row = $stmt3->fetch(PDO::FETCH_ASSOC)) {	
   echo  '<table width="500" border="1">
	<tr>
      <td>Keputusan: </td>
	   <td><input type="text" value="'.$row['chk'].'" readonly></td>
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
echo "<h4>Senarai Pengamatan Nombor Pelajar</h4>";
$stmt4 = $db->query("SELECT * FROM number
    WHERE NamaMurid LIKE '%{$name}%'");
 while($row = $stmt4->fetch(PDO::FETCH_ASSOC)) {	
   echo  '<table width="500" border="1">
   <tr>
    <td>Keputusan: </td>
     <td><input type="text" value="'.$row['chk'].'" readonly></td>
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
echo "<h4>Senarai Pengamatan Kemahiran Pelajar</h4>";
$stmt5 = $db->query("SELECT * FROM memori
    WHERE NamaMurid LIKE '%{$name}%'");
 while($row = $stmt5->fetch(PDO::FETCH_ASSOC)) {	
   echo  '<table width="500" border="1">
   <tr>
      <td>Keputusan: </td>
    <td><input type="text" value="'.$row['chk'].'" readonly></td>
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

}

?> 

<br><br>

<input type="button" value="View here to print" onclick="newDoc()">
              
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