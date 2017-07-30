 <?php include "header_detail.php"; ?>
 <?php
    session_start();
	include "database.php";
?>



<main class="page--main">
    <section class="block">
<?php
	$mysql = "SELECT * from shopkeeper where id='4'";
	$myquery=mysql_query($mysql) or die (mysql_error());
	$num = mysql_num_rows($myquery);
	if($num>0)
	{
		while($row = mysql_fetch_assoc($myquery))
		{
	
	
?>
     
        <header class="block--header --mod-dark-bg js-overlay-trigger">
            <div class="block--header-image lazyloaded" data-bgset="manager/site_img/header_image/<?php echo $row['header_img']; ?> 600w,manager/site_img/header_image/<?php echo $row['header_img']; ?> 1000w,manager/site_img/header_image/<?php echo $row['header_img']; ?> 1500w,manager/site_img/header_image/<?php echo $row['header_img']; ?> 2000w" style="background-position: 50% 50%; background-image: url(&quot;manager/site_img/header_image/<?php echo $row['header_img']; ?>&quot;);">
				<picture style="display: none;">
					<source data-srcset="manager/site_img/header_image/<?php echo $row['header_img']; ?> 1500w,manager/site_img/header_image/<?php echo $row['header_img']; ?> 2000w" sizes="1024px" srcset="manager/site_img/header_image/<?php echo $row['header_img']; ?> 600w,manager/site_img/header_image/<?php echo $row['header_img']; ?> 1000w,manager/site_img/header_image/<?php echo $row['header_img']; ?> 1500w,manager/site_img/header_image/<?php echo $row['header_img']; ?> 2000w">
					<img alt="" class="lazyautosizes lazyloaded" data-sizes="auto" data-parent-fit="cover" sizes="1024px">
				</picture>
			</div>
            <h1 class="block--header-heading u-backdrop">
                <a href="#" class="js-overlay-trigger"><?php echo $row['shop_name'];?></a>
                <span class="block--header-heading-controls">
                    <a href="#" class="js-overlay-trigger">View Story</a> |
                    <a data-scroll="" href="#overview">Overview</a>
                </span>
            </h1>
            <div class="block--header-affordance u-backdrop"><a data-scroll="" href="#overview">SCROLL</a></div>
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
	$mysql = "SELECT * from product_image where shopkeeper_id='4'";
	$myquery=mysql_query($mysql) or die (mysql_error());
	$num = mysql_num_rows($myquery);
	if($num>0)
	{
		while($row = mysql_fetch_assoc($myquery))
		{
	
	
?>
            <div class="tile-item">
            <div class="tile-item--content">
                <figure class="tile-item--content-figure">
                    <a class="tile-item--content-link " href="#" data-index="1">
                            <!-- @component respimage -->

    <img  style="height: 350px !important; width: 550px !important;" src="manager/site_img/item_image/<?php echo $row['img_name']; ?>"/>
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
        <section class="block only-mobiles">
            <article class="article--narrow has-upadded-top ">
                <div class="article--content u-display-flex">
                    <div class="article--content-item">
                        <p><strong>Al Zahraa's last Watch <br><br>
Bremerhaven, 2004</strong></p>
<p>A story about two forgotten Iraqi Sailors on  board a Ghost Ship in Germany.<br>
This is a story about a ship that happened to be in the wrong place at 
the wrong time. It had been used to transport tanks in the Iran-Iraq 
war. In 1990, the Al Zahraa stops at a Bremerhaven shipyard because the 
engines need some repairing. They had just been taken out and put in the
 shipyard’s workshop when the UN declared an embargo on Iraq following 
Iraq’s invasion of Kuwait. Ever since, the vessel has been remaining in a
 quiet corner of Bremerhaven’s harbor. <br><br>
The original crew was soon sent back to Iraq, and instead the Iraqi ship
 owner began sending watch teams to Bremerhaven who would stay on board 
to look after the ship. These watches would be exchanged roughly every 
six months. As the first teams found they could make their stay in 
Bremerhaven far more convenient by selling everything from on board the 
ship that could possibly be sold, there soon was not that much to look 
after really. The ship is rusting away, its decay is visible to any 
passer-by. Still, the watches would go on. <br><br>
The last watch has been sent in August 2002. While they enjoyed the 
first few months of their stay, another war in their country started, 
and there was no contact to their families any more. All that was left 
to do for Adel and Abdullah was to find out on Television whether their 
hometowns might appear in the news after having been bombed. Eventually,
 after months of fear and uncertainty, they found out their families 
were all right. Adel and Abdullah remained in Bremerhaven though, for 
there was no one who could order them to leave the ship. They were 
forgotten. <br><br>
Adel and Abdullah eventually managed to get back to Iraq in May 2004, 
after almost two years on board the Al Zahraa. The ship remained in 
Bremerhaven until July 2011 when it was eventually towed to Lithuania 
where it was taken apart.</p>                    </div>
                </div>
            </article>
        </section>
    </section>
</main>
<!-- @component overlay -->
<div class="overlay" id="js-overlay">
    <button class="button overlay--close-button" id="js-overlay--close-button">
        <i class="icon--close-white"></i>
    </button>
    <div class="overlay--content">
        <div class="slideshow" id="js-overlay--slideshow">
            <div class="slideshow--slide is-vertically-scrollable -mod-centered u-display-flex" title="">
			
			

                <!-- @component respimage -->
<?php
	$mysql = "SELECT * from shopkeeper where id='4'";
	$myquery=mysql_query($mysql) or die (mysql_error());
	$num = mysql_num_rows($myquery);
	if($num>0)
	{
		while($row = mysql_fetch_assoc($myquery))
		{
	
	
?>	
                <article class="slideshow--static-text">
				<?php echo $row['shop_name']; ?>
				<p><?php echo $row['shop_description']; ?></p>
                  <!--  <p><strong>Al Zahraa's last Watch <br><br>
Bremerhaven, 2004</strong></p>
<p>A story about two forgotten Iraqi Sailors on  board a Ghost Ship in Germany.<br>
This is a story about a ship that happened to be in the wrong place at 
the wrong time. It had been used to transport tanks in the Iran-Iraq 
war. In 1990, the Al Zahraa stops at a Bremerhaven shipyard because the 
engines need some repairing. They had just been taken out and put in the
 shipyard’s workshop when the UN declared an embargo on Iraq following 
Iraq’s invasion of Kuwait. Ever since, the vessel has been remaining in a
 quiet corner of Bremerhaven’s harbor. <br><br>
The original crew was soon sent back to Iraq, and instead the Iraqi ship
 owner began sending watch teams to Bremerhaven who would stay on board 
to look after the ship. These watches would be exchanged roughly every 
six months. As the first teams found they could make their stay in 
Bremerhaven far more convenient by selling everything from on board the 
ship that could possibly be sold, there soon was not that much to look 
after really. The ship is rusting away, its decay is visible to any 
passer-by. Still, the watches would go on. <br><br>
The last watch has been sent in August 2002. While they enjoyed the 
first few months of their stay, another war in their country started, 
and there was no contact to their families any more. All that was left 
to do for Adel and Abdullah was to find out on Television whether their 
hometowns might appear in the news after having been bombed. Eventually,
 after months of fear and uncertainty, they found out their families 
were all right. Adel and Abdullah remained in Bremerhaven though, for 
there was no one who could order them to leave the ship. They were 
forgotten. <br><br>
Adel and Abdullah eventually managed to get back to Iraq in May 2004, 
after almost two years on board the Al Zahraa. The ship remained in 
Bremerhaven until July 2011 when it was eventually towed to Lithuania 
where it was taken apart.</p>  -->              
</article>
                <!-- @end respimage -->
<?php		
			//echo "<script>window.location='index.php'</script>";
		}
	}
	else
	{
		//echo "<span style='color:red; font-weight: bold;'>No Image Found</span>";
}?>
            </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="Abdullah looks out of a disused crew cabin aboard the Al Zahraa. The vessel moored in Bremerhaven in 1990 and never left harbor again.">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_001.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_001-500x396-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_001-1000x791-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_001-1500x1187-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_001.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="Adel in one of the officer's cabins that serve him and Mohammed as living rooms. They'd only dare to take down the Saddam portraits everywhere on the ship when they saw American tanks destroying Saddam statues in Bagdad.">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_002.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_002-500x390-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_002-1000x781-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_002-1500x1171-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_002.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="Portrait of Abdullah in the vessel's empty storage deck.">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_003.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_003-500x395-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_003-1000x791-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_003-1500x1186-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_003.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="The danish-built vessel was used to transport tanks in the Iran-Iraq war in the 1980ies. It was hit by the UN embargo when Iraq attacked Kuwait and has not been moved from Bremerhaven since 1990.">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_004.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_004-500x397-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_004-1000x795-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_004-1500x1192-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_004.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="Dinner time. Adel and Abdullah spend most of their time together in this officer's cabin.">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_005.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_005-500x399-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_005-1000x798-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_005-1500x1196-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_005.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_006.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_006-500x396-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_006-1000x791-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_006-1500x1187-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_006.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="Abdullah in the makeshift kitchen. There's no running water on board the ship, and they have to fill these canisters with a hose on the quay.">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_007.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_007-500x395-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_007-1000x791-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_007-1500x1186-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_007.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_008.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_008-500x395-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_008-1000x791-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_008-1500x1186-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_008.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="Portrait of Adel (left) and Abdullah on the Al Zahraa's foredeck. When word got around that they were forgotten, they received food and clothes donations from locals and from the seaman's mission in Bremerhaven">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_009.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_009-500x395-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_009-1000x791-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_009-1500x1186-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_009.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_010.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_010-500x395-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_010-1000x791-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_010-1500x1186-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_010.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="The galley as the last crew left it behind. Abdullah and Adel don't use it since there is no running water, and it is too far from their cabins.">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_011.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_011-500x396-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_011-1000x791-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_011-1500x1187-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_011.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_012.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_012-500x395-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_012-1000x791-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_012-1500x1186-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_012.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="CNN and Al-Jazeera were the only way for Adel and Abdullah to keep track of what was going on in Iraq since they could not contact their families any more.">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_013.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_013-500x399-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_013-1000x798-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_013-1500x1196-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_013.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="Abdullah is raising onions and other vegetables. They try to spend as little money as possible and send the rest to their families. The vessel's engines still remain in a shack on the shipyard that can be seen in the background.">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_014.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_014-500x397-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_014-1000x795-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_014-1500x1192-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_014.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="Winters were particularly hard for Adel and Abdullah.">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_015.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_015-500x397-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_015-1000x795-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_015-1500x1192-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_015.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_016.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_016-500x397-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_016-1000x795-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_016-1500x1192-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_016.jpg 2000w">
    <!-- @end respimage -->
                </div>
                            <div class="slideshow--slide -mod-centered u-display-flex" title="">
                        <!-- @component respimage -->
    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="" data-src="http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_017.jpg" data-sizes="80vw" class="lazyload" data-srcset="http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_017-500x397-q70.jpg 600w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_017-1000x794-q70.jpg 1000w,
    http://www.jescodenzel.com/thumbs/portfolio/die-letzte-wache-der-al-zahraa/jd_alzahraa_017-1500x1190-q70.jpg 1500w,
    http://www.jescodenzel.com/content/1-portfolio/12-die-letzte-wache-der-al-zahraa/jd_alzahraa_017.jpg 2000w">
    <!-- @end respimage -->
                </div>
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

<?php include "footer_detail.php"; ?>