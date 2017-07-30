 <?php 


	include "database.php";
	
	$GET_id=20;
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
	  /*font-size: 2.5em;*/
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

<header style="background: white!important; color: black !important;"  class="page--header " role="banner" id="js-bar--top">
    <a href="./home.php" class="logo--mobile" >
    Towfiq Chowdhury</a>
<nav class="nav--main" role="navigation" itemscope="" itemtype="https://schema.org/SiteNavigationElement">
    <ul class="nav--list is-visible" id="js-nav--main-list">
                            <li class="nav--list-item">
                <a class="nav--list-link  is-active" href="./portfolio.php">Gallery</a>
            </li>

                             

            <li class="nav--list-item">
				<a href="./home.php" class="nav--list-link " >Towfiq Chowdhury</a><!--logo--link-->
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




 <main style="background: black;">
	 <section class="block---padded-top">
    <script src="js/jssor.slider-22.2.8.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;

                if (refSize) {
                    refSize = Math.min(refSize, 2000);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 10);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('img/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:600px;height:230px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 230px;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:230px;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top: 2px;left:15%;width:400px;height:230px;overflow:hidden;">
           
<?php
	$mysql = "SELECT * from product_image where shopkeeper_id=(SELECT id from shopkeeper where shop_name='Gallery')";
	$myquery=mysql_query($mysql) or die (mysql_error());
	$num = mysql_num_rows($myquery);
	if($num>0)
	{
		while($row = mysql_fetch_assoc($myquery))
		{
	
		
?>
     
		   <div>
                <img data-u="image" src="manager/site_img/item_image/<?php echo $row['img_name']?>" />
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
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->
	   </section>
	</main>
<?php include "footer.php"; ?>
