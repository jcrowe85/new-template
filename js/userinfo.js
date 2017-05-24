

 var totalPrimaryPercentage = 0;
 var totalContingentPercentage = 0;
 var editPrimary = false;
 var storageId;

$(document).ready(function () {
   
    
    $.validate({
        modules : 'location, date, security, file'
    });
    
    $( "input, select" )
      .change(function () {
        $(this).blur(function () {
            if($(this).hasClass('error')) {
                $(this).removeClass('error');
                $(this).parent().addClass('error');
            } else {
                $(this).parent().removeClass('error');
            }
        })
      })
  .change();

    

    
    
    $('#primaryfullname').on('keyup blur', function () {
        if ($('#primaryfullname').val().length > 0 && ($('#primarymale').is(':checked') || $('#primaryfemale').is(':checked'))) {
            $('#submitForm').prop('disabled', false);
        } else {
            $('#submitForm').prop('disabled', 'disabled');
        }
    });
    
    $('#primarymale').change(function() {
         if ($('#primaryfullname').val().length > 0 && $('#primarymale').is(':checked')) {
            $('#submitForm').prop('disabled', false);
        } else {
            $('#submitForm').prop('disabled', 'disabled');
        }
    });
    
     $('#primaryfemale').change(function() {
         if ($('#primaryfullname').val().length > 0 && $('#primaryfemale').is(':checked')) {
            $('#submitForm').prop('disabled', false);
        } else {
            $('#submitForm').prop('disabled', 'disabled');
        }
    });
    
    $('#contingentfullname').on('keyup blur', function () {
        if ($('#contingentfullname').val().length > 0 && ($('#contingentmale').is(':checked') || $('#contingentfemale').is(':checked'))) {
            $('#submitContingentForm').prop('disabled', false);
        } else {
            $('#submitContingentForm').prop('disabled', 'disabled');
        }
    });
    
    $('#contingentmale').change(function() {
         if ($('#contingentfullname').val().length > 0 && $('#contingentmale').is(':checked')) {
            $('#submitContingentForm').prop('disabled', false);
        } else {
            $('#submitContingentForm').prop('disabled', 'disabled');
        }
    });
    
     $('#contingentfemale').change(function() {
         if ($('#contingentfullname').val().length > 0 && $('#contingentfemale').is(':checked')) {
            $('#submitContingentForm').prop('disabled', false);
        } else {
            $('#submitContingentForm').prop('disabled', 'disabled');
        }
    });
    
   $( "#residency" ).change(function() {
    $('html,body').animate({
        scrollTop: $(".step2").offset().top - 80},
    'slow');
    $('#sameaddress').text($('#address1text').val());
   });
    
     $( "#reasonforapplying" ).change(function() {
        $('html,body').animate({
            scrollTop: $(".step3").offset().top - 80},
        'slow');
    });
    
    $("input[name='existing']").change(function() {
        $('html,body').animate({
            scrollTop: $(".step10").offset().top - 80},
        'slow');
    });
    
    $('#dob_month').change(function() {
         $('html,body').animate({
            scrollTop: $(".step9").offset().top - 80},
        'slow');
    });
    
    $('#openAddBeneficiaryForm').click(function () {
         $('#primaryfullname').val('');
         $('#primarypercentage option:selected').val('');
         $('#addPrimaryBeneficiary').show();
         $('#openAddBeneficiaryForm').hide();
         $('#submitForm').prop('disabled', 'disabled');
    });
    
    
    $('#openAddContingentBeneficiaryForm').click(function () {
         $('#addContingentBeneficiary').show();
         $('#openAddContingentBeneficiaryForm').hide();
         $('#submitContingentForm').prop('disabled', 'disabled');
    })
    
    $('#addPrimaryBeneficiary').hide();
    $('#addContingentBeneficiary').hide();
    $('#primaryBeneficiaryDisplay').hide();
    $('#contingentBeneficiaryDisplay').hide();
    
    $("#submitForm").click(function( event ) {
       
         var tmpData = {};
        tmpData.fullName = $('#primaryfullname').val();
        tmpData.gender = $("input[name='primarygender']:checked").val();
        tmpData.relation =  $('#primaryrelation option:selected').val();
        tmpData.relationText =  $('#primaryrelation option:selected').text();
        tmpData.month = $('#form_dob_month option:selected').val();
        tmpData.date = $('#form_dob_date option:selected').val();
        tmpData.year = $('#form_dob_year option:selected').val();
        tmpData.percentage = $('#primarypercentage option:selected').text();
         if((100 - totalPrimaryPercentage) < parseInt(tmpData.percentage)) {
             alert('Primary beneficiary percentage can\'t be more than 100%');
             return;
         }
        var storageName = 'primary'+ $('#primaryBeneficiaryDisplay table').length;
        var primaryData = localStorage.setItem(storageName, JSON.stringify(tmpData));
        totalPrimaryPercentage +=  parseInt(tmpData.percentage);
        if(!editPrimary) {
             $('#primaryBeneficiaryDisplay')
                .append('<br><div class="row" id="'+ storageName +'" style="border: 1px solid #d3d3d3;border-radius: 5px;"><button type="button" onclick="closeAddedPrimaryBeneficiary(this)" class="btn btn-default btn-close pull-right"><i class="glyphicon glyphicon-remove"></i></button><table width="100%" cellpadding="50" cellspacing="0"><tr>'+
                            '<td><div class="col-md-12"><h4><strong id="name">'+ $('#primaryfullname').val() +'</strong></h4></div><div class="col-md-12"><h5 class="fadded-string" id="relation">'+ $('#primaryrelation option:selected').text() +'</h5></div></td>'+
                            '<td style="border-left: 1px solid #d3d3d3;width: 30%;"><div class="col-md-12" style="color: #578fbd"><select class="form-control noBorder 1-100 editPercentage"><option selected="selected">' + $('#primarypercentage option:selected').text() + '%' +'<option></select></div><div class="col-md-12"><h5 class="fadded-string">of total proceeds</strong></h5></div></td>'+
                        '</tr>' + 
                        '<tr style="background-color: #f2f2f2; height: 38px;">' +
                            '<td><div class="col-md-12" style="color: #999"><a onclick="editPrimaryBeneficiary(this)">edit details</a></div></td>' +
                            '<td><div class="col-md-12 pull-right" style="color: #999"><a onclick="editPrimaryBeneficiary(this)">edit percentage</a></div></td>' +
                        '</tr></table></div>');
        } else {
            editPrimary = false;
            $('#primaryBeneficiaryDisplay #'+ storageId +' #name').text(tmpData.fullName);
            $('#primaryBeneficiaryDisplay #'+ storageId +' #relation').text(tmpData.relationText);
            $('#primaryBeneficiaryDisplay #'+ storageId +' .editPercentage').val(tmpData.percentage);
        }
       
        $('#addPrimaryBeneficiary').hide();
        $('#openAddBeneficiaryForm').show();
        $('#primaryBeneficiaryDisplay').show();
        var $select = $(".1-100");
        for(var i=100;i>0;i--){
            $select.append($('<option></option>').val(i).html(i))
        }
    });
    
    $('.editPercentage').change(function() {
        console.log('dasv',this);
    })
    
    $("#submitContingentForm").click(function( event ) {
         var tmpData = {};
        tmpData.fullName = $('#contingentfullname').val();
        tmpData.gender = $("input[name='contingentgender']:checked").val();
        tmpData.relation =  $('#contingentrelation option:selected').val();
        tmpData.month = $('#contingent_dob_month option:selected').val();
        tmpData.date = $('#contingent_dob_date option:selected').val();
        tmpData.year = $('#contingent_dob_year option:selected').val();
        tmpData.percentage = $('#contingentpercentage option:selected').text();
         if((100 - totalContingentPercentage) < parseInt(tmpData.percentage)) {
             alert('Contingent beneficiary percentage can\'t be more than 100%');
             return;
         }
       
        var storageName = 'contingent'+ $('#primaryBeneficiaryDisplay table').length;
        var primaryData = localStorage.setItem(storageName, JSON.stringify(tmpData));
         totalContingentPercentage +=  parseInt(tmpData.percentage);
        $('#contingentBeneficiaryDisplay')
                .append('<br><div class="row" id="'+ storageName +'" style="border: 1px solid #d3d3d3;border-radius: 5px;"><button type="button" onclick="closeAddedContingentBeneficiary(this)" class="btn btn-default btn-close pull-right"><i class="glyphicon glyphicon-remove"></i></button><table width="100%" cellpadding="50" cellspacing="0"><tr>'+
                            '<td><div class="col-md-12"><h4><strong>'+ $('#contingentfullname').val() +'</strong></h4></div><div class="col-md-12"><h5 class="fadded-string">'+ $('#contingentrelation option:selected').text() +'</h5></div></td>'+
                            '<td style="border-left: 1px solid #d3d3d3;width: 30%;"><div class="col-md-12" style="color: #578fbd"><select class="form-control noBorder 1-100"><option selected="selected">' + $('#contingentpercentage option:selected').text() + '%' +'<option></select></div><div class="col-md-12"><h5 class="fadded-string">of total proceeds</strong></h5></div></td>'+
                        '</tr>' + 
                        '<tr style="background-color: #f2f2f2; height: 38px;">' +
                            '<td><div class="col-md-12" style="color: #999"><a href="#">edit details</a></div></td>' +
                            '<td><div class="col-md-12 pull-right" style="color: #999"><a href="#">edit percentage</a></div></td>' +
                        '</tr></table></div>');
    
        $('#addContingentBeneficiary').hide();
        $('#contingentBeneficiaryDisplay').show();
        $('#openAddContingentBeneficiaryForm').show();
        var $select = $(".1-100");
        for(var i=100;i>0;i--){
            $select.append($('<option></option>').val(i).html(i))
        }
    });
    
    $("#submitContingentForm").click(function( event ) {
         $('#addContingentBeneficiary').hide();
         $('#openAddContingentBeneficiaryForm').show();
    });
    
    
    $('#time-start').datetimepicker({
            format: 'mm/dd/yyyy hh',
            autoclose: true,
            pickerPosition: "bottom-left",
            maxView: 3,
            minuteStep: 1
        }).on("changeDate", function (e) {
            $('#start-time-before').html(e.date); // Log
            // var TimeZoned = new Date(e.date.setTime(e.date.getTime() + (e.date.getTimezoneOffset() * 60000)));
            // $('#time-end').datetimepicker('setStartDate', TimeZoned);
            // $('#time-start').datetimepicker('setDate', TimeZoned);
            // $('#start-time-adjusted').html(TimeZoned); // Log
        });

    $('#time-end').datetimepicker({
        format: 'mm/dd/yyyy hh',
        autoclose: true,
        pickerPosition: "bottom-left",
        maxView: 3,
        minuteStep: 1
    }).on("changeDate", function (e) {
        $('#end-time-before').html(e.date); // Log
        // var TimeZoned = new Date(e.date.setTime(e.date.getTime() + (e.date.getTimezoneOffset() * 60000)));
        // $('#time-start').datetimepicker('setEndDate', TimeZoned);
        // $('#time-end').datetimepicker('setDate', TimeZoned);
        // $('#end-time-adjusted').html(e.date); // Log
    });
    
    $('#otherlocation').hide();
    
    $('#otheraddress').change(function(){
       if($('#otheraddress').is(':checked')) {
    	  $('#otherlocation').show();
       }
    });
    
    $('#addresslisted').change(function(){
       if($('#addresslisted').is(':checked')) {
    	  $('#otherlocation').hide();
       }
    });
   
   // focus input when selecting form-group label

    $('label').click(function(){
	var value = $(this).next().focus();
	console.log(value);
    });   
   
    
});    

$(function(){
    var $select = $(".1-100");
    for(var i=100;i>0;i--){
        $select.append($('<option></option>').val(i).html(i))
    }
});

$('form').on('submit', function(){
    $(this).find('input[type="tel"]').each(function(){
        $(this).val() = $(this).val().replace(/[\s().+-]/g, '');
    });
});  



 function openAddBeneficiaryForm() {
        $('#addPrimaryBeneficiary').show();
        $('#openAddBeneficiaryForm').hide();
 }   
 
 function closePrimaryBeneficiary() {
     $('#addPrimaryBeneficiary').hide();
     if($('#primaryBeneficiaryTable tr').length > 0) {
            $('#primaryBenefic<hr/>iaryDisplay').show();            
        }
     $('#openAddBeneficiaryForm').show();
 }
 
 function closeContingentBeneficiary() {
     $('#addContingentBeneficiary').hide();
     if($('#contingentBeneficiaryTable tr').length > 0) {
            $('#contingentBeneficiaryDisplay').show();
        }
     $('#openAddContingentBeneficiaryForm').show();
 }
 
 function closeAddedPrimaryBeneficiary(args) {
     var removeThis = parseInt($(args).parent().find('.1-100').val().split('%')[0]);
     totalPrimaryPercentage -=  removeThis;
     $('#' + $(args).parent().attr('id')).remove();
 }
 
 function closeAddedContingentBeneficiary(args) {
     var removeThis = parseInt($(args).parent().find('.1-100').val().split('%')[0]);
     totalContingentPercentage -=  removeThis;
    $('#' + $(args).parent().attr('id')).remove();
 }
 
 function editPrimaryBeneficiary(args) {
     editPrimary = true;
     $('#addPrimaryBeneficiary').show();
     storageId = $(args).parent().parent().parent().parent().parent().parent().attr('id');
     var storedObj = JSON.parse(localStorage.getItem(storageId))
     $('#primaryfullname').val(storedObj.fullName);
      $("input[name='primarygender']:checked").val(storedObj.gender);
 }