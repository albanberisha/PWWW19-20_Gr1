<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-image: url(images/back1.jpg); margin:20px;">
<?php
if ($_POST['id'] >= "100" && $_POST['id'] <= "105") {
 echo "Keni kerkuar punetorin me id ".$_POST['id']."</br>"  ;
 echo "<a href='punetoret.html' style='text-decoration:none; color:blue'>Shiko orarin e punetoreve</a>";

 echo "<p>Me poshte do ta shifni punetorin e kerkuar:</p>
 <p style='border: 1px solid black; margin-right:55vmax;'>
 <img src='images/punetori.jpg' alt='Fotoja nuk eshte ne dizposicion per shkak te privatesise.' style='  width:200px; height:200px;'>
 </p>";


}
 else{
	echo "Punetori me id ".$_POST['id']." nuk u gjet. </br>"  ;
 } 
?>
</body>
</html>
