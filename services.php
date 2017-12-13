<head>
    <? require_once($_SESSION['fileDirectory']."_includes/header.php"); ?>
  <title>IVYT Expungement Program</title>
<!-- *********************************
      INSERT PAGE SPECIFIC CSS FILE
**************************************-->
<link rel="stylesheet" href="<? echo $_SESSION['fileDirectory']; ?>_css/survey.css">
</head>
<body>
<? require_once($_SESSION['fileDirectory']."_includes/navbar.php"); ?>
<div id="mainContainer" class="container-fluid"> <!-- gives main bg color, extends to screen width -->
	<div id="contentContainer" class="container pt-1"><!-- contains all content -->  

        <div id="serv">
        <div id="article">
        <h4> “What is an Expungement & Why Does Anyone Need One?”</h4> 
            </div>
        <p>"Expungement is the removal of criminal records from public inspection that come up in a Criminal Background Check. Nearly one out of every three American adults has a record of some type in a criminal database."</p>
      </div>   
      <div class="row1">
      <div id="how">
          <div class ="article">
        <h3> "How"
        </h3> 
          </div>
          <p>"In July of 2013, the Indiana Legislature enacted Indiana&#39;s Second Chance Act allowing individuals who met certain criteria the opportunity to seal their criminal records. Expungement is only allowed once in a lifetime."
          </p>
      </div>  
        </div>
      <div id="elig">
          <div class ="article">
         <h3> "Eligibility"
              </h3> </div>
          <p>Expungement can include arrest, misdemeanor, and felony conviction records.</p>
              <p>Click <a href="survey.php">here</a> to see if you are eligible.</p>
        </div>  
        <div class="row">
            <div id="info">
        <div class ="article">
            <h3>
             "Important Information"                                                          
          </h3>
            </div>
            <p>
            "We serve the entire state of Indiana. Either stop by our office during open hours or call to make an appointment (see our Contact page) for a consultation. Please bring a valid form of identification to your first meeting."
          </p>
        </div>
       </div>                              

	</div><!-- content container -->
</div><!-- main page container -->

<? require_once($_SESSION['fileDirectory'].'_includes/bootstrapDependencies.php'); ?>
<script src="<? echo $_SESSION['fileDirectory'] ?>_script/services.js"></script>
<? require_once($_SESSION['fileDirectory'].'_includes/footer.php'); ?>