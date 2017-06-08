<div class="questions fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="quest" style="text-align:center">
                    <li><h3>Questions here?</h3></li>
                    <li>We're here for you.</li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> Call us 949.438.3433</li>
                    <li style="cursor:pointer" onClick="getHelp()"><i class="fa fa-comment" aria-hidden="true"></i> Chat</li>
                    <li>Don't see your question?<br>
                    Not to worry. Just press Chat above,
                    or call us to speak with one of our 
                    helpul licensed insurance advisors.</li>
                </ul>
            </div>
            <!--<div class="col-md-12">-->
            <!--    <div class="col-md-6">-->
            <!--        <h5>question 1</h5>-->
            <!--        <img src="" alt="">-->
            <!--        <div class="answer">-->
            <!--            <p>answer here</p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-md-6">-->
            <!--        <h5>question 2</h5>-->
            <!--        <img src="" alt="">-->
            <!--        <div class="answer">-->
            <!--            <p>answer here</p>-->
            <!--        </div>-->
            <!--    </div>                -->
            <!--    <div class="col-md-6">-->
            <!--        <h5>Second column of questions</h5>-->
            <!--        <img src="" alt="">-->
            <!--        <div class="answer">-->
            <!--            <p>answer here</p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
                <script>
                    $(document).ready(function(){
                        $('.answer-button').click(function(){
                           $(this).parent().parent().next().slideToggle();
                        });
                    });
                 </script>                        
            </div>
        </div>
    </div>
</div>