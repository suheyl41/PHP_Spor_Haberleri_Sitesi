﻿<?php include("include/veritabaniayari.php")  ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MSpor Voleybol</title>
<style>
p.thick{font-weight: bold;}
a{
	color:black;
	}
</style>
</head>

<body>
<table width="1251" height="1070" align="center" cellpadding="3" cellspacing="3" border="3">
  <?php include("header.php")  ?>
  <tr>
    <td height="43" colspan="4"><img src="images/v.JPG" width="1298" height="35" /></td>
  </tr>
  
  <tr>
  <?php
  $veri=$vt->query("select * from voleybol")->fetchAll(PDO::FETCH_ASSOC);
  $sayac=0;
  foreach($veri as $row){
	  $yol=$row["resimyolu"];
	  echo '<td>';
	  echo '<a href="v1.php?id='.$row["id"].'"><img src="';print_r($row["resimyolu"]);
	  echo '" alt="" style="width:312px;height:250px;margin-top: 0px;">';
	  echo '</br><p class="thick">';print_r($row["haberbaslik"]);echo '</p></a>';
	  echo '</td>';
	  $sayac++;
	  if($sayac%4==0)
	 {
		 echo '</tr><tr>';
		 
	 }
  }
  ?>
  </tr>
  
  
  
  <tr>
    <td height="50" colspan="4"><img src="images/voleyboltakimlari.png" width="1296" height="89" /></td>
  </tr>
  <?php include("footer.php")  ?>
</table>
</body>
</html>