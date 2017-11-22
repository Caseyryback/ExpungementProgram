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
             <div class="sub form-row align-items-center">
                 <div class="col">
                <fieldset>
                    <h3><legend>Eligibility Test</legend></h3>
                </fieldset>
                 </div>
                 </div>
                 <div class="col">
                   <fieldset>
                       <div class="col">
                    <legend>Have you had your record expunged before?</legend>
                        <input type="radio" name="field1" value="0" onclick="checkTotal()"/>
                        <label> yes</label>
                       </div>
                          <input type="radio" name="field1" value="1" onclick="checkTotal()"/>
                       <label>  no </label>
                    </fieldset>
                 </div>
                 <div class="col">
                 <div class="row">
					 <fieldset>
                    <legend>Do you have any charges pending against you?</legend>
                      <input type="radio" name="field2" value="0" onclick="calculateTotal()"/>
                         <label>
                         Yes
                    </label>
                           <input type="radio" name="field2" value="1" onclick="calculateTotal()"/>
                     <label>
                         No
                    </label>
                </fieldset>
                     </div>
                 </div>
                <div class="row">
                    <div class="col">
                <fieldset>
                    <legend>Is your drivers license suspended?</legend>
                     <input type="radio" name="field3" value="0" onclick="calculateTotal()"/>
                    <label>
                         Yes
                    </label>
                     <input type="radio" name="field3" value="1" onclick="calculateTotal()"/>
                     <label>
                         No
                    </label>
                </fieldset>
                 </div>
                 </div>
                 
                  <div class="row">
                      <div class="col">
                <fieldset>
                    
                    <legend>Is your arrest record a: (return to <a href="services.php"> eligibility</a> for description.)</legend>
                
                    <input class="num" type="radio" name="field4" value="1" onchange="checkTotal()"/>
                    <label>
                        IC 35-38-9-1
                    </label>
                        <input class="num" type="radio" name="field4" value="2" onchange="checkTotal()"/>
                        <label>
                        IC 35-38-9-2
                    </label>
                     
                        <input class="num" type="radio" name="field4" value="3" onchange="checkTotal()"/>
                            <label>
                         IC 35-38-9-3
                        </label>
                        <input class="num" type="radio" name="field4" value="4" onchange="checkTotal()"/>
                                <label>
                         IC 35-38-9-4
                       </label>
                        <input class="num" type="radio" name="field4" value="5" onchange="checkTotal()"/>
                    <label>
                         IC 35-38-9-5
                    </label>
                </fieldset>
                      </div>
                 </div>
                <div class="row">
                    <div class="col">
                <fieldset>
                    <legend>How long has it been since?:</legend>
                    
                    <input class="num" type="radio" name="field5" value="1" />
                    <label>
                    1 Year From Date of Arrestor
                    </label> <br/>
                    
                    
                        <input class="num" type="radio" name="field5" value="2" />
                    <label>
                         5 Years From Date of Arrestor
                    </label> <br/>
                    
                
                        <input class="num" type="radio" name="field5" value="3" />
                    <label>
                         8 Years From Date of Arrestor
                    </label><br />
                    
                
                        <input class="num" type="radio" name="field5" value="4" />
                    <label>
                         8/3 Years The Later of 8 Years from Date of Conviction or 3 years from completion of the sentence
                    </label><br />
                    
    
                        <input class="num" type="radio" name="field5" value="5" />
                    <label>
                         10/5 Years The Later of 10 Years from Date of Conviction or 5 years from completion of the sentence
                    </label> <br />
                </fieldset>
                    </div>
                 </div>
                
                 <div class="row">
                     <div class="col">
                <fieldset id="submitbutton">
                    <a href="test.php"> <input type="submit" id="submit" value="submit" /> </a>
                </fieldset>
                 </div>
                  </div>
                
             
<div id="totalPrice"></div>

                 
            </form>
             <script type="text/javascript" src="test.js"></script>
	</div><!-- content container -->
</div><!-- main page container -->

<? require_once($_SESSION['fileDirectory'].'_includes/bootstrapDependencies.php'); ?>
<script src="<? echo $_SESSION['fileDirectory'] ?>_script/index.js"></script>
<? require_once($_SESSION['fileDirectory'].'_includes/footer.php'); ?>