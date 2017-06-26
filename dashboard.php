<!-- update user's info with application data -->
<?php include_once('application-submit.php'); ?>

<?php include_once('head.php') ?>
<script src="/js/userinfo.js"></script>
<script>
$(document).ready(function(){
    
   $('#thankYouModal').modal('show');
    
    $('#closeModal').click(function () {
      $('#thankYouModal').modal('hide');
    });
    
});
</script>
<style type="text/css">
  .active {
    color: red;
    text-decoration: none !important;
  }
  
  .active a {
    color: red !important;
  }
<!-- update user's info with application data -->
<?php include_once('application-submit.php'); ?>

<?php include_once('head.php') ?>
<script src="/js/userinfo.js"></script>
<script>
$(document).ready(function(){
    
   $('#thankYouModal').modal('show');
    
    $('#closeModal').click(function () {
      $('#thankYouModal').modal('hide');
    });
    
});
</script>
<style type="text/css">
  .active {
    color: red;
    text-decoration: none !important;
  }
  
  .active a {
    color: red !important;
  }
  
  .navbar-toggle {
    border: 1px solid #cc2020;
  }
  
  .icon-bar {
    background: #9a1d1d !important;
  }
  
  button.navbar-toggle {
      float: left;
      margin-left: 2rem;
  }
  
  #bs-example-navbar-collapse-1 {
      background-color: brown;
  }
  
  #hamburger-menu {
          display: none;
  }
  
  @media screen and (max-width: 767px) {
      .header {
          border-bottom: 0 !important; 
          margin-top: -45px !important;
      }
      
      #hamburger-menu {
          display: block;
          margin-left: 0px;
          margin-right: -13rem;
      }
      
      .main {
          width: 110%;
      }
      
      .modal-lg {
          width: 97% !important;
      }
      
      .alignFull {
          margin-right: -12rem;
      }
      
  }

  
  
</style>

<body id="userdetails-page">
    <div class="row" id='hamburger-menu' style="border-bottom:1px solid lightgray;">
            <nav class="navbar navbar-static-top" role="navigation">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                 <ul id="nav" style='list-style: none;'>
                                    <li class="item1"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Display Name</a></li><br/>
                                    <li class="item2 active"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Dashboard</a></li><br/>
                                    <li class="item3"><i class="fa fa-dropbox" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Policies</a></li><br/>
                                    <li class="item4"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Messages</a></li><br/>
                                    <li class="item4"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Secure Files</a></li>
                                  </ul>
                            </div>
                        </div>
                    </nav>
            <div class="header fluid">
                <div class="container">
                    <header>
                        <button class="getHelp" onClick="getHelp()">Get Help</button>
                    </header>
                </div>
            </div> 
    </div>
    <div class="sidebar col-md-3 col-sm-3">
        <a href="/index.php"><img id="process-logo" src="/images/logo-full-size.png" style="inline-block; float:left; margin-right:10px;"><h4 style="inline-block; float:left;">Usurit</h4></a>
            <br><br><br>
            <div class='col-xs-12'>
              <ul id="nav" style='list-style: none;'>
                <li class="item1"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Display Name</a></li><br/>
                <li class="item2 active"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Dashboard</a></li><br/>
                <li class="item3"><i class="fa fa-dropbox" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Policies</a></li><br/>
                <li class="item4"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Messages</a></li><br/>
                <li class="item4"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Secure Files</a></li>
              </ul>
            </div>
    </div>     
    <div class="main col-sm-9 col-md-9 col-xs-12">
        <div class="row hidden-sm hidden-xs">
            <div class="header fluid">
                <div class="container">
                    <header>
                        <button class="getHelp" onClick="getHelp()">Get Help</button>
                    </header>
                </div>
            </div>                  
        </div>
        <div class="col-sm-12" id="main">
            <?php include_once('dashboard-detail.php'); ?>
        </div>
    </div>
</body>
