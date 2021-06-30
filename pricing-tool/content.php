<?php
//Fixed version 11am 2/24/2021 by mzschiegner
session_start();
include '../src/json.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link rel="icon" href="https://www.auvis.com/wp-content/uploads/2020/04/cropped-Molecule-Favicon-32x32.png" sizes="32x32"/>
   <!-- AJAX URL -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<base target="_self">
<?php 
include '../css/pricing_app_css.html';
?>
<style type="text/css">
 .tab { margin-left: 40px; }
</style>
    <title>AuVis Pricing Tool</title>
</head>
  <body>
<div class = "container">
  <h2>AuVis Pricing Tool</h2> 
<div align = "left"><img width="100" height="100" src="https://www.auvis.com/wp-content/uploads/2020/04/AuVisLogoWebReady-300x300.png" class="image wp-image-446  attachment-250x250 size-250x250" alt="Auvis Transparent Logo" loading="lazy" style="max-width: 100%; height: auto;" data-pagespeed-url-hash="515337349"></div>
  <div id = "modifiers">
      <p>Use the below tool to get an estimated price for your AuVisMDS Core implementation. First, let us know how you would like to control access and manipulate the data globally, and then we’ll walk through the systems you have in place. The whole process should take less than 5 minutes, and an AuVis representative will be able to discuss the pricing with you and go over any additional modifications.</p>
  <p>Please note that the price provided here is an estimate and could change during our conversations.</p>
  <h5>Modifiers</h5>  
  <div class="row"> 
    <label>Permissions Management</label><br />
      <p class = "tab">Above, please let us know how you would like to work with and access the data in your dashboards. These features will be applied globally across all dashboards.</p>
  <p class = "tab">What type of permissioned access would you like in your dashboard environment? The basic options are outlined below, but if you need custom permissions, please select “Module Limited” and we can discuss what customizations need to be made.</p> 
  <p class = "tab"><strong>Open:</strong> Everyone who you provide access to the dashboard environment has access to all dashboards, modules, and data within the environment</p>
 <p class = "tab"><strong>Dashboard Limited:</strong> Limit accessibility to entire dashboards for certain groups of people. For example, choose this if you want to make a financial overview available only to management and accounting.</p>
  <p class = "tab"><strong>Module Limited:</strong> Limit accessibility down to certain modules within dashboards. Using our previous example, you may want everyone to have access to certain financial metrics, but may want only certain users to have access to more sensitive financial data such as total salary expenses.</p>  
    <select id="permissions">
      <option value="" disabled selected>Choose your option</option>
       <option value='{"feature":"<?php print_r($arr4[0]['Feature']); ?>","feature_option":"<?php print_r($arr4[0]['Feature Option']); ?>","multiplier_level":"<?php print_r($arr4[0]['Multiplier Level']); ?>"}'><?php print_r($arr4[0]['Feature Option']); ?>    
       <option value='{"feature":"<?php print_r($arr4[1]['Feature']); ?>","feature_option":"<?php print_r($arr4[1]['Feature Option']); ?>","multiplier_level":"<?php print_r($arr4[1]['Multiplier Level']); ?>"}'><?php print_r($arr4[1]['Feature Option']); ?>    
       <option value='{"feature":"<?php print_r($arr4[2]['Feature']); ?>","feature_option":"<?php print_r($arr4[2]['Feature Option']); ?>","multiplier_level":"<?php print_r($arr4[2]['Multiplier Level']); ?>"}'><?php print_r($arr4[2]['Feature Option']); ?>     
       <!-- <option value='{"feature":"<?php print_r($arr4[3]['Feature']); ?>","feature_option":"<?php print_r($arr4[3]['Feature Option']); ?>","multiplier_level":"<?php print_r($arr4[3]['Multiplier Level']); ?>"}'><?php print_r($arr4[3]['Feature Option']); ?> --> 
    </select>
   </div> <!-- CLOSE ROW -->
<div class="row">   
   <label>View Dates</label><br />
   <p class = "tab">Let us know how you would like to select data ranges. We have two basic options here, but can discuss additional custom selections options.</p>
<p class = "tab"><strong>Calendar:</strong> Choose this option if you want to select dates using a calendar/date input. This is a great option if you want to start your views from a specific date onward or select certain start and end dates to view.</p>
<p class = "tab"><strong>Set Period:</strong> Choose this option if you would like to view data breakdowns by pre-set periods, like This Month, This Quarter, Last Quarter, This Year, Last Year, etc.</p> 
<p class = "tab">Note: If you would like a combination of these options, would like custom periods, or use a custom fiscal year, please choose “Set Period.”</p>
    <select id="view">
      <option value="" disabled selected>Choose your option</option>
       <option value='{"feature":"<?php print_r($arr5[0]['Feature']); ?>","feature_option":"<?php print_r($arr5[0]['Feature Option']); ?>","multiplier_level":"<?php print_r($arr5[0]['Multiplier Level']); ?>"}'><?php print_r($arr5[0]['Feature Option']); ?>
       <option value='{"feature":"<?php print_r($arr5[1]['Feature']); ?>","feature_option":"<?php print_r($arr5[1]['Feature Option']); ?>","multiplier_level":"<?php print_r($arr5[1]['Multiplier Level']); ?>"}'><?php print_r($arr5[1]['Feature Option']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<div class="row">
    <label>Comparative Metrics</label> <br />
      <p class = "tab">Viewing data against previous performance is a great way to gauge improvement. The list of options can seem crazy, so we’ll do our best to walk you through the options.</p>
  <p class = "tab"><strong>No Comparative:</strong> Choose this option if you don’t need any comparative views and just need to view current data.</p>
  <p class = "tab"><strong>Year Over Year Only:</strong> Choose this option if you need only view metric comparisons Year to Year - for example, This Year versus Last Year.</p>
  <p class = "tab"><strong>Quarter vs. Previous Quarter:</strong> Choose this option if you would like to view data breakdowns for this quarter versus performance the previous quarter.</p>
  <p class = "tab"><strong>Period vs. Previous Period:</strong> Choose this option if you would like to use custom periods and show the breakdown over the PREVIOUS custom period.</p>
  <p class = "tab"><strong>Period vs. Period LY:</strong> Choose this option if you would like to use custom periods and show the breakdown of data over the SAME period last year.</p>
<p>Please review your selections below - if you are ready to move on to the system selection, click “Next”</p>
      <select id="compare">
      <option value="" disabled selected>Choose your option</option>
       <option value='{"feature":"<?php print_r($arr6[0]['Feature']); ?>","feature_option":"<?php print_r($arr6[0]['Feature Option']); ?>","multiplier_level":"<?php print_r($arr6[0]['Multiplier Level']); ?>"}'><?php print_r($arr6[0]['Feature Option']); ?>     
       <option value='{"feature":"<?php print_r($arr6[1]['Feature']); ?>","feature_option":"<?php print_r($arr6[1]['Feature Option']); ?>","multiplier_level":"<?php print_r($arr6[1]['Multiplier Level']); ?>"}'><?php print_r($arr6[1]['Feature Option']); ?>     
       <option value='{"feature":"<?php print_r($arr6[2]['Feature']); ?>","feature_option":"<?php print_r($arr6[2]['Feature Option']); ?>","multiplier_level":"<?php print_r($arr6[2]['Multiplier Level']); ?>"}'><?php print_r($arr6[2]['Feature Option']); ?>     
       <option value='{"feature":"<?php print_r($arr6[3]['Feature']); ?>","feature_option":"<?php print_r($arr6[3]['Feature Option']); ?>","multiplier_level":"<?php print_r($arr6[3]['Multiplier Level']); ?>"}'><?php print_r($arr6[3]['Feature Option']); ?>
       <option value='{"feature":"<?php print_r($arr6[4]['Feature']); ?>","feature_option":"<?php print_r($arr6[4]['Feature Option']); ?>","multiplier_level":"<?php print_r($arr6[4]['Multiplier Level']); ?>"}'><?php print_r($arr6[4]['Feature Option']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
</div> <!-- CLOSE modifiers --> 
    <div id = 'yourchoice1'></div>
    <div id = 'yourchoice2'></div>
    <div id = 'yourchoice3'></div>
<button id = "lockin" onclick="hideModifiers()">Next</button>
<div style="display:none;" id = "blurb">
  <p>Great! Now that we know how you want your interface to be set up, let’s talk about your current data systems. Below we will walk you through each system group. There are 13 categories below - if you don’t use any systems within a category, just choose “Do not use” from the selector and click “Next”. Please only select one option per dropdown - many will have the option to indicate that you use more that one system, and you will be given the opportunity to add more. If you use a system that isn’t on one of the lists, just pick “Other” - these are just some of our most-requested systems. We can create custom connections to just about ANY system out there and can discuss additional systems with you directly!</p>
  <p>If you don’t want to include a system’s data in your build right away, you can skip that section by choosing “Do Not Use” - remember, we can always add systems and integrate them into your reporting program down the line.</p>
  <br />
<button style="display:none;" onclick="myFunction()" id="getstarted" value="Get Started">Get Started</button>
</div>
<div style="display:none;" id="erpsection">
<div class="row">
    <label>ERP</label> <br />
        <p class = "tab">Do you use an ERP (Enterprise Resource Planning) system? If so, let us know what system you use. If you don’t see the system you use here, just choose “other” and we can discuss the specific system later. If you do use an ERP to manage certain business systems, like CRM or Finance, choose “Do not use” in those categories below since they’re already counted in your ERP!</p>
      <select id="erp">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['What ERP is used']); ?>","base_price":"<?php print_r($arr9[0]['Base Price']); ?>","level":"<?php print_r($arr9[0]['Level']); ?>"}'><?php print_r($arr[0]['What ERP is used']); ?>   
      <option value='{"platform":"<?php print_r($arr[1]['What ERP is used']); ?>","base_price":"<?php print_r($arr9[1]['Base Price']); ?>","level":"<?php print_r($arr9[1]['Level']); ?>"}'><?php print_r($arr[1]['What ERP is used']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['What ERP is used']); ?>","base_price":"<?php print_r($arr9[2]['Base Price']); ?>","level":"<?php print_r($arr9[2]['Level']); ?>"}'><?php print_r($arr[2]['What ERP is used']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['What ERP is used']); ?>","base_price":"<?php print_r($arr9[3]['Base Price']); ?>","level":"<?php print_r($arr9[3]['Level']); ?>"}'><?php print_r($arr[3]['What ERP is used']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['What ERP is used']); ?>","base_price":"<?php print_r($arr9[4]['Base Price']); ?>","level":"<?php print_r($arr9[4]['Level']); ?>"}'><?php print_r($arr[4]['What ERP is used']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['What ERP is used']); ?>","base_price":"<?php print_r($arr9[5]['Base Price']); ?>","level":"<?php print_r($arr9[5]['Level']); ?>"}'><?php print_r($arr[5]['What ERP is used']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['What ERP is used']); ?>","base_price":"<?php print_r($arr9[6]['Base Price']); ?>","level":"<?php print_r($arr9[6]['Level']); ?>"}'><?php print_r($arr[6]['What ERP is used']); ?>
      <option value='{"platform":"<?php print_r($arr[7]['What ERP is used']); ?>","base_price":"<?php print_r($arr9[7]['Base Price']); ?>","level":"<?php print_r($arr9[7]['Level']); ?>"}'><?php print_r($arr[7]['What ERP is used']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['What ERP is used']); ?>","base_price":"<?php print_r($arr9[8]['Base Price']); ?>","level":"<?php print_r($arr9[8]['Level']); ?>"}'><?php print_r($arr[8]['What ERP is used']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['What ERP is used']); ?>","base_price":"<?php print_r($arr9[9]['Base Price']); ?>","level":"<?php print_r($arr9[9]['Level']); ?>"}'><?php print_r($arr[9]['What ERP is used']); ?>
      </select>
</div> <!-- CLOSE ROW --> 

<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE erpsection --> 
<div id = "erpselect"></div>
<button style="display:none;" id = "nextbutton" onclick="showWH()">Next</button>
<br />
<div style="display:none;" id = "whsection">
<div class="row">
    <label>Data Warehousing</label> <br />
    <p class = "tab">Don’t worry - we don’t require you to have a data warehouse set up to use our system - but if you do already use one, we can integrate it into our connections. We can also set one up for you if needed. If you use an ERP, there’s a good chance we will need to set up a warehouse for you if you do not already use one. We WILL NOT retain ownership of that warehouse at all, just set it up for you - and we set it up to manage just the data we need to run the dashboards, so it’s done at a fraction of the cost of other solutions.</p>  
      <select id="datawarehouse">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[0]['Base Price']); ?>","level":"<?php print_r($arr10[0]['Level']); ?>"}'><?php print_r($arr[0]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[1]['Base Price']); ?>","level":"<?php print_r($arr10[1]['Level']); ?>"}'><?php print_r($arr[1]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[2]['Base Price']); ?>","level":"<?php print_r($arr10[2]['Level']); ?>"}'><?php print_r($arr[2]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[3]['Base Price']); ?>","level":"<?php print_r($arr10[3]['Level']); ?>"}'><?php print_r($arr[3]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[4]['Base Price']); ?>","level":"<?php print_r($arr10[4]['Level']); ?>"}'><?php print_r($arr[4]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[5]['Base Price']); ?>","level":"<?php print_r($arr10[5]['Level']); ?>"}'><?php print_r($arr[5]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[6]['Base Price']); ?>","level":"<?php print_r($arr10[6]['Level']); ?>"}'><?php print_r($arr[6]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[7]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[7]['Base Price']); ?>","level":"<?php print_r($arr10[7]['Level']); ?>"}'><?php print_r($arr[7]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[8]['Base Price']); ?>","level":"<?php print_r($arr10[8]['Level']); ?>"}'><?php print_r($arr[8]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[9]['Base Price']); ?>","level":"<?php print_r($arr10[9]['Level']); ?>"}'><?php print_r($arr[9]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[10]['Base Price']); ?>","level":"<?php print_r($arr10[10]['Level']); ?>"}'><?php print_r($arr[10]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[11]['Base Price']); ?>","level":"<?php print_r($arr10[11]['Level']); ?>"}'><?php print_r($arr[11]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[12]['Base Price']); ?>","level":"<?php print_r($arr10[12]['Level']); ?>"}'><?php print_r($arr[12]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[13]['Base Price']); ?>","level":"<?php print_r($arr10[13]['Level']); ?>"}'><?php print_r($arr[13]['Data Warehousing/Management']); ?>
      <option value='{"platform":"<?php print_r($arr[14]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[14]['Base Price']); ?>","level":"<?php print_r($arr10[14]['Level']); ?>"}'><?php print_r($arr[14]['Data Warehousing/Management']); ?> 
      <option value='{"platform":"<?php print_r($arr[15]['Data Warehousing/Management']); ?>","base_price":"<?php print_r($arr10[15]['Base Price']); ?>","level":"<?php print_r($arr10[15]['Level']); ?>"}'><?php print_r($arr[15]['Data Warehousing/Management']); ?>                 
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE whsection -->    
<div id = "whselect"></div>
<button style="display:none;" id = "nextbutton2" onclick="showCloud()">Next</button>
<br />
<div style="display:none;"id = "cloudsection">
<div class="row">
    <label>Cloud Document Storage</label> <br />
    <p class = "tab">Do you store spreadsheets or tracking documents on services like Box or Google Drive?</p>
      <select id="cloud">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Cloud Document Storage']); ?>","base_price":"<?php print_r($arr11[0]['Base Price']); ?>","level":"<?php print_r($arr11[0]['Level']); ?>"}'><?php print_r($arr[0]['Cloud Document Storage']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Cloud Document Storage']); ?>","base_price":"<?php print_r($arr11[1]['Base Price']); ?>","level":"<?php print_r($arr11[1]['Level']); ?>"}'><?php print_r($arr[1]['Cloud Document Storage']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Cloud Document Storage']); ?>","base_price":"<?php print_r($arr11[2]['Base Price']); ?>","level":"<?php print_r($arr11[2]['Level']); ?>"}'><?php print_r($arr[2]['Cloud Document Storage']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Cloud Document Storage']); ?>","base_price":"<?php print_r($arr11[3]['Base Price']); ?>","level":"<?php print_r($arr11[3]['Level']); ?>"}'><?php print_r($arr[3]['Cloud Document Storage']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Cloud Document Storage']); ?>","base_price":"<?php print_r($arr11[4]['Base Price']); ?>","level":"<?php print_r($arr11[4]['Level']); ?>"}'><?php print_r($arr[4]['Cloud Document Storage']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Cloud Document Storage']); ?>","base_price":"<?php print_r($arr11[5]['Base Price']); ?>","level":"<?php print_r($arr11[5]['Level']); ?>"}'><?php print_r($arr[5]['Cloud Document Storage']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Cloud Document Storage']); ?>","base_price":"<?php print_r($arr11[6]['Base Price']); ?>","level":"<?php print_r($arr11[6]['Level']); ?>"}'><?php print_r($arr[6]['Cloud Document Storage']); ?>      
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE cloudsection -->
<div id = "cloudselect"></div>
<button style="display:none;" id = "nextbutton3" onclick="showCrm()">Next</button>  
<br />
<div style="display:none;" id = "crmsection">
<div class="row">
    <label>CRM</label> <br />
    <p class = "tab">What CRM do you use to manage your sales pipelines and customer information?</p> 
      <select id="crm">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['CRM']); ?>","base_price":"<?php print_r($arr2[0]['Base Price']); ?>","level":"<?php print_r($arr2[0]['Level']); ?>"}'><?php print_r($arr[0]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['CRM']); ?>","base_price":"<?php print_r($arr2[1]['Base Price']); ?>","level":"<?php print_r($arr2[1]['Level']); ?>"}'><?php print_r($arr[1]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['CRM']); ?>","base_price":"<?php print_r($arr2[2]['Base Price']); ?>","level":"<?php print_r($arr2[2]['Level']); ?>"}'><?php print_r($arr[2]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['CRM']); ?>","base_price":"<?php print_r($arr2[3]['Base Price']); ?>","level":"<?php print_r($arr2[3]['Level']); ?>"}'><?php print_r($arr[3]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['CRM']); ?>","base_price":"<?php print_r($arr2[4]['Base Price']); ?>","level":"<?php print_r($arr2[4]['Level']); ?>"}'><?php print_r($arr[4]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['CRM']); ?>","base_price":"<?php print_r($arr2[5]['Base Price']); ?>","level":"<?php print_r($arr2[5]['Level']); ?>"}'><?php print_r($arr[5]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['CRM']); ?>","base_price":"<?php print_r($arr2[6]['Base Price']); ?>","level":"<?php print_r($arr2[6]['Level']); ?>"}'><?php print_r($arr[6]['CRM']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['CRM']); ?>","base_price":"<?php print_r($arr2[7]['Base Price']); ?>","level":"<?php print_r($arr2[7]['Level']); ?>"}'><?php print_r($arr[7]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['CRM']); ?>","base_price":"<?php print_r($arr2[8]['Base Price']); ?>","level":"<?php print_r($arr2[8]['Level']); ?>"}'><?php print_r($arr[8]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['CRM']); ?>","base_price":"<?php print_r($arr2[9]['Base Price']); ?>","level":"<?php print_r($arr2[9]['Level']); ?>"}'><?php print_r($arr[9]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['CRM']); ?>","base_price":"<?php print_r($arr2[10]['Base Price']); ?>","level":"<?php print_r($arr2[10]['Level']); ?>"}'><?php print_r($arr[10]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['CRM']); ?>","base_price":"<?php print_r($arr2[11]['Base Price']); ?>","level":"<?php print_r($arr2[11]['Level']); ?>"}'><?php print_r($arr[11]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['CRM']); ?>","base_price":"<?php print_r($arr2[12]['Base Price']); ?>","level":"<?php print_r($arr2[12]['Level']); ?>"}'><?php print_r($arr[12]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['CRM']); ?>","base_price":"<?php print_r($arr2[13]['Base Price']); ?>","level":"<?php print_r($arr2[13]['Level']); ?>"}'><?php print_r($arr[13]['CRM']); ?> 
      <option value='{"platform":"<?php print_r($arr[14]['CRM']); ?>","base_price":"<?php print_r($arr2[14]['Base Price']); ?>","level":"<?php print_r($arr2[14]['Level']); ?>"}'><?php print_r($arr[14]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['CRM']); ?>","base_price":"<?php print_r($arr2[15]['Base Price']); ?>","level":"<?php print_r($arr2[15]['Level']); ?>"}'><?php print_r($arr[15]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[16]['CRM']); ?>","base_price":"<?php print_r($arr2[16]['Base Price']); ?>","level":"<?php print_r($arr2[16]['Level']); ?>"}'><?php print_r($arr[16]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[17]['CRM']); ?>","base_price":"<?php print_r($arr2[17]['Base Price']); ?>","level":"<?php print_r($arr2[17]['Level']); ?>"}'><?php print_r($arr[17]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[18]['CRM']); ?>","base_price":"<?php print_r($arr2[18]['Base Price']); ?>","level":"<?php print_r($arr2[18]['Level']); ?>"}'><?php print_r($arr[18]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[19]['CRM']); ?>","base_price":"<?php print_r($arr2[19]['Base Price']); ?>","level":"<?php print_r($arr2[19]['Level']); ?>"}'><?php print_r($arr[19]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[20]['CRM']); ?>","base_price":"<?php print_r($arr2[20]['Base Price']); ?>","level":"<?php print_r($arr2[20]['Level']); ?>"}'><?php print_r($arr[20]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[21]['CRM']); ?>","base_price":"<?php print_r($arr2[21]['Base Price']); ?>","level":"<?php print_r($arr2[21]['Level']); ?>"}'><?php print_r($arr[21]['CRM']); ?>
      <option value='{"platform":"<?php print_r($arr[22]['CRM']); ?>","base_price":"<?php print_r($arr2[22]['Base Price']); ?>","level":"<?php print_r($arr2[22]['Level']); ?>"}'><?php print_r($arr[22]['CRM']); ?>      
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE crmsection --> 
<div id = "crmselect"></div>
<button style="display:none;" id = "nextbutton4" onclick="showFin()">Next</button> 
<br /> 
<div style="display:none;" id = "finsection">
<div class="row">
    <label>Financial Data</label> <br />
    <p class = "tab">What system do you use to manage company financial data, including AR/AP?</p>
      <select id="fin">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['What system is used to manage company finances']); ?>","base_price":"<?php print_r($arr2[23]['Base Price']); ?>","level":"<?php print_r($arr2[23]['Level']); ?>"}'><?php print_r($arr[0]['What system is used to manage company finances']); ?>      
      <option value='{"platform":"<?php print_r($arr[1]['What system is used to manage company finances']); ?>","base_price":"<?php print_r($arr2[24]['Base Price']); ?>","level":"<?php print_r($arr2[24]['Level']); ?>"}'><?php print_r($arr[1]['What system is used to manage company finances']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['What system is used to manage company finances']); ?>","base_price":"<?php print_r($arr2[25]['Base Price']); ?>","level":"<?php print_r($arr2[25]['Level']); ?>"}'><?php print_r($arr[2]['What system is used to manage company finances']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['What system is used to manage company finances']); ?>","base_price":"<?php print_r($arr2[26]['Base Price']); ?>","level":"<?php print_r($arr2[26]['Level']); ?>"}'><?php print_r($arr[3]['What system is used to manage company finances']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['What system is used to manage company finances']); ?>","base_price":"<?php print_r($arr2[27]['Base Price']); ?>","level":"<?php print_r($arr2[27]['Level']); ?>"}'><?php print_r($arr[4]['What system is used to manage company finances']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['What system is used to manage company finances']); ?>","base_price":"<?php print_r($arr2[28]['Base Price']); ?>","level":"<?php print_r($arr2[28]['Level']); ?>"}'><?php print_r($arr[5]['What system is used to manage company finances']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['What system is used to manage company finances']); ?>","base_price":"<?php print_r($arr2[29]['Base Price']); ?>","level":"<?php print_r($arr2[29]['Level']); ?>"}'><?php print_r($arr[6]['What system is used to manage company finances']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['What system is used to manage company finances']); ?>","base_price":"<?php print_r($arr2[30]['Base Price']); ?>","level":"<?php print_r($arr2[30]['Level']); ?>"}'><?php print_r($arr[7]['What system is used to manage company finances']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['What system is used to manage company finances']); ?>","base_price":"<?php print_r($arr2[31]['Base Price']); ?>","level":"<?php print_r($arr2[31]['Level']); ?>"}'><?php print_r($arr[8]['What system is used to manage company finances']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['What system is used to manage company finances']); ?>","base_price":"<?php print_r($arr2[32]['Base Price']); ?>","level":"<?php print_r($arr2[32]['Level']); ?>"}'><?php print_r($arr[9]['What system is used to manage company finances']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['What system is used to manage company finances']); ?>","base_price":"<?php print_r($arr2[33]['Base Price']); ?>","level":"<?php print_r($arr2[33]['Level']); ?>"}'><?php print_r($arr[10]['What system is used to manage company finances']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['What system is used to manage company finances']); ?>","base_price":"<?php print_r($arr2[34]['Base Price']); ?>","level":"<?php print_r($arr2[34]['Level']); ?>"}'><?php print_r($arr[11]['What system is used to manage company finances']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE finsection --> 
<div id = "finselect"></div>
<button style="display:none;" id = "nextbutton5" onclick="showMkt()">Next</button>  
<br />
<div style="display:none;" id = "mktsection">
<div class="row">
    <label>Marketing and Email</label> <br />
    <p class = "tab">What system do you use to manage marketing automation, campaigns, or emails?</p>
      <select id="mkt">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[52]['Base Price']); ?>","level":"<?php print_r($arr2[52]['Level']); ?>"}'><?php print_r($arr[0]['Email or marketing automation tools']); ?>      
      <option value='{"platform":"<?php print_r($arr[1]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[53]['Base Price']); ?>","level":"<?php print_r($arr2[53]['Level']); ?>"}'><?php print_r($arr[1]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[54]['Base Price']); ?>","level":"<?php print_r($arr2[54]['Level']); ?>"}'><?php print_r($arr[2]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[55]['Base Price']); ?>","level":"<?php print_r($arr2[55]['Level']); ?>"}'><?php print_r($arr[3]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[56]['Base Price']); ?>","level":"<?php print_r($arr2[56]['Level']); ?>"}'><?php print_r($arr[4]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[57]['Base Price']); ?>","level":"<?php print_r($arr2[57]['Level']); ?>"}'><?php print_r($arr[5]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[58]['Base Price']); ?>","level":"<?php print_r($arr2[58]['Level']); ?>"}'><?php print_r($arr[6]['Email or marketing automation tools']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[59]['Base Price']); ?>","level":"<?php print_r($arr2[59]['Level']); ?>"}'><?php print_r($arr[7]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[60]['Base Price']); ?>","level":"<?php print_r($arr2[60]['Level']); ?>"}'><?php print_r($arr[8]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[61]['Base Price']); ?>","level":"<?php print_r($arr2[61]['Level']); ?>"}'><?php print_r($arr[9]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[62]['Base Price']); ?>","level":"<?php print_r($arr2[62]['Level']); ?>"}'><?php print_r($arr[10]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[63]['Base Price']); ?>","level":"<?php print_r($arr2[63]['Level']); ?>"}'><?php print_r($arr[11]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[64]['Base Price']); ?>","level":"<?php print_r($arr2[64]['Level']); ?>"}'><?php print_r($arr[12]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[65]['Base Price']); ?>","level":"<?php print_r($arr2[65]['Level']); ?>"}'><?php print_r($arr[13]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[14]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[66]['Base Price']); ?>","level":"<?php print_r($arr2[66]['Level']); ?>"}'><?php print_r($arr[14]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[67]['Base Price']); ?>","level":"<?php print_r($arr2[67]['Level']); ?>"}'><?php print_r($arr[15]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[16]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[68]['Base Price']); ?>","level":"<?php print_r($arr2[68]['Level']); ?>"}'><?php print_r($arr[16]['Email or marketing automation tools']); ?>
      <option value='{"platform":"<?php print_r($arr[17]['Email or marketing automation tools']); ?>","base_price":"<?php print_r($arr2[69]['Base Price']); ?>","level":"<?php print_r($arr2[69]['Level']); ?>"}'><?php print_r($arr[17]['Email or marketing automation tools']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE SHOW-NO4 --> 
<div id = "mktselect"></div>
<button style="display:none;" id = "nextbutton6" onclick="showDigOps()">Next</button>  
<br />
<div style="display:none;" id = "digopssection">
<div class="row">
    <label>Digital Ops</label> <br />
    <p class = "tab">What system(s) do you use to manage your company’s digital presence? This doesn’t include things like social media or paid advertising, we’ll get to those in a minute.</p>
      <select id="digops">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[0]['Base Price']); ?>","level":"<?php print_r($arr7[0]['Level']); ?>"}'><?php print_r($arr[0]['Digital Ops']); ?>
            <option value='{"platform":"<?php print_r($arr[23]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[23]['Base Price']); ?>","level":"<?php print_r($arr7[23]['Level']); ?>"}'><?php print_r($arr[23]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[24]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[24]['Base Price']); ?>","level":"<?php print_r($arr7[24]['Level']); ?>"}'><?php print_r($arr[24]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[1]['Base Price']); ?>","level":"<?php print_r($arr7[1]['Level']); ?>"}'><?php print_r($arr[1]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[2]['Base Price']); ?>","level":"<?php print_r($arr7[2]['Level']); ?>"}'><?php print_r($arr[2]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[3]['Base Price']); ?>","level":"<?php print_r($arr7[3]['Level']); ?>"}'><?php print_r($arr[3]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[4]['Base Price']); ?>","level":"<?php print_r($arr7[4]['Level']); ?>"}'><?php print_r($arr[4]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[5]['Base Price']); ?>","level":"<?php print_r($arr7[5]['Level']); ?>"}'><?php print_r($arr[5]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[6]['Base Price']); ?>","level":"<?php print_r($arr7[6]['Level']); ?>"}'><?php print_r($arr[6]['Digital Ops']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[7]['Base Price']); ?>","level":"<?php print_r($arr7[7]['Level']); ?>"}'><?php print_r($arr[7]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[8]['Base Price']); ?>","level":"<?php print_r($arr7[8]['Level']); ?>"}'><?php print_r($arr[8]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[9]['Base Price']); ?>","level":"<?php print_r($arr7[9]['Level']); ?>"}'><?php print_r($arr[9]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[10]['Base Price']); ?>","level":"<?php print_r($arr7[10]['Level']); ?>"}'><?php print_r($arr[10]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[11]['Base Price']); ?>","level":"<?php print_r($arr7[11]['Level']); ?>"}'><?php print_r($arr[11]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[12]['Base Price']); ?>","level":"<?php print_r($arr7[12]['Level']); ?>"}'><?php print_r($arr[12]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[13]['Base Price']); ?>","level":"<?php print_r($arr7[13]['Level']); ?>"}'><?php print_r($arr[13]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[14]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[14]['Base Price']); ?>","level":"<?php print_r($arr7[14]['Level']); ?>"}'><?php print_r($arr[14]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[15]['Base Price']); ?>","level":"<?php print_r($arr7[15]['Level']); ?>"}'><?php print_r($arr[15]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[16]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[16]['Base Price']); ?>","level":"<?php print_r($arr7[16]['Level']); ?>"}'><?php print_r($arr[16]['Digital Ops']); ?>    
      <option value='{"platform":"<?php print_r($arr[17]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[17]['Base Price']); ?>","level":"<?php print_r($arr7[17]['Level']); ?>"}'><?php print_r($arr[17]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[18]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[18]['Base Price']); ?>","level":"<?php print_r($arr7[18]['Level']); ?>"}'><?php print_r($arr[18]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[19]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[19]['Base Price']); ?>","level":"<?php print_r($arr7[19]['Level']); ?>"}'><?php print_r($arr[19]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[20]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[20]['Base Price']); ?>","level":"<?php print_r($arr7[20]['Level']); ?>"}'><?php print_r($arr[20]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[21]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[21]['Base Price']); ?>","level":"<?php print_r($arr7[21]['Level']); ?>"}'><?php print_r($arr[21]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[22]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[22]['Base Price']); ?>","level":"<?php print_r($arr7[22]['Level']); ?>"}'><?php print_r($arr[22]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[25]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[25]['Base Price']); ?>","level":"<?php print_r($arr7[25]['Level']); ?>"}'><?php print_r($arr[25]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[26]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[26]['Base Price']); ?>","level":"<?php print_r($arr7[26]['Level']); ?>"}'><?php print_r($arr[26]['Digital Ops']); ?>    
      <option value='{"platform":"<?php print_r($arr[27]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[27]['Base Price']); ?>","level":"<?php print_r($arr7[27]['Level']); ?>"}'><?php print_r($arr[27]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[28]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[28]['Base Price']); ?>","level":"<?php print_r($arr7[28]['Level']); ?>"}'><?php print_r($arr[28]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[29]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[29]['Base Price']); ?>","level":"<?php print_r($arr7[29]['Level']); ?>"}'><?php print_r($arr[29]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[30]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[30]['Base Price']); ?>","level":"<?php print_r($arr7[30]['Level']); ?>"}'><?php print_r($arr[30]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[31]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[31]['Base Price']); ?>","level":"<?php print_r($arr7[31]['Level']); ?>"}'><?php print_r($arr[31]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[32]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[32]['Base Price']); ?>","level":"<?php print_r($arr7[32]['Level']); ?>"}'><?php print_r($arr[32]['Digital Ops']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE digopssection --> 
<div id = "digopsselect"></div>
<button style="display:none;" id = "loopingbutton" onclick="showMoreDigops()">Next</button>  
<br />
<div style="display:none;" id = "moredigops">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "nextbutton8" onclick="showLooper()">Yes</button>  
        <button id = "nextbutton7" onclick="showDigAds()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "looper">
<div class="row">
    <label>Add More Digital Ops</label> <br />
      <select id="digops2">
       <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[0]['Base Price']); ?>","level":"<?php print_r($arr7[0]['Level']); ?>"}'><?php print_r($arr[0]['Digital Ops']); ?>
            <option value='{"platform":"<?php print_r($arr[23]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[23]['Base Price']); ?>","level":"<?php print_r($arr7[23]['Level']); ?>"}'><?php print_r($arr[23]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[24]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[24]['Base Price']); ?>","level":"<?php print_r($arr7[24]['Level']); ?>"}'><?php print_r($arr[24]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[1]['Base Price']); ?>","level":"<?php print_r($arr7[1]['Level']); ?>"}'><?php print_r($arr[1]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[2]['Base Price']); ?>","level":"<?php print_r($arr7[2]['Level']); ?>"}'><?php print_r($arr[2]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[3]['Base Price']); ?>","level":"<?php print_r($arr7[3]['Level']); ?>"}'><?php print_r($arr[3]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[4]['Base Price']); ?>","level":"<?php print_r($arr7[4]['Level']); ?>"}'><?php print_r($arr[4]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[5]['Base Price']); ?>","level":"<?php print_r($arr7[5]['Level']); ?>"}'><?php print_r($arr[5]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[6]['Base Price']); ?>","level":"<?php print_r($arr7[6]['Level']); ?>"}'><?php print_r($arr[6]['Digital Ops']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[7]['Base Price']); ?>","level":"<?php print_r($arr7[7]['Level']); ?>"}'><?php print_r($arr[7]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[8]['Base Price']); ?>","level":"<?php print_r($arr7[8]['Level']); ?>"}'><?php print_r($arr[8]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[9]['Base Price']); ?>","level":"<?php print_r($arr7[9]['Level']); ?>"}'><?php print_r($arr[9]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[10]['Base Price']); ?>","level":"<?php print_r($arr7[10]['Level']); ?>"}'><?php print_r($arr[10]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[11]['Base Price']); ?>","level":"<?php print_r($arr7[11]['Level']); ?>"}'><?php print_r($arr[11]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[12]['Base Price']); ?>","level":"<?php print_r($arr7[12]['Level']); ?>"}'><?php print_r($arr[12]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[13]['Base Price']); ?>","level":"<?php print_r($arr7[13]['Level']); ?>"}'><?php print_r($arr[13]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[14]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[14]['Base Price']); ?>","level":"<?php print_r($arr7[14]['Level']); ?>"}'><?php print_r($arr[14]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[15]['Base Price']); ?>","level":"<?php print_r($arr7[15]['Level']); ?>"}'><?php print_r($arr[15]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[16]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[16]['Base Price']); ?>","level":"<?php print_r($arr7[16]['Level']); ?>"}'><?php print_r($arr[16]['Digital Ops']); ?>    
      <option value='{"platform":"<?php print_r($arr[17]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[17]['Base Price']); ?>","level":"<?php print_r($arr7[17]['Level']); ?>"}'><?php print_r($arr[17]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[18]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[18]['Base Price']); ?>","level":"<?php print_r($arr7[18]['Level']); ?>"}'><?php print_r($arr[18]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[19]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[19]['Base Price']); ?>","level":"<?php print_r($arr7[19]['Level']); ?>"}'><?php print_r($arr[19]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[20]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[20]['Base Price']); ?>","level":"<?php print_r($arr7[20]['Level']); ?>"}'><?php print_r($arr[20]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[21]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[21]['Base Price']); ?>","level":"<?php print_r($arr7[21]['Level']); ?>"}'><?php print_r($arr[21]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[22]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[22]['Base Price']); ?>","level":"<?php print_r($arr7[22]['Level']); ?>"}'><?php print_r($arr[22]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[25]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[25]['Base Price']); ?>","level":"<?php print_r($arr7[25]['Level']); ?>"}'><?php print_r($arr[25]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[26]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[26]['Base Price']); ?>","level":"<?php print_r($arr7[26]['Level']); ?>"}'><?php print_r($arr[26]['Digital Ops']); ?>    
      <option value='{"platform":"<?php print_r($arr[27]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[27]['Base Price']); ?>","level":"<?php print_r($arr7[27]['Level']); ?>"}'><?php print_r($arr[27]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[28]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[28]['Base Price']); ?>","level":"<?php print_r($arr7[28]['Level']); ?>"}'><?php print_r($arr[28]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[29]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[29]['Base Price']); ?>","level":"<?php print_r($arr7[29]['Level']); ?>"}'><?php print_r($arr[29]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[30]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[30]['Base Price']); ?>","level":"<?php print_r($arr7[30]['Level']); ?>"}'><?php print_r($arr[30]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[31]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[31]['Base Price']); ?>","level":"<?php print_r($arr7[31]['Level']); ?>"}'><?php print_r($arr[31]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[32]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[32]['Base Price']); ?>","level":"<?php print_r($arr7[32]['Level']); ?>"}'><?php print_r($arr[32]['Digital Ops']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE looper --> 
<div id = "digopsselect2"></div>
<button style="display:none;" id = "loopingbutton2" onclick="showMoreDigops2()">Next</button>  
<br />
<div style="display:none;" id = "moredigops2">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "nextbutton11" onclick="showLooper2()">Yes</button>  
        <button id = "nextbutton12" onclick="showDigAds()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "looper2">
<div class="row">
    <label>Add More Digital Ops</label> <br />
      <select id="digops3">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[0]['Base Price']); ?>","level":"<?php print_r($arr7[0]['Level']); ?>"}'><?php print_r($arr[0]['Digital Ops']); ?>
            <option value='{"platform":"<?php print_r($arr[23]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[23]['Base Price']); ?>","level":"<?php print_r($arr7[23]['Level']); ?>"}'><?php print_r($arr[23]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[24]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[24]['Base Price']); ?>","level":"<?php print_r($arr7[24]['Level']); ?>"}'><?php print_r($arr[24]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[1]['Base Price']); ?>","level":"<?php print_r($arr7[1]['Level']); ?>"}'><?php print_r($arr[1]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[2]['Base Price']); ?>","level":"<?php print_r($arr7[2]['Level']); ?>"}'><?php print_r($arr[2]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[3]['Base Price']); ?>","level":"<?php print_r($arr7[3]['Level']); ?>"}'><?php print_r($arr[3]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[4]['Base Price']); ?>","level":"<?php print_r($arr7[4]['Level']); ?>"}'><?php print_r($arr[4]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[5]['Base Price']); ?>","level":"<?php print_r($arr7[5]['Level']); ?>"}'><?php print_r($arr[5]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[6]['Base Price']); ?>","level":"<?php print_r($arr7[6]['Level']); ?>"}'><?php print_r($arr[6]['Digital Ops']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[7]['Base Price']); ?>","level":"<?php print_r($arr7[7]['Level']); ?>"}'><?php print_r($arr[7]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[8]['Base Price']); ?>","level":"<?php print_r($arr7[8]['Level']); ?>"}'><?php print_r($arr[8]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[9]['Base Price']); ?>","level":"<?php print_r($arr7[9]['Level']); ?>"}'><?php print_r($arr[9]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[10]['Base Price']); ?>","level":"<?php print_r($arr7[10]['Level']); ?>"}'><?php print_r($arr[10]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[11]['Base Price']); ?>","level":"<?php print_r($arr7[11]['Level']); ?>"}'><?php print_r($arr[11]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[12]['Base Price']); ?>","level":"<?php print_r($arr7[12]['Level']); ?>"}'><?php print_r($arr[12]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[13]['Base Price']); ?>","level":"<?php print_r($arr7[13]['Level']); ?>"}'><?php print_r($arr[13]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[14]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[14]['Base Price']); ?>","level":"<?php print_r($arr7[14]['Level']); ?>"}'><?php print_r($arr[14]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[15]['Base Price']); ?>","level":"<?php print_r($arr7[15]['Level']); ?>"}'><?php print_r($arr[15]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[16]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[16]['Base Price']); ?>","level":"<?php print_r($arr7[16]['Level']); ?>"}'><?php print_r($arr[16]['Digital Ops']); ?>    
      <option value='{"platform":"<?php print_r($arr[17]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[17]['Base Price']); ?>","level":"<?php print_r($arr7[17]['Level']); ?>"}'><?php print_r($arr[17]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[18]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[18]['Base Price']); ?>","level":"<?php print_r($arr7[18]['Level']); ?>"}'><?php print_r($arr[18]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[19]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[19]['Base Price']); ?>","level":"<?php print_r($arr7[19]['Level']); ?>"}'><?php print_r($arr[19]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[20]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[20]['Base Price']); ?>","level":"<?php print_r($arr7[20]['Level']); ?>"}'><?php print_r($arr[20]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[21]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[21]['Base Price']); ?>","level":"<?php print_r($arr7[21]['Level']); ?>"}'><?php print_r($arr[21]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[22]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[22]['Base Price']); ?>","level":"<?php print_r($arr7[22]['Level']); ?>"}'><?php print_r($arr[22]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[25]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[25]['Base Price']); ?>","level":"<?php print_r($arr7[25]['Level']); ?>"}'><?php print_r($arr[25]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[26]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[26]['Base Price']); ?>","level":"<?php print_r($arr7[26]['Level']); ?>"}'><?php print_r($arr[26]['Digital Ops']); ?>    
      <option value='{"platform":"<?php print_r($arr[27]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[27]['Base Price']); ?>","level":"<?php print_r($arr7[27]['Level']); ?>"}'><?php print_r($arr[27]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[28]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[28]['Base Price']); ?>","level":"<?php print_r($arr7[28]['Level']); ?>"}'><?php print_r($arr[28]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[29]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[29]['Base Price']); ?>","level":"<?php print_r($arr7[29]['Level']); ?>"}'><?php print_r($arr[29]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[30]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[30]['Base Price']); ?>","level":"<?php print_r($arr7[30]['Level']); ?>"}'><?php print_r($arr[30]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[31]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[31]['Base Price']); ?>","level":"<?php print_r($arr7[31]['Level']); ?>"}'><?php print_r($arr[31]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[32]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[32]['Base Price']); ?>","level":"<?php print_r($arr7[32]['Level']); ?>"}'><?php print_r($arr[32]['Digital Ops']); ?>
    </select>
</div> <!-- CLOSE ROW -->
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p> 
</div> <!-- CLOSE looper --> 
<div id = "digopsselect3"></div>
<button style="display:none;" id = "loopingbutton3" onclick="showMoreDigops3()">Next</button>  
<br />
<div style="display:none;" id = "moredigops3">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "nextbutton8" onclick="showLooper3()">Yes</button>  
        <button id = "nextbutton7" onclick="showDigAds()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "looper3">
<div class="row">
    <label>Add More Digital Ops</label> <br />
      <select id="digops4">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[0]['Base Price']); ?>","level":"<?php print_r($arr7[0]['Level']); ?>"}'><?php print_r($arr[0]['Digital Ops']); ?>
            <option value='{"platform":"<?php print_r($arr[23]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[23]['Base Price']); ?>","level":"<?php print_r($arr7[23]['Level']); ?>"}'><?php print_r($arr[23]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[24]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[24]['Base Price']); ?>","level":"<?php print_r($arr7[24]['Level']); ?>"}'><?php print_r($arr[24]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[1]['Base Price']); ?>","level":"<?php print_r($arr7[1]['Level']); ?>"}'><?php print_r($arr[1]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[2]['Base Price']); ?>","level":"<?php print_r($arr7[2]['Level']); ?>"}'><?php print_r($arr[2]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[3]['Base Price']); ?>","level":"<?php print_r($arr7[3]['Level']); ?>"}'><?php print_r($arr[3]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[4]['Base Price']); ?>","level":"<?php print_r($arr7[4]['Level']); ?>"}'><?php print_r($arr[4]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[5]['Base Price']); ?>","level":"<?php print_r($arr7[5]['Level']); ?>"}'><?php print_r($arr[5]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[6]['Base Price']); ?>","level":"<?php print_r($arr7[6]['Level']); ?>"}'><?php print_r($arr[6]['Digital Ops']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[7]['Base Price']); ?>","level":"<?php print_r($arr7[7]['Level']); ?>"}'><?php print_r($arr[7]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[8]['Base Price']); ?>","level":"<?php print_r($arr7[8]['Level']); ?>"}'><?php print_r($arr[8]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[9]['Base Price']); ?>","level":"<?php print_r($arr7[9]['Level']); ?>"}'><?php print_r($arr[9]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[10]['Base Price']); ?>","level":"<?php print_r($arr7[10]['Level']); ?>"}'><?php print_r($arr[10]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[11]['Base Price']); ?>","level":"<?php print_r($arr7[11]['Level']); ?>"}'><?php print_r($arr[11]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[12]['Base Price']); ?>","level":"<?php print_r($arr7[12]['Level']); ?>"}'><?php print_r($arr[12]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[13]['Base Price']); ?>","level":"<?php print_r($arr7[13]['Level']); ?>"}'><?php print_r($arr[13]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[14]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[14]['Base Price']); ?>","level":"<?php print_r($arr7[14]['Level']); ?>"}'><?php print_r($arr[14]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[15]['Base Price']); ?>","level":"<?php print_r($arr7[15]['Level']); ?>"}'><?php print_r($arr[15]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[16]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[16]['Base Price']); ?>","level":"<?php print_r($arr7[16]['Level']); ?>"}'><?php print_r($arr[16]['Digital Ops']); ?>    
      <option value='{"platform":"<?php print_r($arr[17]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[17]['Base Price']); ?>","level":"<?php print_r($arr7[17]['Level']); ?>"}'><?php print_r($arr[17]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[18]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[18]['Base Price']); ?>","level":"<?php print_r($arr7[18]['Level']); ?>"}'><?php print_r($arr[18]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[19]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[19]['Base Price']); ?>","level":"<?php print_r($arr7[19]['Level']); ?>"}'><?php print_r($arr[19]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[20]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[20]['Base Price']); ?>","level":"<?php print_r($arr7[20]['Level']); ?>"}'><?php print_r($arr[20]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[21]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[21]['Base Price']); ?>","level":"<?php print_r($arr7[21]['Level']); ?>"}'><?php print_r($arr[21]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[22]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[22]['Base Price']); ?>","level":"<?php print_r($arr7[22]['Level']); ?>"}'><?php print_r($arr[22]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[25]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[25]['Base Price']); ?>","level":"<?php print_r($arr7[25]['Level']); ?>"}'><?php print_r($arr[25]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[26]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[26]['Base Price']); ?>","level":"<?php print_r($arr7[26]['Level']); ?>"}'><?php print_r($arr[26]['Digital Ops']); ?>    
      <option value='{"platform":"<?php print_r($arr[27]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[27]['Base Price']); ?>","level":"<?php print_r($arr7[27]['Level']); ?>"}'><?php print_r($arr[27]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[28]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[28]['Base Price']); ?>","level":"<?php print_r($arr7[28]['Level']); ?>"}'><?php print_r($arr[28]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[29]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[29]['Base Price']); ?>","level":"<?php print_r($arr7[29]['Level']); ?>"}'><?php print_r($arr[29]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[30]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[30]['Base Price']); ?>","level":"<?php print_r($arr7[30]['Level']); ?>"}'><?php print_r($arr[30]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[31]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[31]['Base Price']); ?>","level":"<?php print_r($arr7[31]['Level']); ?>"}'><?php print_r($arr[31]['Digital Ops']); ?>
      <option value='{"platform":"<?php print_r($arr[32]['Digital Ops']); ?>","base_price":"<?php print_r($arr7[32]['Base Price']); ?>","level":"<?php print_r($arr7[32]['Level']); ?>"}'><?php print_r($arr[32]['Digital Ops']); ?>
    </select>
</div><!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div><!-- CLOSE looper4 -->
<div id = "digopsselect4"></div>
<button style="display:none;" id = "nextbutton13" onclick="showDigAds()">Next</button>  
<br />
<div style="display:none;" id = "digadssection">
<div class="row">
    <label>Digital Ads</label> <br />
    <p class = "tab">What system(s) do you use to place and manage paid digital advertising?</p>
      <select id="digads">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[70]['Base Price']); ?>","level":"<?php print_r($arr2[70]['Level']); ?>"}'><?php print_r($arr[0]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[71]['Base Price']); ?>","level":"<?php print_r($arr2[71]['Level']); ?>"}'><?php print_r($arr[1]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[72]['Base Price']); ?>","level":"<?php print_r($arr2[72]['Level']); ?>"}'><?php print_r($arr[2]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[73]['Base Price']); ?>","level":"<?php print_r($arr2[73]['Level']); ?>"}'><?php print_r($arr[3]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[74]['Base Price']); ?>","level":"<?php print_r($arr2[74]['Level']); ?>"}'><?php print_r($arr[4]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[75]['Base Price']); ?>","level":"<?php print_r($arr2[75]['Level']); ?>"}'><?php print_r($arr[5]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[76]['Base Price']); ?>","level":"<?php print_r($arr2[76]['Level']); ?>"}'><?php print_r($arr[6]['Digital Ads']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[77]['Base Price']); ?>","level":"<?php print_r($arr2[77]['Level']); ?>"}'><?php print_r($arr[7]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[78]['Base Price']); ?>","level":"<?php print_r($arr2[78]['Level']); ?>"}'><?php print_r($arr[8]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[79]['Base Price']); ?>","level":"<?php print_r($arr2[79]['Level']); ?>"}'><?php print_r($arr[9]['Digital Ads']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE digadssection -->
<div id = "digadsselect"></div>
<button style="display:none;" id = "loop1" onclick="showMoreDigAds()">Next</button>  
<br />
<div style="display:none;" id = "moredigads">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "next1" onclick="showAdsLooper()">Yes</button>  
        <button id = "next2" onclick="showSocial()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "digadssection2">
<div class="row">
    <label>Add More Digital Ads</label> <br />
      <select id="digads2">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[70]['Base Price']); ?>","level":"<?php print_r($arr2[70]['Level']); ?>"}'><?php print_r($arr[0]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[71]['Base Price']); ?>","level":"<?php print_r($arr2[71]['Level']); ?>"}'><?php print_r($arr[1]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[72]['Base Price']); ?>","level":"<?php print_r($arr2[72]['Level']); ?>"}'><?php print_r($arr[2]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[73]['Base Price']); ?>","level":"<?php print_r($arr2[73]['Level']); ?>"}'><?php print_r($arr[3]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[74]['Base Price']); ?>","level":"<?php print_r($arr2[74]['Level']); ?>"}'><?php print_r($arr[4]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[75]['Base Price']); ?>","level":"<?php print_r($arr2[75]['Level']); ?>"}'><?php print_r($arr[5]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[76]['Base Price']); ?>","level":"<?php print_r($arr2[76]['Level']); ?>"}'><?php print_r($arr[6]['Digital Ads']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[77]['Base Price']); ?>","level":"<?php print_r($arr2[77]['Level']); ?>"}'><?php print_r($arr[7]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[78]['Base Price']); ?>","level":"<?php print_r($arr2[78]['Level']); ?>"}'><?php print_r($arr[8]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[79]['Base Price']); ?>","level":"<?php print_r($arr2[79]['Level']); ?>"}'><?php print_r($arr[9]['Digital Ads']); ?>
    </select>
</div> <!-- CLOSE ROW -->
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p> 
</div> <!-- CLOSE adslooper -->
<div id = "digadsselect2"></div>
<button style="display:none;" id = "loop2" onclick="showMoreDigAds2()">Next</button>  
<br />
<div style="display:none;" id = "moredigads2">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "next1" onclick="showAdsLooper2()">Yes</button>  
        <button id = "next2" onclick="showSocial()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "digadssection3">
<div class="row">
    <label>Add More Digital Ads</label> <br />
      <select id="digads3">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[70]['Base Price']); ?>","level":"<?php print_r($arr2[70]['Level']); ?>"}'><?php print_r($arr[0]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[71]['Base Price']); ?>","level":"<?php print_r($arr2[71]['Level']); ?>"}'><?php print_r($arr[1]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[72]['Base Price']); ?>","level":"<?php print_r($arr2[72]['Level']); ?>"}'><?php print_r($arr[2]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[73]['Base Price']); ?>","level":"<?php print_r($arr2[73]['Level']); ?>"}'><?php print_r($arr[3]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[74]['Base Price']); ?>","level":"<?php print_r($arr2[74]['Level']); ?>"}'><?php print_r($arr[4]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[75]['Base Price']); ?>","level":"<?php print_r($arr2[75]['Level']); ?>"}'><?php print_r($arr[5]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[76]['Base Price']); ?>","level":"<?php print_r($arr2[76]['Level']); ?>"}'><?php print_r($arr[6]['Digital Ads']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[77]['Base Price']); ?>","level":"<?php print_r($arr2[77]['Level']); ?>"}'><?php print_r($arr[7]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[78]['Base Price']); ?>","level":"<?php print_r($arr2[78]['Level']); ?>"}'><?php print_r($arr[8]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[79]['Base Price']); ?>","level":"<?php print_r($arr2[79]['Level']); ?>"}'><?php print_r($arr[9]['Digital Ads']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p> 
</div> <!-- CLOSE adslooper2 --> 
<div id = "digadsselect3"></div>
<button style="display:none;" id = "loop3" onclick="showMoreDigAds3()">Next</button>  
<br />
<div style="display:none;" id = "moredigads3">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "next1" onclick="showAdsLooper3()">Yes</button>  
        <button id = "next2" onclick="showSocial()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "digadssection4">
<div class="row">
    <label>Add More Digital Ads</label> <br />
      <select id="digads4">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[70]['Base Price']); ?>","level":"<?php print_r($arr2[70]['Level']); ?>"}'><?php print_r($arr[0]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[71]['Base Price']); ?>","level":"<?php print_r($arr2[71]['Level']); ?>"}'><?php print_r($arr[1]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[72]['Base Price']); ?>","level":"<?php print_r($arr2[72]['Level']); ?>"}'><?php print_r($arr[2]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[73]['Base Price']); ?>","level":"<?php print_r($arr2[73]['Level']); ?>"}'><?php print_r($arr[3]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[74]['Base Price']); ?>","level":"<?php print_r($arr2[74]['Level']); ?>"}'><?php print_r($arr[4]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[75]['Base Price']); ?>","level":"<?php print_r($arr2[75]['Level']); ?>"}'><?php print_r($arr[5]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[76]['Base Price']); ?>","level":"<?php print_r($arr2[76]['Level']); ?>"}'><?php print_r($arr[6]['Digital Ads']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[77]['Base Price']); ?>","level":"<?php print_r($arr2[77]['Level']); ?>"}'><?php print_r($arr[7]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[78]['Base Price']); ?>","level":"<?php print_r($arr2[78]['Level']); ?>"}'><?php print_r($arr[8]['Digital Ads']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Digital Ads']); ?>","base_price":"<?php print_r($arr2[79]['Base Price']); ?>","level":"<?php print_r($arr2[79]['Level']); ?>"}'><?php print_r($arr[9]['Digital Ads']); ?>
    </select>
</div> <!-- CLOSE ROW -->
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>  
</div> <!-- CLOSE adslooper3 --> 
<div id = "digadsselect4"></div>
<button style="display:none;" id = "nextsoc" onclick="showSocial()">Next</button>  
<br />
<div style="display:none;" id = "socialsection">
<div class="row">
    <label>Social Channels</label> <br />
    <p class = "tab">What system(s) or platforms do you use for social media and the management of social accounts?</p>
      <select id="social">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Social Channels']); ?>","base_price":"<?php print_r($arr2[35]['Base Price']); ?>","level":"<?php print_r($arr2[35]['Level']); ?>"}'><?php print_r($arr[0]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Social Channels']); ?>","base_price":"<?php print_r($arr2[36]['Base Price']); ?>","level":"<?php print_r($arr2[36]['Level']); ?>"}'><?php print_r($arr[1]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Social Channels']); ?>","base_price":"<?php print_r($arr2[37]['Base Price']); ?>","level":"<?php print_r($arr2[37]['Level']); ?>"}'><?php print_r($arr[2]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Social Channels']); ?>","base_price":"<?php print_r($arr2[38]['Base Price']); ?>","level":"<?php print_r($arr2[38]['Level']); ?>"}'><?php print_r($arr[3]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Social Channels']); ?>","base_price":"<?php print_r($arr2[39]['Base Price']); ?>","level":"<?php print_r($arr2[39]['Level']); ?>"}'><?php print_r($arr[4]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Social Channels']); ?>","base_price":"<?php print_r($arr2[40]['Base Price']); ?>","level":"<?php print_r($arr2[40]['Level']); ?>"}'><?php print_r($arr[5]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Social Channels']); ?>","base_price":"<?php print_r($arr2[41]['Base Price']); ?>","level":"<?php print_r($arr2[41]['Level']); ?>"}'><?php print_r($arr[6]['Social Channels']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Social Channels']); ?>","base_price":"<?php print_r($arr2[42]['Base Price']); ?>","level":"<?php print_r($arr2[42]['Level']); ?>"}'><?php print_r($arr[7]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Social Channels']); ?>","base_price":"<?php print_r($arr2[43]['Base Price']); ?>","level":"<?php print_r($arr2[43]['Level']); ?>"}'><?php print_r($arr[8]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Social Channels']); ?>","base_price":"<?php print_r($arr2[44]['Base Price']); ?>","level":"<?php print_r($arr2[44]['Level']); ?>"}'><?php print_r($arr[9]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Social Channels']); ?>","base_price":"<?php print_r($arr2[45]['Base Price']); ?>","level":"<?php print_r($arr2[45]['Level']); ?>"}'><?php print_r($arr[10]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Social Channels']); ?>","base_price":"<?php print_r($arr2[46]['Base Price']); ?>","level":"<?php print_r($arr2[46]['Level']); ?>"}'><?php print_r($arr[11]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Social Channels']); ?>","base_price":"<?php print_r($arr2[47]['Base Price']); ?>","level":"<?php print_r($arr2[47]['Level']); ?>"}'><?php print_r($arr[12]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Social Channels']); ?>","base_price":"<?php print_r($arr2[48]['Base Price']); ?>","level":"<?php print_r($arr2[48]['Level']); ?>"}'><?php print_r($arr[13]['Social Channels']); ?> 
      <option value='{"platform":"<?php print_r($arr[14]['Social Channels']); ?>","base_price":"<?php print_r($arr2[49]['Base Price']); ?>","level":"<?php print_r($arr2[49]['Level']); ?>"}'><?php print_r($arr[14]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['Social Channels']); ?>","base_price":"<?php print_r($arr2[50]['Base Price']); ?>","level":"<?php print_r($arr2[50]['Level']); ?>"}'><?php print_r($arr[15]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[16]['Social Channels']); ?>","base_price":"<?php print_r($arr2[51]['Base Price']); ?>","level":"<?php print_r($arr2[51]['Level']); ?>"}'><?php print_r($arr[16]['Social Channels']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE socialsection --> 
<div id = "socialselect"></div> 
<button style="display:none;" id = "lp1" onclick="showMoreSocial()">Next</button>  
<br />
<div style="display:none;" id = "moresocial">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "next1" onclick="showSocialLooper()">Yes</button>  
        <button id = "next2" onclick="showCustSvc()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "socialsection2">
<div class="row">
    <label>Add More Social Channels</label> <br />
      <select id="social2">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Social Channels']); ?>","base_price":"<?php print_r($arr2[35]['Base Price']); ?>","level":"<?php print_r($arr2[35]['Level']); ?>"}'><?php print_r($arr[0]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Social Channels']); ?>","base_price":"<?php print_r($arr2[36]['Base Price']); ?>","level":"<?php print_r($arr2[36]['Level']); ?>"}'><?php print_r($arr[1]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Social Channels']); ?>","base_price":"<?php print_r($arr2[37]['Base Price']); ?>","level":"<?php print_r($arr2[37]['Level']); ?>"}'><?php print_r($arr[2]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Social Channels']); ?>","base_price":"<?php print_r($arr2[38]['Base Price']); ?>","level":"<?php print_r($arr2[38]['Level']); ?>"}'><?php print_r($arr[3]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Social Channels']); ?>","base_price":"<?php print_r($arr2[39]['Base Price']); ?>","level":"<?php print_r($arr2[39]['Level']); ?>"}'><?php print_r($arr[4]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Social Channels']); ?>","base_price":"<?php print_r($arr2[40]['Base Price']); ?>","level":"<?php print_r($arr2[40]['Level']); ?>"}'><?php print_r($arr[5]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Social Channels']); ?>","base_price":"<?php print_r($arr2[41]['Base Price']); ?>","level":"<?php print_r($arr2[41]['Level']); ?>"}'><?php print_r($arr[6]['Social Channels']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Social Channels']); ?>","base_price":"<?php print_r($arr2[42]['Base Price']); ?>","level":"<?php print_r($arr2[42]['Level']); ?>"}'><?php print_r($arr[7]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Social Channels']); ?>","base_price":"<?php print_r($arr2[43]['Base Price']); ?>","level":"<?php print_r($arr2[43]['Level']); ?>"}'><?php print_r($arr[8]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Social Channels']); ?>","base_price":"<?php print_r($arr2[44]['Base Price']); ?>","level":"<?php print_r($arr2[44]['Level']); ?>"}'><?php print_r($arr[9]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Social Channels']); ?>","base_price":"<?php print_r($arr2[45]['Base Price']); ?>","level":"<?php print_r($arr2[45]['Level']); ?>"}'><?php print_r($arr[10]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Social Channels']); ?>","base_price":"<?php print_r($arr2[46]['Base Price']); ?>","level":"<?php print_r($arr2[46]['Level']); ?>"}'><?php print_r($arr[11]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Social Channels']); ?>","base_price":"<?php print_r($arr2[47]['Base Price']); ?>","level":"<?php print_r($arr2[47]['Level']); ?>"}'><?php print_r($arr[12]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Social Channels']); ?>","base_price":"<?php print_r($arr2[48]['Base Price']); ?>","level":"<?php print_r($arr2[48]['Level']); ?>"}'><?php print_r($arr[13]['Social Channels']); ?> 
      <option value='{"platform":"<?php print_r($arr[14]['Social Channels']); ?>","base_price":"<?php print_r($arr2[49]['Base Price']); ?>","level":"<?php print_r($arr2[49]['Level']); ?>"}'><?php print_r($arr[14]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['Social Channels']); ?>","base_price":"<?php print_r($arr2[50]['Base Price']); ?>","level":"<?php print_r($arr2[50]['Level']); ?>"}'><?php print_r($arr[15]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[16]['Social Channels']); ?>","base_price":"<?php print_r($arr2[51]['Base Price']); ?>","level":"<?php print_r($arr2[51]['Level']); ?>"}'><?php print_r($arr[16]['Social Channels']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE socialsection2 --> 
<div id = "socialselect2"></div> 
<button style="display:none;" id = "lp2" onclick="showMoreSocial2()">Next</button>  
<br />
<div style="display:none;" id = "moresocial2">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "next1" onclick="showSocialLooper2()">Yes</button>  
        <button id = "next2" onclick="showCustSvc()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "socialsection3"> 
<div class="row">
    <label>Add More Social Channels</label> <br />
      <select id="social3">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Social Channels']); ?>","base_price":"<?php print_r($arr2[35]['Base Price']); ?>","level":"<?php print_r($arr2[35]['Level']); ?>"}'><?php print_r($arr[0]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Social Channels']); ?>","base_price":"<?php print_r($arr2[36]['Base Price']); ?>","level":"<?php print_r($arr2[36]['Level']); ?>"}'><?php print_r($arr[1]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Social Channels']); ?>","base_price":"<?php print_r($arr2[37]['Base Price']); ?>","level":"<?php print_r($arr2[37]['Level']); ?>"}'><?php print_r($arr[2]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Social Channels']); ?>","base_price":"<?php print_r($arr2[38]['Base Price']); ?>","level":"<?php print_r($arr2[38]['Level']); ?>"}'><?php print_r($arr[3]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Social Channels']); ?>","base_price":"<?php print_r($arr2[39]['Base Price']); ?>","level":"<?php print_r($arr2[39]['Level']); ?>"}'><?php print_r($arr[4]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Social Channels']); ?>","base_price":"<?php print_r($arr2[40]['Base Price']); ?>","level":"<?php print_r($arr2[40]['Level']); ?>"}'><?php print_r($arr[5]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Social Channels']); ?>","base_price":"<?php print_r($arr2[41]['Base Price']); ?>","level":"<?php print_r($arr2[41]['Level']); ?>"}'><?php print_r($arr[6]['Social Channels']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Social Channels']); ?>","base_price":"<?php print_r($arr2[42]['Base Price']); ?>","level":"<?php print_r($arr2[42]['Level']); ?>"}'><?php print_r($arr[7]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Social Channels']); ?>","base_price":"<?php print_r($arr2[43]['Base Price']); ?>","level":"<?php print_r($arr2[43]['Level']); ?>"}'><?php print_r($arr[8]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Social Channels']); ?>","base_price":"<?php print_r($arr2[44]['Base Price']); ?>","level":"<?php print_r($arr2[44]['Level']); ?>"}'><?php print_r($arr[9]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Social Channels']); ?>","base_price":"<?php print_r($arr2[45]['Base Price']); ?>","level":"<?php print_r($arr2[45]['Level']); ?>"}'><?php print_r($arr[10]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Social Channels']); ?>","base_price":"<?php print_r($arr2[46]['Base Price']); ?>","level":"<?php print_r($arr2[46]['Level']); ?>"}'><?php print_r($arr[11]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Social Channels']); ?>","base_price":"<?php print_r($arr2[47]['Base Price']); ?>","level":"<?php print_r($arr2[47]['Level']); ?>"}'><?php print_r($arr[12]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Social Channels']); ?>","base_price":"<?php print_r($arr2[48]['Base Price']); ?>","level":"<?php print_r($arr2[48]['Level']); ?>"}'><?php print_r($arr[13]['Social Channels']); ?> 
      <option value='{"platform":"<?php print_r($arr[14]['Social Channels']); ?>","base_price":"<?php print_r($arr2[49]['Base Price']); ?>","level":"<?php print_r($arr2[49]['Level']); ?>"}'><?php print_r($arr[14]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['Social Channels']); ?>","base_price":"<?php print_r($arr2[50]['Base Price']); ?>","level":"<?php print_r($arr2[50]['Level']); ?>"}'><?php print_r($arr[15]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[16]['Social Channels']); ?>","base_price":"<?php print_r($arr2[51]['Base Price']); ?>","level":"<?php print_r($arr2[51]['Level']); ?>"}'><?php print_r($arr[16]['Social Channels']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE socialsection2 --> 
<div id = "socialselect3"></div> 
<button style="display:none;" id = "lp3" onclick="showMoreSocial3()">Next</button>  
<br />
<div style="display:none;" id = "moresocial3">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "next1" onclick="showSocialLooper3()">Yes</button>  
        <button id = "next2" onclick="showCustSvc()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "socialsection4"> 
<div class="row">
    <label>Add More Social Channels</label> <br />
      <select id="social4">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Social Channels']); ?>","base_price":"<?php print_r($arr2[35]['Base Price']); ?>","level":"<?php print_r($arr2[35]['Level']); ?>"}'><?php print_r($arr[0]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Social Channels']); ?>","base_price":"<?php print_r($arr2[36]['Base Price']); ?>","level":"<?php print_r($arr2[36]['Level']); ?>"}'><?php print_r($arr[1]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Social Channels']); ?>","base_price":"<?php print_r($arr2[37]['Base Price']); ?>","level":"<?php print_r($arr2[37]['Level']); ?>"}'><?php print_r($arr[2]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Social Channels']); ?>","base_price":"<?php print_r($arr2[38]['Base Price']); ?>","level":"<?php print_r($arr2[38]['Level']); ?>"}'><?php print_r($arr[3]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Social Channels']); ?>","base_price":"<?php print_r($arr2[39]['Base Price']); ?>","level":"<?php print_r($arr2[39]['Level']); ?>"}'><?php print_r($arr[4]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Social Channels']); ?>","base_price":"<?php print_r($arr2[40]['Base Price']); ?>","level":"<?php print_r($arr2[40]['Level']); ?>"}'><?php print_r($arr[5]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Social Channels']); ?>","base_price":"<?php print_r($arr2[41]['Base Price']); ?>","level":"<?php print_r($arr2[41]['Level']); ?>"}'><?php print_r($arr[6]['Social Channels']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Social Channels']); ?>","base_price":"<?php print_r($arr2[42]['Base Price']); ?>","level":"<?php print_r($arr2[42]['Level']); ?>"}'><?php print_r($arr[7]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Social Channels']); ?>","base_price":"<?php print_r($arr2[43]['Base Price']); ?>","level":"<?php print_r($arr2[43]['Level']); ?>"}'><?php print_r($arr[8]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Social Channels']); ?>","base_price":"<?php print_r($arr2[44]['Base Price']); ?>","level":"<?php print_r($arr2[44]['Level']); ?>"}'><?php print_r($arr[9]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Social Channels']); ?>","base_price":"<?php print_r($arr2[45]['Base Price']); ?>","level":"<?php print_r($arr2[45]['Level']); ?>"}'><?php print_r($arr[10]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Social Channels']); ?>","base_price":"<?php print_r($arr2[46]['Base Price']); ?>","level":"<?php print_r($arr2[46]['Level']); ?>"}'><?php print_r($arr[11]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Social Channels']); ?>","base_price":"<?php print_r($arr2[47]['Base Price']); ?>","level":"<?php print_r($arr2[47]['Level']); ?>"}'><?php print_r($arr[12]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Social Channels']); ?>","base_price":"<?php print_r($arr2[48]['Base Price']); ?>","level":"<?php print_r($arr2[48]['Level']); ?>"}'><?php print_r($arr[13]['Social Channels']); ?> 
      <option value='{"platform":"<?php print_r($arr[14]['Social Channels']); ?>","base_price":"<?php print_r($arr2[49]['Base Price']); ?>","level":"<?php print_r($arr2[49]['Level']); ?>"}'><?php print_r($arr[14]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['Social Channels']); ?>","base_price":"<?php print_r($arr2[50]['Base Price']); ?>","level":"<?php print_r($arr2[50]['Level']); ?>"}'><?php print_r($arr[15]['Social Channels']); ?>
      <option value='{"platform":"<?php print_r($arr[16]['Social Channels']); ?>","base_price":"<?php print_r($arr2[51]['Base Price']); ?>","level":"<?php print_r($arr2[51]['Level']); ?>"}'><?php print_r($arr[16]['Social Channels']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE socialsection3 --> 
<div id = "socialselect4"></div> 
<button style="display:none;" id = "nextcustsvc" onclick="showCustSvc()">Next</button>  
<div style="display:none;" id = "custsvcsection">
<div class="row">
    <label>Customer Service Platforms</label> <br />
    <p class = "tab">Do you use any systems to manage your customer service processes? This includes things like live chat systems on your website.</p>
      <select id="custsvc">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[0]['Base Price']); ?>","level":"<?php print_r($arr12[0]['Level']); ?>"}'><?php print_r($arr[0]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[1]['Base Price']); ?>","level":"<?php print_r($arr12[1]['Level']); ?>"}'><?php print_r($arr[1]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[2]['Base Price']); ?>","level":"<?php print_r($arr12[2]['Level']); ?>"}'><?php print_r($arr[2]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[3]['Base Price']); ?>","level":"<?php print_r($arr12[3]['Level']); ?>"}'><?php print_r($arr[3]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[4]['Base Price']); ?>","level":"<?php print_r($arr12[4]['Level']); ?>"}'><?php print_r($arr[4]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[5]['Base Price']); ?>","level":"<?php print_r($arr12[5]['Level']); ?>"}'><?php print_r($arr[5]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[6]['Base Price']); ?>","level":"<?php print_r($arr12[6]['Level']); ?>"}'><?php print_r($arr[6]['Customer Service/Retention/Support']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[7]['Base Price']); ?>","level":"<?php print_r($arr12[7]['Level']); ?>"}'><?php print_r($arr[7]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[8]['Base Price']); ?>","level":"<?php print_r($arr12[8]['Level']); ?>"}'><?php print_r($arr[8]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[9]['Base Price']); ?>","level":"<?php print_r($arr12[9]['Level']); ?>"}'><?php print_r($arr[9]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[10]['Base Price']); ?>","level":"<?php print_r($arr12[10]['Level']); ?>"}'><?php print_r($arr[10]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[11]['Base Price']); ?>","level":"<?php print_r($arr12[11]['Level']); ?>"}'><?php print_r($arr[11]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[12]['Base Price']); ?>","level":"<?php print_r($arr12[12]['Level']); ?>"}'><?php print_r($arr[12]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[13]['Base Price']); ?>","level":"<?php print_r($arr12[13]['Level']); ?>"}'><?php print_r($arr[13]['Customer Service/Retention/Support']); ?> 
      <option value='{"platform":"<?php print_r($arr[14]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[14]['Base Price']); ?>","level":"<?php print_r($arr12[14]['Level']); ?>"}'><?php print_r($arr[14]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[15]['Base Price']); ?>","level":"<?php print_r($arr12[15]['Level']); ?>"}'><?php print_r($arr[15]['Customer Service/Retention/Support']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE socialsection --> 
<div id = "customersvcselect"></div> 
<button style="display:none;" id = "cp1" onclick="showMoreCustSvc()">Next</button>  
<br />
<div style="display:none;" id = "morecustsvc">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "next1" onclick="showCustSvcLooper()">Yes</button>  
        <button id = "next2" onclick="showCallTrack()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "custsvcsection2">
  <div class="row">
    <label>Additional Customer Service Platforms</label> <br />
      <select id="custsvc2">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[0]['Base Price']); ?>","level":"<?php print_r($arr12[0]['Level']); ?>"}'><?php print_r($arr[0]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[1]['Base Price']); ?>","level":"<?php print_r($arr12[1]['Level']); ?>"}'><?php print_r($arr[1]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[2]['Base Price']); ?>","level":"<?php print_r($arr12[2]['Level']); ?>"}'><?php print_r($arr[2]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[3]['Base Price']); ?>","level":"<?php print_r($arr12[3]['Level']); ?>"}'><?php print_r($arr[3]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[4]['Base Price']); ?>","level":"<?php print_r($arr12[4]['Level']); ?>"}'><?php print_r($arr[4]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[5]['Base Price']); ?>","level":"<?php print_r($arr12[5]['Level']); ?>"}'><?php print_r($arr[5]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[6]['Base Price']); ?>","level":"<?php print_r($arr12[6]['Level']); ?>"}'><?php print_r($arr[6]['Customer Service/Retention/Support']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[7]['Base Price']); ?>","level":"<?php print_r($arr12[7]['Level']); ?>"}'><?php print_r($arr[7]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[8]['Base Price']); ?>","level":"<?php print_r($arr12[8]['Level']); ?>"}'><?php print_r($arr[8]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[9]['Base Price']); ?>","level":"<?php print_r($arr12[9]['Level']); ?>"}'><?php print_r($arr[9]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[10]['Base Price']); ?>","level":"<?php print_r($arr12[10]['Level']); ?>"}'><?php print_r($arr[10]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[11]['Base Price']); ?>","level":"<?php print_r($arr12[11]['Level']); ?>"}'><?php print_r($arr[11]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[12]['Base Price']); ?>","level":"<?php print_r($arr12[12]['Level']); ?>"}'><?php print_r($arr[12]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[13]['Base Price']); ?>","level":"<?php print_r($arr12[13]['Level']); ?>"}'><?php print_r($arr[13]['Customer Service/Retention/Support']); ?> 
      <option value='{"platform":"<?php print_r($arr[14]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[14]['Base Price']); ?>","level":"<?php print_r($arr12[14]['Level']); ?>"}'><?php print_r($arr[14]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[15]['Base Price']); ?>","level":"<?php print_r($arr12[15]['Level']); ?>"}'><?php print_r($arr[15]['Customer Service/Retention/Support']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE socialsection --> 
<div id = "customersvcselect2"></div> 
<button style="display:none;" id = "dp1" onclick="showMoreCustSvc2()">Next</button>  
<br />
<div style="display:none;" id = "morecustsvc2">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "next1" onclick="showCustSvcLooper2()">Yes</button>  
        <button id = "next2" onclick="showCallTrack()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "custsvcsection3">
  <div class="row">
    <label>Additional Customer Service Platforms</label> <br />
      <select id="custsvc3">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[0]['Base Price']); ?>","level":"<?php print_r($arr12[0]['Level']); ?>"}'><?php print_r($arr[0]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[1]['Base Price']); ?>","level":"<?php print_r($arr12[1]['Level']); ?>"}'><?php print_r($arr[1]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[2]['Base Price']); ?>","level":"<?php print_r($arr12[2]['Level']); ?>"}'><?php print_r($arr[2]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[3]['Base Price']); ?>","level":"<?php print_r($arr12[3]['Level']); ?>"}'><?php print_r($arr[3]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[4]['Base Price']); ?>","level":"<?php print_r($arr12[4]['Level']); ?>"}'><?php print_r($arr[4]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[5]['Base Price']); ?>","level":"<?php print_r($arr12[5]['Level']); ?>"}'><?php print_r($arr[5]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[6]['Base Price']); ?>","level":"<?php print_r($arr12[6]['Level']); ?>"}'><?php print_r($arr[6]['Customer Service/Retention/Support']); ?>    
      <option value='{"platform":"<?php print_r($arr[7]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[7]['Base Price']); ?>","level":"<?php print_r($arr12[7]['Level']); ?>"}'><?php print_r($arr[7]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[8]['Base Price']); ?>","level":"<?php print_r($arr12[8]['Level']); ?>"}'><?php print_r($arr[8]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[9]['Base Price']); ?>","level":"<?php print_r($arr12[9]['Level']); ?>"}'><?php print_r($arr[9]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[10]['Base Price']); ?>","level":"<?php print_r($arr12[10]['Level']); ?>"}'><?php print_r($arr[10]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[11]['Base Price']); ?>","level":"<?php print_r($arr12[11]['Level']); ?>"}'><?php print_r($arr[11]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[12]['Base Price']); ?>","level":"<?php print_r($arr12[12]['Level']); ?>"}'><?php print_r($arr[12]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[13]['Base Price']); ?>","level":"<?php print_r($arr12[13]['Level']); ?>"}'><?php print_r($arr[13]['Customer Service/Retention/Support']); ?> 
      <option value='{"platform":"<?php print_r($arr[14]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[14]['Base Price']); ?>","level":"<?php print_r($arr12[14]['Level']); ?>"}'><?php print_r($arr[14]['Customer Service/Retention/Support']); ?>
      <option value='{"platform":"<?php print_r($arr[15]['Customer Service/Retention/Support']); ?>","base_price":"<?php print_r($arr12[15]['Base Price']); ?>","level":"<?php print_r($arr12[15]['Level']); ?>"}'><?php print_r($arr[15]['Customer Service/Retention/Support']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE socialsection3 --> 
<div id = "customersvcselect3"></div> 
<button style="display:none;" id = "callt" onclick="showCallTrack()">Next</button>  
<div style="display:none;" id = "calltrack">
<div class="row">
    <label>Call Tracking</label> <br />
    <p class = "tab">Do you use any call tracking or management systems to gather information on number of calls, effectiveness, or SMS delivery?</p>
      <select id="calltrk">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Call Tracking']); ?>","base_price":"<?php print_r($arr8[0]['Base Price']); ?>","level":"<?php print_r($arr8[0]['Level']); ?>"}'><?php print_r($arr[0]['Call Tracking']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Call Tracking']); ?>","base_price":"<?php print_r($arr8[1]['Base Price']); ?>","level":"<?php print_r($arr8[1]['Level']); ?>"}'><?php print_r($arr[1]['Call Tracking']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Call Tracking']); ?>","base_price":"<?php print_r($arr8[2]['Base Price']); ?>","level":"<?php print_r($arr8[2]['Level']); ?>"}'><?php print_r($arr[2]['Call Tracking']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Call Tracking']); ?>","base_price":"<?php print_r($arr8[3]['Base Price']); ?>","level":"<?php print_r($arr8[3]['Level']); ?>"}'><?php print_r($arr[3]['Call Tracking']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Call Tracking']); ?>","base_price":"<?php print_r($arr8[4]['Base Price']); ?>","level":"<?php print_r($arr8[4]['Level']); ?>"}'><?php print_r($arr[4]['Call Tracking']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Call Tracking']); ?>","base_price":"<?php print_r($arr8[5]['Base Price']); ?>","level":"<?php print_r($arr8[5]['Level']); ?>"}'><?php print_r($arr[5]['Call Tracking']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Call Tracking']); ?>","base_price":"<?php print_r($arr8[6]['Base Price']); ?>","level":"<?php print_r($arr8[6]['Level']); ?>"}'><?php print_r($arr[6]['Call Tracking']); ?> 
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE erpsection --> 
<div id = "calltrackselect"></div>
<button style="display:none;" id = "thisisabutton" onclick="showPm()">Next</button>
<br />
<div style="display:none;" id = "projectmanagement">
<div class="row">
    <label>Project Management System</label> <br />
    <p class = "tab">What system(s) do you use to manage project milestones or assign tasks?</p>
      <select id="projmgmt">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Project Management']); ?>","base_price":"<?php print_r($arr14[0]['Base Price']); ?>","level":"<?php print_r($arr14[0]['Level']); ?>"}'><?php print_r($arr[0]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Project Management']); ?>","base_price":"<?php print_r($arr14[1]['Base Price']); ?>","level":"<?php print_r($arr14[1]['Level']); ?>"}'><?php print_r($arr[1]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Project Management']); ?>","base_price":"<?php print_r($arr14[2]['Base Price']); ?>","level":"<?php print_r($arr14[2]['Level']); ?>"}'><?php print_r($arr[2]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Project Management']); ?>","base_price":"<?php print_r($arr14[3]['Base Price']); ?>","level":"<?php print_r($arr14[3]['Level']); ?>"}'><?php print_r($arr[3]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Project Management']); ?>","base_price":"<?php print_r($arr14[4]['Base Price']); ?>","level":"<?php print_r($arr14[4]['Level']); ?>"}'><?php print_r($arr[4]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Project Management']); ?>","base_price":"<?php print_r($arr14[5]['Base Price']); ?>","level":"<?php print_r($arr14[5]['Level']); ?>"}'><?php print_r($arr[5]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Project Management']); ?>","base_price":"<?php print_r($arr14[6]['Base Price']); ?>","level":"<?php print_r($arr14[6]['Level']); ?>"}'><?php print_r($arr[6]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[7]['Project Management']); ?>","base_price":"<?php print_r($arr14[7]['Base Price']); ?>","level":"<?php print_r($arr14[7]['Level']); ?>"}'><?php print_r($arr[7]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Project Management']); ?>","base_price":"<?php print_r($arr14[8]['Base Price']); ?>","level":"<?php print_r($arr14[8]['Level']); ?>"}'><?php print_r($arr[8]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Project Management']); ?>","base_price":"<?php print_r($arr14[9]['Base Price']); ?>","level":"<?php print_r($arr14[9]['Level']); ?>"}'><?php print_r($arr[9]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Project Management']); ?>","base_price":"<?php print_r($arr14[10]['Base Price']); ?>","level":"<?php print_r($arr14[10]['Level']); ?>"}'><?php print_r($arr[10]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Project Management']); ?>","base_price":"<?php print_r($arr14[11]['Base Price']); ?>","level":"<?php print_r($arr14[11]['Level']); ?>"}'><?php print_r($arr[11]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Project Management']); ?>","base_price":"<?php print_r($arr14[12]['Base Price']); ?>","level":"<?php print_r($arr14[12]['Level']); ?>"}'><?php print_r($arr[12]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Project Management']); ?>","base_price":"<?php print_r($arr14[13]['Base Price']); ?>","level":"<?php print_r($arr14[13]['Level']); ?>"}'><?php print_r($arr[13]['Project Management']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE projectmanagement --> 
<div id = "projectmanagementselect"></div> 
<button style="display:none;" id = "anotherbutton" onclick="showMorePm()">Next</button>  
<br />
<div style="display:none;" id = "moreprojectmanagement">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "next1" onclick="showPmLooper()">Yes</button>  
        <button id = "next2" onclick="showHr()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "projectmanagement2">
<div class="row">
    <label>Additional Project Management System</label> <br />
      <select id="projmgmt2">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Project Management']); ?>","base_price":"<?php print_r($arr14[0]['Base Price']); ?>","level":"<?php print_r($arr14[0]['Level']); ?>"}'><?php print_r($arr[0]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Project Management']); ?>","base_price":"<?php print_r($arr14[1]['Base Price']); ?>","level":"<?php print_r($arr14[1]['Level']); ?>"}'><?php print_r($arr[1]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Project Management']); ?>","base_price":"<?php print_r($arr14[2]['Base Price']); ?>","level":"<?php print_r($arr14[2]['Level']); ?>"}'><?php print_r($arr[2]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Project Management']); ?>","base_price":"<?php print_r($arr14[3]['Base Price']); ?>","level":"<?php print_r($arr14[3]['Level']); ?>"}'><?php print_r($arr[3]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Project Management']); ?>","base_price":"<?php print_r($arr14[4]['Base Price']); ?>","level":"<?php print_r($arr14[4]['Level']); ?>"}'><?php print_r($arr[4]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Project Management']); ?>","base_price":"<?php print_r($arr14[5]['Base Price']); ?>","level":"<?php print_r($arr14[5]['Level']); ?>"}'><?php print_r($arr[5]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Project Management']); ?>","base_price":"<?php print_r($arr14[6]['Base Price']); ?>","level":"<?php print_r($arr14[6]['Level']); ?>"}'><?php print_r($arr[6]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[7]['Project Management']); ?>","base_price":"<?php print_r($arr14[7]['Base Price']); ?>","level":"<?php print_r($arr14[7]['Level']); ?>"}'><?php print_r($arr[7]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Project Management']); ?>","base_price":"<?php print_r($arr14[8]['Base Price']); ?>","level":"<?php print_r($arr14[8]['Level']); ?>"}'><?php print_r($arr[8]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Project Management']); ?>","base_price":"<?php print_r($arr14[9]['Base Price']); ?>","level":"<?php print_r($arr14[9]['Level']); ?>"}'><?php print_r($arr[9]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Project Management']); ?>","base_price":"<?php print_r($arr14[10]['Base Price']); ?>","level":"<?php print_r($arr14[10]['Level']); ?>"}'><?php print_r($arr[10]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Project Management']); ?>","base_price":"<?php print_r($arr14[11]['Base Price']); ?>","level":"<?php print_r($arr14[11]['Level']); ?>"}'><?php print_r($arr[11]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Project Management']); ?>","base_price":"<?php print_r($arr14[12]['Base Price']); ?>","level":"<?php print_r($arr14[12]['Level']); ?>"}'><?php print_r($arr[12]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Project Management']); ?>","base_price":"<?php print_r($arr14[13]['Base Price']); ?>","level":"<?php print_r($arr14[13]['Level']); ?>"}'><?php print_r($arr[13]['Project Management']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE projectmanagement --> 
<div id = "projectmanagementselect2"></div> 
<button style="display:none;" id = "justmorebuttons" onclick="showMorePm2()">Next</button>  
<br />
<div style="display:none;" id = "moreprojectmanagement2">
<div class="row">
   <p>
      <label>
        <span>I use an additional system</span>
        <button id = "next1" onclick="showPmLooper2()">Yes</button>  
        <button id = "next2" onclick="showHr()">No</button>  
      </label>
   </p>
</div> <!-- CLOSE ROW -->
</div> <!-- CLOSE moredigops -->   
<div style="display:none;" id = "projectmanagement3">
<div class="row">
    <label>Additional Project Management System</label> <br />
      <select id="projmgmt3">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['Project Management']); ?>","base_price":"<?php print_r($arr14[0]['Base Price']); ?>","level":"<?php print_r($arr14[0]['Level']); ?>"}'><?php print_r($arr[0]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['Project Management']); ?>","base_price":"<?php print_r($arr14[1]['Base Price']); ?>","level":"<?php print_r($arr14[1]['Level']); ?>"}'><?php print_r($arr[1]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['Project Management']); ?>","base_price":"<?php print_r($arr14[2]['Base Price']); ?>","level":"<?php print_r($arr14[2]['Level']); ?>"}'><?php print_r($arr[2]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['Project Management']); ?>","base_price":"<?php print_r($arr14[3]['Base Price']); ?>","level":"<?php print_r($arr14[3]['Level']); ?>"}'><?php print_r($arr[3]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['Project Management']); ?>","base_price":"<?php print_r($arr14[4]['Base Price']); ?>","level":"<?php print_r($arr14[4]['Level']); ?>"}'><?php print_r($arr[4]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['Project Management']); ?>","base_price":"<?php print_r($arr14[5]['Base Price']); ?>","level":"<?php print_r($arr14[5]['Level']); ?>"}'><?php print_r($arr[5]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['Project Management']); ?>","base_price":"<?php print_r($arr14[6]['Base Price']); ?>","level":"<?php print_r($arr14[6]['Level']); ?>"}'><?php print_r($arr[6]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[7]['Project Management']); ?>","base_price":"<?php print_r($arr14[7]['Base Price']); ?>","level":"<?php print_r($arr14[7]['Level']); ?>"}'><?php print_r($arr[7]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[8]['Project Management']); ?>","base_price":"<?php print_r($arr14[8]['Base Price']); ?>","level":"<?php print_r($arr14[8]['Level']); ?>"}'><?php print_r($arr[8]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[9]['Project Management']); ?>","base_price":"<?php print_r($arr14[9]['Base Price']); ?>","level":"<?php print_r($arr14[9]['Level']); ?>"}'><?php print_r($arr[9]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[10]['Project Management']); ?>","base_price":"<?php print_r($arr14[10]['Base Price']); ?>","level":"<?php print_r($arr14[10]['Level']); ?>"}'><?php print_r($arr[10]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[11]['Project Management']); ?>","base_price":"<?php print_r($arr14[11]['Base Price']); ?>","level":"<?php print_r($arr14[11]['Level']); ?>"}'><?php print_r($arr[11]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[12]['Project Management']); ?>","base_price":"<?php print_r($arr14[12]['Base Price']); ?>","level":"<?php print_r($arr14[12]['Level']); ?>"}'><?php print_r($arr[12]['Project Management']); ?>
      <option value='{"platform":"<?php print_r($arr[13]['Project Management']); ?>","base_price":"<?php print_r($arr14[13]['Base Price']); ?>","level":"<?php print_r($arr14[13]['Level']); ?>"}'><?php print_r($arr[13]['Project Management']); ?>
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
</div> <!-- CLOSE erpsection --> 
<div id = "projectmanagementselect3"></div>
<button style="display:none;" id = "hrbutton" onclick="showHr()">Next</button>
<br />
<div style="display:none;" id = "humanresourcesandsuch">
<div class="row">
    <label>HR or Time Management</label> <br />
    <p class = "tab">Do you use any systems to assist in HR or time management and reporting?</p>
      <select id="hrtime">
      <option value="" disabled selected>Choose your option</option>
      <option value='{"platform":"<?php print_r($arr[0]['People Management']); ?>","base_price":"<?php print_r($arr13[0]['Base Price']); ?>","level":"<?php print_r($arr13[0]['Level']); ?>"}'><?php print_r($arr[0]['People Management']); ?>
      <option value='{"platform":"<?php print_r($arr[1]['People Management']); ?>","base_price":"<?php print_r($arr13[1]['Base Price']); ?>","level":"<?php print_r($arr13[1]['Level']); ?>"}'><?php print_r($arr[1]['People Management']); ?>
      <option value='{"platform":"<?php print_r($arr[2]['People Management']); ?>","base_price":"<?php print_r($arr13[2]['Base Price']); ?>","level":"<?php print_r($arr13[2]['Level']); ?>"}'><?php print_r($arr[2]['People Management']); ?>
      <option value='{"platform":"<?php print_r($arr[3]['People Management']); ?>","base_price":"<?php print_r($arr13[3]['Base Price']); ?>","level":"<?php print_r($arr13[3]['Level']); ?>"}'><?php print_r($arr[3]['People Management']); ?>
      <option value='{"platform":"<?php print_r($arr[4]['People Management']); ?>","base_price":"<?php print_r($arr13[4]['Base Price']); ?>","level":"<?php print_r($arr13[4]['Level']); ?>"}'><?php print_r($arr[4]['People Management']); ?>
      <option value='{"platform":"<?php print_r($arr[5]['People Management']); ?>","base_price":"<?php print_r($arr13[5]['Base Price']); ?>","level":"<?php print_r($arr13[5]['Level']); ?>"}'><?php print_r($arr[5]['People Management']); ?>
      <option value='{"platform":"<?php print_r($arr[6]['People Management']); ?>","base_price":"<?php print_r($arr13[6]['Base Price']); ?>","level":"<?php print_r($arr13[6]['Level']); ?>"}'><?php print_r($arr[6]['People Management']); ?> 
    </select>
</div> <!-- CLOSE ROW --> 
<p>Please review your selection below - if you are ready to move on to the system selection, click “Next”</p>
<button style="display:none;" id = "hrlast" onclick="showEnd()">Next</button>
</div> <!-- CLOSE humanresourcesandsuch --> 
<div id = "peoplemanagementselect"></div>
    <p>
      <label>
        <input type="checkbox" />
        <span>I use systems not included in this tool.</span>
      </label>
    </p>
<br />
<div style="display:none;" id = "theend">
<p>Congratulations you made it to the end! Now all that’s left is to click this “Get My Estimate” button - the system will calculate all your selections above and provide an estimate of what an AuVisMDS Core implementation would cost.</p>
<p>Please remember this is not necessarily a final number. The next step will be to discuss with an AuVisMDS representative your specific needs. We’ll reach out to you after you submit!</p>
<button class = "tab" id = "price" onclick="showPrice()">Get My Estimate</button>
  <div style="display:none;" id="showPrice">
      <h6>Estimated Price</h6>
      <div id = "grand_total"></div>
  </div>
</div> <!-- THE END --> 
       <footer class="page-footer grey lighten-3">
          <div class="container">
          <img width="100" height="100" src="https://www.auvis.com/wp-content/uploads/2020/04/AuVisLogoWebReady-300x300.png" class="image wp-image-446  attachment-250x250 size-250x250" alt="Auvis Transparent Logo" loading="lazy" style="max-width: 100%; height: auto;" data-pagespeed-url-hash="515337349">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="blue-text">AuVis</h5>
                 <ul>
                  <li><a href="https://www.auvis.com/about-us/">About Us</a></li>
                  <li><a href="#exampledashboards" data-et-has-event-already="true">Example Dashboards</a></li>
                  <li><a href="#pricing" data-et-has-event-already="true">Pricing</a></li>
                  <li><a href="#contact" data-et-has-event-already="true">Contact</a></li>
                  <li><a href="https://meetings.hubspot.com/liz147/molecule-demo">Schedule A Demo</a></li>
                </ul>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="blue-text">Contact</h5>
                <ul>
                  <li><span class = "blue-text">20 S. Sarah St.</span></li>
                  <li><span class = "blue-text">St. Louis, MO 63108</span></li>
                  <li></li><br>
                  <li><a href="mailto:info@auvis.com">Email Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <p><span class = "blue-text">Copyright &copy; <script>document.write(new Date().getFullYear())</script> AuVis</span><p>
            </div>
          </div>
        </footer>
<?php include '../src/scripts.html'; ?>
  </body>
</html>






