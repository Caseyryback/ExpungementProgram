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
            
            
<div id="comp">
<div class="green">
  <form id="myForm">
  

 
        <fieldset class="article">
          <h3>
            <legend>Eligibility Test</legend>
          </h3>
        </fieldset>
		
		<p class="article">Please Answer the following questions to determine if you are eligible for expungement.</p>
   
        <fieldset class="article">

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

<fieldset class="article">
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

<fieldset class="article">
  <legend>Is your drivers license suspended?</legend>
  <input id="sus_yes" type="radio" name="field3" value="0" />
  <label>
                   Yes
              </label>
  <input id="sus_no" type="radio" name="field3" value="1" />
  <label>
                   No
              </label>
</fieldset>
<fieldset id="submitbutton" class="article">
  <input type="button" id="submit" value="submit" onclick='answer()' />
</fieldset>
 <div id="first">
<p id="totalScore" class="article"></p>
</form>
 </div>
    
 <div id="second">
           <form>
            
             <fieldset class="article">
                    <label>
                    <legend>Is your arrest record a:</legend>
                        <input id="arr_1" type="radio" name="field4" value="1" onclick="getscores4(this)"/>
                        IC 35-38-9-1
                    </label>
                    <label>
                        <input id="arr_2" type="radio" name="field4" value="2" onclick="getscores4(this)"/>
                        IC 35-38-9-2
                    </label>
                     <label>
                        <input id="arr_3" type="radio" name="field4" value="3" onclick="getscores4(this)"/>
                         IC 35-38-9-3
                    </label>
                     <label>
                        <input id="arr_4" type="radio" name="field4" value="4" onclick="getscores4(this)"/>
                         IC 35-38-9-4
                    </label>
                     <label>
                        <input id="arr_5" type="radio" name="field4" value="5" onclick="getscores4(this)"/>
                         IC 35-38-9-5
                    </label>
                </fieldset>
				
			 
              <fieldset class="article">
			  <label>
                    <legend>Has it been:</legend>
                        <input id="been1" type="radio" name="field5" value="1" onclick="getscores5(this)"/>
                    1 Year From Date of Arrestor earlier if the Prosecutor agrees
                    </label>
                     <label>
                         </br>
                        <input id="been2" type="radio" name="field5" value="2" onclick="getscores5(this)"/>
                         5 Years From Date of Arrestor earlier if the Prosecutor agrees
                    </label>
                     <label>
                         </br>
                        <input id="been3" type="radio" name="field5" value="3" onclick="getscores5(this)"/>
                         8 YearsFrom Date of Arrestor earlier if the Prosecutor agrees
                    </label>
                     <label>
                         </br>
                        <input id="been4" type="radio" name="field5" value="4" onclick="getscores5(this)"/>
                         8/3 Years The Later of 8 Years from Date of Conviction or 3 years from completion of the sentence or earlier if the Prosecutor agrees
     </label>
                     <label>
                         </br>
                        <input id="been5" type="radio" name="field5" value="5" onclick="getscores5(this)"/>
                         10/5 Years The Later of 10 Years from Date of Conviction or 5 years from completion of the  sentence or earlier if the Prosecutor agrees
                    </label>
                </fieldset>
            
			<fieldset id="submitbutton2" class="article">
  <input type="button" id="submit2" value="submit" onclick='answer2(); toggletab3();' />
  </fieldset>
  </div>
  
  <div id="third">
 <fieldset class="article">
			  <label>
                    <legend>Results:</legend>
                    <p id="finalScore"></p>
                    </label>
</fieldset>
  
  
  <p id="message" class="article"></p>
  </div>
  <p class="article"><a href = "services.php">return to services page</a> or <a href = "contact.html"> go to contact page</a></p>

			</form>
			</div>
			</div>
			
			<script src="survey.js"></script>
			<script src="survey2.js"></script>
			<script src="toggle.js"></script>
			<script src="toggle2.js"></script>
			<script src="toggle3.js"></script>
	</div><!-- content container -->
</div><!-- main page container -->

<? require_once($_SESSION['fileDirectory'].'_includes/bootstrapDependencies.php'); ?>
<script src="<? echo $_SESSION['fileDirectory'] ?>_script/index.js"></script>
<? require_once($_SESSION['fileDirectory'].'_includes/footer.php'); ?>