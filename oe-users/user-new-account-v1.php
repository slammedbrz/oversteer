<?php
	require_once "user-new-account-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=50491098000" />
  <link id="siteFonts" rel="stylesheet" type="text/css" href="../Files/Fonts/Fonts.css?v=50491098000" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-new-account-v1.css?v=50491098000" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/opentip.css?v=50491098000" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/EG/EGf8c88e12/Css/jquery.vegas-v89.css?v=50491098000" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=50491098000" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"oe-users/user-new-account-v1","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"../","RenderMode":"Export","PageAssociatePath":"oe-users/user-new-account-v1","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=50491098000"></script>
  <script type="text/javascript" src="user-new-account-v1(var).js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/EG/EGf8c88e12/Js/jquery.vegas.min-v81.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/EG/EGf8c88e12/Js/WEBackgroundSlider-v213.js?v=50491098000"></script>
  <script type="text/javascript">
   var WEEdValidators = {"WE4c459ee20c":[{"MsgError":"Veuillez inscrire votre message d'erreur.","Expression":"(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21-\\x5a\\x53-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])+)\\])"}],"WEf9e63d29a3":[{"MsgError":"Veuillez inscrire votre message d'erreur.","Expression":".+"}],"WE74c2154e77":[{"MsgError":"Veuillez inscrire votre message d'erreur.","Expression":".+"}],"WEa07bb211e1":[{"MsgError":"Please configure your error message.","Expression":".+"}]}
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
     <div id="WEe45a140a47" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEe45a140a47">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEa5b274ac83" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEa5b274ac83">
          <span class="OESZ OESZ_Text OESZG_WEa5b274ac83 ContentBox OEDynTag0"><?php echo $oei['WEa5b274ac83..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEd918c1aa2e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEd918c1aa2e">
          <span class="OESZ OESZ_Text OESZG_WEd918c1aa2e ContentBox OEDynTag0">Email address*</span>
         </div>
        </div>
        <div id="WE4c459ee20c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE4c459ee20c">
          <input name="oerEmail" type="text" class="OESZ OESZ_TextBox OESZG_WE4c459ee20c OEDynTag0" style="<?php echo $oei['WE4c459ee20c..OEDynTag0.style'];?>" value="<?php echo $oei['WE4c459ee20c..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WEbee4ece1da" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WEbee4ece1da">
          <span class="OESZ OESZ_Text OESZG_WEbee4ece1da ContentBox OEDynTag0" style="<?php echo $oei['WEbee4ece1da..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WEad8d473288" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WEad8d473288">
          <span class="OESZ OESZ_Text OESZG_WEad8d473288 ContentBox OEDynTag0">User name - leave blank to use email address only</span>
         </div>
        </div>
        <div id="WE4c6402f6b5" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WE4c6402f6b5">
          <input name="oerName" type="text" class="OESZ OESZ_TextBox OESZG_WE4c6402f6b5 OEDynTag0" style="<?php echo $oei['WE4c6402f6b5..OEDynTag0.style'];?>" value="<?php echo $oei['WE4c6402f6b5..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE2edfa960f5" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WE2edfa960f5">
          <span class="OESZ OESZ_Text OESZG_WE2edfa960f5 ContentBox OEDynTag0" style="<?php echo $oei['WE2edfa960f5..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WE0b871185f4" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WE0b871185f4">
          <span class="OESZ OESZ_Text OESZG_WE0b871185f4 ContentBox OEDynTag0">Password*</span>
         </div>
        </div>
        <div id="WE06d36aea5c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE06d36aea5c">
          <span class="OESZ OESZ_Text OESZG_WE06d36aea5c ContentBox OEDynTag0">Confirm your password*</span>
         </div>
        </div>
        <div id="WEf9e63d29a3" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WEf9e63d29a3">
          <input name="oerPW" type="password" class="OESZ OESZ_TextBox OESZG_WEf9e63d29a3 OEDynTag0" style="<?php echo $oei['WEf9e63d29a3..OEDynTag0.style'];?>" value="<?php echo $oei['WEf9e63d29a3..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE74c2154e77" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WE74c2154e77">
          <input name="oerPW2" type="password" class="OESZ OESZ_TextBox OESZG_WE74c2154e77 OEDynTag0" style="<?php echo $oei['WE74c2154e77..OEDynTag0.style'];?>" value="<?php echo $oei['WE74c2154e77..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE4eb210fbaf" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE4eb210fbaf">
          <span class="OESZ OESZ_Text OESZG_WE4eb210fbaf ContentBox OEDynTag0" style="<?php echo $oei['WE4eb210fbaf..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WE8e55300b37" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WE8e55300b37">
          <span class="OESZ OESZ_Text OESZG_WE8e55300b37 ContentBox OEDynTag0" style="<?php echo $oei['WE8e55300b37..OEDynTag0.style'];?>">(!)</span>
         </div>
        </div>
        <div id="WEa07bb211e1" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:14">
         <div class="OESZ OESZ_DivContent OESZG_WEa07bb211e1">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEa07bb211e1 OEDynTag0" name="oerAccept" value="Valeur du champ" />
         </div>
        </div>
        <div id="WE1f90fd4d7b" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:15">
         <div class="OESZ OESZ_DivContent OESZG_WE1f90fd4d7b">
          <span class="OESZ OESZ_Text OESZG_WE1f90fd4d7b ContentBox">I accept the <a href="">Terms of Use<span style="color:rgb(0, 0, 0);font-size:16px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:19px;text-align:-webkit-auto;text-indent:0px;text-transform:none;white-space:normal;word-spacing:0px;">*</span></a>&nbsp;(!set the link for each language!)</span>
         </div>
        </div>
        <div id="WEcb1745fdc3" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:16">
         <div class="OESZ OESZ_DivContent OESZG_WEcb1745fdc3">
          <button class="OESZ OESZ_Button OESZG_WEcb1745fdc3 OEDynTag0" type="button" name="WEcb1745fdc3">Create account</button>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="OESZ OESZ_XBodyFooter OESZG_XBody OECT OECT_Footer OECTAbs"></div>
    <div id="WE8f67c781a1" class="BaseDiv RBoth OEEGf8c88e12 OESK_EGf8c88e12_Default" style="z-index:3">
     <div class="OESZ OESZ_DivContent OESZG_WE8f67c781a1">
      <div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>