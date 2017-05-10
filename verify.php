<?php 
$Sex = $_POST['Sex']; 
$BirthMonth = $_POST['BirthMonth'];
$Birthday = $_POST['Birthday'];
$BirthYear = $_POST['BirthYear'];
$height = $_POST['parm2'];
$weight = $_POST['parm3'];
$State = $_POST['State'];
$Health = $_POST['Health'];
$Smoker = $_POST['Smoker'];
$FaceAmount = $_POST['FaceAmount'];
$NewCategory = $_POST['NewCategory'];
?>

<?php include_once('head.php') ?>
<style>
#process-logo{
    width:2%;
}
#verify-page{
    background-color: #9c292b;
    color:white;
    font-family: 'AileronThin';
}
.progress{
    height:0px;
}
.bar{
    width: 100%;
    background: lightgray;
    height: 10px;
}
.control-group {
	display: block;
}
#life-page fieldset > div{
    margin-top:25px;
}
#life-page input, #life-page select {
     letter-spacing: 5px;

}

fieldset:nth-child(2) .control-group, fieldset:nth-child(3) .control-group,  fieldset:nth-child(7) .control-group {
    display: inline-block;
}

.control {
	font-size: 18px;
	position: relative;
	display: block;
	margin-bottom: 15px;
	cursor: pointer;
}

.control input {
	position: absolute;
	z-index: -1;
	opacity: 0;
}

.control__indicator {
    background-color: rgba(255, 255, 255, 0.3);
    padding: 15px 45px;
    text-align: center;
    border-radius: 5px;
    color:white;
    font-family: 'AileronThin';
}

.control input:checked ~ .control__indicator {
	background-color: rgba(255, 255, 255, 0.6);
}

.control--radio .control__indicator {
	border-radius: 50%;
}
/* Hover and focus states */
.control:hover input ~ .control__indicator,
.control input:focus ~ .control__indicator {
	background-color: rgba(255, 255, 255, 0.6);
}

/* Hover state whilst checked */
.control:hover input:not([disabled]):checked ~ .control__indicator,
.control input:checked:focus ~ .control__indicator {
    	background-color: rgba(255, 255, 255, 0.6);
}
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #fff;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #fff;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #fff;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    #fff;
}
.control-text input{
    background-color: rgba(255, 255, 255, 0.3);
    padding: 25px;
    border-radius: 5px;
    font-family: 'AileronThin';
    border: none;
    height:20px;
    max-width:130px;
    font-size:18px;
    color:white;  
}
input[type=text]:focus{
  border:black;
  outline: none !important;
  border:1px solid white;
  box-shadow: none;
}
.control-text select {
    border-radius: 5px;
    border: none;
    padding: 15px;
    font-size: 20px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    color:white;
    font-family: 'AileronThin';
    background:none;
    background-color: rgba(255, 255, 255, 0.3);
}
.control-text select:focus{
  border:black;
  outline: none !important;
  border:1px solid white;
  box-shadow: none;
}
fieldset{
    letter-spacing: 0.2em;
    position:absolute;
    width:100%;
}
#quick-quote fieldset:not(:first-of-type) {
	display: none;
}
.previous-step{
    position:fixed; 
    top:40%; 
    left:2%;
    ms-transform: rotate(90deg); 
    -webkit-transform: rotate(90deg); 
    transform: rotate(90deg);    
}
.previous-step button{
    background:none; 
    border:none;
    outline: none; 
    pointer:cursor;    
}
.previous-step img{
    width:75%
}

#verify-page #quick-quote fieldset{
    display: block;
    position: relative;
}
#verify-page .row{
    margin-top: 0px;
    padding: 0px;
}
#verify-page h1{
    margin-top:0px;
}
#verify-page .control-group, #verify-page h1{
    display:inline-block;
}
#verify-page fieldset h1{
    font-size:15px;
    width:20%;
    letter-spacing:1px;
}
#verify-page .control__indicator{
    font-size: 18px;
    letter-spacing: 2px;    
    padding: 10px 20px;

}
#verify-page .control-text input{
    background-color: rgba(255, 255, 255, 0.3);
    padding: 20px 10px;
    border-radius: 5px;
    font-family: 'AileronThin';
    border: none;
    height: 20px;
    max-width: 130px;
    font-size: 18px;
    color: white;
    letter-spacing: 2px;
}
#verify-page .control-text select {
    border-radius: 5px;
    border: none;
    padding: 10px;
    font-size: 18px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    color: white;
    font-family: 'AileronThin';
    background: none;
    background-color: rgba(255, 255, 255, 0.3);
    letter-spacing: 2px;
}
#verify-page fieldset{
    margin-bottom: 10px;
}
#verify-page .quick-quote > h1{
    margin-top: 10px;
    margin-bottom: 15px;
}
#verify-page div:last{
    margin-bottom:25px;
}
#verify-page .submit{
    margin: 15px 0px;

}
#verified-submit{
    font-size: 29px;
    border-radius: 50px;
    width: 100%;    
}
#verify-page .quick-quote{
        
        margin:auto; 
        width:50%;
}
</style>
<script>
$(document).ready(function(){

    $(':input').keyup(function(){
    	if (this.value.length == this.maxLength) {
    		$(this).closest('.control-group').next('.control-group').find('input:text').focus();
    	}
    });
    
    // get help button display chat box
    
    $('.getHelp').click(function() {
        <?php include_once('chat.php') ?>
    });

});

</script>
<body id="verify-page">
    <div class="se-pre-con"></div>
    <div class="header fluid">
        <div class="container">
            <header>
                 <a href="/"><img id="process-logo" src="/images/logo-full-size.png"></a>
                <button class="getHelp">Get Help</button>
            </header>
        </div>
    </div>    
    <div class="progress fluid">
        <div class="bar"></div>
    </div>
    <div class="process container" style="margin: 0 auto;">
        <div class="row">
            <div class="quick-quote">
                <h1>Verify Your Information</h1>
            <form id="quick-quote" method="post" action="/cgi-bin/cqsl.cgi">
                <input type="hidden" name="ModeUsed" value="M">
                <input type="hidden" name="TEMPLATEFILE" value="QUOTE.HTM">
              <fieldset>
                  <h1>Gender</h1>
                  <div class="control-group">
                      <label class="control control--checkbox">
                          <input type="radio" name="Sex" value="M" class="Sex" <?php echo($Sex=='M')? 'checked': '' ?> />
                          <div class="control__indicator">Male</div>
                      </label>
                  </div>	
                  <div class="control-group">
                      <label class="control control">
                          <input type="radio" name="Sex" value="F" class="Sex" <?php echo($Sex=='F')? 'checked': '' ?> />
                          <div class="control__indicator">Female</div>
                      </label>
                  </div> 
              </fieldset>
              <fieldset>
                  <h1>Birthdate</h1>
                  <div class="control-group" id="dob">
                      <label class="control-text">
                          <input type="text" name="BirthMonth" placeholder="Mo" maxlength="2" value="<?php echo $BirthMonth ?>"/>
                      </label>
                  </div>	
                  <div class="control-group">
                      <label class="control-text">
                          <input type="text" name="Birthday" placeholder="Day" maxlength="2" value="<?php echo $Birthday ?>"/>
                      </label>
                  </div> 
                  <div class="control-group">
                      <label class="control-text">
                          <input type="text" name="BirthYear"class="BirthYear" placeholder="Year" maxlength="4" value="<?php echo $BirthYear ?>"/>
                      </label>
                  </div>
              </fieldset>
              <fieldset>
                  <h1>Height/Weight</h1>
                  <div class="control-group" id="height-weight">
                      <label class="control-text">
                          <input type="text" name="parm2" placeholder="Height" class="input" maxlength="4" id="height" value="<?php echo $height ?>" />
                      </label>
                  </div>	
                  <div class="control-group">
                      <label class="control-text">
                          <input type="text" name="parm3" placeholder="Lbs." class="input" maxlength="3" id="weight" value="<?php echo $weight ?>" />
                      </label>
                  </div> 
              </fieldset> 
              <fieldset>
                  <h1>State</h1>
                  <div class="control-group">
                    <label class="control-text">
                      <select name="State">
                          <option value="">Select State</option>
                          <option value="1"  <?php if($State == "1") echo "selected"; ?> >Alabama</option>
                          <option value="2"  <?php if($State == "2") echo "selected"; ?>>Alaska</option>
                          <option value="3"  <?php if($State == "3") echo "selected"; ?>>Arizona</option>
                          <option value="4"  <?php if($State == "4") echo "selected"; ?>>Arkansas</option>
                          <option value="5"  <?php if($State == "5") echo "selected"; ?>>California</option>
                          <option value="6"  <?php if($State == "6") echo "selected"; ?>>Colorado</option>
                          <option value="7"  <?php if($State == "7") echo "selected"; ?>>Connecticut</option>
                          <option value="8"  <?php if($State == "8") echo "selected"; ?>>Delaware</option>
                          <option value="9"  <?php if($State == "9") echo "selected"; ?>>Dist.Columbia</option>
                          <option value="10" <?php if($State == "10") echo "selected"; ?>>Florida</option>
                          <option value="11" <?php if($State == "11") echo "selected"; ?>>Georgia</option>
                          <option value="12" <?php if($State == "12") echo "selected"; ?>>Hawaii</option>
                          <option value="13" <?php if($State == "13") echo "selected"; ?>>Idaho</option>
                          <option value="14" <?php if($State == "14") echo "selected"; ?>>Illinois</option>
                          <option value="15" <?php if($State == "15") echo "selected"; ?>>Indiana</option>
                          <option value="16" <?php if($State == "16") echo "selected"; ?>>Iowa</option>
                          <option value="17" <?php if($State == "17") echo "selected"; ?>>Kansas</option>
                          <option value="18" <?php if($State == "18") echo "selected"; ?>>Kentucky</option>
                          <option value="19" <?php if($State == "19") echo "selected"; ?>>Louisiana</option>
                          <option value="20" <?php if($State == "20") echo "selected"; ?>>Maine</option>
                          <option value="21" <?php if($State == "21") echo "selected"; ?>>Maryland</option>
                          <option value="22" <?php if($State == "22") echo "selected"; ?>>Massachusetts</option>
                          <option value="23" <?php if($State == "23") echo "selected"; ?>>Michigan</option>
                          <option value="24" <?php if($State == "24") echo "selected"; ?>>Minnesota</option>
                          <option value="25" <?php if($State == "25") echo "selected"; ?>>Mississippi</option>
                          <option value="26" <?php if($State == "26") echo "selected"; ?>>Missouri</option>
                          <option value="27" <?php if($State == "27") echo "selected"; ?>>Montana</option>
                          <option value="28" <?php if($State == "28") echo "selected"; ?>>Nebraska</option>
                          <option value="29" <?php if($State == "29") echo "selected"; ?>>Nevada</option>
                          <option value="30" <?php if($State == "30") echo "selected"; ?>>New Hampshire</option>
                          <option value="31" <?php if($State == "31") echo "selected"; ?>>New Jersey</option>
                          <option value="32" <?php if($State == "32") echo "selected"; ?>>New Mexico</option>
                          <option value="52" <?php if($State == "52") echo "selected"; ?>>NY Non-Bus</option>
                          <option value="33" <?php if($State == "33") echo "selected"; ?>>NY Business</option>
                          <option value="34" <?php if($State == "34") echo "selected"; ?>>North Carolina</option>
                          <option value="35" <?php if($State == "35") echo "selected"; ?>>North Dakota</option>
                          <option value="36" <?php if($State == "36") echo "selected"; ?>>Ohio</option>
                          <option value="37" <?php if($State == "37") echo "selected"; ?>>Oklahoma</option>
                          <option value="38" <?php if($State == "38") echo "selected"; ?>>Oregon</option>
                          <option value="39" <?php if($State == "39") echo "selected"; ?>>Pennsylvania</option>
                          <option value="40" <?php if($State == "40") echo "selected"; ?>>Rhode Island</option>
                          <option value="41" <?php if($State == "41") echo "selected"; ?>>South Carolina</option>
                          <option value="42" <?php if($State == "42") echo "selected"; ?>>South Dakota</option>
                          <option value="43" <?php if($State == "43") echo "selected"; ?>>Tennessee</option>
                          <option value="44" <?php if($State == "44") echo "selected"; ?>>Texas</option>
                          <option value="45" <?php if($State == "45") echo "selected"; ?>>Utah</option>
                          <option value="46" <?php if($State == "46") echo "selected"; ?>>Vermont</option>
                          <option value="47" <?php if($State == "47") echo "selected"; ?>>Virginia</option>
                          <option value="48" <?php if($State == "48") echo "selected"; ?>>Washington</option>
                          <option value="49" <?php if($State == "49") echo "selected"; ?>>West Virginia</option>
                          <option value="50" <?php if($State == "50") echo "selected"; ?>>Wisconsin</option>
                          <option value="51" <?php if($State == "51") echo "selected"; ?>>Wyoming</option>
                          <option value="53" <?php if($State == "53") echo "selected"; ?>>Guam</option>
                          <option value="54" <?php if($State == "54") echo "selected"; ?>>Puerto Rico</option>
                          <option value="55" <?php if($State == "55") echo "selected"; ?>>Virgin Islands</option>
                          <option value="56" <?php if($State == "56") echo "selected"; ?>>Amer. Samoa</option>
                      </select>
                  </div>	
              </fieldset> 
              <fieldset>
                  <h1>Health</h1>
                  <div class="control-group">
                      <label class="control control--checkbox">
                          <input type="radio" name="Health" value="PP" <?php echo($Health=='PP')? 'checked': '' ?>/>
                          <div class="control__indicator">Very Good</div>
                      </label>
                  </div>	
                  <div class="control-group">
                      <label class="control control">
                          <input type="radio" name="Health" value="P" <?php echo($Health=='P')? 'checked': '' ?>/>
                          <div class="control__indicator">Good</div>
                      </label>
                  </div>       
                  <div class="control-group">
                      <label class="control control">
                          <input type="radio"  name="Health" value="RP" <?php echo($Health=='RP')? 'checked': '' ?>/>
                          <div class="control__indicator">Average</div>
                      </label>
                  </div>
                  <div class="control-group">
                      <label class="control control">
                          <input type="radio" name="Health" value="R" <?php echo($Health=='R')? 'checked': '' ?>/>
                          <div class="control__indicator">Bad</div>
                      </label>
                  </div>       
              </fieldset>
              <fieldset>
                  <h1>Do you use nicotine?</h1>
                  <div class="control-group">
                      <label class="control control--checkbox">
                          <input type="radio" name="Smoker" value="Y" <?php echo($Smoker=='Y')? 'checked': '' ?>/>
                          <div class="control__indicator">Yes</div>
                      </label>
                  </div>	
                  <div class="control-group">
                      <label class="control control">
                          <input type="radio" name="Smoker" value="N" <?php echo($Smoker=='N')? 'checked': '' ?>/>
                          <div class="control__indicator">No</div>
                      </label>
                  </div>      
              </fieldset>
              <fieldset>
                  <h1>How much/ How long?</h1>
                  <div class="control-group">
                      <label class="control-text">
                        <select name="FaceAmount" id="faceamount">
                            <option value="10000" <?php if($FaceAmount == "10000") echo "selected"; ?>>$10,000</option>
                            <option value="25000" <?php if($FaceAmount == "25000") echo "selected"; ?>>$25,000</option>
                            <option value="50000" <?php if($FaceAmount == "50000") echo "selected"; ?>>$50,000</option>
                            <option value="50000" <?php if($FaceAmount == "50000") echo "selected"; ?>>$50,000</option>
                            <option value="75000" <?php if($FaceAmount == "75000") echo "selected"; ?>>$75,000</option>
                            <option value="100000" <?php if($FaceAmount == "100000") echo "selected"; ?>>$100,000</option>
                            <option value="125000" <?php if($FaceAmount == "125000") echo "selected"; ?>>$125,000</option>
                            <option value="150000" <?php if($FaceAmount == "150000") echo "selected"; ?>>$150,000</option>
                            <option value="175000" <?php if($FaceAmount == "175000") echo "selected"; ?>>$175,000</option>
                            <option value="200000" <?php if($FaceAmount == "200000") echo "selected"; ?>>$200,000</option>
                            <option value="225000" <?php if($FaceAmount == "225000") echo "selected"; ?>>$225,000</option>
                            <option value="250000" <?php if($FaceAmount == "250000") echo "selected"; ?>>$250,000</option>
                            <option value="300000" <?php if($FaceAmount == "300000") echo "selected"; ?>>$300,000</option>
                            <option value="350000" <?php if($FaceAmount == "350000") echo "selected"; ?>>$350,000</option>
                            <option value="400000" <?php if($FaceAmount == "400000") echo "selected"; ?>>$400,000</option>
                            <option value="450000" <?php if($FaceAmount == "450000") echo "selected"; ?>>$450,000</option>
                            <option value="500000" <?php if($FaceAmount == "500000") echo "selected"; ?>>$500,000</option>
                            <option value="550000" <?php if($FaceAmount == "550000") echo "selected"; ?>>$550,000</option>
                            <option value="600000" <?php if($FaceAmount == "600000") echo "selected"; ?>>$600,000</option>
                            <option value="650000" <?php if($FaceAmount == "650000") echo "selected"; ?>>$650,000</option>
                            <option value="700000" <?php if($FaceAmount == "700000") echo "selected"; ?>>$700,000</option>
                            <option value="750000" <?php if($FaceAmount == "750000") echo "selected"; ?>>$750,000</option>
                            <option value="800000" <?php if($FaceAmount == "800000") echo "selected"; ?>>$800,000</option>
                            <option value="900000" <?php if($FaceAmount == "900000") echo "selected"; ?>>$900,000</option>
                            <option value="1000000" <?php if($FaceAmount == "1000000") echo "selected"; ?>>$1,000,000</option>
                            <option value="1100000" <?php if($FaceAmount == "1100000") echo "selected"; ?>>$1,100,000</option>
                            <option value="1250000" <?php if($FaceAmount == "1250000") echo "selected"; ?>>$1,250,000</option>
                            <option value="1500000" <?php if($FaceAmount == "1500000") echo "selected"; ?>>$1,500,000</option>
                            <option value="1750000" <?php if($FaceAmount == "1750000") echo "selected"; ?>>$1,750,000</option>
                            <option value="2000000" <?php if($FaceAmount == "2000000") echo "selected"; ?>>$2,000,000</option>
                            <option value="2500000" <?php if($FaceAmount == "2500000") echo "selected"; ?>>$2,500,000</option>
                            <option value="3000000" <?php if($FaceAmount == "3000000") echo "selected"; ?>>$3,000,000</option>
                            <option value="4000000" <?php if($FaceAmount == "4000000") echo "selected"; ?>>$4,000,000</option>
                            <option value="5000000" <?php if($FaceAmount == "5000000") echo "selected"; ?>>$5,000,000</option>
                            <option value="6000000" <?php if($FaceAmount == "6000000") echo "selected"; ?>>$6,000,000</option>
                            <option value="7000000" <?php if($FaceAmount == "7000000") echo "selected"; ?>>$7,000,000</option>
                            <option value="8000000" <?php if($FaceAmount == "8000000") echo "selected"; ?>>$8,000,000</option>
                            <option value="9000000" <?php if($FaceAmount == "9000000") echo "selected"; ?>>$9,000,000</option>
                            <option value="10000000" <?php if($FaceAmount == "10000000") echo "selected"; ?>>$10,000,000</option>
                        </select>
                      </label>
                  </div>	
                  <div class="control-group">
                      <label class="control-text">
                        <select name="NewCategory" class="">
                            <option value="3" <?php if($NewCategory == "3") echo "selected"; ?>>10-Year Term</option>
                            <option value="5" <?php if($NewCategory == "5") echo "selected"; ?>>20-Year Term</option>
                            <option value="7" <?php if($NewCategory == "7") echo "selected"; ?>>30-Year Term</option>
                        </select> 
                      </label>
                  </div>    
                  <div class="submit">
                  <button type="submit" class="btn btn-warning btn-lg" id="verified-submit">Verify</button>
                  </div>
              </fieldset> 
            </form>
            </div>
        </div>
    </div>
    <div style="clear:both"></div>
    <div class="footer" style="text-align:center; padding: 15px 0px;  width:100%; background-color:#9c292b;">
       <p>Usurance, Inc.</p> 
    </div>
    </body>
</html>
