<?
session_start();
if($_REQUEST['Registre']) {
echo "lalkareg";

}
function phpfuck(){
return 123;
}





?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
	<head>
		<title>Heroes of Newerth - Create Your Account</title>
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

		
		<!-- Javascript -->
		<script>
		
   
	//QUOTES
	setInterval(function()
	{
		var quote = $('#quoteHolder .quote.current');
		var next_quote = $('#quoteHolder .quote.current + .quote');

		if (next_quote.length == 0){
			next_quote = $("#quoteHolder .quote:first")
		}

		quote.fadeOut(1000, function(){
			quote.removeClass('current')
			next_quote.fadeIn(1000);
			next_quote.addClass('current')
		});
	},5000);

	$(document).ready(function(){
		$('#refreshButton').click(function(){
			$('#captcha').attr('src', '/captcha/captcha.php?'+(new Date()).getTime());
		});

		$('#button').click(function(e)
		{
			e.preventDefault();
			//createAccount();

			$.post('create', $('#f2p').serialize(), function(data)
			{
				if (data.error == true)
				{
					$('#error').show();
					$('#errorBar').html(data.errors.join('<br />')).show();
				}
				else
				{
					$('#reviewOrder').show();
					$('#lightbox_notMedia').show();
					$('#button').remove();
				}
			}, 'json');
		});
	});

	//Subscriber supplied variables for snare// Snare operation to perform
	var io_operation = 'ioBegin';
	var io_bbout_element_id          = 'io_HoN_BBq';
	var io_install_stm               = false;
	var io_exclude_stm               = 12;
	var io_install_flash             = false;
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		function nick_func() {
		document.all("yourname-label").innerText = document.getElementById("nickname").value;
		
		}
		function pass_email() {
		if(document.GetElementById("check0") == document.GetElementById("check1")) {
		return true;
		}
		else
		{
		return false;
		}
		}
			$(document).ready(function()
			{				
				$('.drop').hover(function(){
					if ($(this).hasClass('com'))
						$(this).parent('.mNav').find('.com').addClass('hovering');
					
					if ($(this).hasClass('gui'))
						$(this).parent('.mNav').find('.gui').addClass('hovering');
						
					if ($(this).hasClass('sto'))
						$(this).parent('.mNav').find('.sto').addClass('hovering');
						
					if ($(this).hasClass('med'))
						$(this).parent('.mNav').find('.med').addClass('hovering');
						
					if ($(this).hasClass('for'))
						$(this).parent('.mNav').find('.for').addClass('hovering');
						
					if ($(this).hasClass('ser'))
						$(this).parent('.mNav').find('.ser').addClass('hovering');
				}, function(){
					if ($(this).hasClass('com') && $(this).parent('.mNav').find('.com').hasClass('hovering'))
						$(this).parent('.mNav').find('.com').removeClass('hovering');
					
					if ($(this).hasClass('gui') && $(this).parent('.mNav').find('.gui').hasClass('hovering'))
						$(this).parent('.mNav').find('.gui').removeClass('hovering');
						
					if ($(this).hasClass('sto') && $(this).parent('.mNav').find('.sto').hasClass('hovering'))
						$(this).parent('.mNav').find('.sto').removeClass('hovering');
						
					if ($(this).hasClass('med') && $(this).parent('.mNav').find('.med').hasClass('hovering'))
						$(this).parent('.mNav').find('.med').removeClass('hovering');
						
					if ($(this).hasClass('for') && $(this).parent('.mNav').find('.for').hasClass('hovering'))
						$(this).parent('.mNav').find('.for').removeClass('hovering');
						
					if ($(this).hasClass('ser') && $(this).parent('.mNav').find('.ser').hasClass('hovering'))
						$(this).parent('.mNav').find('.ser').removeClass('hovering');
				});

				$('body').css("min-height",$(window).height()-300+"px");
				$('#mainContent').css("min-height",$(window).height()-300+"px");

				//START Smooth Scroll Anchors
				//console.log($(".scroll").length);
				$(".scroll").click(function(event) {
					event.preventDefault();
					var $anchor = $('#' + this.hash.substring(1));

					//Mobile
					if ($('body').hasClass('mobile')) {
						$('html,body').animate({
							scrollTop: $anchor.offset().top - 20
						}, 600);
					}
					else {
						$('html,body').animate({
							scrollTop: $anchor.offset().top - 50
						}, 600);
					}
				});
				//END Smooth Scroll Anchors
			});

			var hideTimer = null;

			// Resize Window Effects
			$(window).resize(function()
			{
				$('body').css("min-height",$(window).height()-300+"px");
				$('#mainContent').css("min-height",$(window).height()-300+"px");
			});

			// Dropdown Menu
			function showMenu(div)
			{
				$('#'+div).stop().fadeTo("fast", 1).show();

				if (hideTimer != null) {
					clearTimeout(hideTimer);
					hideTimer = null;
				}

				if (div != "news")
					hideIt("news");

				if (div != "guides")
					hideIt("guides");

				if (div != "community")
					hideIt("community");

				if (div != "store")
					hideIt("store");

				if (div != "services")
					hideIt("services");

				if (div != "forums")
					hideIt("forums");

				if (div != "media")
					hideIt("media");
			}

			function hideMenu(div)
			{
				hideTimer = setTimeout(function()
				{
					$("#"+div).fadeTo("fast", 0, function()
					{
						$(this).hide();
					});
				}, 200);
			}

			function showIt(div)
			{
				$('#'+div).show();
			}

			function hideIt(div)
			{
				$('#'+div).hide();
			}
			
	var Login = {
				Login: function(nickname, password, ret)
				{
					if (nickname && password)
					{
						var loginObj = {
							"nickname" : nickname,
							"password" : password,
						}
						$.ajax(
						{
							url: 'login/login/@ajax=1',
							type: 'post',
							data: loginObj,
							dataType: 'json'
						}).done(function(data, textStatus, jqXHR)
						{
							if (jqXHR.getResponseHeader('ajax-redirect'))
							{
								window.location.href = jqXHR.getResponseHeader('ajax-redirect');
								return;
							}
							if (data.error == false)
							{
								// Redirect if requested
								if (ret)
								{
									document.location.href = ret;
								}
								else
								{
									document.location.href = document.location.href;
								}
								return;
							}
							else
							{
								$('#dialog-message-contents').html(data.errorList);
								$('#dialog-message').prop('title', 'Login Error').dialog({
									modal: true,
									buttons: {
										Ok: function() {
											$(this).dialog('close');
										}
									}
								});
							}
						});
					}
				},
				Logout: function()
				{
					$.post('login/logout/default.htm', {}, function(data)
					{
						document.location.href = "default.htm";
					}, 'json');
				}
			};

			/* <![CDATA[ */
			var google_conversion_id = 1002261595;
			var google_conversion_label = "w6FDCIXejwQQ25j13QM";
			var google_custom_params = window.google_tag_params;
			var google_remarketing_only = true;
			/* ]]> */

			/* OUR ORIGINALY GOOGLE ANALYTICS */
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-35559700-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https@ssl/' : 'www/') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();
				 function somefuck() {
	$('#reviewOrder').show();
	}
function validateForm()
{
if(document.forms["f2p"]["nickname"].value == "" || document.forms["f2p"]["nickname"].value == "Логин") {

alert('Введите Логин');
return false;
}
else {
var x=document.forms["f2p"]["email"].value;
var y=document.forms["f2p"]["email2"].value;
if(x == y) {
if(document.forms["f2p"]["password"].value == document.forms["f2p"]["password2"].value) {
if(document.forms["f2p"]["txtInput"].value == "Heroes of Newerth") {
return true
}
else {
alert("Ответ на вопрос не верный");
return false;
}
}
else {
alert("Пароли не совпадают");
return false;
}
}
else
{ alert("Email не совпадают");
return false;
}



}
}

</script>
		<script type="text/javascript">
		
		</script>
		
		<style>
			/* MOBILE AKA SMALL WINDOWS */
			@media screen and (max-width: 1100px) {
				#loginBar {
					position: relative;
					margin: auto;
				}
				
				#loginBar .centerIt {
					max-width: 1060px;
				}
				
				.addSpace {
					width: 183px;
				}

				/* PURE MOBILE */
							}
			</style>
		
		<style>	
	
body {
background-image: url("images/default_04.jpg");
}	
	
</style>	</head>
<? 
if($_SESSION['registered'] == 1) {unset($_SESSION['registered']);?>
<body onLoad="$('#reviewOrder').show();">
<?}

else{?>
<body>
<?}?>
	
		<div id="fb-root"></div>
		<script></script>

		<!-- This is for the Login Bar -->
		<div id="loginBar" class="gDark">
			<div class="centerIt">
				<!-- Login -->
				<div class="right">
											<!-- User is not logged in yet -->
						<div id="notLogged">
							<form onSubmit="Login.Login($('#loginUsername').val(), $('#loginPassword').val()); return false;">
								<div class="btn-red" style="width: 77px; margin: 3px 0 0 7px; float: right;">
									<div class="btn-left"></div>
									<input class="btn-center login loginbtn" style="border-radius: 0; float: left; font-size: 14px; margin: 0; padding: 0; width: 60px !important;" type="submit" tabindex=3 name="submit" value="LOGIN" />
									<div class="btn-right"></div>
								</div>
								<input id="loginPassword" tabindex=2 class="inputThis gGrey right" autocomplete="off" type="text" name="password" value="PASSWORD" placeholder="PASSWORD" onfocus="if(this.type=='text'){this.type='password';this.value='';}"  />
								<input id="loginUsername" tabindex=1 class="inputThis gGrey right" type="text" name="nickname" value="USERNAME" placeholder="USERNAME" onClick="if (this.value == 'USERNAME'){this.value = '';}" onBlur="if (this.value == ''){this.value='USERNAME';}"/>
							</form>
						</div>
										</div>
				
				<!-- Social Buttons -->
				<div id="social" class="left">
					<a target="_blank" class="facebook left" href="www.facebook.com/heroesofnewerth"></a>
					<a target="_blank" class="twitter left" href="www.twitter.com/heroesofnewerth"></a>
					<a target="_blank" class="youtube left" href="www.youtube.com/s2games"></a>
					<a target="_blank" class="reddit left" href="www.reddit.com/r/heroesofnewerth"></a>
					<div class="fb-like left" data-href="www.facebook.com/heroesofnewerth" data-send="false" data-width="450" data-show-faces="false" data-font="tahoma" data-colorscheme="dark"></div>				
				</div>
			</div>
		</div>
		
		<div id="mLeaves"></div>

		<!-- Main Navigation -->
		<div class="navigation">
			<!-- Chains -->
			<img class="chain" src="images/chain.png" alt="chain" style="top: 42px; margin-left: -488px;"/>
			<img class="chain" src="images/chain.png" alt="chain" style="top: 28px; margin-left: -85px;"/>
			<img class="chain" src="images/chain.png" alt="chain" style="top: 28px; margin-left: 66px;"/>
			<img class="chain" src="images/chain.png" alt="chain" style="top: 42px; margin-left: 463px;"/>

			<!-- Core Navigation -->
			<div class="mNav navLeft left">
				<a href="landing/community/default.htm" class="button com left" onMouseover="showMenu('community')" onMouseout="hideMenu('community')"><p class="bold uppercase yellow fontM">COMMUNITY</p></a>
				<div class="drop com fontXXXS regular" id="community" onMouseover="showMenu('community')" onMouseout="hideMenu('community')">
					<a href="news/default.htm">NEWS</a>
					<a href="www.honcast.com/default.htm">HONCAST</a>
					<a href="www.hontour.com/default.htm">HON TOUR</a>
					<a href="ladder/default.htm">PLAYER LADDER</a>
					<a href="media/fanmedia/default.htm">FAN MEDIA</a>
					<a href="media/fansites/default.htm">COMMUNITY SITES</a>
				</div>
				<a href="landing/guides/default.htm" class="button gui left" onMouseover="showMenu('guides')" onMouseout="hideMenu('guides')"><p class="bold uppercase yellow fontM">GAMEPLAY</p></a>
				<div class="drop gui fontXXXS regular" id="guides" onMouseover="showMenu('guides')" onMouseout="hideMenu('guides')">
					<!--<a href="explore.php">TAKE THE TOUR</a>
					<a href="overview.php">GAMEPLAY OVERVIEW</a>-->
					<a href="heroes/default.htm">HEROES</a>
					<a href="items/default.htm">ITEMS</a>
					<a href="guides/default.htm">STRATEGY GUIDES</a>
					<a href="maps/default.htm">MAPS</a>
				</div>
				<a href="landing/store/default.htm" class="button sto left" onMouseover="showMenu('store')" onMouseout="hideMenu('store')"><p class="bold uppercase yellow fontM">STORE</p></a>
				<div class="drop sto fontXXXS regular" id="store" onMouseover="showMenu('store')" onMouseout="hideMenu('store')">
					<!-- <a href="store.php">IN-GAME STORE</a>
					<a href="merchandise/php">MERCHANDISING</a>-->
					<a href="store/gold/default.htm">BUY GOLD COINS</a>
					<a target="_blank" href="store/ecards/default.htm">GIFT AN ECARD</a>
					<a href="store/accounticon/default.htm">CUSTOM ACCOUNT ICON</a>
					<a href="store/subaccount/default.htm">ADD A SUB ACCOUNT</a>
					<a href="store/reset/default.htm">RESET ACCOUNT STATS</a>
				</div>
			</div>

			<div class="mNav navRight right">
				<a href="landing/services/default.htm" class="button ser right" onMouseover="showMenu('services')" onMouseout="hideMenu('services')"><p class="bold uppercase yellow fontM">SERVICES</p></a>
				<div class="drop ser fontXXXS regular" id="services" onMouseover="showMenu('services')" onMouseout="hideMenu('services')">
					<a href="default.htm">CREATE AN ACCOUNT</a>
					<a href="download/default.htm">DOWNLOAD CLIENT</a>
					<a href="referral/default.htm">REFER A FRIEND</a>
					<a href="support/default.htm">SUPPORT</a>
				</div>
				<a href="forums.heroesofnewerth.com/default.htm" class="button for right" onMouseover="showMenu('forums')" onMouseout="hideMenu('forums')"><p class="bold uppercase yellow fontM">FORUMS</p></a>
				<div class="drop for fontXXXS regular" id="forums" onMouseover="showMenu('forums')" onMouseout="hideMenu('forums')">
					<a href="forums.heroesofnewerth.com/default.htm">FORUMS</a>
				</div>
				<a href="landing/media/default.htm" class="button med right" onMouseover="showMenu('media')" onMouseout="hideMenu('media')"><p class="bold uppercase yellow fontM">MEDIA</p></a>
				<div class="drop med fontXXXS regular" id="media" onMouseover="showMenu('media')" onMouseout="hideMenu('media')">
					<a target="_blank" href="www.youtube.com/s2games">VIDEOS</a>
					<a href="media/art/default.htm">ARTWORK</a>
					<a href="media/wallpaper/default.htm">WALLPAPERS</a>
					<a href="media/screens/default.htm">SCREENSHOTS</a>
					<a href="media/fanmedia/default.htm">FAN MEDIA</a>
					<a href="media/fsk/default.htm">FANKIT</a>
				</div>
			</div>

			<!-- Logo and Play for Free / Create -->
			<a id="mLogo" href="home/default.htm"></a>
			<div id="p4f">
									<a class="btn-p4f" href="default.htm"></a>
								</div>
		</div>

		<!-- CORE WEBSITE CONTENT -->
		<div id="mainContent">
			<div id="errorBar" class="subTitle" onClick="hideIt('errorBar');">
				<p class="subTitle">Error - This is a list of what has happened / what has gone wrong!</p>
			</div>
			
			<div class="wrapper">
				<div class="addSpace"></div>
				<!-- CSS -->
<style>
	#theSummary
	{
		border-radius: 6px;
		height: 271px;
		padding: 10px;
		width: 467px;
	}

	#theSummary p
	{
		margin: 0;
	}

	#previewImage
	{
		height: 104px;
		margin: 6px 0;
		width: 466px;
		background-image: url('images/create_ad.jpg');
	}

	#theVideo
	{
		border-radius: 6px;
		float: left;
		height: 290px;
		width: 516px;
		margin-left: 20px;
	}

	.wrapper form
	{
		float: left;
		margin: 28px 0 0 162px;
	}

	.fillMe > p
	{
		margin: 12px 0 3px 6px;
	}

	.fillMe
	{
		float: left;
		width: 270px;
	}

	#theAccount
	{
		border-radius: 6px;
		height: 445px;
		padding: 10px;
		width: 765px;
		position: relative;
	}

	#accountID
	{
		height: 203px;
		width: 203px;
		float: left;
		margin-right: 19px;
		background-image: url('images/create_icon.jpg');
		margin-top: 9px;
	}

	#accountID > p
	{
		top: 190px;
		font-size: 20px;
		margin: 0;
		position: absolute;
		text-align: center;
		width: 202px;
		text-shadow: 2px 2px black;
	}

	#theAccount input
	{
		border: none;
		border-radius: 4px;
		height: 28px;
		padding: 0 7px;
		width: 240px;
	}

	#nickname
	{
		border: none;
		border-radius: 6px;
		color: #FFFFFF;
		font-family: 'magrabold',sans-serif;
		font-size: 20px;
		margin-top: 8px;
		float: left;
		width: 380px !important;
		height: 30px !important;
	}

	#theSignup
	{
		margin-top: 25px;
		position: relative;
		border-radius: 6px;
		width: 787px;
	}
	
	#theSignup .redbtn {
		font-size: 28px;
		border-radius: 6px 6px 0 0;
		width: 100%;
		border:none;
		height: 40px;
	}

	#quoteHolder
	{
		margin: auto;
		text-align: center;
		top: 10px;
		width: 467px;
	}

	.quote
	{
		display:none;
	}

	.author
	{
		color: #666666;
	}

	#checkButton
	{
		border-radius: 6px;
		float: right;
		height: 22px;
		margin-top: 5px;
		padding: 7px 10px;
		width: 114px;
	}

	#captHolder
	{
		left: 0;
		position: absolute;
		top: 351px;
	}

	#refreshButton
	{
		position: relative;
		width: 86px;
		height: 25px;
		background-repeat: no-repeat;
		background-image:url('images/btn_refresh.png');
		top: 33px;
		margin-left: -63px;
		z-index: 25;
		border-radius: 6px;
		cursor: pointer;
	}

	#refreshButton:hover
	{
		background-position: 0px -25px;
	}

	#reviewOrder {
		border-radius: 5px 5px 5px 5px;
		box-shadow: 0 0 9px #000000;
		height: 176px;
		left: 57%;
		margin-left: -469px;
		padding: 10px 15px;
		position: fixed;
		top: 227px;
		width: 702px;
		z-index: 1001;
		display: none;
	}

	.close_popup {
		right: -11px;
		top: -7px;
	}

	.pop-header {
		border-radius: 5px 5px 0 0;
		height: 55px;
		left: 1px;
		margin-bottom: 20px;
		margin-left: -17px;
		margin-top: -9px;
		width: 734px;
		background-color: #121212;
	}


	.redeem-title {
		color: #FF8A00;
		font-family: 'magrabold',sans-serif;
		font-size: 28px;
		padding: 11px 0 0 14px;
	}

	.description-title {
		margin: -8px 0 1px -10px;
		color: white;
		font-family: 'magrabold',sans-serif;
		font-size: 22px;
		height: 26px;
		line-height: 18px;
		padding: 11px 0 0 10px;
		width: 390px;
	}

	.textfield-title {
		color: #AFAFAF;
		margin-top: 3px;
	}

	.review-purchase-button {
		border: medium none;
		border-radius: 6px 6px 6px 6px;
		font-size: 21px;
		height: 40px;
		padding-top: 1px;
		width: 187px;
		bottom: 11px;
		position: absolute;
		right: 10px;
	}

	#lightbox_notMedia {
		background: none repeat scroll 0 0 #000000;
		display: none;
		left: 0;
		min-height: 8000px;
		min-width: 100%;
		opacity: 0.9;
		position: absolute;
		top: 0;
		z-index: 1000;
	}
</style>

<div class="centerIt" style="width: 1030px">
	<div id="theSummary" class="gDark left">
		<p class="default"><span class="title fontXXXL">Explore all that is newerth</span><br />
			<span class="subTitle fontXL">MOBA gaming at its best is now available free to own!</span><br />
			Hop online with your friends, or make news ones with our massive growing online community. Create a team, compete head to head, and become a hero of Newerth!</p>
		<div id="previewImage"></div>

		<div id="quoteHolder">
			<div class="quote current">
				<p class="default">"It's unlikely you'll be able to see everything Heroes of Newerth has to offer in a few days." <span class="author">- PC Gamer</span></p>
			</div>
			<div class="quote">
				<p class="default">"Robust server-client networking, meticulous stat tracking, in-game voice comms, friends lists, clan support, full replays..."</p>
			</div>
			<div class="quote">
				<p class="default">"...all the paraphernalia of the modern multiplayer specialist comes as standard." <span class="author">- GamesRadar</span></p>
			</div>
			<div class="quote">
				<p class="default">"HoN has a massive, thriving community." <span class="author">- IGN</span></p>
			</div>
			<div class="quote">
				<p class="default">"You can go a long way without paying a dime." <span class="author">- MMOrpg.com</span></p>
			</div>
			<div class="quote">
				<p class="default">"The DOTA-style multiplayer game has enjoyed plenty of success." <span class="author">- PC Gamer</span></p>
			</div>
			<div class="quote">
				<p class="default">"Provides a refined and polished experience destined to keep players entertained for many a sleepless nights." <span class="author">- mmohuts.com</span></p>
			</div>
			<div class="quote">
				<p class="default">"The game looks gorgeous, plays quite fluidly." <span class="author">- Kotaku</span></p>
			</div>
			<div class="quote">
				<p class="default">"It's unlikely you'll be able to see everything HoN has to offer in a few days." <span class="author">- PC Gamer</span></p>
			</div>
		</div>
	</div>

	<div id="theVideo" class="gDark">
		<object width="516" height="290">
			<param name="movie" value="www.youtube.com/v/WL3Cty_IVNI@version=3&hl=en_US&norel=1" />
			<param name="allowFullScreen" value="true">
			<param name="allowScriptAccess" value="always">
			<param name="wmode" value="opaque" />

			<param name="allowscriptaccess" value="always" />
			<embed src="www.youtube.com/v/WL3Cty_IVNI@version=3&hl=en_US&autoplay=0&autohide=1&norel=1" type="application/x-shockwave-flash" width="516" height="290" allowscriptaccess="always" wmode='opaque' allowfullscreen="true">
		</object>
	</div>

	<div class="floatClear"></div>
</div>



<form id="f2p" name="f2p" action="check.php" method="post" onsubmit="return validateForm()">
	<div id="theAccount" class="gDark default">
	<?if($_SESSION['registered'] == 4) {unset($_SESSION['registered']);?>
	<br><center style="color:red">Такой EMAIL уже есть!</center>
	<?}?>
	<?if($_SESSION['registered'] == 3) {unset($_SESSION['registered']);?>
	<br><center style="color:red">Такой ЛОГИН уже есть!</center>
	<?}?>
	<?if($_SESSION['registered'] == 2) {unset($_SESSION['registered']);?>
	<br><center style="color:red">Не удалось пройти регистрацию!</center>
	<?}?>
		<div id="accountID" class="subTitle">
			<p id="yourname-label">ВАШ ЛОГИН</p>
		</div>

		<input id="nickname" class="white" type="text" name="nickname"  placeholder="Логин" value="Логин" onFocus="if (this.value == 'Логин') { this.value = '';}" onblur="if (this.value == '') { this.value = 'Логин';} else{nick_func();}"/>

		<!-- Check Button 
		<div id="checkButton"><input type="submit" name="check" class="redbtn"value="CHECK"></div>-->

		<div class="fillMe">
			<p>Имя:</p>
			<input id="firstName" class="white" type="text" name="first_name" value="Имя" placeholder="Имя" onClick="if (this.value == 'Имя'){this.value = '';}" onBlur="if (this.value == ''){this.value='Имя';}" />
		</div>

		<div class="fillMe">
			<p>Фамилия:</p>
			<input id="lastName" class="white" type="text" name="last_name" value="Фамилия" placeholder="Фамилия" placeholder="Фамилия" onClick="if (this.value == 'Фамилия'){this.value = '';}" onBlur="if (this.value == ''){this.value='Фамилия';}" />
		</div>

		<div class="fillMe">
			<p>Email:</p>
			<input class="email white" type="text" id="check0"  name="email" value="EMAIL" placeholder="EMAIL" onClick="if (this.value == 'EMAIL'){this.value = '';}" onBlur="if (this.value == ''){this.value='EMAIL';}" />
		</div>

		<div class="fillMe">
			<p>Подтвердите Email:</p>
			<input class="email white" type="text" id="check1" name="email2" value="Подтвердите EMAIL" placeholder="Подтвердите EMAIL" onClick="if (this.value == 'Подтвердите EMAIL'){this.value = '';}" onBlur="if (this.value == ''){this.value='Подтвердите EMAIL';}" />
		</div>

		<div class="fillMe">
			<p>Пароль:</p>
			<input class="password white" type="text" name="password" value="Пароль" placeholder="Пароль" onClick="nick_func()" onfocus="if(this.type=='text'){this.type='password';this.value='';}" />
		</div>

		<div class="fillMe">
			<p>Подтвердите Пароль:</p>
			<input class="password white" type="text" name="password2" value="Подтвердите Пароль" placeholder="Подтвердите Пароль" onfocus="if(this.type=='text'){this.type='password';this.value='';}" />
		</div>

		<input type="hidden" id="io_HoN_BBq" name="io_HoN_BBq" >

		<div class="fillMe" style="margin: 2px 0 0 -1px">
			<p>Пригласил:</p>
			<input style="width: 730px;" class="referral white" type="text" name="referrer_nick" placeholder="Аккаунт Пользователя" />
			<p class="subTitleSM" style="width: 730px;">Если вас сюда запросил друг, укажите его аккаунт в этом поле.</p>
		</div>

		<!-- ALTERNATIVE -->
		<div id="captHolder">
			<p class="subTitleSM" style="border-top: 1px solid #333333; margin: -10px 0 10px 10px; padding-top: 10px; width: 770px;">Введите правильный ответ на заданый вопрос для регистрации на сайте.</p>
	             <div style="position: absolute; left: 100px; top: 30px;">Как расшифровать HON?:</div>
			
			<div style="position: absolute; left: 227px; top: 30px;">
				<!-- Refresh Button -->
			<br>
				<input class="white" type="text" name="txtInput" id="txtInput" size="30" style="bottom: -9px; left: 26px; position: absolute; width: 490px;" value="Введите ответ..." placeholder="Введите ответ..." onClick="if (this.value == 'Введите ответ...'){this.value = '';}" onBlur="if (this.value == ''){this.value='Введите ответ...';}" />
			</div>
		</div>

		<!-- Nick - Error -->
		<div id="NickCheckBad" name="NickCheckBad" style="position: absolute; top: 17px; left: 30px; width: 194px; height: 88px;  display: none;">
			<div id="badText" style="position: absolute; top: 6px; left: 5px; width: 146px; height: 77px; color: white; font-size: 13px; border:1px solid black; padding: 5px; background: #7e2424;">
				Awww Snap! You can't do that mister. This is probably about as long as it will get, I hope.
			</div>
		</div>

		<!-- Nick - Good -->
		<div id="NickCheckGood" name="NickCheckGood" style="position: absolute; top: 16px; left: 190px; width: 33px; height: 34px;  display: none;"></div>
	</div>

	<div id="theSignup" class="gDark">
		<input type="submit" id="button" name="Register" value="Регистрация" class="show_popup redbtn"/>
		<p class="default" style="text-align: center; padding: 6px;">By clicking the sign up button, you are agreeing to the <a href="../documents/tos/default.htm">terms of use</a>.
	</div>
</form>
<!-- Review Email Confirmation -->
<div id="reviewOrder" class="parent_panel gDark">
	<a onClick="$('#reviewOrder').hide();" class="close_popup closeMe"></a>
	<div class="pop-header"><div class="redeem-title">Поздравления!</div></div>
	<div class="order-box" style="float: left; width: 100%; height: 227px;">
		<div class="description-title subTitle">Ваш аккаунт успешно создан!</div>

		<div class="textfield-title default">Теперь вы можете зайти на сайт, как его полноценный пользователь!</div>
	</div>
	<!--<a href="www.heroesofnewerth.com/download/default.htm"><input class="review-purchase-button redbtn" type="submit" name="submit" value="Download" /></a>-->
</div>

<script type="text/javascript">

</script>
<script language="javascript" src="https@mpsnare.iesnare.com/snare.js"></script>				<div class="floatClear"></div>
			</div>
			
			<div id="lightbox_notMedia" class="parent_panel"></div>
		</div>

		<!-- Footer Logos -->
		<a href="s2games.com/default.htm" id="s2" class="footerLogo"></a>
		<a href="www.heroesofnewerth.com/default.htm" id="hon" class="footerLogo"></a>

		<!-- The Actual Footer -->
		<div id="footer">
			<div style="width: 1040px; margin: auto; height: 100%; padding: 0 30px;">
				<div class="col left">
					<p class="footHead subTitle fontXL">COMMUNITY</p>
					<p class="footList default">
						<a href="news/default.htm">NEWS</a><br />
						<a href="www.honcast.com/default.htm">HONCAST</a><br />
						<a href="www.hontour.com/default.htm">HON TOUR</a><br />
						<a href="ladder/default.htm">PLAYER LADDER</a><br />
						<a href="media/fanmedia/default.htm">FAN MEDIA</a><br />
						<a href="media/fansites/default.htm">COMMUNITY SITES</a>
					</p>
				</div>
				<div class="col left">
					<p class="footHead subTitle fontXL">GAMEPLAY</p>
					<p class="footList default">
						<a href="heroes/default.htm">HEROES</a><br />
						<a href="items/default.htm">ITEMS</a><br />
						<a href="guides/default.htm">STRATEGY GUIDES</a><br />
						<a href="maps/default.htm">MAPS</a>
					</p>
				</div>
				<div class="col left">
					<p class="footHead subTitle fontXL">STORE</p>
					<p class="footList default">
						<a href="store/gold/default.htm">BUY GOLD COINS</a><br />
						<a target="_blank" href="store/ecards/default.htm">GIFT AN ECARD</a><br />
						<a href="store/accounticon/default.htm">CUSTOM ACCOUNT ICON</a><br />
						<a href="store/subaccount/default.htm">ADD A SUB ACCOUNT</a><br />
						<a href="store/reset/default.htm">RESET ACCOUNT STATS</a>

					</p>
				</div>
				<div class="col left">
					<p class="footHead subTitle fontXL">MEDIA</p>
					<p class="footList default">
						<a target="_blank" href="www.youtube.com/s2games">VIDEOS</a><br />
						<a href="media/art/default.htm">ARTWORK</a><br />
						<a href="media/wallpaper/default.htm">WALLPAPERS</a><br />
						<a href="media/screens/default.htm">SCREENSHOTS</a><br />
						<a href="media/fanmedia/default.htm">FAN MEDIA</a><br />
						<a href="media/fsk/default.htm">FANKIT</a>
					</p>
				</div>
				<div class="col left">
					<p class="footHead subTitle fontXL">FORUMS</p>
					<p class="footList default">
						<a href="forums.heroesofnewerth.com/default.htm">FORUMS</a>
					</p>
				</div>
				<div class="col left">
					<p class="footHead subTitle fontXL">SERVICES</p>
					<p class="footList default">
						<a href="default.htm">CREATE AN ACCOUNT</a><br />
						<a href="download/default.htm">DOWNLOAD CLIENT</a><br />
						<a href="referral/default.htm">REFER A FRIEND</a><br />
						<a href="support/default.htm">SUPPORT</a>
					</p>
				</div>

				<div id="details" class="left regular fontXXS greyDark">
					&#169;2013 S2 Games, All Rights Reserved. <br />
					<a href="documents/policy/default.htm">PRIVACY POLICY</a> | <a href="documents/media/default.htm">MEDIA POLICY</a> | <a href="documents/partners/default.htm">PARTNERS</a> | <a href="documents/credits/default.htm">CREDITS</a> | <a href="www.s2games.com/careers.php">JOBS</a>
				</div>
			</div>
		</div>

		<script type="text/javascript">
//<![CDATA[

//]]>
</script>
		<div id="dialog-message" title="" style="display: none;">
			<p><span class="ui-icon ui-icon-alert left" style="margin: 0 7px 20px 0;"></span><span id="dialog-message-contents"></span></p>
		</div>
		<script type="text/javascript">
			
		</script>
		<script type="text/javascript" src="www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
			<div style="display:inline;">
				<img height="1" width="1" style="border-style:none;" alt="" src="googleads.g.doubleclick.net/pagead/viewthroughconversion/1002261595/@value=0&label=w6FDCIXejwQQ25j13QM&guid=ON&script=0"/>
			</div>
		</noscript>			
		<div class="floatClear"></div>
	</body>
</html>
