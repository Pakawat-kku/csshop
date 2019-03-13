<?php include "../include/header.php"; ?>
<center>
<br><br><br><h1 class="wh">WED MASTER</h1><br><br><br>
</center>
<?php
	foreach($mas as $row){ 
?><center>
<h2 ><img src="../images/master/<?=$row['mid']?>.jpg" width="200" >
   <h3 class="head3"> NAME : <?=$row['mname']?></h3>
   <h3 class="head3"> STUDENT-ID : <?=$row['mstid']?></h3>
  <span > <a href="https://www.facebook.com/<?=$row['mfb']?>"><img src="../images/fb.png" height="100" width="100"></a></span>
  <span > <a href="https://www.instagram.com/<?=$row['mig']?>"><img src="../images/ig.png" height="80" width="80"></a></span>
</center>
	<?php } ?>
<?php include "../include/footer.php"; ?>