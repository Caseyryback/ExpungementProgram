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

        <div id="serv">
        <h4> "Services."</h4> 
        <p>"Since 2013, we have made over 3,500 unique contacts, and have had more successful expungements granted and pro bono filings than any other organization or legal group in the region. No huge legal fees required!"</p>
      </div>   
      <div class="row1">
      <div id="how">
        <h3> "How"
        </h3> 
          <p>"In July of 2013, the Indiana Legislature enacted Indiana&#39;s Second Chance Act allowing individuals who met certain criteria the opportunity to seal their criminal records. Expungement is only allowed once in a lifetime."
          </p>
      </div>                             
      <div id="elig">
         <h3> "Eligibility"
         </h3> 
           <p>"Arrest Records - I.C. 35-38-9-1
Misdemeanors - I.C. 35-38-9-2
Less Serious Felonies - I.C. 35-38-9-4
Serious Felonies - I.C. 35-38-9-5"
              <p>Click <a href="survey.php">here</a> to see if you are eligible.</p>
        </div>  
      <div id="pay">
         <h3> "Payment"
        </h3>
          <p>"Payable with cash, check, or money order"
          </p>
        </div>
        <div class="row">
        <div class ="article" id="info">
            <h3>
             "Important Information"                                                          
          </h3>
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