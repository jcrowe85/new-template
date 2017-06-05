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
</style>

<body id="userdetails-page">
    <div class="sidebar col-md-2">
        <a href="/index.php"><img id="process-logo" src="/images/logo-full-size.png" style="inline-block; float:left; margin-right:10px;"><h4 style="inline-block; float:left;">Usurit</h4></a>
            <br><br><br>
            <div class='col-xs-2'></div>
            <div class='col-xs-10'>
              <ul id="nav" style='list-style: none;'>
                <li class="item1"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Display Name</a></li><br/>
                <li class="item2 active"><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Dashboard</a></li><br/>
                <li class="item3"><i class="fa fa-dropbox" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Policies</a></li><br/>
                <li class="item4"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Messages</a></li><br/>
                <li class="item4"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;<a href="">Secure Files</a></li>
              </ul>
            </div>
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
        <div class="col-sm-12" id="main">
            <?php include_once('dashboard-detail.php'); ?>
        </div>
    </div>
</body>