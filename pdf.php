<html>
<head>
<style type="text/css">
.
	
	 page {
    height:297mm;
    width:210mm;
    }
	
</style>
</head>

<body>

<div class="page">
<?php
session_start();

echo '<center><img src = "UPSI.png" width="500"/></center>';

echo "<br><br>";

echo "<center><h1>Keputusan Ujian Pengesanan Masalah Pembelajaran</h1></center>";

echo '<center><table width="500" height="500" border="1">
	<tr>
    <td>Nama Penilai: </td>
    <td>'.$_SESSION['nameP'].'</td>
  </tr>
  <tr>
    <td>Nama Murid: </td>
    <td>'.$_SESSION['nameS'].'</td>
  </tr>
  <tr>
    <td>Umur: </td>
    <td>  <input type="text" value="'.$_SESSION['umur'].'" readonly></td>
  </tr>
  <tr>
    <td>Sijil: </td>
    <td>  <input type="text" value="'.$_SESSION['sijil'].'" readonly></td>
  </tr>
  <tr>
    <td>Jantina: </td>
    <td>  <input type="text" value="'.$_SESSION['jantina'].'" readonly></td>
  </tr>
  <tr>
    <td>Etnik: </td>
    <td>  <input type="text" value="'.$_SESSION['etnik'] .'" readonly></td>
  </tr>
   <td>Kesihatan: </td>
    <td>  <input type="text" value="'.$_SESSION["kesihatan"].'" readonly></td>
  </tr>
  <tr>
    <td>Negeri: </td>
    <td>  <input type="text" value="'.$_SESSION['negeri'].'" readonly></td>
  </tr>
  <tr>
    <td>Tarikh: </td>
    <td>  <input type="text" value="'.$_SESSION['time'].'" readonly></td>
  </tr>
</table></center>';

echo "<br><br><br><br>";

echo "<center><h4>Senarai Pengamatan Penglihatan</h4></center>";	
echo '<center><table width="500" height="500" border="1">
<tr>
   <td>Keputusan: </td>
    <td>'.$_SESSION['chk'].'</td>
  </tr>  
  <tr>
    <td>Mata Kanan: </td>
    <td>'. $_SESSION['matakanan'].'</td>
  </tr>
  <tr>
    <td>Mata Kiri: </td>
    <td>'.$_SESSION['matakiri'].'</td>
  </tr>
  <tr>
    <td>Senarai Semak: </td>
    <td>'.$_SESSION['result'].'</td>
  </tr>
   <tr>
    <td>Komen: </td>
    <td>'.$_SESSION['komen'].'</td>
  </tr>
</table></center>';

echo "<br><br><br><br>";

echo "<center><h4>Senarai Pengamatan Pendengaran</h4></center>";
echo  '<center><table width="500" height="500" border="1">
<tr>
   <td>Keputusan: </td>
    <td>'.$_SESSION['chk1'].'</td>
  </tr>
  <tr>
    <td>Senarai Semak: </td>
    <td>'.$_SESSION['result1'].'</td>
  </tr>
   <tr>
    <td>Komen: </td>
    <td>'.$_SESSION['komen1'].'</td>
  </tr>
</table></center>';



echo "<br><br><br><br>";


echo "<center><h4>Senarai Pengamatan Mendengar,Membaca dan Menulis</h4></center>";	
echo  '<center><table width="500" height="500" border="1">
<tr>
   <td>Keputusan: </td>
    <td>'.$_SESSION['chk2'].'</td>
  </tr>
  <tr>
    <td>Senarai Semak:</td>
    <td>'.$_SESSION['result2'].'</td>
  </tr>
   <tr>
    <td>Komen: </td>
    <td>'.$_SESSION['komen2'].'</td>
  </tr>
</table></center>';



echo "<br><br><br><br>";


echo "<center><h4>Senarai Pengamatan Nombor</center></h4>";
echo  '<center><table width="500" height="500" border="1">
<tr>
   <td>Keputusan: </td>
    <td>'.$_SESSION['chk3'].'</td>
  </tr>
  <tr>
    <td>Senarai Semak: </td>
    <td>'.$_SESSION['result3'].'</td>
  </tr>
   <tr>
    <td>Komen: </td>
    <td>'.$_SESSION['komen3'].'</td>
  </tr>
</table></center>';

	

echo "<br><br><br><br>";


echo "<center><h4>Senarai Pengamatan Kemahiran Asas</h4></center>";	
echo  '<center><table width="500" height="500" border="1">
<tr>
   <td>Keputusan: </td>
    <td>'.$_SESSION['chk4'].'</td>
  </tr>
  <tr>
    <td>Senarai Semak: </td>
    <td>'.$_SESSION['result4'].'</td>
  </tr>
   <tr>
    <td>Komen: </td>
    <td>'.$_SESSION['komen4'].'</td>
  </tr>
</table></center>';
			
?>
</div>

<br><br>

<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
		var homebutton = document.getElementById("homebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
		homebutton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
		homebutton.style.visibility = 'visible';
    }
	
	function Home() {	
    window.location.assign("index.php")
}
       </script>

<center>
<input id="printpagebutton" type="button" value="Print " onClick="printpage()"/>

<input id="homebutton" type="button" value="Home" onClick="Home()"/>
</center>
              
</body>
</html>