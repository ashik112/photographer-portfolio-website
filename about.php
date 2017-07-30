<?php include "header_rest2.php"; ?>
 <?php
    session_start();
    include "database.php";
?>
<main style="color:white !important;" class="page--main">
<section class="block---padded-top">
<article class="article--narrow">
  <div class="article--content">
    <div class="article--content-item">
    
    
    
<?php
$mysql = "SELECT * from shopkeeper where shop_name='About'";
$myquery=mysql_query($mysql) or die (mysql_error());
$num = mysql_num_rows($myquery);
if($num>0)
{
	while($row = mysql_fetch_assoc($myquery))
	{

	
?>	
      <figure><img src="manager/site_img/header_image/<?php echo $row['header_img']; ?>" alt="" /></figure>

		  
		  
		  
<ul style="color: white !important; font-syle: bold !important;">
<?php echo $row['shop_description']; ?>
</ul>


<?php		
		//echo "<script>window.location='index.php'</script>";
	}
}
else
{
	//echo "<span style='color:red; font-weight: bold;'>No Image Found</span>";
}?>   

<!--—<br />
vertreten durch:<br />
VISUM Foto GmbH<br />
Lübecker Straße 91<br />
22087 Hamburg<br />
T. 040.284082-0<br />
F. 040-284082-40</p> -->           </div>
  </div>
</article>
</section>
</main>

<?php include "footer.php"; ?>