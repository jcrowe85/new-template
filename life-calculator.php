<?php include_once('head.php') ?>
<style type="text/css">
    .btn-circular-box {
        width: 130px;
        height: 130px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 64px;
      }
      
      #healthIssue {
          text-align: start !important;
      }
      
      .align-right {
          padding-left: 15%;
      }
      
      .align-checkbox {
          text-align: start !important;
          padding-left: 15%;
      }
</style>
<script>
$(document).ready(function(){
   
    
    /*$(':checkbox').click(function(){
          <?php include('slide-next.php') ?>
    });*/
    
    $('.medication').click(function(){
          console.log(321);
    });
    
   /* $(':radio').click(function(){
          <?php include('slide-next.php') ?>
    });*/
    
    $( 'input[name="Sex"]:radio' ).change(function() {
        <?php include('slide-next.php') ?>
    });
    
    $( 'input[name="nicotine"]:radio' ).change(function() {
        <?php include('slide-next.php') ?>
    });
    
    $('#next').click(function(e){
       if($('input[name=option1]:checked').val() == undefined && 
            $('input[name=option2]:checked').val() == undefined && 
            $('input[name=option3]:checked').val() == undefined) {
                return false;
            }
        $('input[name=option1]:checked').val() == undefined ? $('#option1').remove() : '';
        $('input[name=option2]:checked').val() == undefined ? $('#option2').remove() : '';
        $('input[name=option3]:checked').val() == undefined ? $('#option3').remove() : '';
       
          <?php include('slide-next.php') ?>
          e.preventDefault();
          e.stopPropagation();
    });
    
        $('#next').click(function(e){
       if($('input[name=bloodpressure]:checked').val() == undefined && 
            $('input[name=option2]:checked').val() == undefined && 
            $('input[name=option3]:checked').val() == undefined) {
                return false;
            }
        $('input[name=option1]:checked').val() == undefined ? $('#option1').remove() : '';
        $('input[name=option2]:checked').val() == undefined ? $('#option2').remove() : '';
        $('input[name=option3]:checked').val() == undefined ? $('#option3').remove() : '';
       
          <?php include('slide-next.php') ?>
          e.preventDefault();
          e.stopPropagation();
    });
    
    
    $('#state').change(function(){
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
    
    $('.dobYear').keyup(function(){
        var yearLength = $(".dobYear").val().length;
        var yearValue = $(".dobYear").val();
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
            $('.dobYear').val('');
            $('.dobYear').focus();
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
    
    $('#healthNo').click(function() {
       $('#bloodpressuresection').remove();
       $('#cholesterolsection').remove();
       
       $('#Depressionsection').remove();
       $('#SleepApneasection').remove();
       
       $('#asthmasection').remove();
       $('#diabetessection').remove();
       
       $('#alcoholsection').remove();
       $('#drugsection').remove();
       
       $('#healthIssue').remove();
        <?php include('slide-next.php') ?>
    });
    
    $('#healthYes').click(function() {
        <?php include('slide-next.php') ?>
    });
    
     $('.next').click(function() {
        <?php include('slide-next.php') ?>
    });
    
    $('#healthNext').click(function(e) {
        $('#bloodpressure').is(':checked') ? '' : $('#bloodpressuresection').remove();
        $('#cholesterol').is(':checked') ? '' : $('#cholesterolsection').remove();
        
        $('#depression').is(':checked') ? '' : $('#Depressionsection').remove();
        $('#sleep').is(':checked') ? '' : $('#SleepApneasection').remove();
        
        $('#asthma').is(':checked') ? '' : $('#asthmasection').remove();
        $('#diabetes').is(':checked') ? '' : $('#diabetessection').remove();
        
        $('#alcohol').is(':checked') ? '' : $('#alcoholsection').remove();
        $('#drug').is(':checked') ? '' : $('#drugsection').remove();
        
        <?php include('slide-next.php') ?>
        e.preventDefault();
        e.stopPropagation();
    });
    
     /*$('input[name=option1]').click(function() {
            if(!$('#option2').length && !$('#option3').length) {
                $('#quick-quote').submit();
            } else {
                <?php include('slide-next.php') ?>
            }
     });
     
     $('input[name=option2]').click(function() {
            if(!$('#option3').length) {
                $('#quick-quote').submit();
            } else {
                <?php include('slide-next.php') ?>
            }
     });
     
     $('input[name=option3]').click(function() {
        $('#quick-quote').submit();
     });*/
     
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
                <form id="quick-quote" method="post">
                    <fieldset>
                      <h1>Finance</h1>
                      <div data-toggle="buttons">
                          <label class="btn btn-default btn-circular-box"><input type="checkbox" name="option1" value="0">Option 1</label>
                          <label class="btn btn-default btn-circular-box"><input type="checkbox" name="option2" value="1">Option 2</label>
                          <label class="btn btn-default btn-circular-box"><input type="checkbox" name="option3" value="2">Option 3</label>
                      </div>
                      <div class='row'>
                          <button class='btn btn-default btn-lg' id='next'>Next</button>
                      </div>
                    </fieldset>
                    
                    <fieldset id='option1'>
                      <div>
                          <h1>Option one</h1>
                          <div class="control-group">
                              <label>
                                  <div class="btn btn-default btn-lg next">Next</div>
                              </label>
                          </div>
                          <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                          <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                      </div>    
                  </fieldset>
                  <fieldset id='option2'>
                      <div>
                          <h1>Option two</h1>
                          <div class="control-group">
                              <label>
                                  <div class="btn btn-default btn-lg next">Next</div>
                              </label>
                          </div>
                          <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                          <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                      </div>
                  </fieldset>
                  <fieldset id='option3'>
                      <div>
                          <h1>Option three</h1>
                          <div class="control-group">
                              <label>
                                 
                                  <div class="btn btn-default btn-lg next">Next</div>
                              </label>
                          </div>
                          <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                          <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                      </div>
                  </fieldset>
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
                          <select name="State" id='state'>
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
                      <h1>Do you have any health related issues?</h1>
                      <div class="control-group">
                          <label class="control control--checkbox">
                              <input type="radio" id='healthYes' name="Health" value="PP"/>
                              <div  class="control__indicator">Yes</div>
                          </label>
                      </div>	
                      <div class="control-group">
                          <label class="control control">
                              <input type="radio" id='healthNo' name="Health" value="P"/>
                              <div class="control__indicator">No</div>
                          </label>
                      </div>       
                      <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                      <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset>
                  <fieldset id='healthIssue'>
                      <h1>Do you have any history of the health below?</h1>
                           <div class='align-right'>
                               <div class="row">
                                    <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                        <input id="bloodpressure" class="checkbox-custom" name="bloodpressure" type="checkbox">
                                        <label for="bloodpressure" class="checkbox-custom-label" value="bloodpressure"><span style="color:white;">High blood pressure</span></label>
                                    </div>
                                    <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                        <input id="cholesterol" class="checkbox-custom" name="cholesterol" type="checkbox" value="cholesterol">
                                        <label for="cholesterol" class="checkbox-custom-label"><span style="color:white;">High Cholesterol</span></label>
                                    </div>
                               </div></br>
                               
                                <div class="row">
                                    <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                        <input id="depression" class="checkbox-custom" name="depression" type="checkbox">
                                        <label for="depression" class="checkbox-custom-label" value="depression"><span style="color:white;">Depression</span></label>
                                    </div>
                                    <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                        <input id="sleep" class="checkbox-custom" name="sleep" type="checkbox" value="sleep">
                                        <label for="sleep" class="checkbox-custom-label"><span style="color:white;">Sleep Apnea</span></label>
                                    </div>
                                </div></br>
                                
                                <div class="row">
                                    <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                        <input id="asthma" class="checkbox-custom" name="asthma" type="checkbox">
                                        <label for="asthma" class="checkbox-custom-label" value="asthma"><span style="color:white;">Asthma</span></label>
                                    </div>
                                    <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                        <input id="diabetes" class="checkbox-custom" name="diabetes" type="checkbox" value="diabetes">
                                        <label for="diabetes" class="checkbox-custom-label"><span style="color:white;">Diabetes</span></label>
                                    </div>
                                </div></br>
                                
                                <div class="row">
                                   <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                        <input id="alcohol" class="checkbox-custom" name="alcohol" type="checkbox">
                                        <label for="alcohol" class="checkbox-custom-label" value="alcohol"><span style="color:white;">Alcohol Abuse</span></label>
                                    </div>
                                    <div class='col-md-6 col-sm-12 col-xs-12 padding-left-3'>
                                        <input id="drug" class="checkbox-custom" name="drug" type="checkbox" value="drug">
                                        <label for="drug" class="checkbox-custom-label"><span style="color:white;">Drug Abuse</span></label>
                                    </div>
                                </div></br>
                           </div>
                            <div class='row' style="padding-bottom:35px;padding-left: 45%;">
                              <button class='btn btn-default btn-lg' id='healthNext'>Next</button>
                            </div>
                            <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                            <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset>
                  
                  
                  
                  
                  
                  
                  <fieldset id="bloodpressuresection">
                        <h4>What is your systolic pressure?</h4>
                        <div class="control-group"> 
                            <label class="control-text"> 
                                <select name="systolic">
                                  <option style="background-color:#808080;" selected value="">--Select--</option>
                                  <option style="background-color:#808080;" value="1">100</option>
                                  <option style="background-color:#808080;" value="2">200</option>
                                </select>
                            </label>
                        </div>
                        <h4>What is your diastolic pressure?</h4>
                        <div class="control-group"> 
                            <label class="control-text"> 
                                <select name="diastolic">
                                  <option style="background-color:#808080;" selected value="">--Select--</option>
                                  <option style="background-color:#808080;" value="1">100</option>
                                  <option style="background-color:#808080;" value="2">200</option>
                                </select>
                            </label>
                        </div>
                        <h4>When were you last treated for high pressure?</h4>
                          <div class="control-group">
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
                                  <input type="text" class="dobYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                              </label>
                          </div>
                          <h4>Are you on any medication to control your high blood pressure?</h4>
                          <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="medication" value="PP"/>
                              <div  class="control__indicator">Yes</div>
                          </label>
                      </span>	
                      <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="medication" value="P"/>
                              <div class="control__indicator">No</div>
                          </label>
                      </span> 
                       <h4>When did you first start taking it? What is it?</h4>
                          <span class="control-group">
                            <label class="control-text">
                              <input type="text" name="fname" placeholder="Enter"/>
                            </label>
                          </span>
                          <div style="padding-bottom:35px;">
                            <div class="btn btn-default btn-lg next">Next</div>
                          </div>
                         <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                          <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                    </fieldset>
                  
                  
                  
                  
                  
                  
                  
                  <fieldset id="cholesterolsection">
                      <h4>Cholesterol Level?</h4>
                       <div class="control-group"> 
                            <label class="control-text"> 
                                <select name="systolic">
                                  <option style="background-color:#808080;" selected value="">--Select--</option>
                                  <option style="background-color:#808080;" value="1">100</option>
                                  <option style="background-color:#808080;" value="2">200</option>
                                </select>
                            </label>
                        </div>
                       <h4>HDL Ratio?</h4>
                        <div class="control-group"> 
                            <label class="control-text"> 
                                <select name="hdl">
                                  <option style="background-color:#808080;" selected value="">--Select--</option>
                                  <option style="background-color:#808080;" value="1">100</option>
                                  <option style="background-color:#808080;" value="2">200</option>
                                </select>
                            </label>
                        </div>  
                      <h4>When were you last treated for high cholesterol?</h4>
                          <div class="control-group">
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
                                  <input type="text" class="dobYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                              </label>
                          </div>
                          <h4>Are you on any medication to control your high cholesterol?</h4>
                          <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="medication1" value="PP"/>
                              <div  class="control__indicator">Yes</div>
                          </label>
                      </span>	
                      <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="medication1" value="P"/>
                              <div class="control__indicator">No</div>
                          </label>
                      </span> 
                         <h4>When did you first start taking it? What is it?</h4>
                          <span class="control-group">
                            <label class="control-text">
                              <input type="text" name="fname" placeholder="Enter"/>
                            </label>
                          </span>
                        <div style="padding-bottom:35px;">
                          <div class="btn btn-default btn-lg next">Next</div>  
                        </div>
                          <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                          <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                    </fieldset>
                  
                  
                  
                  
                  
                  
                  
                  <fieldset id="Depressionsection">
                     <h3>Depression is selected QNS</h3>
                        <h4>When were you diagnosed?</h4>
                       <div class="control-group">
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
                                  <input type="text" class="dobYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                              </label>
                          </div>
                       <h4>What was your diagnosis?</h4>
                        <div class="control-group"> 
                            <label class="control-text"> 
                                <select name="diagnosis">
                                  <option style="background-color:#808080;" selected value="">--Select--</option>
                                  <option style="background-color:#808080;" value="1">Mild</option>
                                  <option style="background-color:#808080;" value="2">Moderate</option>
                                  <option style="background-color:#808080;" value="2">Severe</option>
                                </select>
                            </label>
                        </div>  
                        <h4>Are you currently undergoing treatment for depression?</h4>
                          <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="depression" value="PP"/>
                              <div  class="control__indicator">Yes</div>
                          </label>
                      </span>	
                      <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="depression" value="P"/>
                              <div class="control__indicator">No</div>
                          </label>
                      </span>
                       <h4>How many different types of medications are you currently talking?</h4>
                        <div class="control-group"> 
                            <label class="control-text"> 
                                <select name="diagnosis">
                                  <option style="background-color:#808080;" selected value="">--Select--</option>
                                  <option style="background-color:#808080;" value="1">1</option>
                                  <option style="background-color:#808080;" value="2">2</option>
                                  <option style="background-color:#808080;" value="2">3</option>
                                </select>
                            </label>
                        </div> 
                        <h4>Are you currently in psychotherapy treatment?</h4>
                          <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="psychotheraphy" value="PP"/>
                              <div  class="control__indicator">Yes</div>
                          </label>
                      </span>	
                      <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="psychotheraphy" value="P"/>
                              <div class="control__indicator">No</div>
                          </label>
                      </span>
                      <h4>Have you ever been hospitalized due to depression?</h4>
                          <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="hospitalized" value="PP"/>
                              <div  class="control__indicator">Yes</div>
                          </label>
                      </span>	
                      <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="hospitalized" value="P"/>
                              <div class="control__indicator">No</div>
                          </label>
                      </span>
                      <h4>When was the last hospitalization?</h4>
                          <div class="control-group">
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
                                <input type="text" class="dobYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                              </label>
                          </div>
                          <div style="padding-bottom:35px;">
                              <div class="btn btn-default btn-lg next">Next</div>  
                          </div>
                          <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                          <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                       </fieldset>
                  
                  
                  
                  
                  
                  
                  
                  
                     <fieldset id="SleepApneasection">
                        <h3>Sleep Apnea is selected QNS(Please Adjust the format)</h3>
                      
                        <h4>When was you diagnosed?</h4>
                          <div class="control-group">
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
                                  <input type="text" class="dobYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                              </label>
                          </div>
                        <h4>What was your diagnosis?</h4>
                        <div class="control-group"> 
                            <label class="control-text"> 
                                <select name="diagnosis">
                                  <option style="background-color:#808080;" selected value="">--Select--</option>
                                  <option style="background-color:#808080;" value="1">Mild</option>
                                  <option style="background-color:#808080;" value="2">Moderate</option>
                                  <option style="background-color:#808080;" value="2">Severe</option>
                                </select>
                            </label>
                        </div>  
                        <h4>Have you received treatment?</h4>
                          <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="apnea" value="PP"/>
                              <div  class="control__indicator">Yes</div>
                          </label>
                      </span>	
                      <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="apnea" value="P"/>
                              <div class="control__indicator">No</div>
                          </label>
                      </span>
                       <h4>When was this treatment?</h4>
                       <div class="control-group">
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
                                  <input type="text" class="dobYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                              </label>
                          </div>
                        <h4>Do you use CPAP machine?</h4>
                          <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="cpap" value="PP"/>
                              <div  class="control__indicator">Yes</div>
                          </label>
                      </span>	
                      <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="cpap" value="P"/>
                              <div class="control__indicator">No</div>
                          </label>
                      </span>
                      <h4>Have you done an overnight sleep study?(if yes next QNS should Display)</h4>
                          <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="overnight" value="PP"/>
                              <div  class="control__indicator">Yes</div>
                          </label>
                      </span>	
                      <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="overnight" value="P"/>
                              <div class="control__indicator">No</div>
                          </label>
                      </span>
                      <h4>When was the sleep study?</h4>
                       <div class="control-group">
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
                                  <input type="text" class="dobYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                              </label>
                          </div>
                      <h4>Oxygen Saturation %</h4>
                        <span class="control-group">
                        <label class="control-text">
                          <input type="text" name="oxygen" placeholder="Enter"/>
                        </label>
                      </span>
                      <h4>Apnea-hypopnea index (AHI)</h4>
                        <span class="control-group">
                        <label class="control-text">
                          <input type="text" name="hypopnea" placeholder="Enter"/>
                        </label>
                      </span>
                      <h4>Apnea index</h4>
                        <span class=""control-group>
                        <label class="control-text">
                          <input type="text" name="index" placeholder="Enter"/>
                        </label>
                      </span>
                      <h4>Respiratory disturbance index (RDI)</h4>
                        <span class="control-group">
                        <label class="control-text">
                          <input type="text" name="rdi" placeholder="Enter"/>
                        </label>
                      </span>
                     <div style="padding-bottom:35px;">
                      <div class="btn btn-default btn-lg next">Next</div>  
                     </div>
                      <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                      <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                    </fieldset>
                  
                  
                  
                  
                  
                  
                  <fieldset id="asthmasection">
                    <h3>Asthma is selected QNS(Please Adjust the format)</h3>
                      <h4>When was you diagnosed?</h4>
                          <div class="control-group">
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
                                  <input type="text" class="dobYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                              </label>
                          </div>
                          <h4>What was your diagnosis?</h4>
                          <div class="control-group"> 
                            <label class="control-text"> 
                                <select name="diagnosis">
                                  <option style="background-color:#808080;" selected value="">--Select--</option>
                                  <option style="background-color:#808080;" value="1">Mild</option>
                                  <option style="background-color:#808080;" value="2">Moderate</option>
                                  <option style="background-color:#808080;" value="2">Severe</option>
                                </select>
                            </label>
                         </div>  
                         <h4>Have you ever been medically treated for Asthma?(If yes Display below menctioned QNS)</h4>
                         <span>
                              <label class="control control-group">
                                  <input type="radio" class='medication' name="asthma" value="PP"/>
                                  <div  class="control__indicator">Yes</div>
                              </label>
                          </span>	
                          <span>
                              <label class="control control-group">
                                  <input type="radio" class='medication' name="asthma" value="P"/>
                                  <div class="control__indicator">No</div>
                              </label>
                          </span>
                          <h4>Are you currently being treated for Asthma?(Display this QNS)</h4>
                          <span>
                              <label class="control control-group">
                                  <input type="radio" class='medication' name="asthmaqns" value="PP"/>
                                  <div  class="control__indicator">Yes</div>
                              </label>
                          </span>	
                          <span>
                              <label class="control control-group">
                                  <input type="radio" class='medication' name="asthmaqns" value="P"/>
                                  <div class="control__indicator">No</div>
                              </label>
                          </span>
                          <h4>Check which of the following treatments you use:(Display this QNS if the anser is yes for above QNS )</h4>
                                 <div class="row align-checkbox">
                                    <div class='col-md-6 col-sm-12 col-xs-12'>
                                        <input class="checkbox-custom" name="bronchodilators" type="checkbox">
                                        <label class="checkbox-custom-label" value="bronchodilators"><span style="color:white;">Inhaled bronchodilators</span></label>
                                    </div>
                                    <div class='col-md-6 col-sm-12 col-xs-12 '>
                                        <input class="checkbox-custom" name="nosteroids" type="checkbox" value="nosteroids">
                                        <label class="checkbox-custom-label"><span style="color:white;">Oral medication(no steroids)</span></label>
                                    </div>
                                </div>
                                <div class="row align-checkbox">
                                    <div class='col-md-6 col-sm-12 col-xs-12'>
                                        <input class="checkbox-custom" name="withsteroids" type="checkbox">
                                        <label class="checkbox-custom-label" value="withsteroids"><span style="color:white;">Oral medication(with steroids)</span></label>
                                    </div>
                                    <div class='col-md-6 col-sm-12 col-xs-12 '>
                                        <input  class="checkbox-custom" name="inhaler" type="checkbox" value="inhaler">
                                        <label class="checkbox-custom-label"><span style="color:white;">Rescue inhaler</span></label>
                                    </div>
                                </div>
                                <div class="row align-checkbox">
                                    <div class='col-md-12'>
                                      <div class="row">
                                            <div class='col-md-6 col-sm-12 col-xs-12'>
                                                <input class="checkbox-custom" name="Corticosteroids" type="checkbox">
                                                <label  class="checkbox-custom-label" value="Corticosteroids"><span style="color:white;">Inhaled Corticosteroids</span></label>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                                <h4>On average, how many asthma attacks do you have per year?</h4>
                                <span class="control-group">
                                    <label class="control-text">
                                      <input type="text" name="attacks" placeholder="Enter"/>
                                    </label>
                               </span>
                               <h4>Have you ever been hospatalized due to asthma?(if yes display below Qns)</h4>
                              <span>
                                  <label class="control control-group">
                                      <input type="radio" class='medication' name="hospatalized" value="PP"/>
                                      <div  class="control__indicator">Yes</div>
                                  </label>
                              </span>	
                              <span>
                                  <label class="control control-group">
                                      <input type="radio" class='medication' name="hospatalized" value="P"/>
                                      <div class="control__indicator">No</div>
                                  </label>
                              </span>
                              <h4>How many times in your entire life have you been hospatalized due to asthma?(Display this Qns)</h4>
                                <span class="control-group">
                                    <label class="control-text">
                                      <input type="text" name="Entire" placeholder="Enter"/>
                                    </label>
                                </span>
                               <h4>When was the last hospatalization?(Display this Qns)</h4>
                                   <div class="control-group">
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
                                          <input type="text" class="dobYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                                      </label>
                                  </div>
                                <div style="padding-bottom:35px;">
                              <div class="btn btn-default btn-lg next">Next</div>  
                            </div>
                         <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                        <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                    </fieldset>
                  
                  
                  
                  
                  
                  
                    <fieldset id="diabetessection">
                        <h3>Diabetes is selected QNS(Please Adjust the format)</h3>
                        <h4>When was you diagnosed?</h4>
                          <div class="control-group">
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
                                  <input type="text" class="dobYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                              </label>
                          </div>
                        <h4>Select:</h4>
                          <span>
                              <label class="control control-group">
                                  <input type="radio" class='medication' name="diabetes" value="PP"/>
                                  <div  class="control__indicator">Type1</div>
                              </label>
                          </span>	
                          <span>
                              <label class="control control-group">
                                  <input type="radio" class='medication' name="diabetes" value="P"/>
                                  <div class="control__indicator">Type2</div>
                              </label>
                          </span>
                        <h4>What was your last A1C reading?</h4>
                            <span class="control-group">
                                <label class="control-text">
                                  <input type="text" name="a1c" placeholder="Enter"/>
                                </label>
                            </span>
                        <h4>What's your average A1C reading for past 12 months?</h4>
                            <span class="control-group">
                                <label class="control-text">
                                  <input type="text" name="reading" placeholder="Enter"/>
                                </label>
                            </span>
                          <h4>Have you had any complications from diabetes?</h4>
                            <span>
                              <label class="control control-group">
                                  <input type="radio" class='medication' name="complications" value="PP"/>
                                  <div  class="control__indicator">Yes</div>
                              </label>
                            </span>	
                            <span>
                              <label class="control control-group">
                                  <input type="radio" class='medication' name="complications" value="P"/>
                                  <div class="control__indicator">No</div>
                              </label>
                            </span>
                        <h4>Are you currently undergoing treatment for diabetes?</h4>
                            <span>
                              <label class="control control-group">
                                  <input type="radio" class='medication' name="treatment" value="PP"/>
                                  <div  class="control__indicator">Yes</div>
                              </label>
                            </span>	
                            <span>
                               <label class="control control-group">
                                  <input type="radio" class='medication' name="treatment" value="P"/>
                                  <div class="control__indicator">No</div>
                               </label>
                            </span>
                        <h4>What's your daily dosage of insulin units?</h4>
                            <div class="control-group"> 
                                <label class="control-text"> 
                                    <select name="diagnosis">
                                      <option style="background-color:#808080;" selected value="">--Select--</option>
                                      <option style="background-color:#808080;" value="1">10</option>
                                      <option style="background-color:#808080;" value="2">20</option>
                                      <option style="background-color:#808080;" value="2">30</option>
                                    </select>
                                </label>
                            </div>  
                       <div style="padding-bottom:35px;">
                          <div class="btn btn-default btn-lg next">Next</div>  
                       </div>
                      <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                      <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                   </fieldset>
                  
                  
                  
                  
                  
                  
                  
                     <fieldset id="alcoholsection">
                        <h3>Alcohol abuse is selected QNS</h3>
                        <h4>Have you ever been treated for Alcohol abuse</h4>
                        <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="alcohol" value="PP"/>
                              <div  class="control__indicator">Yes</div>
                          </label>
                       </span>	
                       <span>
                          <label class="control control-group">
                              <input type="radio" class='medication' name="alcohol" value="P"/>
                              <div class="control__indicator">No</div>
                          </label>
                       </span>
                        <h4>When was the most recent treatment?</h4>
                          <div class="control-group">
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
                                  <input type="text" class="dobYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                              </label>
                          </div>
                          <div style="padding-bottom:35px;">
                             <div class="btn btn-default btn-lg next">Next</div> 
                          </div>
                            <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                            <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                    </fieldset>
                    
                    
                    
                    
                    <fieldset id="drugsection">
                        <h3>Drug abuse is selected QNS</h3>
                        <h4>Have you ever been treated for drug abuse</h4>
                          <span>
                              <label class="control control-group">
                                  <input type="radio" class='medication' name="drug" value="PP"/>
                                  <div  class="control__indicator">Yes</div>
                              </label>
                          </span>	
                          <span>
                              <label class="control control-group">
                                  <input type="radio" class='medication' name="drug" value="P"/>
                                  <div class="control__indicator">No</div>
                              </label>
                          </span>
                        <h4>When was the most recent treatment?</h4>
                          <div class="control-group">
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
                                  <input type="text" class="dobYear" name="BirthYear" id="year" placeholder="Year" maxlength="4"/>
                              </label>
                          </div> 
                          <div style="padding-bottom:35px;">
                             <div class="btn btn-default btn-lg next">Next</div> 
                          </div>
                            <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                            <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                    </fieldset>
                  
                  
                  
                  <fieldset>
                      <h1>Do you use nicotine products?</h1>
                      <div class="control-group">
                          <label class="control control--checkbox">
                              <input type="radio" name="nicotine" value="Y"/>
                              <div class="control__indicator">Yes</div>
                          </label>
                      </div>	
                      <div class="control-group">
                          <label class="control control">
                              <input type="radio" name="nicotine" value="N"/>
                              <div class="control__indicator">No</div>
                          </label>
                      </div>
                          <span class="previousmobile visible-xs visible-sm visible-md back"><i class="fa fa-chevron-left" aria-hidden="true"></i>Back</span>
                          <div class="previous-step hidden-md" ><button type="button"><img src="/images/down-arrow.png"></img></button></div>
                  </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>