<? require_once("_includes/header.php"); ?>
  <title>IVYT Expungement Program</title>
<!-- *********************************
      INSERT PAGE SPECIFIC CSS FILE
**************************************-->
<link rel="stylesheet" href="_css/contact.css">
</head>
<body>
<? require_once("_includes/navbar.php"); ?>
<div id="mainContainer" class="container-fluid"> <!-- gives main bg color, extends to screen width -->
	<div id="contentContainer" class="container pt-1"><!-- contains all content -->
        <div class="row">
            <div class="col-sm-12 col-md-6"> Hi my name is Logan and this is a Beta. </div>
            
            <form method="post" action="send.php">
            <input type="text" name="name" placeholder="Your Name"> <br /><br />
            <input type="tel" name="phone" placeholder="Phone"> <br /><br />
            <input type="email" name="email" placeholder="Your Email Address"> <br /><br />
            <textarea name="message" placeholder="Your Message"></textarea> <br /><br />
            <button type="submit">Send Email</button>
            
            </form>
                
<div class="col-sm-12 col-md-6"> <br /><br /> 
Northern Indiana Reentry and Restorative Justice Clinic, Inc. <br />
804 Lincolnway West -- B 04 <br />
P.O. Box 11587 <br />
South Bend, Indiana 46616</div>
              
<div class="col-sm-12 col-md-6"> <br /><br />
Contact Us.
Hours: M-Th 10:30am-1:30pm <br /> 
excluding holidays <br />  
Email: nirrcinc@gmail.com
Phone: 5749312173</div> <br /><br />  


        
	</div><!-- content container -->
</div><!-- main page container -->

<? require_once('_includes/bootstrapDependencies.php'); ?>
<script src="_script/index.js"></script>
<? require_once('_includes/footer.php'); ?>
