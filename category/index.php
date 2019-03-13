<?php 
	include "../include/header.php";
	$category = isset($_GET['cat']) && $_GET['cat']+0 > 0 ? $_GET['cat']:1;
    $rows = $db->Query('SELECT product.*,lib_category.name AS category_name 
        FROM product LEFT JOIN lib_category ON product.category=lib_category.code 
		WHERE product.category='.$category);
?>
<br>
<br>
<br>
<center style="color:#bccadb; font-size:20pt; font-weight:bold;">
<?=$rows[0]['category_name']?> <!--ใส่[0]ทุกครั้ง ถ้าไม่ใช่การวนลูป-->
</center>
<br><br>
<div class="row">

	<?php
foreach($rows as $row){ 
		/*foreach($list as $lis){
			$curl=$lis['purl']? $lis['purl']:$lis['pid'];*/
	?>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="border-width: 1px; color:white; padding:20px; text-align:center;">
	<div style="align-items: flex-end;"><a href="<?=$rootFolder?>game1.php?pid=<?=$row['pid']?>" style="color:white; text-decoration:none;">
		<img src='<?=$rootFolder?>images/<?=$row["pid"]?>.jpg' width='300'><br>
		<br><span style="font-weight:3; letter-spacing:2px;"><?=$row['pname'];?></span>
		<br>
		<?php if($row['pid']==2 || $row['pid']==3 || $row['pid']==17){
			?>
			<strike style="color:gray;"><?=$row['price'];?> </strike>&nbsp;
			<span style="color:#a00d00;"><?=$row['price']*0.9?> บาท</span>
		<?php } else { ?>
		<span style="color:#a00d00;"><?=$row['price'];?> บาท</span>
		<?php } ?>
		</div>
		</a>
</div>
	

<?php 
}
?>

<div class="bg" style="height:400px">
	
</div>
<?php include "../include/footer.php"; ?>
