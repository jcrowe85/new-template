
 <style>
  .center {
    text-align: center;
  }
  
  small {
    font-size: x-small;
  }
  
  h5 {
    line-height: 0;
  }
  
 .modal-lg {
    width: 55%;
  }
  
 .btn-circle {
    margin-top: -26px;
  }
  
  .btn-default,.btn-primary,.btn-success,.btn-info,.btn-warning,.btn-danger {
    border-radius:23px;
  }
  
 .btn-primary {
    background-color: #2ea6f4;
  }
  
 .blur {
    color: darkgrey;
  }
  .active {
    text-decoration: underline;
    text-decoration-color: red;
  }
  .next-steps{
    line-height: .8em;
  }
  .next-step-image{
    margin-bottom:10px;    
  }
  .next-step-container{
    text-align: center;
  }
 </style>
<body id="dashboard">
  <div class='container col-md-9'>
    <h2>My Dashboard</h2>
    <div class='row'>
      <div class="col-xs-4 center">
              <img src="../images/blog1.jpg" height='140' width='130' class="img-circle" alt="Cinque Terre"> 
              <div class='row'>
                <div class='col-xs-12 center'><br/>
                  <h5>Albert Lee</h5>
                </div>
                <div class='col-xs-12 center'>
                  <h6>Assigned Consultant</h6>
                </div>
              </div>
            </div>
            <div class="col-xs-8">
              <div class='col-xs-12'>
                <h4>We're here to Help?</h4>
                 Need help? Press 'call' or 'message' and we'll connect you with your licensed consultant.
                 If he/she is unavailable, we will redirect your request to the next available consultant.
              </div>
              <div class='col-xs-12'><br/><br/><br/>
                <button type="button" class="btn btn-primary col-xs-4">Call</button>
                <div class='col-xs-2'></div>
                <button type="button" class="btn btn-primary col-xs-4">Message</button>
              </div>
            </div>
    </div><br/><br/><br/>
    <h3>You have 1 Pending Policy and 1 Recently Approved Policy.</h3>
    <hr/><br/>
    <div class='col-xs-12'>
      <span class='active'>Application</span>&nbsp;&gt;&nbsp;
      <span class='blur'>Medical Exam</span>&nbsp;&gt;&nbsp;
      <span class='blur'>Underwriting</span>&nbsp;&gt;&nbsp;
      <span class='blur'>Approval</span>&nbsp;&gt;&nbsp;
      <span class='blur'>Covered</span>
    </div>
    <div class='col-xs-12'><br/>
      <i class="fa fa-exclamation-circle">&nbsp;Click an application phase for details.</i>
    </div>
    <div class='row'>
          
          <div class='col-xs-2 center'><br/><br/>
            <i class="fa fa-umbrella fa-5x" aria-hidden="true"></i>
          </div>
          
          <div class='col-xs-7'><br/><br/>
            Policy Details<hr/>
            <div class='col-xs-6'>
              <div class='col-xs-12'>
                Policy &nbsp; #:<span>A123456</span>
              </div>
              <div class='col-xs-12'>
                Carrier:<span>Banner Life</span>
              </div>
              <div class='col-xs-12'>
                Coverage:<span>$500,000</span>
              </div>
              <div class='col-xs-12'>
                Policy Type:<span>Term</span>
              </div>
            </div>
            <div class='col-xs-6'>
               <div class='col-xs-12'>
                Coverage Last:<span>30 Years</span>
              </div>
              <div class='col-xs-12'>
                Coverage Starts:<span>01/12/2017</span>
              </div>
              <div class='col-xs-12'>
                Coverage Ends:<span>01/12/2047</span>
              </div>
            </div>
          </div>
           
           
          <div class='col-xs-3'><br/><br/>
            Payment Details<hr/>
            <div class='col-xs-12'>
                Preminum:<span>$52.12/mo</span>
            </div>
            <div class='col-xs-12'>
                Payment Date:<span>03/15/2016</span>
            </div>
            <div class='col-xs-12'>
                Card:<span>xxx4204</span>
            </div>
          </div>
    </div>
    
    <div class='col-xs-12'><br/><br/><br/>
      Your policy is currently pending in Medical exam. Our examiner's should have reached out to schedule your exam date and time.
      If you have not heard from a medical examiner, please call 800.888.888. They will ask for some personal information to verify
      your identity. If you are unable to reach the examination office, please call us at 949.438.3433 or press get help at the
      top right hand of the screen to chat with a live representative.<br/><br/><br/>
    </div>
    
  </div>
  <div class="modal fade" id="thankYouModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
        <button type="button" id='closeModal' class="btn btn-default btn-circle pull-right" style='margin-top: -25px'><i class="glyphicon glyphicon-remove"></i></button>
        <div style="padding: 0px 30px">
        <h2>Congratulations! You've applied for life insurance</h2><br/><br/>
        <div class="row">
            <div class="col-xs-4 center">
              <img src="../images/blog1.jpg" height='140' width='130' class="img-circle" alt="Cinque Terre"> 
              <div class='row'>
                <div class='col-xs-12 center'><br/>
                  <h5>Albert Lee</h5>
                </div>
                <div class='col-xs-12 center'>
                  <h6>Assigned Consultant</h6>
                </div>
                <div class='col-xs-12 center'>
                  <h6>949.438.3433</h6>
                </div>
                <div class='col-xs-12 center'>
                  <h6>albert@usurit.com</h6>
                </div>
              </div>
            </div>
            <div class="col-xs-8">
              <div class='col-xs-12'>
                <h4>Albert Lee is Your consultant</h4>
                <p>
                  Hi Joshua, my name is Albert. Congratulations on your purchase of life insurance. 
                  I am going to be taking care of everything on the back-end so you dont have to.
                  I'll be reaching out to you shortly to confirm your information and answer any questions you might have.
                  Nice meeting you and look forward to helping you.
                  </p>
              </div>
              <div class='col-xs-12'><br/><br/><br/>
                <button class='form-control btn btn-primary btn-block'>Contact Me</button>
              </div>
            </div>
        </div>
        <hr/>
        <div class='row next-steps'>
          <div class='col-xs-12'>
               <h3>Next Steps:</h3>
          </div>
          <div class='col-xs-4 next-step-container'>
            <div class='col-xs-12 center next-step-image'>
              <i class="fa fa-phone fa-5x"></i>
            </div>
            <div class='col-xs-12'>
              <small>Take your phone interview. During the interview you will be asked multiple questions pertainging to your health.
              Be honest, but dont give more information than requested.</small>
            </div>
          </div>
          <div class='col-xs-4 next-step-container'>
            <div class='col-xs-12 center next-step-image'>
              <i class="fa fa-stethoscope fa-5x"></i>
            </div>
            <div class='col-xs-12'>
              <small>Take your phone interview. During the interview you will be asked multiple questions pertainging to your health.
              Be honest, but dont give more information than requested.</small>
            </div>
          </div>
          <div class='col-xs-4 next-step-container'>
            <div class='col-xs-12 center next-step-image'>
              <i class="fa fa-calendar fa-5x"></i>
            </div>
            <div class='col-xs-12'>
              <small>Take your phone interview. During the interview you will be asked multiple questions pertainging to your health.
              Be honest, but dont give more information than requested.</small>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
 </div>
</body>