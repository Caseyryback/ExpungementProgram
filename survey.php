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
         <div class="articleSTATUTORY REQUIREMENTS">
            
            

  <form id="myForm">
  

 
        <fieldset >
          <h3>
            <legend>Eligibility Test</legend>
          </h3>
        </fieldset>
		
		<p >Please Answer the following questions to determine if you are eligible for expungement.</p>
   
        <fieldset >

  <legend>Have you had your record expunged before?</legend>
  <input id="exp_yes" type="radio" name="field1" value="0" />
  <label>
        Yes
      </label>
  <input id="exp_no" type="radio" name="field1" value="1" />
  <label>
        No
      </label>

</fieldset>

<fieldset >
  <legend>Do you have any charges pending against you?</legend>
  <input id="chg_yes"  type="radio" name="field2" value="0" />
  <label>
        Yes
      </label>
  <input id="chg_no" type="radio" name="field2" value="1" />
  <label>
        No
      </label>
</fieldset>

<fieldset >
  <legend>Have any of your convictions ever been for a murder / manslaughter or attempt of the same?</legend>
  <input id="mur_yes" type="radio" name="field3" value="0" />
  <label>
                   Yes
              </label>
  <input id="mur_no" type="radio" name="field3" value="1" />
  <label>
                   No
              </label>

</fieldset>
      
      <fieldset >
  <legend>Have any of your convictions been for a sex crime or required you to sign up for the sex offender registry?</legend>
  <input id="off_yes" type="radio" name="field4" value="0" />
  <label>
                   Yes
              </label>
  <input id="off_no" type="radio" name="field4" value="1" />
  <label>
                   No
              </label>

</fieldset>
      
   <fieldset >
  <legend>Do you still owe any fines, fees, or restitution on any of criminal convictions?</legend>
  <input id="fin_yes" type="radio" name="field5" value="0" />
  <label>
                   Yes
              </label>
  <input id="fin_no" type="radio" name="field5" value="1" />
  <label>
                   No
              </label>

</fieldset>   
<fieldset id="submitbutton" >
  <input type="button" id="submit" value="submit" onclick='answer()' />
</fieldset>
<p id="totalScore"></p>
    
 
  <p class="article"><a href = "services.php">return to services page</a> or <a href = "contact.html"> go to contact page</a></p>

			</form>
			
			
			<script src="survey.js"></script>
			<script src="toggle.js"></script>
			<script src="toggle2.js"></script>
			<script src="toggle3.js"></script>
			
			
	</div><!-- content container -->
</div><!-- main page container -->

<? require_once($_SESSION['fileDirectory'].'_includes/bootstrapDependencies.php'); ?>
<script src="<? echo $_SESSION['fileDirectory'] ?>_script/index.js"></script>
<? require_once($_SESSION['fileDirectory'].'_includes/footer.php'); ?>