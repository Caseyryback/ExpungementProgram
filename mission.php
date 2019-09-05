<? require_once($_SESSION['fileDirectory']."_includes/header.php"); ?>
  <title>IVYT Expungement Program</title>
<!-- *********************************
      INSERT PAGE SPECIFIC CSS FILE
**************************************-->
<link rel="stylesheet" href="<? echo $_SESSION['fileDirectory']; ?>mission.css">

<body>
<? require_once($_SESSION['fileDirectory']."_includes/navbar.php"); ?>
<div id="mainContainer" class="container-fluid"> <!-- gives main bg color, extends to screen width -->
	<div id="contentContainer" class="container pt-1"><!-- contains all content -->
            <div id ="showImg"></div>
        <div class="container"> 
            <center><img id="target" src="_images/people1.jpg"  height = "280" width="960" class="img-rounded" alt="family"></center>
            <center> <input id="submit" type="button" value="Randomize!"></center>
           <h1><span class="mx-auto d-block px-3 article" id="subTitle">Every Life Matters!</span></h1>
            <div class="row mx-auto">
            We believe that the expungement process as an important equalizer within the restorative justice process. Our clinic is committed to restorative justice and reentry to the community after incarceration. We are a community-based and run organization led by the principles of Service Learning -- combining academics with community service. 
            The Second Chance Initiative began as a ‘service learning’ program birthed out of Ivy Tech Community College’s (North Central Region), Business and Public Service Division. The program has grown and is now an incorporated not-for-profit community-based social service agency that provides legal resources and education assisting students and community members with the removal of eligible criminal records. Our mission is to help make Indiana a great place to live, work and play! Promoting social and economic justice for all. We can give you the hope you need to clear a path for a new life for yourself and your family.
            </div> <!-- row 2 -->
        </div> <!-- row container -->
	</div><!-- content container -->
</div><!-- main page container -->

<? require_once($_SESSION['fileDirectory'].'_includes/bootstrapDependencies.php'); ?>
<script src="<? echo $_SESSION['fileDirectory'] ?>mission.js"></script>
<? require_once($_SESSION['fileDirectory'].'_includes/footer.php'); ?>