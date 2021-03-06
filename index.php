<? require_once($_SESSION['fileDirectory']."_includes/header.php"); ?>
  <title>IVYT Expungement Program</title>
<!-- *********************************
      INSERT PAGE SPECIFIC CSS FILE
**************************************-->
<link rel="stylesheet" href="<? echo $_SESSION['fileDirectory']; ?>_css/index.css">
</head>
<body>
<? require_once($_SESSION['fileDirectory']."_includes/navbar.php"); ?>
<div id="mainContainer" class="container-fluid"> <!-- gives main bg color, extends to screen width -->
	<div id="contentContainer" class="container pt-1"><!-- contains all content -->
            <img class="img-fluid mx-auto d-block" src="_images/homePage3.jpg" height="480" width="960" alt="placeholder">
        <div class="container">            
            <div class="row py-2">
                <span class="mx-auto d-block px-3 article" id="subTitle">Northern Indiana Re-Entry & Restorative Justice Clinic, Inc.</span>
                <h5 class="text-light py-3">   
                    The Second Chance Initiative began as a ‘service learning’ program birthed out of Ivy Tech Community College’s (North Central Region), Business and Public Service Division.  The program has 
                    grown and is now an incorporated not-for-profit community-based social service agency that provides legal resources and education assisting students and community members with the removal of eligible criminal records. 
                    Our mission is to help make Indiana a great place to live, work and play! Promoting social and economic justice for all
                </h5>
            </div>
            <div class="row py-2">
                <span class="mx-auto d-block px-3 article" id="subTitle">What We do</span>
                <h5 class="text-light py-3"> 
                    Each year, over 700,000 people are released from state and federal prisons, 
                    while another 9 million cycle through local jails. What began as a small community-based 
                    opportunity for Ivy Tech Community College students is now a full service not-for-profit 
                    organization with the mission to assist formerly incarcerated persons with a successful transition 
                    after release. We understand that an arrest with or without a conviction can follow you forever. We are 
                    committed to helping expunge all eligible arrests, misdemeanors, and felonies.
                </h5>
                <span class="mx-auto d-block px-3 article" id="subTitle">What is an Expungement &amp; Why Does Anyone Need One?</span>
                <h5 class="text-light py-3">
                    <div><i id="circle" class="fa py-2 bullet" aria-hidden="true"></i>  Expungement is the removal of criminal records from public inspection that come up in a Criminal Background Check.</div>
                    <div><i id="circle2" class="fa py-2 bullet" aria-hidden="true"></i>  Currently in our society even after you have paid your debt to society you may still punished if you have a criminal record because of the prevalence of the internet and social media.</i>
                    <div><i id="circle" class="fa py-2 bullet" aria-hidden="true"></i>  Having a criminal record limits opportunities in: </i>
                    <a><i id="check" class="fa check" aria-hidden="true"></i>  Employment</a>
                    <a><i id="check" class="fa check" aria-hidden="true"></i>   Loans</a>
                    <a><i id="check" class="fa check" aria-hidden="true"></i>   Education</a>
                    <a><i id="check" class="fa check" aria-hidden="true"></i>   Housing</a>
                    <a><i id="check" class="fa check" aria-hidden="true"></i>   Public Benefits</a>
                    <div><i id="circle" class="fa py-2 bullet" aria-hidden="true"></i>  Your criminal record is never forgotten and never forgiven.</div>
                </h5>
            </div> <!-- row 2 -->
        </div> <!-- row container -->
	</div><!-- content container -->
</div><!-- main page container -->

<? require_once($_SESSION['fileDirectory'].'_includes/bootstrapDependencies.php'); ?>
<script src="<? echo $_SESSION['fileDirectory'] ?>_script/index.js"></script>
<? require_once($_SESSION['fileDirectory'].'_includes/footer.php'); ?>