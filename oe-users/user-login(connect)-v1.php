<?php
	require_once "user-login(connect)-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=50491098000" />
  <link id="siteFonts" rel="stylesheet" type="text/css" href="../Files/Fonts/Fonts.css?v=50491098000" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-login(connect)-v1.css?v=50491098000" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/opentip.css?v=50491098000" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/EG/EGf8c88e12/Css/jquery.vegas-v89.css?v=50491098000" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=50491098000" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"oe-users/user-login(connect)-v1","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"../","RenderMode":"Export","PageAssociatePath":"oe-users/user-login(connect)-v1","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=50491098000"></script>
  <script type="text/javascript" src="user-login(connect)-v1(var).js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/EG/EGf8c88e12/Js/jquery.vegas.min-v81.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/EG/EGf8c88e12/Js/WEBackgroundSlider-v213.js?v=50491098000"></script>
  <script type="text/javascript">
   var WEEdValidators = {"WE1208c6f36f":[{"MsgError":"Veuillez inscrire votre message d'erreur.","Expression":".+"}]}
  </script><?php
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
     <div id="WEfd8bb50e47" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEfd8bb50e47">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEf0a54fd3e7" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEf0a54fd3e7">
          <span class="OESZ OESZ_Text OESZG_WEf0a54fd3e7 ContentBox OEDynTag0"><?php echo $oei['WEf0a54fd3e7..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE241abc29b9" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE241abc29b9">
          <span class="OESZ OESZ_Text OESZG_WE241abc29b9 ContentBox OEDynTag0"><?php echo $oei['WE241abc29b9..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE913cacb651" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE913cacb651">
          <script>
          
            // this script sets tab order: 
            // name input -> PW input -> button -> link Create account -> link Forgot password
            
            // also, this script imitates button click on pressing Enter
          
          $(function(){
            
            
            $('#WE1208c6f36f :input').attr('tabindex', '1');
            $('#WE64adb1887e :input').attr('tabindex', '2');
            $('#WEce91bf6770 :button').attr('tabindex', '3');
            $('#WE2222677cbf a').attr('tabindex', '4');
            $('#WE72e59d1529 a').attr('tabindex', '5');
            
            // Enter on inputs submits form
            $(':input').keypress(function(e) {
                  if(e.which == 13) {
                    $(this).blur();
                    $('#WEce91bf6770 :button').focus().click();
                  }
              });
          });
          </script>
         </div>
        </div>
        <div id="WE1fa462b246" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE1fa462b246">
          <span class="OESZ OESZ_Text OESZG_WE1fa462b246 ContentBox OEDynTag0"><?php echo $oei['WE1fa462b246..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE1208c6f36f" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE1208c6f36f">
          <input name="oelName" type="text" class="OESZ OESZ_TextBox OESZG_WE1208c6f36f OEDynTag0" value="<?php echo $oei['WE1208c6f36f..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE2222677cbf" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WE2222677cbf">
          <a class="OESZ OESZ_Link OESZG_WE2222677cbf ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE2222677cbf..OEDynTag0.href'];?>">I don't have an account yet</a>
         </div>
        </div>
        <div id="WE7b33e279d5" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WE7b33e279d5">
          <span class="OESZ OESZ_Text OESZG_WE7b33e279d5 ContentBox OEDynTag0"><?php echo $oei['WE7b33e279d5..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE64adb1887e" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WE64adb1887e">
          <input name="oelPW" type="password" class="OESZ OESZ_TextBox OESZG_WE64adb1887e OEDynTag0" value="<?php echo $oei['WE64adb1887e..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE72e59d1529" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE72e59d1529">
          <a class="OESZ OESZ_Link OESZG_WE72e59d1529 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE72e59d1529..OEDynTag0.href'];?>" style="<?php echo $oei['WE72e59d1529..OEDynTag0.style'];?>"><?php echo $oei['WE72e59d1529..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WEce91bf6770" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WEce91bf6770">
          <button class="OESZ OESZ_Button OESZG_WEce91bf6770 OEDynTag0" type="button" name="WEce91bf6770"><?php echo $oei['WEce91bf6770..OEDynTag0.html1'];?></button>
         </div>
        </div>
        <div id="WE90d5c33f72" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WE90d5c33f72">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE90d5c33f72 OEDynTag0" style="<?php echo $oei['WE90d5c33f72..OEDynTag0.style'];?>" name="oelRememberMe" value="oelRememberMe" />
         </div>
        </div>
        <div id="WE32fd8d4c6c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE32fd8d4c6c">
          <span class="OESZ OESZ_Text OESZG_WE32fd8d4c6c ContentBox OEDynTag0" style="<?php echo $oei['WE32fd8d4c6c..OEDynTag0.style'];?>">Remember me on this computer</span>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="OESZ OESZ_XBodyFooter OESZG_XBody OECT OECT_Footer OECTAbs"></div>
    <div id="WEcc99b3730d" class="BaseDiv RBoth OEEGf8c88e12 OESK_EGf8c88e12_Default" style="z-index:3">
     <div class="OESZ OESZ_DivContent OESZG_WEcc99b3730d">
      <div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>