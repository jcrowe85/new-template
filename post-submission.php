<!-- update user's info with application data -->
<?php include_once('application-submit.php'); ?>

<?php include_once('head.php') ?>
<script src="/js/userinfo.js"></script>
<script>
$(document).ready(function(){
    $('#thankYouModal').modal('show');
});
  </script>
<body id="postSubmission">
    
  <div class="modal fade" id="thankYouModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
        <h2>Congratulations! You've applied for life insurance</h2>
        <div class="row">
            <div class="col-xs-3"></div>
            <div class="col-xs-9"></div>
        </div>
      </div>
      
    </div>
  </div>
 </div>
 
</body>