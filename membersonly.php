<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="WEFiles/Css/v02/openElement.css?v=50491098000" />
  <link id="siteFonts" rel="stylesheet" type="text/css" href="Files/Fonts/Fonts.css?v=50491098000" />
  <link id="OETemplate1" rel="stylesheet" type="text/css" href="Templates/Base.css?v=50491098000" />
  <link id="OETemplate2" rel="stylesheet" type="text/css" href="Templates/Base_Menu_Alt.css?v=50491098000" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="membersonly.css?v=50491098000" />
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/WEMenu-v23.css?v=50491098000" />
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/opentip.css?v=50491098000" />
  <link rel="stylesheet" type="text/css" href="WEFiles/EG/EGf79d11e9/Css/parallax-safe-v26.css?v=50491098000" />
  <link rel="stylesheet" type="text/css" href="WEFiles/EG/EGf8c88e12/Css/jquery.vegas-v89.css?v=50491098000" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491098000" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"membersonly","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"","RenderMode":"Export","PageAssociatePath":"membersonly","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/migrate.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/Client/Common/oe.min.js?v=50491098000"></script>
  <script type="text/javascript" src="membersonly(var).js?v=50491098000"></script>
  <script type="text/javascript" src="file:///C:/Users/almir/AppData/Local/Temp/openElement/2a65ed3e-f00d-4121-b438-8810b41975e3/LinkFile/ziu3th3h.ugn.js"></script>
  <script type="text/javascript" src="WEFiles/Client/WEMenu-v23.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/EG/EG891d4068/Js/anchor-scroll-v13.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/Client/opentip-jquery.min.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/Client/WESendMail-v210.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/EG/EGf79d11e9/Js/parallax-safe-v33.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/EG/EGf8c88e12/Js/jquery.vegas.min-v81.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/EG/EGf8c88e12/Js/WEBackgroundSlider-v213.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/Client/WESendForm-v210.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/Plugins/jquery.ui.core.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/Plugins/jquery.ui.effects.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/Plugins/jquery.ui.accordion-v21.js?v=50491098000"></script>
  <script type="text/javascript" src="WEFiles/Client/WEMenuAccordion-v22.js?v=50491098000"></script>
  <style id="OEScriptManager" type="text/css">
   /* transition effect */
   .transitions, .transitions a {
   	-webkit-transition: all 1s ease;
   	-moz-transition: all 1s ease;
   	-o-transition: all 1s ease;
   	transition:	all 1s ease;
   }
   
   
   #WEToTop {
   	position:fixed !important;
   	z-index:99999 !important;
   }
   #WEToTop:not(.c-visible) {
   	bottom:-35px !important;
   	opacity:0;
   }
   
   .position-fixed,
   .OECTRel>.OERelLine>.BaseDiv.position-fixed 
   { 
   	position: fixed !important;
   }
  </style>
  <meta name="viewport" content="width=device-width, user-scalable=no" />
  <script type="text/javascript">
   $(function(){
   	
   	// Button "Back to top of the page" / Bouton "Vers le haut de la page"
   
   	$('body').prepend('<a name="page-top" id="page-top">'); // create anchor at the page top
       
   	$(window).on('scroll', function(){
   		$('#WEToTop').toggleClass('c-visible', ($(window).scrollTop() > 100)); // show the button if vertical scroll is at least 100px
   	}).trigger('scroll'); // update on opening the page	
   	
   });
   $(function(){
   	// Fix problem with "fixed"(parallax) background on iPad/iPhone
   	var userAgent = navigator.userAgent || navigator.vendor || window.opera;
   	var iOS = /iPad|iPhone|iPod/.test(userAgent) && !window.MSStream; // MSStream is to filter out IE11
   	if (iOS) {
   		$('.fix-iOS-bg').css('background-attachment', 'scroll');
   	}	
   });
   $(function(){
   
   	var wsTimer = null;
   	$(window).scroll(function(){
   		clearTimeout(wsTimer);
   		wsTimer = setTimeout(onScroll, 50); // avoid too many calls
   	});
   	
   	// hide menu on clicking outside of it:
   	$('body').click(function(ev){
   		if (!$(ev.target).closest('.OEWEMenu').length) { // clicked element is not inside any menu
   			$('.OEWEMenu').find('.OESZ_WEMenuGroup').stop().hide(); // hide all menus
   		}
   	});
   	
   	function onScroll() {
   		var wHeight 	= $(window).height(),
   			wTop 		= $(window).scrollTop(),
   			wBottom 	= wTop + wHeight;
   		
   		$('.OEWEMenu').each(function(){ // Hide popup menus on scroll when they are no longer visible
   			var $menu = $(this).find('.OESZ_WEMenuGroup');
   			$menu.stop(); 							// end any ongoing animation
   			if ($menu.css('display') != 'none') { 	// currently visible
   				if ($menu.offset().top > wBottom-10 || ($menu.offset().top+$menu.height()) < wTop+10) { // out of visible area
   					$menu.hide();
   				}
   			}
   		});		
   	}
   
   });
  </script><?php
  	if (isset($oeHeaderInlineCode)) echo $oeHeaderInlineCode;
  ?>
 </head>
 <body class="RWAuto"><?php
  	if (isset($oeStartBodyInlineCode)) echo $oeStartBodyInlineCode;
  ?>
  <form id="XForm" method="post" action="#"></form>
  <div id="XBody" class="BaseDiv RWidth OEPageXbody OESK_XBody_Default" style="z-index:2000">
   <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTRel">
     <div class="OERelLine OEHAlignC OEVAlignB">
      <div id="WE2474775d61" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  transitions" style="z-index:1002">
       <div class="OESZ OESZ_DivContent OESZG_WE2474775d61">
        <div class="OECT OECT_Content OECTRel OEDynTag0" style="overflow:hidden">
         <div class="OERelLine OEHAlignC OEVAlignM">
          <div id="WE2af7da3a5d" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default  hand transitions" style="z-index:1007">
           <div class="OESZ OESZ_DivContent OESZG_WE2af7da3a5d">
            <img src="WEFiles/Image/WEImage/menu-mobile60x60-WEMENU_MOBILE.png" class="OESZ OESZ_Img OESZG_WE2af7da3a5d" alt="" />
           </div>
          </div><div id="WEd0eee7eee2" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default" style="z-index:1008">
           <div class="OESZ OESZ_DivContent OESZG_WEd0eee7eee2">
            <img src="Files/Image/oversteerlogo.png" class="OESZ OESZ_Img OESZG_WEd0eee7eee2" alt="" />
           </div>
          </div><div id="WE0ef8f8d0da" class="BaseDiv RNone OEWELink OESK_WELink_Default  transitions btmobile" style="z-index:1004" onclick="return OE.Navigate.open(event,'index.htm',1)">
           <div class="OESZ OESZ_DivContent OESZG_WE0ef8f8d0da">
            <a class="OESZ OESZ_Link OESZG_WE0ef8f8d0da ContentBox" data-cd="PageLink" href="index.htm">home</a>
           </div>
          </div><div id="WE6aa5e0a273" class="BaseDiv RNone OEWELink OESK_WELink_Default  transitions btmobile" style="z-index:1005" onclick="return OE.Navigate.open(event,'aboutoversteer.htm',1)">
           <div class="OESZ OESZ_DivContent OESZG_WE6aa5e0a273">
            <a class="OESZ OESZ_Link OESZG_WE6aa5e0a273 ContentBox" data-cd="PageLink" href="aboutoversteer.htm">about</a>
           </div>
          </div><div id="WE6c1ed42a4f" class="BaseDiv RNone OEWELink OESK_WELink_Default  transitions btmobile" style="z-index:1007" onclick="return OE.Navigate.blank(event,'https://discord.gg/6ftQ5G3')">
           <div class="OESZ OESZ_DivContent OESZG_WE6c1ed42a4f">
            <a class="OESZ OESZ_Link OESZG_WE6c1ed42a4f ContentBox" data-cd="PageLink" target="_blank" href="https://discord.gg/6ftQ5G3" onclick="return OE.Navigate.blank(event,this.href)">discord</a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div><div id="WE7a5ce88410" class="BaseDiv RBoth OEWEMenuAccordion OESK_WEMenuAccordion_Default" style="z-index:2001">
       <div class="OESZ OESZ_DivContent OESZG_WE7a5ce88410">
        <div class="OESZ OESZ_Top OESZG_WE7a5ce88410"></div>
        <h3 class="OESZ OESZ_FirstTitle OESZG_WE7a5ce88410">
         <a href="oe-users/user-login(connect)-v1.php#section1">Login</a>
        </h3>
        <ul class="OESZ OESZ_Box OESZG_WE7a5ce88410" style="list-style-type:none; height:0px; padding: 0px; margin:0px;">
         <li style="display:none"></li>
        </ul>
        <div class="OESZ OESZ_Bottom OESZG_WE7a5ce88410"></div>
       </div>
      </div>
     </div>
    </div>
    <div class="OESZ OESZ_XBodyFooter OESZG_XBody OECT OECT_Footer OECTAbs">
     <div id="WEToTop" class="BaseDiv RBoth OEWELinkButton OESK_WELinkButton_Default OEGo  transitions" style="z-index:1" onclick="return OE.Navigate.open(event,'#page-top',1)">
      <div class="OESZ OESZ_DivContent OESZG_WEToTop">
       <a class="OESZ OESZ_Text OESZG_WEToTop ContentBox" href="#page-top"><br /></a>
      </div>
     </div>
     <div id="WEfbbeded301" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2001">
      <div class="OESZ OESZ_DivContent OESZG_WEfbbeded301">
       <span class="OESZ OESZ_Text OESZG_WEfbbeded301 ContentBox">If you are an Oversteer member, you have access to this page, please DM&nbsp;&nbsp;Lovescars on Discord for an account, with this account, you have the option to post on our private pages.<br /></span>
      </div>
     </div>
    </div>
    <div id="WEb1e88097ca" class="BaseDiv RBoth OEEGf79d11e9 OESK_EGf79d11e9_Default" style="z-index:2004">
     <div class="OESZ OESZ_DivContent OESZG_WEb1e88097ca"></div>
    </div>
    <div id="WE9cc5c000d3" class="BaseDiv RBoth OEWEMenu OESK_WEMenu_Default" style="z-index:2003">
     <div class="OESZ OESZ_DivContent OESZG_WE9cc5c000d3">
      <div class="OESZ OESZ_WEMenuGroup OESZG_WE9cc5c000d3" style="display:none" id="WEMenud2420c">
       <div class="OESZ OESZ_WEMenuTop OESZG_WE9cc5c000d3"></div>
       <div class="OESZ OESZ_WEMenuItem OESZG_WE9cc5c000d3" id="WEMenuc7b393">
        <table style="border-spacing: 0px; border-collapse: collapse;" class="OESZ OESZ_WEMenuItemTable OESZG_WE9cc5c000d3">
         <tr>
          <td class="OESZ OESZ_WEMenuText OESZG_WE9cc5c000d3">
           <a href="">Link 1 of menu</a>
          </td>
         </tr>
        </table>
       </div>
       <div class="OESZ OESZ_WEMenuItem OESZG_WE9cc5c000d3" id="WEMenua4df2f">
        <table style="border-spacing: 0px; border-collapse: collapse;" class="OESZ OESZ_WEMenuItemTable OESZG_WE9cc5c000d3">
         <tr>
          <td class="OESZ OESZ_WEMenuText OESZG_WE9cc5c000d3">
           <a href="">Link 2 of menu</a>
          </td>
         </tr>
        </table>
       </div>
       <div class="OESZ OESZ_WEMenuItem OESZG_WE9cc5c000d3" id="WEMenu6488f6">
        <table style="border-spacing: 0px; border-collapse: collapse;" class="OESZ OESZ_WEMenuItemTable OESZG_WE9cc5c000d3">
         <tr>
          <td class="OESZ OESZ_WEMenuText OESZG_WE9cc5c000d3">
           <a href="">Link 3 of menu</a>
          </td>
         </tr>
        </table>
       </div>
       <div class="OESZ OESZ_WEMenuBottom OESZG_WE9cc5c000d3"></div>
      </div>
     </div>
    </div>
    <div id="WE44fc304a0b" class="BaseDiv RBoth OEEGf8c88e12 OESK_EGf8c88e12_Default" style="z-index:2002">
     <div class="OESZ OESZ_DivContent OESZG_WE44fc304a0b">
      <div>
      </div>
     </div>
    </div>
    <div id="WEd280877b93" class="BaseDiv RBoth OEWEMenu OESK_WEMenu_Default" style="z-index:1001">
     <div class="OESZ OESZ_DivContent OESZG_WEd280877b93">
      <div class="OESZ OESZ_WEMenuGroup OESZG_WEd280877b93 OEo" style="display:none" id="WEMenu8db7c6">
       <div class="OESZ OESZ_WEMenuTop OESZG_WEd280877b93"></div>
       <div class="OESZ OESZ_WEMenuItem OESZG_WEd280877b93" id="WEMenu33b28d">
        <table style="border-spacing: 0px; border-collapse: collapse;" class="OESZ OESZ_WEMenuItemTable OESZG_WEd280877b93">
         <tr>
          <td class="OESZ OESZ_WEMenuText OESZG_WEd280877b93">
           <a href="">HOME</a>
          </td>
         </tr>
        </table>
       </div>
       <div class="OESZ OESZ_WEMenuItem OESZG_WEd280877b93" id="WEMenuebcb2d">
        <table onclick="return OE.Navigate.open(event,'#about',1)" style="border-spacing: 0px; border-collapse: collapse;" class="OESZ OESZ_WEMenuItemTable OESZG_WEd280877b93">
         <tr>
          <td class="OESZ OESZ_WEMenuText OESZG_WEd280877b93">
           <a href="#about">ABOUT</a>
          </td>
         </tr>
        </table>
       </div>
       <div class="OESZ OESZ_WEMenuItem OESZG_WEd280877b93" id="WEMenu15715b">
        <table onclick="return OE.Navigate.open(event,'#gallery',1)" style="border-spacing: 0px; border-collapse: collapse;" class="OESZ OESZ_WEMenuItemTable OESZG_WEd280877b93">
         <tr>
          <td class="OESZ OESZ_WEMenuText OESZG_WEd280877b93">
           <a href="#gallery">GALLERY</a>
          </td>
         </tr>
        </table>
       </div>
       <div class="OESZ OESZ_WEMenuItem OESZG_WEd280877b93" id="WEMenu02a5ed">
        <table onclick="return OE.Navigate.open(event,'#news',1)" style="border-spacing: 0px; border-collapse: collapse;" class="OESZ OESZ_WEMenuItemTable OESZG_WEd280877b93">
         <tr>
          <td class="OESZ OESZ_WEMenuText OESZG_WEd280877b93">
           <a href="#news">NEWS</a>
          </td>
         </tr>
        </table>
       </div>
       <div class="OESZ OESZ_WEMenuItem OESZG_WEd280877b93" id="WEMenuea4382">
        <table onclick="return OE.Navigate.open(event,'#contact',1)" style="border-spacing: 0px; border-collapse: collapse;" class="OESZ OESZ_WEMenuItemTable OESZG_WEd280877b93">
         <tr>
          <td class="OESZ OESZ_WEMenuText OESZG_WEd280877b93">
           <a href="#contact">CONTACT</a>
          </td>
         </tr>
        </table>
       </div>
       <div class="OESZ OESZ_WEMenuBottom OESZG_WEd280877b93"></div>
      </div>
     </div>
    </div>
    <div id="WEff841c533b" class="BaseDiv RBoth OEEG891d4068 OESK_EG891d4068_Default" style="z-index:1002">
     <div class="OESZ OESZ_DivContent OESZG_WEff841c533b"></div>
    </div>
    <div id="WEa62f4ad7d1" class="BaseDiv RBoth OEEG8ced4f68 OESK_EG8ced4f68_Default" style="z-index:3;display: none !important;">
     <div class="OESZ OESZ_DivContent OESZG_WEa62f4ad7d1"></div>
    </div>
   </div>
  </div>
  <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js"></script>
  <script type="text/javascript">
  $(function(){// Scroll reveal (apparition au scroll) :
  	(new ScrollReveal()).reveal('.apply-smoove', { duration: 1000, distance: '500px' });
  });
  </script>
 </body>
</html>