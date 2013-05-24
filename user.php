<?

mysql_connect("localhost","root","");
mysql_select_db("hon");
mysql_query("SET NAMES 'cp1251'");
include("check.php");

if($_REQUEST['login']) {
$user_login = $_REQUEST['login'];
$query = mysql_query("SELECT * FROM `user` WHERE `login` = '$user_login'");
if(mysql_num_rows($query) >0) {
$row = mysql_fetch_array($query);
}
else {
Header("Location: /");
}
if(isset($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];
$query = mysql_query("SELECT * FROM `user` WHERE `id` = '$user_id'");
$current = mysql_fetch_array($query);
}
}
else {
if(isset($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];
$query = mysql_query("SELECT * FROM `user` WHERE `id` = '$user_id'");
$current = mysql_fetch_array($query);
}
else {
Header("Location: /");
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
	<head>
		<title>Heroes of Newerth - Heroes - View</title>
		<meta charset="utf-8" />
		<!-- Javascript files -->
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
		<!--<script src="/js/parallax.js" type="text/javascript" ></script>-->
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>

		<link href="css/ui-darkness/jquery-ui-1.10.0.custom.css" rel="stylesheet" type="text/css" charset="utf-8" />
		<link href="fonts/stylesheet.css" rel="stylesheet" type="text/css" charset="utf-8" />
		<link href="css/base.css" rel="stylesheet" type="text/css" charset="utf-8" />
		<link href="css/buttons.css" rel="stylesheet" type="text/css" charset="utf-8" />
		<link href="css/filterLists.css" rel="stylesheet" type="text/css" charset="utf-8" />
		<link href="css/fonts.css" rel="stylesheet" type="text/css" charset="utf-8" />
		<link href="css/gradients.css" rel="stylesheet" type="text/css" charset="utf-8" />

		<? include ("template/style.php")?>
		<!-- Javascript -->
		<script>
		//======================================================================
var soundEmbed = null;
//======================================================================
function soundPlay(which)
    {
    if (!soundEmbed)
    	{
    	soundEmbed = document.createElement("embed");
    	soundEmbed.setAttribute("src", which);
    	soundEmbed.setAttribute("hidden", true);
    	soundEmbed.setAttribute("autostart", false);
    	}
    else
    	{
    	document.body.removeChild(soundEmbed);
    	soundEmbed.removed = true;
    	soundEmbed = null;
    	soundEmbed.setAttribute("src", "");
    	}
    soundEmbed.removed = false;
    document.body.appendChild(soundEmbed);
    }
//======================================================================
</script>
		<? include ("template/scripts.php")?>
		
	</head>
	<body>
	
		<div id="fb-root"></div>
		<!-- This is for the Login Bar -->
		<div id="loginBar" class="gDark">
			<div class="centerIt">
				<!-- Login -->
				<div class="right">
					<?include ("template/login_form.php"); ?>
										</div>
				
				<!-- Social Buttons -->
				<div id="social" class="left">
					<a target="_blank" class="facebook left" href="../www.facebook.com/heroesofnewerth"></a>
					<a target="_blank" class="twitter left" href="../www.twitter.com/heroesofnewerth"></a>
					<a target="_blank" class="youtube left" href="../www.youtube.com/s2games"></a>
					<a target="_blank" class="reddit left" href="../www.reddit.com/r/heroesofnewerth"></a>
					<div class="fb-like left" data-href="../www.facebook.com/heroesofnewerth" data-send="false" data-width="450" data-show-faces="false" data-font="tahoma" data-colorscheme="dark"></div>				
				</div>
			</div>
		</div>
		
		<div id="mLeaves"></div>

		<!-- Main Navigation -->
		<div class="navigation">
			<!-- Chains -->
			
			<!-- Core Navigation -->
			<?include ("template/navigation.php"); ?>
			<!-- Logo and Play for Free / Create -->
			<a id="mLogo" href="home/default.htm"></a>
			<div id="p4f">
									<a class="btn-p4f" href="create/default.htm"></a>
								</div>
		</div>

		<!-- CORE WEBSITE CONTENT -->
		<div id="mainContent">
			<div id="errorBar" class="subTitle" onClick="hideIt('errorBar');">
				<p class="subTitle">Error - This is a list of what has happened / what has gone wrong!</p>
			</div>
			
			<div class="wrapper">
				<div class="addSpace"></div>
				<!-- Javascript -->




<? if($_REQUEST['login']){
$user_login = $_REQUEST['login'];
$query = mysql_query("SELECT * FROM `user` WHERE `login` = '$user_login'");
$row=mysql_fetch_array($query);
if($row['sound']) {?>
<script>soundPlay('<?$row['sound']?>')</script>
<?}
?>
<!-- The top section of content (usually will be above the fold) -->
<div id="heroTop">
	<!-- Top left content includes: hero name, alt avatars, hero playstyle, spotgLight, and ability details. -->
	<div class="heroLeft">	
		<!-- HERO NAME, ALT AVATARS, HERO PLAYSTYLE -->
		<div id="header" class="gLight" style="min-height: 195px;">
		
			<p class="title fontXXXL gDark"><?if($row['id'] == $_SESSION['user_id']) {echo $row['login']." (Это вы)";} else {echo $row['login'];}?></p>
			<p class="subset"><span style="color:White">Имя:</span><span style="color: rgb(255,167,0);"><?echo $row['firstname']?></span>
			<br><span  style="color:White">Клан:</span><span style="color: rgb(255,167,0);"> <?echo $row['clan']?></span>
			<br><span style="color:White">Последний визит:</span><span style="color: rgb(255,167,0);"> <?echo $row['last_visit']?></span></p> 
			<p class="regular fontXXXS greyLight">Группа:<span style="color:Red"><b><?echo $row['group']?></b></span></p>
		

			<img id="icon" src="<? echo $row['avatar']?>" />
			
			
			
		</div>
		
			</div>
	
	<!-- Top right content includes: hero artwork and avatar artwork -->

	<div class="floatClear"></div>
</div>

<!-- The bottom section of content (usually will be below the fold) -->
<div id="heroBottom">
	
	<!-- Bottom left content includes: hero stats, advanced hero stats, and hero usage. -->
	<div class="heroLeft">
		
		<!-- HERO STATS -->
		<div id="stats">
			<div class="theHeader">
				<p class="title fontXXL">Статистика</p>
				<div class="floatClear"></div>
			</div>
		
			<div class="theText">
				<div style="float: left; width: 110px;">
					<p class="subTitle fontXXS"><b>Выиграл(а): <?echo $row['wins']?></p>
					<p class="subTitle fontXXS"><b>Денег:</b> <?echo $row['money']."$"?></p>
					<p class="subTitle fontXXS">Репутация: <?echo $row['rep']?></p>
				</div>
				
				<div class="bar">
					<div class="fill health" val="<?echo $row['wins']?>"></div>
				</div>
				
				<div class="bar">
					<div class="fill damage" val="<?echo ($row['money']/100)?>"></div>
				</div>
				
				<div class="bar">
					<div class="fill mana" val="<?echo $row['rep']?>"></div>
				</div>
			
			</div>
			<div class="floatClear"></div>
		</div>
		
		<!-- ADVANCED HERO STATS -->
		
	</div>
	
	<!-- Bottom right content includes: how to play the hero and hero lore. -->
	<div class="heroRight">
	
		
		<!-- HERO LORE -->
		<div id="lore" class="gLight">
			<div class="theHeader gDark">
				<p class="title fontXXL">Комментарий администрации</p>
				<!--<div class="switchView simple"></div><p class="subTitleSM">Simple</p>-->
				<div class="floatClear"></div>
			</div>
		
			<div class="theText">
				<!-- SIMPLE -->
				<p class="default"><?echo $row['comment']?></p>
				
				<!-- EXTENDED -->
			</div>
			
			<div class="floatClear"></div>
		</div>
	</div>
	<div class="floatClear"></div>
</div><?}else{
if($current['sound']) {?>
<script>soundPlay('<?echo $current['sound']?>')</script>
<?}
?>

<!-- The top section of content (usually will be above the fold) -->
<div id="heroTop">
	<!-- Top left content includes: hero name, alt avatars, hero playstyle, spotgLight, and ability details. -->
	<div class="heroLeft">	
		<!-- HERO NAME, ALT AVATARS, HERO PLAYSTYLE -->
		<div id="header" class="gLight" style="min-height: 195px;">
		
			<p class="title fontXXXL gDark"><?echo $current['login']." (Это вы)"?></p>
			<p class="subset"><span style="color:White">Имя:</span><span style="color: rgb(255,167,0);"><?echo " ".$current['firstname']?></span>
			<br><span style="color:White">Клан:</span><span style="color: rgb(255,167,0);"> <?echo $current['clan']?></span>
			<br><span style="color:White">Последний визит:</span><span style="color: rgb(255,167,0);"> <?echo $current['last_visit']?></span></p> 
			<p class="regular fontXXXS greyLight">Группа:<span style="color:Red"><b><?echo $current['group']?></b></span></p>

			<img id="icon" src="<? echo $current['avatar']?>" />
			
			
			
		</div>
		
			</div>
	
	<!-- Top right content includes: hero artwork and avatar artwork -->

	<div class="floatClear"></div>
</div>

<!-- The bottom section of content (usually will be below the fold) -->
<div id="heroBottom">
	
	<!-- Bottom left content includes: hero stats, advanced hero stats, and hero usage. -->
	<div class="heroLeft">
		
		<!-- HERO STATS -->
		<div id="stats">
			<div class="theHeader">
				<p class="title fontXXL">Статистика</p>
				<div class="floatClear"></div>
			</div>
		
			<div class="theText">
				<div style="float: left; width: 110px;">
					<p class="subTitle fontXXS"><b>Выиграл(а): <?echo $current['wins']?></p>
					<p class="subTitle fontXXS"><b>Денег:</b> <?echo $current['money']."$"?></p>
					<p class="subTitle fontXXS">Репутация: <?echo $current['rep']?></p>
				</div>
				
				<div class="bar">
					<div class="fill health" val="<?echo $current['wins']?>"></div>
				</div>
				
				<div class="bar">
					<div class="fill damage" val="<?echo ($current['money']/10)?>"></div>
				</div>
				
				<div class="bar">
					<div class="fill mana" val="<?echo $current['rep']?>"></div>
				</div>
			
			</div>
			<div class="floatClear"></div>
		</div>
		
		<!-- ADVANCED HERO STATS -->
		
	</div>
	
	<!-- Bottom right content includes: how to play the hero and hero lore. -->
	<div class="heroRight">
	
		
		<!-- HERO LORE -->
		<div id="lore" class="gLight">
			<div class="theHeader gDark">
				<p class="title fontXXL">Комментарий администрации</p>
				<!--<div class="switchView simple"></div><p class="subTitleSM">Simple</p>-->
				<div class="floatClear"></div>
			</div>
		
			<div class="theText">
				<!-- SIMPLE -->
				<p class="default"><?echo $current['comment']?></p>
				
				<!-- EXTENDED -->
			</div>
			
			<div class="floatClear"></div>
		</div>
	</div>
	<div class="floatClear"></div>
</div><?}?>


<div id="spotHolder">
	<div id="spotAbil">
		<a class="theIcon isSpotgLight" style="background-image: url('images/heroes/217/ability1_128.jpg');"><div class="connection"></div></a>
		<a class="theIcon isSpotgLight" style="background-image: url('images/heroes/217/ability2_128.jpg');"><div class="connection"></div></a>
		<a class="theIcon isSpotgLight" style="background-image: url('images/heroes/217/ability3_128.jpg');"><div class="connection"></div></a>
		<a class="theIcon isSpotgLight" style="background-image: url('images/heroes/217/ability4_128.jpg');"><div class="connection"></div></a>
	</div>

	<div id="spotBorders" class="gLight">
		<div id="hero_bio_vid_alt"></div>
	</div>
</div>				<div class="floatClear"></div>
			</div>
			
			<div id="lightbox_notMedia" class="parent_panel"></div>
		</div>

		<!-- Footer Logos -->
		<a href="../s2games.com/default.htm" id="s2" class="footerLogo"></a>
		<a href="../www.heroesofnewerth.com/default.htm" id="hon" class="footerLogo"></a>

		<!-- The Actual Footer -->
		<div id="footer">
		 <?include ("template/footer.php");?>
		</div>

		<script type="text/javascript">
//<![CDATA[

//]]>
</script>
		<div id="dialog-message" title="" style="display: none;">
			<p><span class="ui-icon ui-icon-alert left" style="margin: 0 7px 20px 0;"></span><span id="dialog-message-contents"></span></p>
		</div>
		<script type="text/javascript" src="../www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
			<div style="display:inline;">
				<img height="1" width="1" style="border-style:none;" alt="" src="../googleads.g.doubleclick.net/pagead/viewthroughconversion/1002261595/@value=0&label=w6FDCIXejwQQ25j13QM&guid=ON&script=0"/>
			</div>
		</noscript>			
		<div class="floatClear"></div>
	</body>
</html>
