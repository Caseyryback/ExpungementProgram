<? require_once($_SESSION['fileDirectory']."_includes/header.php"); ?>
  <title>IVYT Expungement Program</title>
<!-- *********************************
      INSERT PAGE SPECIFIC CSS FILE
**************************************-->
<link rel="stylesheet" href="<? echo $_SESSION['fileDirectory']; ?>_css/about.css">
</head>
<body>
<? require_once($_SESSION['fileDirectory']."_includes/navbar.php"); ?>
<div id="mainContainer" class="container-fluid"> <!-- gives main bg color, extends to screen width -->
	<div id="contentContainer" class="container pt-1"><!-- contains all content -->
           <img class="img-fluid mx-auto d-block" src="_images/aboutOffice.jpg" height="480" width="960" alt="placeholder">
        <div class="container">
            <div class="row py-2">
                <span class="mx-auto d-block px-3 article" id="subTitle">About </span>
                <h5 class="text-light py-3">   
                   The Northern Indiana Restorative Justice and Reentry Clinic specializes in pro bono and low cost record expungement. 
                </h5>
                <span class="mx-auto d-block px-3 article" id="subTitle">Established in 2016</span>
                <h5 class="text-light py-3"> 
                    The Second Chance Program originally started in 2013 by Ivy Tech Professors Irene Britt and Marcus Ellison, with Ivy Tech 
                    students helping their classmates and community members with the expungement process. The program began with the directive 
                    of empowering students to obtain certifications, degrees, and jobs in fields traditionally closed off to those with criminal histories. 
                    In response to demand from the larger South Bend community, the clinic expanded its services to all Indiana residents and became a registered 501(c)(3) 
                    non-profit in 2016. 
                </h5>
                <span class="mx-auto d-block px-3 article" id="subTitle">Our Goal</span>
                <h5 class="text-light py-3"> 
                    We are driven by the belief that "Every Life Matters," and view the expungement process as an important equalizer within the 
                    restorative justice process. At its core this program is about incorporating justice into the fabric and pulse of society, while 
                    also ensuring that the community is not just a safe place to live, work, and play, but also a great place to be. 
                </h5>
                <h5 class="text-light py-3">
​                    We hope to expand our operation over time to provide the range of services needed by those reentering the community, and we are always 
                    looking for partners, collaborators, and donors to help us fulfill that vision. A community working together will make a difference. 
                </h5>
            </div>
        </div><!-- container -->
	</div><!-- content container -->
</div><!-- main page container -->

<? require_once($_SESSION['fileDirectory'].'_includes/bootstrapDependencies.php'); ?>
<script src="<? echo $_SESSION['fileDirectory'] ?>_script/about.js"></script>
<? require_once($_SESSION['fileDirectory'].'_includes/footer.php'); ?>