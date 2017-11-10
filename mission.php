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
            <img class="img-fluid mx-auto d-block" src="_images/debbie.jpg" height="250" width="250" alt="placeholder">
        <div class="container">            
           <h1 class="text-center">Almost Every Life Matters!  ;-)</h1>
            <div class="row mx-auto">
            Each year, over 700,000 people are released from state and federal prisons, while a prison record can follow you around, you don’t have to let it stop you! Our clinic is committed to restorative justice and reentry to the community after incarceration.  We are a full service not-for-profit organization with the mission to assist formerly incarcerated persons with a successful transition after release. We are a community-based and run organization led by the principles of Service Learning -- combining academics with community service. We can give you the hope you need to start a new life for yourself and your family.
            </div> <!-- row 2 -->
        </div> <!-- row container -->
	</div><!-- content container -->
</div><!-- main page container -->

<? require_once($_SESSION['fileDirectory'].'_includes/bootstrapDependencies.php'); ?>
<script src="<? echo $_SESSION['fileDirectory'] ?>_script/index.js"></script>
<? require_once($_SESSION['fileDirectory'].'_includes/footer.php'); ?>