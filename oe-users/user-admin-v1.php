<?php
	require_once "user-admin-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=50491098000" />
  <link id="siteFonts" rel="stylesheet" type="text/css" href="../Files/Fonts/Fonts.css?v=50491098000" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-admin-v1.css?v=50491098000" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=50491098000" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"oe-users/user-admin-v1","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"../","RenderMode":"Export","PageAssociatePath":"oe-users/user-admin-v1","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=50491098000"></script><?php
  	if (isset($oeHeaderInlineCode)) echo $oeHeaderInlineCode;
  ?>
 </head>
 <body class=""><?php
  	if (isset($oeStartBodyInlineCode)) echo $oeStartBodyInlineCode;
  ?>
  <form id="XForm" method="post" action="#"></form>
  <div id="XBody" class="BaseDiv RWidth OEPageXbody OESK_XBody_Default" style="z-index:0">
   <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">
     <div id="WE7229749e74" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WE7229749e74">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE48f8eed726" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WE48f8eed726">
          <div class="OESZ OESZ_Deco1 OESZG_WE48f8eed726" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE48f8eed726" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE48f8eed726" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE65ad7b8ec6" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:17">
         <div class="OESZ OESZ_DivContent OESZG_WE65ad7b8ec6">
          <span class="OESZ OESZ_Text OESZG_WE65ad7b8ec6 ContentBox"><span style="font-weight:normal;font-size:13px;">. . . . User Database Administration . . . .</span></span>
         </div>
        </div>
        <div id="WE80c0b14139" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE80c0b14139">
          <div class="OESZ OESZ_Deco1 OESZG_WE80c0b14139" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE80c0b14139" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE80c0b14139" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE6375399b5d" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:14">
         <div class="OESZ OESZ_DivContent OESZG_WE6375399b5d">
          <div class="OESZ OESZ_Deco1 OESZG_WE6375399b5d" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE6375399b5d" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE6375399b5d" style="position:absolute"></div>
         </div>
        </div>
        <div id="WE3e92140ca9" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:15">
         <div class="OESZ OESZ_DivContent OESZG_WE3e92140ca9">
          <div class="OESZ OESZ_Deco1 OESZG_WE3e92140ca9" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco2 OESZG_WE3e92140ca9" style="position:absolute"></div>
          <div class="OESZ OESZ_Deco3 OESZG_WE3e92140ca9" style="position:absolute"></div>
         </div>
        </div>
        <div id="WEc3e1ef4b8d" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEc3e1ef4b8d">
          <a class="OESZ OESZ_Link OESZG_WEc3e1ef4b8d ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEc3e1ef4b8d..OEDynTag0.href'];?>"><?php echo $oei['WEc3e1ef4b8d..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WE144d6f002f" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:16">
         <div class="OESZ OESZ_DivContent OESZG_WE144d6f002f">
          <a class="OESZ OESZ_Link OESZG_WE144d6f002f ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE144d6f002f..OEDynTag0.href'];?>"><?php echo $oei['WE144d6f002f..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WEff5e1aab0e" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEff5e1aab0e">
          <span class="OESZ OESZ_Text OESZG_WEff5e1aab0e ContentBox OEDynTag0"><?php echo $oei['WEff5e1aab0e..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEf2751ed895" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:18">
         <div class="OESZ OESZ_DivContent OESZG_WEf2751ed895">
          <span class="OESZ OESZ_Text OESZG_WEf2751ed895 ContentBox"><b>NOTE TO WEBMASTER</b> (delete after reading): after placing all the packs, to start using or testing the site, <b style="color: rgb(192, 0, 0);">open this page at least once</b>&nbsp;in the browser to initialise the database and "<b>Admin</b>" account. It is strongly recommended to&nbsp;<b style="color: rgb(192, 0, 0);">change password immediately</b>&nbsp;after opening the page online (by default it equals the value of the coresponding &nbsp;parameter in Pack Configuration)</span>
         </div>
        </div>
        <div id="WE7a073ddc67" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE7a073ddc67">
          <span class="OESZ OESZ_Text OESZG_WE7a073ddc67 ContentBox">To <span style="text-decoration:underline;">sort</span> users by a column,&nbsp;click its header (name). <span style="text-decoration:underline;">Edit, block or delete</span><b>&nbsp;</b>any account by clicking "Edit" at its right. Use database management tools like PHPMyAdmin to manually modify or delete data.</span>
         </div>
        </div>
        <div id="WE27cac523de" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE27cac523de">
          <a class="OESZ OESZ_Link OESZG_WE27cac523de ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE27cac523de..OEDynTag0.href'];?>">Time since last visit</a>
         </div>
        </div>
        <div id="WE5c39808786" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE5c39808786">
          <a class="OESZ OESZ_Link OESZG_WE5c39808786 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE5c39808786..OEDynTag0.href'];?>">ID#</a>
         </div>
        </div>
        <div id="WE3eacac5a1e" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WE3eacac5a1e">
          <a class="OESZ OESZ_Link OESZG_WE3eacac5a1e ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE3eacac5a1e..OEDynTag0.href'];?>">User name</a>
         </div>
        </div>
        <div id="WE5839c0cc59" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WE5839c0cc59">
          <a class="OESZ OESZ_Link OESZG_WE5839c0cc59 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE5839c0cc59..OEDynTag0.href'];?>">Email address (<b>bold</b> if subscribed)</a>
         </div>
        </div>
        <div id="WE4b2f2af755" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WE4b2f2af755">
          <a class="OESZ OESZ_Link OESZG_WE4b2f2af755 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE4b2f2af755..OEDynTag0.href'];?>">Status</a>
         </div>
        </div>
        <div id="WE9889cb3e12" class="BaseDiv RBoth OEWEDynIteratorPanelDBG OESK_WEDynIteratorPanelDBG_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE9889cb3e12">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div class="OEIteratorParent OEDynTag1"><?php echo $oeIter['WE9889cb3e12.OEDynTag1.0']; ?>
           </div>
          </div>
         </div>
        </div>
        <div id="WE90bc002883" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WE90bc002883">
          <span class="OESZ OESZ_Text OESZG_WE90bc002883 ContentBox OEDynTag0"><?php echo $oei['WE90bc002883..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE2cb13d54e5" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WE2cb13d54e5">
          <span class="OESZ OESZ_Text OESZG_WE2cb13d54e5 ContentBox OEDynTag0"><?php echo $oei['WE2cb13d54e5..OEDynTag0.html1'];?></span>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="OESZ OESZ_XBodyFooter OESZG_XBody OECT OECT_Footer OECTAbs"></div>
   </div>
  </div>
 </body>
</html>