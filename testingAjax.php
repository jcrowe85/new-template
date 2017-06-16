<!doctype html>
<html lang="en">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
$(document).ready(function() {

    // process the form
    
    // $("button").click(function(){
    //     event.preventDefault();
    //     var form = $('#myForm');
    //       $.ajax({
    //             traditional: true,
    //             url: 'cgi-bin/cqsl.cgi',
    //             type: 'POST',
    //             data: form.serialize(),
    //             dataType: 'html',
    //             encode: true,
    //             success: function(result){
    //                 $('.div1').html(result);
    //             }
    //       });
        
        
        
        
    
        
        
    // });
    
    // $('#myForm').submit(function(e){
       
    //   e.preventDefault(); //prevent default action 
    //   var form = $(this);
    //     var post_url = form.attr("action"); //get form action url
    //     var request_method = form.attr("method"); //get form GET/POST method
    //     //var form_data = new FormData(this); //Creates new FormData object
    //     var form_data =form.serialize();
    //     console.log('form_data:', form_data);
        
        
    //     $.ajax({
    //         traditional: true,
    //         url : post_url,
    //         type: request_method,
    //         data : form_data,
    //         dataType: 'html',
    //         contentType: "application/x-www-form-urlencoded",
    //         cache: false,
    //         processData:false
    //     }).done(function(response){ //
    //         console.log("response:", response);
    //          $('.div1').html(response);
    //     });
           

        
    // });
        
    
    $('#myForm').submit(function(e){
       e.preventDefault(); 
    });
    
});

function runCgi(){
    $('#myForm').submit(function(e){
       
      e.preventDefault(); //prevent default action 
      var form = $(this);
        var post_url = form.attr("action"); //get form action url
        var request_method = form.attr("method"); //get form GET/POST method
        //var form_data = new FormData(this); //Creates new FormData object
        var form_data =form.serialize();
        console.log('form_data:', form_data);
        
        
        $.ajax({
            traditional: true,
            url : post_url,
            type: request_method,
            data : form_data,
            dataType: 'html',
            contentType: "application/x-www-form-urlencoded",
            cache: false,
            processData:false
        }).done(function(response){ //
            console.log("response:", response);
             $('.div1').html(response);
        });
           

        
    });
    }    

</script>
<body>
    <form action="cgi-bin/cqsl.cgi" method="POST" id="myForm">
        <div class="div1"></div>
        <input type="text" name="FaceAmount" value="500000">
        <input type="text" name="Birthday" value="2">
        <input type="text" name="NewCategory" value="27">
        <input type="text" name="BirthMonth" value="2">
        <input type="text" name="BirthYear" value="1985">
        <input type="text" name="Sex" value="M">
        <input type="text" name="Health" value="PP">
        <input type="text" name="Smoker" value="Y">
        <input type="text" name="State" value="2">
        <button onClick="runCgi();">click here</button>       
    </form>
</body>
</html>