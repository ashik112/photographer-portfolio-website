 <?php 


	include "database.php";
	
	$GET_id=$_GET['id'];
	$id=mysql_real_escape_string($GET_id);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Towfiq Chowdhury</title>
    <meta name="description" content="This is Towfiq Chowdhury's portfolio." />
    <meta name="keywords" content="Towfiq Chowdhury,photography" />
    <meta name="author" content="Towfiq Chowdhury" />
    
     <?php
	$mysql = "SELECT * from shopkeeper where id='$id'";
	$myquery=mysql_query($mysql) or die (mysql_error());
	$num = mysql_num_rows($myquery);
	if($num>0)
	{
		while($row = mysql_fetch_assoc($myquery))
		{
	
	
?>
    <meta property="og:image" content="manager/site_img/header_image/<?php echo $row['header_img']; ?>" />
    <meta property="og:description" content="<?php echo $row['shop_name'];?>" />
   
    <?php		
			//echo "<script>window.location='index.php'</script>";
		}
	}
	else
	{
		//echo "<span style='color:red; font-weight: bold;'>No Image Found</span>";
}?>

    <link rel="icon" href="./assets/images/favicons/android-icon-192x192.png">  
	
	
	<!-- @Social Media Button -->
	
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	 <link rel="stylesheet" href="./assets/css/styles.prefixed.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

  
	

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<!-- End of @Social Media Button -->
<!--
<link rel="apple-touch-icon" sizes="57x57" href="./assets/images/favicons/apple-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="60x60" href="./assets/images/favicons/apple-icon-60x60.png" />
<link rel="apple-touch-icon" sizes="72x72" href="./assets/images/favicons/apple-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="./assets/images/favicons/apple-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="./assets/images/favicons/apple-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="./assets/images/favicons/apple-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="./assets/images/favicons/apple-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="./assets/images/favicons/apple-icon-152x152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicons/apple-icon-180x180.png" />
<link rel="icon" type="image/png" sizes="192x192" href="./assets/images/favicons/android-icon-192x192.png" />
<link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicons/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="96x96" href="./assets/images/favicons/favicon-96x96.png" />
<link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicons/favicon-16x16.png" />
<link rel="shortcut icon" href="./assets/images/favicons/favicon.ico" type="image/x-icon" />
<link rel="manifest" href="./assets/images/favicons/manifest.json" />
<meta name="msapplication-TileColor" content="#ffffff" />
<meta name="msapplication-TileImage" content="http://www.jescodenzel.com/assets/images/favicons/ms-icon-144x144.png" />
<meta name="theme-color" content="#ffffff" />-->
<style>
		  /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
	.me {
	  display: block;
	  margin: 2em auto;
	  margin-bottom: 3em;
	  width: 150px;
	  height: 150px;
	  border-radius: 50%;
	  position: relative;
	  z-index: 2;
	}

	.social {
	  text-align: center;
	  font-size: 2.5em;
	  color: #555;
	  overflow: hidden;
	}
	.social a {
	  color: inherit;
	  text-decoration: none;
	}
	.social i {
	  margin: .3em;
	  cursor: pointer;
	  transition: color 300ms ease, margin-top 300ms ease;
	  transform: translateZ(0);
	}
	.social i:hover {
	  margin-top: -1px;
	}
	.social i#twitter:hover {
	  color: #77DDF6;
	}
	.social i#github:hover {
	  color: black;
	}
	.social i#linkedin:hover {
	  color: #0177B5;
	}
	.social i#code:hover {
	  color: #29A329;
	}
	.social i#stack:hover {
	  color: #ED780E;
	}
	.social i#plus:hover {
	  color: #D43402;
	}
	.social i#mail:hover {
	  color: #F7B401;
	}
</style>
<body style="background: black!important;" itemscope="" itemtype="https://schema.org/WebPage">
<header class="page--header " role="banner" id="js-bar--top">
    <a href="./home.php" class="logo--mobile" >
    Towfiq Chowdhury</a>
<nav class="nav--main" role="navigation" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
    <ul class="nav--list is-visible" id="js-nav--main-list">
                            <li class="nav--list-item">
                <a class="nav--list-link  is-active" href="./portfolio.php">Gallery</a>
            </li>

                             

            <li class="nav--list-item">
				<a href="./home.php" class="nav--list-link " style="font-size: 140%; font-weight: bold;">Towfiq Chowdhury</a><!--logo--link-->
			</li>   
			<li class="nav--list-item">
                <a class="nav--list-link " href="./about.php">About</a>
            </li>

            <li class="nav--list-item">
			<a  href="./contact.php" class="nav--list-link">Contact</a>
			</li>
    </ul>
</nav>
<button class="nav--trigger-button" id="js-nav--main">
    <svg class="svg-icon-menu" aria-labelledby="icon-jd-menu">
        <use xlink:href="#icon-menu"></use>
    </svg>
    <svg class="svg-icon-close" aria-labelledby="icon-jd-close">
        <use xlink:href="#icon-close"></use>
    </svg>
</button>
</header>
<nav  class="nav--mobile" role="navigation" id="js-nav--mobile" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
    <ul class="nav--list" >
                    <li class="nav--list-item">
                <a class="nav--list-link" class="active" href="./portfolio.php">Gallery</a>
            </li>
                  
            <li class="nav--list-item">
                <a class="nav--list-link" href="./about.php">About</a>
            </li>
			<li class="nav--list-item">
                <a class="nav--list-link" href="./contact.php">Contact</a>
            </li>
                <!--<li class="nav--list-item"><a class="u-no-wordbreak" href="mailto:mail@jescodenzel.com">mail@towfiq.com</a>
        </li>
        <li class="nav--list-item"><a class="u-no-wordbreak" href="#">+016XXXXXXXX</a></li>-->
    </ul>
</nav>




<main style="background: black; !important;" class="page--main">
    <section class="block">
<?php
	$mysql = "SELECT * from shopkeeper where id='$id'";
	$myquery=mysql_query($mysql) or die (mysql_error());
	$num = mysql_num_rows($myquery);
	if($num>0)
	{
		while($row = mysql_fetch_assoc($myquery))
		{
	
	
?>
     
        <header class="block--header --mod-dark-bg js-overlay-trigger" >
            <div  class="block--header-image lazyloaded" style="background-size: 100% 100%!important; background-position: 50% 50%; background-image: url(&quot;manager/site_img/header_image/<?php echo $row['header_img']; ?>&quot;);">
				
	 </div>
            <h1 class="block--header-heading u-backdrop">
                <a  href="#" class="js-overlay-trigger"><?php echo $row['shop_name'];?></a>
                <span class="block--header-heading-controls">
                    <a href="#" class="js-overlay-trigger"><i style="color: white !important;">|</i> More Info <i style="color: white !important;">|</i></a> <!--|-->
                   <a data-scroll="" href="#overview"> Gallery <i style="color: white !important;">|</i></a>
                </span>
            </h1>
            <div class="block--header-affordance">
				<a data-scroll="" href="#overview">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="https://d9hhrg4mnvzow.cloudfront.net/get.moneysmart.sg/axa-shield/0a10d907-bouncing-arrow_016016016016000000.gif" style="color:grey;  height:30%;width:30%; text-align: center; "></img></a>
			</div>
        </header>
        <!-- @component tiles -->
<?php		
			//echo "<script>window.location='index.php'</script>";
		}
	}
	else
	{
		//echo "<span style='color:red; font-weight: bold;'>No Image Found</span>";
}?>

<div class="tiles--fullbleed u-display-flex" id="overview" data-max-ratio="1.28">
<?php
	$mysql = "SELECT * from product_image where shopkeeper_id='$id'";
	$myquery=mysql_query($mysql) or die (mysql_error());
	$num = mysql_num_rows($myquery);
	if($num>0)
	{
	        $count=1;
		while($row = mysql_fetch_assoc($myquery))
		{
	
	
?>
            <div class="tile-item">
            <div class="tile-item--content">
                <figure class="tile-item--content-figure">
                    <a class="tile-item--content-link " href="#" data-index="<?php echo $count++; ?>">
                            <!-- @component respimage -->

    <img class="tile-image" style="height: 250px ; width: 550px ;" src="manager/site_img/item_image/<?php echo $row['img_name']; ?>"/> <!---->
    <!-- @end respimage -->

                    </a>
                </figure>
            </div>
        </div>
<?php		
			//echo "<script>window.location='index.php'</script>";
		}
	}
	else
	{
		//echo "<span style='color:red; font-weight: bold;'>No Image Found</span>";
}?>
    </div>


<!-- @end tiles -->

<?php
		$mysql = "SELECT * from shopkeeper where id='$id'";
		$myquery=mysql_query($mysql) or die (mysql_error());
		$num = mysql_num_rows($myquery);
		if($num>0)
		{
			while($row = mysql_fetch_assoc($myquery))
			{

?>	

  <section style="color:white!important;" class="block only-mobiles">
            <article class="article--narrow has-upadded-top ">
                <div class="article--content u-display-flex">
                    <div class="article--content-item">
                        <p><strong><?php echo $row['shop_name']; ?></strong></p>
<p><?php echo $row['shop_description']; ?></p>                    </div>
                </div>
            </article>
        </section>
    </section>
	
	<?php		
				//echo "<script>window.location='index.php'</script>";
			}
		}
		else
		{
			//echo "<span style='color:red; font-weight: bold;'>No Image Found</span>";
		}
		?>
</main>
<!-- @component overlay -->
<div class="overlay" id="js-overlay">
    <button class="button overlay--close-button" id="js-overlay--close-button">
        <i class="icon--close-white"></i>
    </button>
    <div class="overlay--content">
        <div class="slideshow" id="js-overlay--slideshow">
         
			
			

                <!-- @component respimage -->
		<?php
		$mysql = "SELECT * from shopkeeper where id='$id'";
		$myquery=mysql_query($mysql) or die (mysql_error());
		$num = mysql_num_rows($myquery);
		if($num>0)
		{
			while($row = mysql_fetch_assoc($myquery))
			{


		?>	  <div class="slideshow--slide is-vertically-scrollable -mod-centered u-display-flex" title="">
			<article style="text-overflow:hidden;" class="slideshow--static-text">
			<div style="font-weight: bold;"><?php echo $row['shop_name']; ?></div>
			<p ><?php echo $row['shop_description']; ?></p>
		</article>
					<!-- @end respimage -->
		<?php		
				//echo "<script>window.location='index.php'</script>";
			}
		}
		else
		{
			//echo "<span style='color:red; font-weight: bold;'>No Image Found</span>";
		}
		?>
            </div>
            
            
            
            
			
			<?php
		$mysql = "SELECT * from product_image where shopkeeper_id='$id'";
		$myquery=mysql_query($mysql) or die (mysql_error());
		$num = mysql_num_rows($myquery);
		if($num>0)
		{
			while($row = mysql_fetch_assoc($myquery))
			{


		?>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="<?=$row['image_description']?>">
                      
                      
    <img class="pop-up" " class="" src="manager/site_img/item_image/<?php echo $row['img_name']; ?>"
     alt=""
     data-src="manager/site_img/item_image/<?php echo $row['img_name']; ?>" 
     >

                </div>
			<?php		
				//echo "<script>window.location='index.php'</script>";
			}
		}
		else
		{
			//echo "<span style='color:red; font-weight: bold;'>No Image Found</span>";
		}
		?>             
		 </div>
        <div class="slideshow--caption js-overlay--slideshow-caption">
            <span class="js-slideshow--progress"></span>
            <span></span>
        </div>
        <div class="slideshow--info js-slideshow--info">
            <i class="icon--info-white"></i>
        </div>
        <div class="slideshow--caption-toggle js-toggle-slideshow--caption">
            <i class="icon--caption-white"></i>
        </div>
    </div>
</div>
<!-- @end overlay -->

<?php include "footer.php"; ?>