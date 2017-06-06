<?php include_once('head.php') ?>
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
          $(this).parents("fieldset").prev().find('input').each(function (elem) {
               $('#'+$(this).parents("fieldset").find('input')[elem].id).val('');
          });   
          <?php include('slide-prev.php') ?>
    });
      
    $('.previousmobile').click(function(){
      $(this).parents("fieldset").prev().find('input').each(function (elem) {
         $('#'+$(this).parents("fieldset").find('input')[elem].id).val('');
         });   
        <?php include('slide-prev.php') ?>
    });

    $('.BirthYear').keyup(function(){
        var yearLength = $(".BirthYear").val().length;
        var yearValue = $(".BirthYear").val();
        var monthValue = $(".month").val();
        var dayValue = $(".day").val();
        if (dayValue == '') {
            $(".day").focus();
        }
        if (monthValue == '') {
            $(".month").focus();
        }
        
        if (yearValue >= 1900) {
         
        }
        else if (yearLength == 4 && yearValue <= 1900 || isNaN(yearValue)) {
            $('.BirthYear').val('');
            $('.BirthYear').focus();
        }
        // if input = 4 move to next step
        if (yearLength == 4 && yearValue >= 1900) {
            <?php include('slide-next.php') ?>
        }
    });
    
    $('.month').keyup(function(){
        var monthValue = $(".month").val();
        if(monthValue > 12 || isNaN(monthValue)) {
            $(".month").val('');
            $(".month").focus();
        } 
    });
    
    $('.day').keyup(function(){
        var dayValue = $(".day").val();
        var monthValue = $(".month").val();
        if(dayValue > 31 || isNaN(dayValue)) {
            $(".day").val('');
            $(".day").focus();
        } else if(monthValue == '2' && dayValue > 29) {
            $(".day").val('');
            $(".day").focus();
        } else if((monthValue == '4' || monthValue == '6' || monthValue == '9' || monthValue == '11') && dayValue > 30) {
            $(".day").val('');
            $(".day").focus();
        }  
        
    });
    
    $('#weight').keyup(function(){
        var value =  $('#weight').val();
        if(isNaN(value[0]) || value[0] === '0') {
            $('#weight').val('');
            $('#weight').focus();
            return;
        }
        if (this.value.length == "3"){<?php include('slide-next.php') ?>}
    });
    
    $('.term').change(function(){
        $('#quick-quote').submit();
    });
    $('#faceAmount').change(function(){
        event.preventDefault();
    });
    
    $('#height').keyup(function(event){
        var value =  $('#height').val();
        if(isNaN(value[0]) || value[0] === '0') {
            $('#height').val('');
            $('#height').focus();
            return;
        }
        if(event.keyCode != 8){
            if (value.length === 1) {
                value += "\'";
            } else if(value[2] != 1) {
                value += "\"";
                $('#weight').focus();
            } else if (value.length === 4) {
                value += "\"";
                $('#weight').focus();
            }
        }
        
         $('#height').val(value);
    });

});

</script>
<body id="life-page">
    <div class="se-pre-con"></div>
    <div class="header fluid">
        <div class="container">
            <header>
                 <a href="/"><img id="process-logo" src="/images/logo-full-size.png"></a>
                <button class="getHelp" onClick="getHelp()">Get Help</button>
            </header>
        </div>
    </div>    
    <div class="progress fluid">
        <div class="bar"></div>
    </div>
    <div class="process container" style="margin: 0 auto;">
        <div class="row">
            <div class="quick-quote">
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
                              <input type="text" class='month' id="month" name="BirthMonth" placeholder="Mo" maxlength="2" />
                          </label>
                      </div>	
                      <div class="control-group">
                          <label class="control-text">
                              <input type="text" class='day' name="Birthday" id="day" placeholder="Day" maxlength="2"/>
                          </label>
                      </div> 
                      <div class="control-group">
                          <label class="control-text">
                              <input type="text" class="BirthYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                          </label>
                      </div> 
                      <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                      <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset>
                  <fieldset>
                      <h1>What is your height and weight?</h1>
                      <div class="control-group" id="height-weight">
                          <label class="control-text">
                              <input type="text" name="parm2" placeholder="Height" class="input" maxlength="5" id="height">
                          </label>
                      </div>	
                      <div class="control-group">
                          <label class="control-text">
                              <input type="text" name="parm3" placeholder="Lbs." class="input" maxlength="3" id="weight">
                          </label>
                      </div> 
                      <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                      <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset> 
                  <fieldset>
                      <h1>What state do you live in?</h1>
                      <div class="control-group"> 
                        <label class="control-text">
                          <select name="State">
                              <option style="background-color:#808080;" selected value="">Select State</option>
                              <option style="background-color:#808080;" value="1">Alabama</option>
                              <option style="background-color:#808080;" value="2">Alaska</option>
                              <option style="background-color:#808080;" value="3">Arizona</option>
                              <option style="background-color:#808080;" value="4">Arkansas</option>
                              <option style="background-color:#808080;" value="5">California</option>
                              <option style="background-color:#808080;" value="6">Colorado</option>
                              <option style="background-color:#808080;" value="7">Connecticut</option>
                              <option style="background-color:#808080;" value="8">Delaware</option>
                              <option style="background-color:#808080;" value="9">Dist.Columbia</option>
                              <option style="background-color:#808080;" value="10">Florida</option>
                              <option style="background-color:#808080;" value="11">Georgia</option>
                              <option style="background-color:#808080;" value="12">Hawaii</option>
                              <option style="background-color:#808080;" value="13">Idaho</option>
                              <option style="background-color:#808080;" value="14">Illinois</option>
                              <option style="background-color:#808080;" value="15">Indiana</option>
                              <option style="background-color:#808080;" value="16">Iowa</option>
                              <option style="background-color:#808080;" value="17">Kansas</option>
                              <option style="background-color:#808080;" value="18">Kentucky</option>
                              <option style="background-color:#808080;" value="19">Louisiana</option>
                              <option style="background-color:#808080;" value="20">Maine</option>
                              <option style="background-color:#808080;" value="21">Maryland</option>
                              <option style="background-color:#808080;" value="22">Massachusetts</option>
                              <option style="background-color:#808080;" value="23">Michigan</option>
                              <option style="background-color:#808080;" value="24">Minnesota</option>
                              <option style="background-color:#808080;" value="25">Mississippi</option>
                              <option style="background-color:#808080;" value="26">Missouri</option>
                              <option style="background-color:#808080;" value="27">Montana</option>
                              <option style="background-color:#808080;" value="28">Nebraska</option>
                              <option style="background-color:#808080;" value="29">Nevada</option>
                              <option style="background-color:#808080;" value="30">New Hampshire</option>
                              <option style="background-color:#808080;" value="31">New Jersey</option>
                              <option style="background-color:#808080;" value="32">New Mexico</option>
                              <option style="background-color:#808080;" value="52">NY Non-Bus</option>
                              <option style="background-color:#808080;" value="33">NY Business</option>
                              <option style="background-color:#808080;" value="34">North Carolina</option>
                              <option style="background-color:#808080;" value="35">North Dakota</option>
                              <option style="background-color:#808080;" value="36">Ohio</option>
                              <option style="background-color:#808080;" value="37">Oklahoma</option>
                              <option style="background-color:#808080;" value="38">Oregon</option>
                              <option style="background-color:#808080;" value="39">Pennsylvania</option>
                              <option style="background-color:#808080;" value="40">Rhode Island</option>
                              <option style="background-color:#808080;" value="41">South Carolina</option>
                              <option style="background-color:#808080;" value="42">South Dakota</option>
                              <option style="background-color:#808080;" value="43">Tennessee</option>
                              <option style="background-color:#808080;" value="44">Texas</option>
                              <option style="background-color:#808080;" value="45">Utah</option>
                              <option style="background-color:#808080;" value="46">Vermont</option>
                              <option style="background-color:#808080;" value="47">Virginia</option>
                              <option style="background-color:#808080;" value="48">Washington</option>
                              <option style="background-color:#808080;" value="49">West Virginia</option>
                              <option style="background-color:#808080;" value="50">Wisconsin</option>
                              <option style="background-color:#808080;" value="51">Wyoming</option>
                              <option style="background-color:#808080;" value="53">Guam</option>
                              <option style="background-color:#808080;" value="54">Puerto Rico</option>
                              <option style="background-color:#808080;" value="55">Virgin Islands</option>
                              <option style="background-color:#808080;" value="56">Amer. Samoa</option>
                              
                          </select>
                      </div>
                      <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                      <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset> 
                  <fieldset>
                      <h1>What is your health rating?</h1>
                      <div class="control-group">
                          <label class="control control--checkbox">
                              <input type="radio" name="Health" value="PP"/>
                              <div  class="control__indicator">Very Good</div>
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
                      <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                      <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
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
                          <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                          <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset>
                  <fieldset>
                      <h1>How much coverage would you like?</h1>
                      <div class="control-group">
                          <label class="control-text">
                            <select name="FaceAmount" id="faceamount">
                                <option style="background-color:#808080;" selected="selected" value="">Select Coverage</option>
                                <option style="background-color:#808080;" value="10000">$10,000</option>
                                <option style="background-color:#808080;" value="25000">$25,000</option>
                                <option style="background-color:#808080;" value="50000">$50,000</option>
                                <option style="background-color:#808080;" value="50000">$50,000</option>
                                <option style="background-color:#808080;" value="75000">$75,000</option>
                                <option style="background-color:#808080;" value="100000">$100,000</option>
                                <option style="background-color:#808080;" value="125000">$125,000</option>
                                <option style="background-color:#808080;" value="150000">$150,000</option>
                                <option style="background-color:#808080;" value="175000">$175,000</option>
                                <option style="background-color:#808080;" value="200000">$200,000</option>
                                <option style="background-color:#808080;" value="225000">$225,000</option>
                                <option style="background-color:#808080;" value="250000">$250,000</option>
                                <option style="background-color:#808080;" value="300000">$300,000</option>
                                <option style="background-color:#808080;" value="350000">$350,000</option>
                                <option style="background-color:#808080;" value="400000">$400,000</option>
                                <option style="background-color:#808080;" value="450000">$450,000</option>
                                <option style="background-color:#808080;" value="500000">$500,000</option>
                                <option style="background-color:#808080;" value="550000">$550,000</option>
                                <option style="background-color:#808080;" value="600000">$600,000</option>
                                <option style="background-color:#808080;" value="650000">$650,000</option>
                                <option style="background-color:#808080;" value="700000">$700,000</option>
                                <option style="background-color:#808080;" value="750000">$750,000</option>
                                <option style="background-color:#808080;" value="800000">$800,000</option>
                                <option style="background-color:#808080;" value="900000">$900,000</option>
                                <option style="background-color:#808080;" value="1000000">$1,000,000</option>
                                <option style="background-color:#808080;" value="1100000">$1,100,000</option>
                                <option style="background-color:#808080;" value="1250000">$1,250,000</option>
                                <option style="background-color:#808080;" value="1500000">$1,500,000</option>
                                <option style="background-color:#808080;" value="1750000">$1,750,000</option>
                                <option style="background-color:#808080;" value="2000000">$2,000,000</option>
                                <option style="background-color:#808080;" value="2500000">$2,500,000</option>
                                <option style="background-color:#808080;" value="3000000">$3,000,000</option>
                                <option style="background-color:#808080;" value="4000000">$4,000,000</option>
                                <option style="background-color:#808080;" value="5000000">$5,000,000</option>
                                <option style="background-color:#808080;" value="6000000">$6,000,000</option>
                                <option style="background-color:#808080;" value="7000000">$7,000,000</option>
                                <option style="background-color:#808080;" value="8000000">$8,000,000</option>
                                <option style="background-color:#808080;" value="9000000">$9,000,000</option>
                                <option style="background-color:#808080;" value="10000000">$10,000,000</option>
                            </select>
                          </label>
                      </div>
                        <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                        <div class="previous-step hidden-md"><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                </fieldset>      
                <fieldset>
                    <h1>How long will you need coverage?</h1>
                      <div class="control-group">
                          <label class="control-text">
                            <select name="NewCategory" class="term">
                                <option style="background-color:#808080;" selected="selected" value="">Select Term</option>
                                <option style="background-color:#808080;" value="2">5-Year Term</option>
                                <option style="background-color:#808080;" value="3">10-Year Term</option>
                                <option style="background-color:#808080;" value="4">15-Year Term</option>
                                <option style="background-color:#808080;" value="5">20-Year Term</option>
                                <option style="background-color:#808080;" value="6">25-Year Term</option>
                                <option style="background-color:#808080;" value="7">30-Year Term</option>
                                <option style="background-color:#808080;" value="9">35-Year Term</option>      
                            </select> 
                          </label>
                      </div>
                       <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                      <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset> 
                </form>
            </div>
        </div>
    </div>
    <div class="footer hidden-xs hidden-sm" style="text-align:center; padding: 15px 0px;  position:fixed; bottom:0; width:100%; background-color:#9c292b;">
       <p>Usurance, Inc.</p> 
    </div>
    </body>
</html>
