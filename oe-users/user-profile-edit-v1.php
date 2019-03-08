<?php
	require_once "user-profile-edit-v1(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=50491098000" />
  <link id="siteFonts" rel="stylesheet" type="text/css" href="../Files/Fonts/Fonts.css?v=50491098000" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="user-profile-edit-v1.css?v=50491098000" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/opentip.css?v=50491098000" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/WEAccordion-v21.css?v=50491098000" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=50491098000" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"oe-users/user-profile-edit-v1","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"../","RenderMode":"Export","PageAssociatePath":"oe-users/user-profile-edit-v1","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=50491098000"></script>
  <script type="text/javascript" src="user-profile-edit-v1(var).js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.ui.core.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.ui.effects.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.ui.accordion-v21.js?v=50491098000"></script>
  <script type="text/javascript" src="../WEFiles/Client/WEAccordion-v21.js?v=50491098000"></script>
  <script type="text/javascript">
   var WEEdValidators = {"WE3c1d77a2f6":[{"MsgError":"Please enter your error message.","Expression":"(^$)|(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|\"(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21\\x23-\\x5b\\x5d-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])*\")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\\x01-\\x08\\x0b\\x0c\\x0e-\\x1f\\x21-\\x5a\\x53-\\x7f]|\\\\[\\x01-\\x09\\x0b\\x0c\\x0e-\\x7f])+)\\])"}],"WEd2506170d1":[{"MsgError":"Veuillez inscrire votre message d'erreur.","Expression":".+"}]}
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
     <div id="WEdcfa1a4986" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEdcfa1a4986">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE4913285da8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE4913285da8">
          <span class="OESZ OESZ_Text OESZG_WE4913285da8 ContentBox OEDynTag0"><?php echo $oei['WE4913285da8..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE8450f5f0cf" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE8450f5f0cf">
          <span class="OESZ OESZ_Text OESZG_WE8450f5f0cf ContentBox OEDynTag0"><?php echo $oei['WE8450f5f0cf..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEbe76ea46fc" class="BaseDiv RBoth OEWEAccordion OESK_WEAccordion_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WEbe76ea46fc">
          <div id="9b5a6a3e" class="OESZ OESZ_WEAccordionHeader OESZG_WEbe76ea46fc">
           <span class="OESZ OESZ_WEAccordionHeaderLeft OESZG_WEbe76ea46fc"></span>
           <span class="OESZ OESZ_WEAccordionHeaderContent OESZG_WEbe76ea46fc">
            <a href="#">
             <span class="OESZ OESZ_WEAccordionTitle OESZG_WEbe76ea46fc">Modify password and/or email</span>
            </a>
            <span class="OESZ OESZ_WEAccordionAltTitle OESZG_WEbe76ea46fc">
             <a href="#"></a>
            </span>
           </span>
           <span class="OESZ OESZ_WEAccordionHeaderRight OESZG_WEbe76ea46fc"></span>
          </div>
          <div class="OESZ OESZ_WEAccordionContent OESZG_WEbe76ea46fc">
           <div class="OECT OECT_9b5a6a3e OECTAbs">
            <div id="WEf0efc62d1b" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WEf0efc62d1b">
              <span class="OESZ OESZ_Text OESZG_WEf0efc62d1b ContentBox OEDynTag0"><?php echo $oei['WEf0efc62d1b..OEDynTag0.html1'];?></span>
             </div>
            </div>
            <div id="WE7f23033aa7" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:13">
             <div class="OESZ OESZ_DivContent OESZG_WE7f23033aa7">
              <script>
              // Animate color transition for report
              
              //
              
              $(function(){
                
                var $reportTag = $('#WEf0efc62d1b');
                $reportTag.fadeTo('slow', 0.25).fadeTo('slow', 1.0);
                
              });
              
              
              </script>
             </div>
            </div>
            <div id="WEdce3fc6f6d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WEdce3fc6f6d">
              <span class="OESZ OESZ_Text OESZG_WEdce3fc6f6d ContentBox OEDynTag0">New password:</span>
             </div>
            </div>
            <div id="WEeddce6fd72" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:12">
             <div class="OESZ OESZ_DivContent OESZG_WEeddce6fd72">
              <input name="oepNewPW" type="password" class="OESZ OESZ_TextBox OESZG_WEeddce6fd72 OEDynTag0" value="<?php echo $oei['WEeddce6fd72..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEbba0332f78" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WEbba0332f78">
              <span class="OESZ OESZ_Text OESZG_WEbba0332f78 ContentBox OEDynTag0" style="<?php echo $oei['WEbba0332f78..OEDynTag0.style'];?>">Confirm new password:</span>
             </div>
            </div>
            <div id="WEadaeffd4ae" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WEadaeffd4ae">
              <input name="oepNewPW2" type="password" class="OESZ OESZ_TextBox OESZG_WEadaeffd4ae OEDynTag0" value="<?php echo $oei['WEadaeffd4ae..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEa90e269be5" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:10">
             <div class="OESZ OESZ_DivContent OESZG_WEa90e269be5">
              <div class="OESZ OESZ_Deco1 OESZG_WEa90e269be5" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco2 OESZG_WEa90e269be5" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco3 OESZG_WEa90e269be5" style="position:absolute"></div>
             </div>
            </div>
            <div id="WE2fa5874963" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE2fa5874963">
              <span class="OESZ OESZ_Text OESZG_WE2fa5874963 ContentBox">Modify email:</span>
             </div>
            </div>
            <div id="WE3c1d77a2f6" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WE3c1d77a2f6">
              <input name="oepEmail" type="text" class="OESZ OESZ_TextBox OESZG_WE3c1d77a2f6 OEDynTag0" value="<?php echo $oei['WE3c1d77a2f6..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEc0f54dc9c3" class="BaseDiv RWidth OEWEHr OESK_WEHrLign_Default" style="z-index:11">
             <div class="OESZ OESZ_DivContent OESZG_WEc0f54dc9c3">
              <div class="OESZ OESZ_Deco1 OESZG_WEc0f54dc9c3" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco2 OESZG_WEc0f54dc9c3" style="position:absolute"></div>
              <div class="OESZ OESZ_Deco3 OESZG_WEc0f54dc9c3" style="position:absolute"></div>
             </div>
            </div>
            <div id="WEf7872b6f02" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WEf7872b6f02">
              <span class="OESZ OESZ_Text OESZG_WEf7872b6f02 ContentBox OEDynTag0">For security reasons, enter the current password (obligatory):</span>
             </div>
            </div>
            <div id="WEd2506170d1" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
             <div class="OESZ OESZ_DivContent OESZG_WEd2506170d1">
              <input name="oepPW" type="password" class="OESZ OESZ_TextBox OESZG_WEd2506170d1 OEDynTag0" />
             </div>
            </div>
            <div id="WE7deb211476" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default OECenterAH" style="z-index:9">
             <div class="OESZ OESZ_DivContent OESZG_WE7deb211476">
              <button class="OESZ OESZ_Button OESZG_WE7deb211476 OEDynTag0" type="button" name="WE7deb211476">Update password and/or email</button>
             </div>
            </div>
           </div>
          </div>
          <div id="49619388" class="OESZ OESZ_WEAccordionHeader OESZG_WEbe76ea46fc">
           <span class="OESZ OESZ_WEAccordionHeaderLeft OESZG_WEbe76ea46fc"></span>
           <span class="OESZ OESZ_WEAccordionHeaderContent OESZG_WEbe76ea46fc">
            <a href="#">
             <span class="OESZ OESZ_WEAccordionTitle OESZG_WEbe76ea46fc">Modify other information (click to open)</span>
            </a>
            <span class="OESZ OESZ_WEAccordionAltTitle OESZG_WEbe76ea46fc">
             <a href="#"></a>
            </span>
           </span>
           <span class="OESZ OESZ_WEAccordionHeaderRight OESZG_WEbe76ea46fc"></span>
          </div>
          <div class="OESZ OESZ_WEAccordionContent OESZG_WEbe76ea46fc">
           <div class="OECT OECT_49619388 OECTAbs">
            <div id="WE9a8c4bc788" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE9a8c4bc788">
              <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE9a8c4bc788 OEDynTag0" name="oepDetailsSaved" value="oepDetailsSaved" checked="checked"  />
             </div>
            </div>
            <div id="WEfd1e12bb84" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WEfd1e12bb84">
              <span class="OESZ OESZ_Text OESZG_WEfd1e12bb84 ContentBox OEDynTag0">(keep this checkbox!)</span>
             </div>
            </div>
            <div id="WE0c6676ec1e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE0c6676ec1e">
              <span class="OESZ OESZ_Text OESZG_WE0c6676ec1e ContentBox OEDynTag0">Real name</span>
             </div>
            </div>
            <div id="WEfada6a7eea" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WEfada6a7eea">
              <input name="oepRealName" type="text" class="OESZ OESZ_TextBox OESZG_WEfada6a7eea OEDynTag0" value="<?php echo $oei['WEfada6a7eea..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEbafb9a5010" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:25">
             <div class="OESZ OESZ_DivContent OESZG_WEbafb9a5010">
              <script> // Control the chosen date, ex. to avoid 31 April or 29 February 2001
              $(function(){
                
                var $inputDay = $('#WEbd5b853dcd select');
                var $inputMonth = $('#WE13bb53d1b8 select');
                var $inputYear = $('#WE28bcbd7f1e select');
                if ($inputYear.length < 1 || $inputMonth.length < 1 || $inputDay.length < 1) return;
                
                $inputMonth.change(function(){ // to fix 31s for months where last date is 30, and February
                  
                  //alert([$inputDay.val(), $inputMonth.val(), $inputYear.val()]);
                  
                  var valYear = parseInt($inputYear.val());
                  if (!valYear) valYear = 2000; // if not yet specified
                  var valMonth = parseInt($inputMonth.val());
                  if (!valMonth) return; // month not yet specified
                  var valDay = parseInt($inputDay.val());
                  if (!valDay) return; // day not yet specified
                  
                  var testDate = new Date(valYear, valMonth-1, valDay);
              
                  //alert([testDate.getDate(), valDay, valMonth, valYear]);
                  
                  if (testDate.getDate() !== valDay) { // date does not exist
                    // reset Day value
                    $inputDay.val('');
                  }
                });
                
                $inputDay.change(function(){ $inputMonth.change(); });
                $inputYear.change(function(){ $inputMonth.change(); }); // to fix 29 February
              });
              </script>
             </div>
            </div>
            <div id="WE6106d2da82" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:22">
             <div class="OESZ OESZ_DivContent OESZG_WE6106d2da82">
              <span class="OESZ OESZ_Text OESZG_WE6106d2da82 ContentBox OEDynTag0">Gender</span>
             </div>
            </div>
            <div id="WE9890436464" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:24">
             <div class="OESZ OESZ_DivContent OESZG_WE9890436464">
              <span class="OESZ OESZ_Text OESZG_WE9890436464 ContentBox OEDynTag0">Date of birth</span>
             </div>
            </div>
            <div id="WE24694fe6f4" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:23">
             <div class="OESZ OESZ_DivContent OESZG_WE24694fe6f4">
              <select name="oerGender" class="OESZ OESZ_ListBox OESZG_WE24694fe6f4 OEDynTag0"><?php echo $oeIter['WE24694fe6f4.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WEbd5b853dcd" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:26">
             <div class="OESZ OESZ_DivContent OESZG_WEbd5b853dcd">
              <select name="oerDay" class="OESZ OESZ_ListBox OESZG_WEbd5b853dcd OEDynTag0"><?php echo $oeIter['WEbd5b853dcd.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WE13bb53d1b8" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:27">
             <div class="OESZ OESZ_DivContent OESZG_WE13bb53d1b8">
              <select name="oerMonth" class="OESZ OESZ_ListBox OESZG_WE13bb53d1b8 OEDynTag0"><?php echo $oeIter['WE13bb53d1b8.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WE28bcbd7f1e" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:28">
             <div class="OESZ OESZ_DivContent OESZG_WE28bcbd7f1e">
              <select name="oerYear" class="OESZ OESZ_ListBox OESZG_WE28bcbd7f1e OEDynTag0"><?php echo $oeIter['WE28bcbd7f1e.OEDynTag0.0']; ?></select>
             </div>
            </div>
            <div id="WE55ecd02a6d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE55ecd02a6d">
              <span class="OESZ OESZ_Text OESZG_WE55ecd02a6d ContentBox OEDynTag0">Mailing Address</span>
             </div>
            </div>
            <div id="WE0e865c1579" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WE0e865c1579">
              <input name="oepAddr1" type="text" class="OESZ OESZ_TextBox OESZG_WE0e865c1579 OEDynTag0" value="<?php echo $oei['WE0e865c1579..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WEeea2c6040f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WEeea2c6040f">
              <span class="OESZ OESZ_Text OESZG_WEeea2c6040f ContentBox OEDynTag0">Mailing Address - Line 2</span>
             </div>
            </div>
            <div id="WEa1afa5ad20" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
             <div class="OESZ OESZ_DivContent OESZG_WEa1afa5ad20">
              <input name="oepAddr2" type="text" class="OESZ OESZ_TextBox OESZG_WEa1afa5ad20 OEDynTag0" value="<?php echo $oei['WEa1afa5ad20..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE86c9e6ceea" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
             <div class="OESZ OESZ_DivContent OESZG_WE86c9e6ceea">
              <span class="OESZ OESZ_Text OESZG_WE86c9e6ceea ContentBox OEDynTag0">Town/City</span>
             </div>
            </div>
            <div id="WEfad5085f02" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:10">
             <div class="OESZ OESZ_DivContent OESZG_WEfad5085f02">
              <span class="OESZ OESZ_Text OESZG_WEfad5085f02 ContentBox OEDynTag0">Country</span>
             </div>
            </div>
            <div id="WE366aed459e" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:11">
             <div class="OESZ OESZ_DivContent OESZG_WE366aed459e">
              <input name="oepCity" type="text" class="OESZ OESZ_TextBox OESZG_WE366aed459e OEDynTag0" value="<?php echo $oei['WE366aed459e..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE3233501b2d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:12">
             <div class="OESZ OESZ_DivContent OESZG_WE3233501b2d">
              <input name="oepCountry" type="text" class="OESZ OESZ_TextBox OESZG_WE3233501b2d OEDynTag0" value="<?php echo $oei['WE3233501b2d..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE1493798f94" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:13">
             <div class="OESZ OESZ_DivContent OESZG_WE1493798f94">
              <span class="OESZ OESZ_Text OESZG_WE1493798f94 ContentBox OEDynTag0">Postal Code</span>
             </div>
            </div>
            <div id="WE1f613688be" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
             <div class="OESZ OESZ_DivContent OESZG_WE1f613688be">
              <span class="OESZ OESZ_Text OESZG_WE1f613688be ContentBox OEDynTag0">Phone</span>
             </div>
            </div>
            <div id="WEdfbc4035c2" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:15">
             <div class="OESZ OESZ_DivContent OESZG_WEdfbc4035c2">
              <input name="oepZIP" type="text" class="OESZ OESZ_TextBox OESZG_WEdfbc4035c2 OEDynTag0" value="<?php echo $oei['WEdfbc4035c2..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE96d248e1b8" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:16">
             <div class="OESZ OESZ_DivContent OESZG_WE96d248e1b8">
              <input name="oepPhone" type="text" class="OESZ OESZ_TextBox OESZG_WE96d248e1b8 OEDynTag0" value="<?php echo $oei['WE96d248e1b8..OEDynTag0.value'];?>" />
             </div>
            </div>
            <div id="WE1985363707" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:17">
             <div class="OESZ OESZ_DivContent OESZG_WE1985363707">
              <span class="OESZ OESZ_Text OESZG_WE1985363707 ContentBox OEDynTag0">(Note: modify or delete this text according to website needs)</span>
             </div>
            </div>
            <div id="WEf2fce53063" class="BaseDiv RBoth OEWETextAreaV2 OESK_WETextArea2_Default" style="z-index:18">
             <div class="OESZ OESZ_DivContent OESZG_WEf2fce53063">
              <textarea class="OESZ OESZ_TextArea OESZG_WEf2fce53063 OEDynTag0" name="oepInfo" rows="3" cols="50"><?php echo $oei['WEf2fce53063..OEDynTag0.html1'];?></textarea>
             </div>
            </div>
            <div id="WEc9ad7662e8" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:21">
             <div class="OESZ OESZ_DivContent OESZG_WEc9ad7662e8">
              <button class="OESZ OESZ_Button OESZG_WEc9ad7662e8 OEDynTag0" type="button" name="WEc9ad7662e8">Update additional information</button>
             </div>
            </div>
            <div id="WE3ae80a8d6b" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:19">
             <div class="OESZ OESZ_DivContent OESZG_WE3ae80a8d6b">
              <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE3ae80a8d6b OEDynTag0" name="oepSubscribe" value="oepSubscribe" <?php echo $oei['WE3ae80a8d6b..OEDynTag0.checked'];?>="<?php echo $oei['WE3ae80a8d6b..OEDynTag0.checked'];?>"  />
             </div>
            </div>
            <div id="WE453bcf4c6f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:20">
             <div class="OESZ OESZ_DivContent OESZG_WE453bcf4c6f">
              <span class="OESZ OESZ_Text OESZG_WE453bcf4c6f ContentBox OEDynTag0">Subscribe to Newsletter</span>
             </div>
            </div>
           </div>
          </div>
          <div id="c0906493" class="OESZ OESZ_WEAccordionHeader OESZG_WEbe76ea46fc">
           <span class="OESZ OESZ_WEAccordionHeaderLeft OESZG_WEbe76ea46fc"></span>
           <span class="OESZ OESZ_WEAccordionHeaderContent OESZG_WEbe76ea46fc">
            <a href="#">
             <span class="OESZ OESZ_WEAccordionTitle OESZG_WEbe76ea46fc">Account operations</span>
            </a>
            <span class="OESZ OESZ_WEAccordionAltTitle OESZG_WEbe76ea46fc">
             <a href="#"></a>
            </span>
           </span>
           <span class="OESZ OESZ_WEAccordionHeaderRight OESZG_WEbe76ea46fc"></span>
          </div>
          <div class="OESZ OESZ_WEAccordionContent OESZG_WEbe76ea46fc">
           <div class="OECT OECT_c0906493 OECTAbs">
            <div id="WE9b71867030" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE9b71867030">
              <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE9b71867030 OEDynTag0" name="WE9b71867030" value="Valeur du champ" />
             </div>
            </div>
            <div id="WE27f4705363" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE27f4705363">
              <script>
              $(function() {
                // On cicking Delete link, ask for confirmation; stop link processing if user cancels
                var $linkDel = $('#WEf216ac9863 :button'); if (!$linkDel) return;
                var $msg = $('#oeDelAccountMsg');
                if (!$msg) return;
                $msg = $msg.html();
                
                $linkDel.click(function(){
                  return confirm($msg);
                });
                
                
                // Hide accordeon container section if no properties visible
                var $anyVisible =
                    ($('#WEf216ac9863 button').css('display') !== 'none') ||
                    ($('#WE2d0860423a a').css('display') !== 'none') ||
                    ($('#WE802eb520cf span').css('display') !== 'none') ||
                    ($('#WE641bffd59f span').css('display') !== 'none');
                  
                if (!$anyVisible) { //alert('Hide');
                  var $container = $('#WEbe76ea46fc');
                  var $sections = $('#WEbe76ea46fc .OESZ_WEAccordionHeader');
                  if ($sections.length >= 3) {
                    var $sectionOperations = $($sections[2]);
                    var ht = $sectionOperations.height(); // section height
              
                    var $section1Content = $($('#WEbe76ea46fc .OESZ_WEAccordionContent')[0]);
                    
                    var htS1C = $section1Content.css('height'); // css height of the accordeon container
                    if (ht && htS1C && htS1C.indexOf('px') > 0) { // height is in pixels
                      // increase height of first section to reduce the gap
                      htS1C = (parseInt(htS1C) + ht) + 'px';
                      $section1Content.css('height', htS1C);
                    }      
              
                    $sectionOperations.remove();
                  }
                }
                
              });
              </script>
             </div>
            </div>
            <div id="WE7c13aed6f4" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE7c13aed6f4">
              <span class="OESZ OESZ_Text OESZG_WE7c13aed6f4 ContentBox OEDynTag0"><?php echo $oei['WE7c13aed6f4..OEDynTag0.html1'];?></span>
             </div>
            </div>
            <div id="WEf216ac9863" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WEf216ac9863">
              <button class="OESZ OESZ_Button OESZG_WEf216ac9863 OEDynTag0" type="button" name="WEf216ac9863" style="<?php echo $oei['WEf216ac9863..OEDynTag0.style'];?>" data-oe-target-url="<?php echo $oei['WEf216ac9863..OEDynTag0.data-oe-target-url'];?>">Delete account (!)</button>
             </div>
            </div>
            <div id="WE2d0860423a" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WE2d0860423a">
              <a class="OESZ OESZ_Link OESZG_WE2d0860423a ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE2d0860423a..OEDynTag0.href'];?>" style="<?php echo $oei['WE2d0860423a..OEDynTag0.style'];?>">Confirm (validate) account and send notification to user</a>
             </div>
            </div>
            <div id="WE802eb520cf" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WE802eb520cf">
              <span class="OESZ OESZ_Text OESZG_WE802eb520cf ContentBox OEDynTag0" style="<?php echo $oei['WE802eb520cf..OEDynTag0.style'];?>"><?php echo $oei['WE802eb520cf..OEDynTag0.html1'];?></span>
             </div>
            </div>
            <div id="WE641bffd59f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WE641bffd59f">
              <span class="OESZ OESZ_Text OESZG_WE641bffd59f ContentBox OEDynTag0" style="<?php echo $oei['WE641bffd59f..OEDynTag0.style'];?>"><?php echo $oei['WE641bffd59f..OEDynTag0.html1'];?></span>
             </div>
            </div>
           </div>
          </div>
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