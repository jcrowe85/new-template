<!-- register user on submit -->
<?php include_once('register.php'); ?>

<?php include_once('head.php') ?>
<script src="/js/userinfo.js"></script>
<body id="userinfo-page">
    <div class="sidebar col-md-3" >
        <a href="/index.php"><img id="process-logo" src="/images/logo-full-size.png" style="inline-block; float:left; margin-right:10px;"><h4 style="inline-block; float:left;">Usurance</h4></a>
            <br><br>
            <h3>Welcome to the application process.</h3>
            <br>
            <p>
            It's time for us to get to know you. We need your full name, phone number to contact you if needed, an email to send follow up notifications and a password. 
            <br><br>
            Don't worry, everything is taken over a secure connection and we will not share your information without your approval.                
            </p>
    </div>            
    <div class="main col-sm-12 col-md-9">
        <div class="row">
            <div class="header fluid">
                <div class="container">
                    <header>
                        <button class="getHelp" onClick="getHelp()">Get Help</button>
                    </header>
                </div>
            </div>                 
        </div>
        <div class="col-md-7">
            <div class="title">
            <h4>Let's create an account to save your progress.</h4>
            <p>Creating an account will save your progress and allow you to login to your dashboard later on.</p>
            </div>            
            <form method="post" class="new_user" id="userInfoForm" name="myForm" action="">
            <div class="step1">
              <div class='row'>
                  <div class='col-md-6 col-sm-12 col-xs-12'>
                       <div class="form-group">
                            <label type="text" class="form-control noBorder custom-size-header-box" name="firstNametext" value='First Name' readonly/>First Name</label>
                            <input 
                                class="form-control noBorder custom-size-input-box" 
                                id="firstName" 
                                placeholder="Enter your first name here" 
                                type="text" 
                                name="firstnametext" 
                                tabindex='1'
                                data-validation="required"/>
                       </div>
                  </div>
                  <div class='col-md-6 col-sm-12 col-xs-12'>
                        <div class="form-group">
                            <label type="text" class="form-control noBorder custom-size-header-box" name="middlename" value='Middle Name' readonly/>Middle Name</label>
                            <input 
                                class="form-control noBorder custom-size-input-box" 
                                id="middleName" 
                                placeholder="Enter your middle name here" 
                                type="text" 
                                name="middlenametext" 
                                tabindex='1'/>
                       </div>
                  </div>
              </div>
              <div class='row'>
                  <div class='col-md-12 col-sm-12 col-xs-12'>
                      <div class="form-group">
                                <label type="text" class="form-control noBorder custom-size-header-box" name="lastname" value='Last Name' readonly/>Last Name</label>
                                <input 
                                    class="form-control noBorder custom-size-input-box" 
                                    id="lastName" 
                                    placeholder="Enter your last name here" 
                                    type="text" 
                                    name="lastnametext" 
                                    tabindex='1'
                                    data-validation="required"/>
                       </div>
                  </div>       
              </div>
              <div class='row'>
                  <div class='col-md-6 col-sm-12 col-xs-12'>
                       <div class="form-group">
                            <label type="number" class="form-control noBorder custom-size-header-box" name="phonetype" value='Phone Number' readonly/>Choose Phone Type</label>
                             <select id="phoneType" 
                                class="form-control noBorder custom-size-input-box" 
                                name="BirthMonth" 
                                tabindex='1' 
                                data-validation="required">
                                <option value="">--Select--</option>
                                <option value="1">Mobile</option>
                                <option selected="selected" value="mobile">Home</option>
                             </select>
                       </div>
                  </div>
                  <div class='col-md-6 col-sm-12 col-xs-12'>
                        <div class="form-group">
                            <label type="text" class="form-control noBorder custom-size-header-box" name="bestphone" value='Best phone number to call' readonly/>Phone Number</label>
                            <input type="tel" class="form-control noBorder custom-size-input-box" id="fieldPhone" placeholder="Enter phone number" maxlength="10" name="bestphonetext" tabindex='1' data-validation="required number"/>
                       </div>
                  </div>
              </div>
              <div class='row'>
                  <div class='col-md-12 col-sm-12 col-xs-12'>
                      <div class="form-group">
                                <label type="text" class="form-control noBorder custom-size-header-box" name="email" value='Your email' />Your Email</label>
                                <input class="form-control noBorder custom-size-input-box" id="emailtext" placeholder="Enter your email" type="email" name="emailtext" tabindex='1' data-validation="required email"/>
                       </div>
                  </div>       
              </div>
              <div class='row'>
                  <div class='col-md-12 col-sm-12 col-xs-12'>
                      <div class="form-group">
                                <label type="text" class="form-control noBorder custom-size-header-box" name="password"  readonly/>Password (Minimum 8 Characters)</label>
                                <input class="form-control noBorder custom-size-input-box" id="passwordtext" type="password" name="passwordtext" tabindex='1' data-validation="required length" data-validation-length="min8"/>
                       </div>
                  </div>       
              </div>
              <div class='row'>
                  <div class='col-md-12 col-sm-12 col-xs-12'>
                      <div class="form-group">
                               <!--<button type="submit" name="continue" value="Continue To Full Application" id="btnContinue" class="btn btn-warning btn-block" tabindex='1'>Continue To Full Application</button>-->
                               <input type="submit" name="continue" value="Continue To Full Application" id="btnContinue" class="btn btn-warning btn-block"  tabindex='1'>
                       </div>
                  </div>       
              </div>
                <!--<div class="col-md-6" style="padding: 0px; padding-right:5px; padding-left:0px" >-->
                <!--  <input type="submit" name="commit" value="Almost Done -- Next" id="btnTerm" class="btn btn-warning btn-lg step1Button" />-->
                <!--</div>                    -->
            </div>
            <input type="hidden" name="company" value="<?php echo $_POST ['company'] ?>">
            <input type="hidden" name="premium" value="<?php echo $_POST ['premium'] ?>">
            <input type="hidden" name="Sex" value="<?php echo $_POST ['Sex'] ?>">
            <input type="hidden" name="Birthday" value="<?php echo $_POST ['Birthday'] ?>">
            <input type="hidden" name="BirthMonth" value="<?php echo $_POST ['BirthMonth'] ?>">
            <input type="hidden" name="BirthYear" value="<?php echo $_POST ['BirthYear'] ?>">
            <input type="hidden" name="parm3" value="<?php echo $_POST ['parm3'] ?>"><!-- custom weight parm -->                    
            <input type="hidden" name="parm2" value="<?php echo $_POST ['parm2'] ?>"><!-- custom height parm -->
            <input type="hidden" name="State" value="<?php echo $_POST ['State'] ?>">
            <input type="hidden" name="ZipCode" value="<?php echo $_POST ['ZipCode'] ?>">
            <input type="hidden" name="Health" value="<?php echo $_POST ['Health'] ?>">
            <input type="hidden" name="Smoker" value="<?php echo $_POST ['Smoker'] ?>">
            <input type="hidden" name="FaceAmount" value="<?php echo $_POST ['FaceAmount'] ?>">
            <input type="hidden" name="NewCategory" value="<?php echo $_POST ['NewCategory'] ?>">                  
            </form> 
        </div>
    </div>
    <!--<div class="sidebar">-->
    <!-- <a href="/index.php"><img id="process-logo" src="/images/logo-full-size.png" style="inline-block; float:left; margin-right:10px;"><h4 style="inline-block; float:left;">Usurance</h4></a>-->
    <!--    <br><br>-->
    <!--    <h3>Welcome to the application Process.</h3>-->
    <!--    <br>-->
    <!--    <p>-->
    <!--    It's time for us to get to know you. We need your full name, phone number to contact you if needed, an email to send follow up notifications and a password. -->
    <!--    <br><br>-->
    <!--    Don't worry, everything is taken over a secure connection and we will not share your information without your approval.                -->
    <!--    </p>-->
    <!--</div>-->
</body>
