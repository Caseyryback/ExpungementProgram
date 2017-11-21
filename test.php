<head>
    <? require_once($_SESSION['fileDirectory']."_includes/header.php"); ?>
  <title>IVYT Expungement Program</title>
<!-- *********************************
      INSERT PAGE SPECIFIC CSS FILE
**************************************-->
<link rel="stylesheet" href="<? echo $_SESSION['fileDirectory']; ?>_css/services.css">
</head>
<body>
<? require_once($_SESSION['fileDirectory']."_includes/navbar.php"); ?>
<div id="mainContainer" class="container-fluid"> <!-- gives main bg color, extends to screen width -->
	<div id="contentContainer" class="container pt-1"><!-- contains all content -->
         <div class="articleSTATUTORY REQUIREMENTS">
            
             
             <p>Total:
<input id= "totalScore" type="text" name="sum">
            
            <script type="text/javascript" src="test.js"></script>
                 
        <h3>first results</h3>
             <p>If you scored 5 points then you may have answered with something that makes you ineligible for expungment.
             Please call XXXXX or visit XXXXXX for a proper assesment.</p>
    
        <h3>second results</h3>
             <p>if you scored 10 points you may be eligible for expungment! your requirements are XXXXX 
             please fill out this form and go to this page for more information on contacting us! </p>
    </div><!-- content container -->
</div><!-- main page container -->

<? require_once($_SESSION['fileDirectory'].'_includes/bootstrapDependencies.php'); ?>
<script src="<? echo $_SESSION['fileDirectory'] ?>_script/index.js"></script>
<? require_once($_SESSION['fileDirectory'].'_includes/footer.php'); ?>