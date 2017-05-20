<!-- update user's info with application data -->
<?php include_once('application-submit.php'); ?>

<?php include_once('head.php') ?>
<script src="/js/userinfo.js"></script>
<body id="userdetails-page">
    <div class="header fluid">
        <div class="container">
            <header>
                <button class="getHelp" onClick="getHelp()">Get Help</button>
            </header>
        </div>
    </div>
    <div class="main container">
        <div class="row">
            <div class="col-sm-12 col-md-7">
                  <h3>First things first...
                  <!--<small style="font-size:1.3rem;"><br>No phone number or email necessary</small>-->
                  </h3>
            <?php include_once('userdetails-form.php'); ?>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <a href="/index.php"><img id="process-logo" src="/images/logo-full-size.png" style="inline-block; float:left; margin-right:10px;"><h4 style="inline-block; float:left;">Usurance</h4></a>
            <br><br>
            <h3>Welcome to the application Process.</h3>
            <br>
            <p>
            It's time for us to get to know you. We need your full name, phone number to contact you if needed, an email to send follow up notifications and a password. 
            <br><br>
            Don't worry, everything is taken over a secure connection and we will not share your information without your approval.                
            </p>
    </div>
</body>