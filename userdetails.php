<!-- update user's info with application data -->
<?php include_once('application-submit.php'); ?>

<?php include_once('head.php') ?>
<script src="/js/userinfo.js"></script>
<script>
$(document).ready(function(){
    
    // uncheck 'none of these' when checking medical conditions
    var check = $('#medical-conditions > div:nth-child(-n+12) input[type=checkbox]');
    $(check).click(function(){
    	$('#medical-conditions > div:nth-child(13) input[type=checkbox]').prop('checked', false);
    });   
    // uncheck medical conditions when selecting 'none of these'
    var uncheck = $('#medical-conditions > div:nth-child(13) input[type=checkbox]');
    $(uncheck).click(function(){
    	$('#medical-conditions > div:nth-child(-n+12) input[type=checkbox]').prop('checked', false);
    }); 
    
});
  </script>
 <style>
#userdetails-page #medical-conditions, #userdetails-page #activities{
    width:100%;
}
#userdetails-page label, #userdetails-page label{
    font-size: 12px;
}


 </style>
<body id="userdetails-page">
    <div class="sidebar col-md-3">
        <a href="/index.php"><img id="process-logo" src="/images/logo-full-size.png" style="inline-block; float:left; margin-right:10px;"><h4 style="inline-block; float:left;">Usurit</h4></a>
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
        <div class="col-sm-12 col-md-7" id="main">
            <div class="title">
              <h4>Alright! You made it to the application page. 
              <!--<small style="font-size:1.3rem;"><br>No phone number or email necessary</small>-->
              </h4>
               <p>On this page we're going to ask for some secure information. To keep you safe we use the most modern security.</p>
            </div>
        <?php include_once('userdetails-form.php'); ?>
        </div>
    </div>
</body>
</html>