<?php include_once('head.php') ?>
<style>
#process-logo{
    width:2%;
}
#life-page{
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


</style>
<script>
$(document).ready(function(){
  
    $(':checkbox').click(function(){
          <?php include('slide-next.php') ?>
    });
    
    $(':radio').click(function(){
          <?php include('slide-next.php') ?>
    });
    
    
    $('select').change(function(){
          <?php include('slide-next.php') ?>
    });
    
    $(':input').keyup(function(){
    	if (this.value.length == this.maxLength) {
    		$(this).closest('.control-group').next('.control-group').find('input:text').focus();
    	}
    });
    
    $('.previous-step').click(function(){
          <?php include('slide-prev.php') ?>
    });
    
    $('.BirthYear').keyup(function(){
        var letters = $(".BirthYear").val().length;
        // if input = 4 move to next step
        if (letters == 4){<?php include('slide-next.php') ?>}
                                
    });
    
    $('#weight').keyup(function(){
        if (this.value.length == "3"){<?php include('slide-next.php') ?>}
    });
    
    // get help button display chat box
    
    $('.getHelp').click(function() {
        <?php include_once('chat.php') ?>
    });
    
    $('.term').change(function(){
        $('#quick-quote').submit();
    });
    $('#faceAmount').change(function(){
        event.preventDefault();
    });

});
</script>
<body id="life-page">
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
            <div class="quick-quote" style="margin:auto; width:50%; text-align:center; display:block; position:relative;">
                <form id="quick-quote" method="post" action="/verify.php">
                  <fieldset>
                      <h1>What is your gender?</h1>
                      <div class="control-group">
                          <label class="control control--checkbox">
                            <input type="radio" name="Sex" value="M"/>
                              <div class="control__indicator">Male</div>
                          </label>
                      </div>	
                      <div class="control-group">
                          <label class="control control--checkbox">
                              <input type="radio" name="Sex" value="F"/>
                              <div class="control__indicator">Female</div>
                          </label>
                      </div> 
                  </fieldset>
                  <fieldset>
                      <h1>What is your date of birth?</h1>
                      <div class="control-group" id="dob">
                          <label class="control-text">
                              <input type="text" name="BirthMonth" placeholder="Mo" maxlength="2"/>
                          </label>
                      </div>	
                      <div class="control-group">
                          <label class="control-text">
                              <input type="text" name="Birthday" placeholder="Day" maxlength="2"/>
                          </label>
                      </div> 
                      <div class="control-group">
                          <label class="control-text">
                              <input type="text" name="BirthYear"class="BirthYear" placeholder="Year" maxlength="4"/>
                          </label>
                      </div>
                        <div class="previous-step" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset>
                  <fieldset>
                      <h1>What is your height and weight?</h1>
                      <div class="control-group" id="height-weight">
                          <label class="control-text">
                              <input type="text" name="parm2" placeholder="Height" class="input" maxlength="4" id="height">
                          </label>
                      </div>	
                      <div class="control-group">
                          <label class="control-text">
                              <input type="text" name="parm3" placeholder="Lbs." class="input" maxlength="3" id="weight">
                          </label>
                      </div> 
                      <div class="previous-step" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset> 
                  <fieldset>
                      <h1>What state do you live in?</h1>
                      <div class="control-group">
                        <label class="control-text">
                          <select name="State">
                              <option selected value="">Select State</option>
                              <option value="1">Alabama</option>
                              <option value="2">Alaska</option>
                              <option value="3">Arizona</option>
                              <option value="4">Arkansas</option>
                              <option value="5">California</option>
                              <option value="6">Colorado</option>
                              <option value="7">Connecticut</option>
                              <option value="8">Delaware</option>
                              <option value="9">Dist.Columbia</option>
                              <option value="10">Florida</option>
                              <option value="11">Georgia</option>
                              <option value="12">Hawaii</option>
                              <option value="13">Idaho</option>
                              <option value="14">Illinois</option>
                              <option value="15">Indiana</option>
                              <option value="16">Iowa</option>
                              <option value="17">Kansas</option>
                              <option value="18">Kentucky</option>
                              <option value="19">Louisiana</option>
                              <option value="20">Maine</option>
                              <option value="21">Maryland</option>
                              <option value="22">Massachusetts</option>
                              <option value="23">Michigan</option>
                              <option value="24">Minnesota</option>
                              <option value="25">Mississippi</option>
                              <option value="26">Missouri</option>
                              <option value="27">Montana</option>
                              <option value="28">Nebraska</option>
                              <option value="29">Nevada</option>
                              <option value="30">New Hampshire</option>
                              <option value="31">New Jersey</option>
                              <option value="32">New Mexico</option>
                              <option value="52">NY Non-Bus</option>
                              <option value="33">NY Business</option>
                              <option value="34">North Carolina</option>
                              <option value="35">North Dakota</option>
                              <option value="36">Ohio</option>
                              <option value="37">Oklahoma</option>
                              <option value="38">Oregon</option>
                              <option value="39">Pennsylvania</option>
                              <option value="40">Rhode Island</option>
                              <option value="41">South Carolina</option>
                              <option value="42">South Dakota</option>
                              <option value="43">Tennessee</option>
                              <option value="44">Texas</option>
                              <option value="45">Utah</option>
                              <option value="46">Vermont</option>
                              <option value="47">Virginia</option>
                              <option value="48">Washington</option>
                              <option value="49">West Virginia</option>
                              <option value="50">Wisconsin</option>
                              <option value="51">Wyoming</option>
                              <option value="53">Guam</option>
                              <option value="54">Puerto Rico</option>
                              <option value="55">Virgin Islands</option>
                              <option value="56">Amer. Samoa</option>
                          </select>
                      </div>	
                      <div class="previous-step" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset> 
                  <fieldset>
                      <h1>What is your health rating?</h1>
                      <div class="control-group">
                          <label class="control control--checkbox">
                              <input type="radio" name="Health" value="PP" />
                              <div class="control__indicator">Very Good</div>
                          </label>
                      </div>	
                      <div class="control-group">
                          <label class="control control">
                              <input type="radio" name="Health" value="P"/>
                              <div class="control__indicator">Good</div>
                          </label>
                      </div>       
                      <div class="control-group">
                          <label class="control control">
                              <input type="radio"  name="Health" value="RP"/>
                              <div class="control__indicator">Average</div>
                          </label>
                      </div>
                      <div class="control-group">
                          <label class="control control">
                              <input type="radio" name="Health" value="R"/>
                              <div class="control__indicator">Bad</div>
                          </label>
                      </div>      
                      <div class="previous-step" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset>
                  <fieldset>
                      <h1>Do you use nicotine products?</h1>
                      <div class="control-group">
                          <label class="control control--checkbox">
                              <input type="radio" name="Smoker" value="Y"/>
                              <div class="control__indicator">Yes</div>
                          </label>
                      </div>	
                      <div class="control-group">
                          <label class="control control">
                              <input type="radio" name="Smoker" value="N"/>
                              <div class="control__indicator">No</div>
                          </label>
                      </div>      
                          <div class="previous-step" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset>
                  <fieldset>
                      <h1>How much coverage would you like?</h1>
                      <div class="control-group">
                          <label class="control-text">
                            <select name="FaceAmount" id="faceamount">
                                <option selected="selected" value="">Select Coverage</option>
                                <option value="10000">$10,000</option>
                                <option value="25000">$25,000</option>
                                <option value="50000">$50,000</option>
                                <option value="50000">$50,000</option>
                                <option value="75000">$75,000</option>
                                <option value="100000">$100,000</option>
                                <option value="125000">$125,000</option>
                                <option value="150000">$150,000</option>
                                <option value="175000">$175,000</option>
                                <option value="200000">$200,000</option>
                                <option value="225000">$225,000</option>
                                <option value="250000">$250,000</option>
                                <option value="300000">$300,000</option>
                                <option value="350000">$350,000</option>
                                <option value="400000">$400,000</option>
                                <option value="450000">$450,000</option>
                                <option value="500000">$500,000</option>
                                <option value="550000">$550,000</option>
                                <option value="600000">$600,000</option>
                                <option value="650000">$650,000</option>
                                <option value="700000">$700,000</option>
                                <option value="750000">$750,000</option>
                                <option value="800000">$800,000</option>
                                <option value="900000">$900,000</option>
                                <option value="1000000">$1,000,000</option>
                                <option value="1100000">$1,100,000</option>
                                <option value="1250000">$1,250,000</option>
                                <option value="1500000">$1,500,000</option>
                                <option value="1750000">$1,750,000</option>
                                <option value="2000000">$2,000,000</option>
                                <option value="2500000">$2,500,000</option>
                                <option value="3000000">$3,000,000</option>
                                <option value="4000000">$4,000,000</option>
                                <option value="5000000">$5,000,000</option>
                                <option value="6000000">$6,000,000</option>
                                <option value="7000000">$7,000,000</option>
                                <option value="8000000">$8,000,000</option>
                                <option value="9000000">$9,000,000</option>
                                <option value="10000000">$10,000,000</option>
                            </select>
                          </label>
                      </div>	
                </fieldset>      
                <fieldset>
                    <h1>How long will you need coverage?</h1>
                      <div class="control-group">
                          <label class="control-text">
                            <select name="NewCategory" class="term">
                                <option selected="selected" value="">Select Term</option>
                                <option value="3">10-Year Term</option>
                                <option value="5">20-Year Term</option>
                                <option value="7">30-Year Term</option>
                            </select> 
                          </label>
                      </div>    
                      <div class="previous-step" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset> 
                </form>
            </div>
        </div>
    </div>
    <div class="footer" style="text-align:center; padding: 15px 0px;  position:fixed; bottom:0; width:100%; background-color:#9c292b;">
       <p>Usurance, Inc.</p> 
    </div>
    </body>
</html>
