<?php
 ob_start();
 session_start();
 include_once('conn.php');
   $email = $_SESSION['sessionemailtext'];
   $res=mysqli_query($conn, "SELECT userId, passwordtext FROM main WHERE emailtext='$email'");
   $row=mysqli_fetch_array($res);
   $count = mysqli_num_rows($res); 
   if( $count == 1 ) {
    $_SESSION['user'] = $row['userId'];
    
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }
   
if(isset($_POST['address1text'])!=""){
   
   
 

// save userId to $user variable to identify user in db
$user = $_SESSION['user'];

$firstnametext = mysqli_real_escape_string($conn, $_POST ['firstnametext']);


// update database with user enter info
$address1text = mysqli_real_escape_string($conn,$_POST['address1text']);
$address2text = mysqli_real_escape_string($conn,$_POST['address2text']);
$citytext = mysqli_real_escape_string($conn,$_POST['citytext']);
$zipcodetext = mysqli_real_escape_string($conn,$_POST['zipcodetext']);
$state = mysqli_real_escape_string($conn,$_POST['state']);
$country = mysqli_real_escape_string($conn,$_POST['country']);
$residency = mysqli_real_escape_string($conn,$_POST['residency']);
$incometext = mysqli_real_escape_string($conn,$_POST['incometext']);
$assets = mysqli_real_escape_string($conn,$_POST['assets']);
$liabilities = mysqli_real_escape_string($conn,$_POST['liabilities']);
$reasonforapplying = mysqli_real_escape_string($conn,$_POST['reasonforapplying']); 
$alzheimer = mysqli_real_escape_string($conn,$_POST['alzheimer']);
$backproblem = mysqli_real_escape_string($conn,$_POST['backproblem']);
$basal = mysqli_real_escape_string($conn,$_POST['basal']);
$cancer = mysqli_real_escape_string($conn,$_POST['cancer']);
$carpal = mysqli_real_escape_string($conn,$_POST['carpal']);
$copd = mysqli_real_escape_string($conn,$_POST['copd']);
$emphysema = mysqli_real_escape_string($conn,$_POST['emphysema']);
$epilepsy = mysqli_real_escape_string($conn,$_POST['epilepsy']);
$glaucoma = mysqli_real_escape_string($conn,$_POST['glaucoma']);
$headache = mysqli_real_escape_string($conn,$_POST['headache']);
$heart = mysqli_real_escape_string($conn,$_POST['heart']);
$kidney = mysqli_real_escape_string($conn,$_POST['kidney']);
$knee = mysqli_real_escape_string($conn,$_POST['knee']);
$mental =mysqli_real_escape_string($conn, $_POST['mental']);
$multiple = mysqli_real_escape_string($conn,$_POST['multiple']);
$other = mysqli_real_escape_string($conn,$_POST['other']);
$rheumatoid = mysqli_real_escape_string($conn,$_POST['rheumatoid']);
$stroke = mysqli_real_escape_string($conn,$_POST['stroke']);
$ulcerative = mysqli_real_escape_string($conn,$_POST['ulcerative']);
$vascular = mysqli_real_escape_string($conn,$_POST['vascular']);
$racing = mysqli_real_escape_string($conn,$_POST['racing']);
$hang = mysqli_real_escape_string($conn,$_POST['hang']);
$piloting = mysqli_real_escape_string($conn,$_POST['piloting']);
$rock = mysqli_real_escape_string($conn,$_POST['rock']);
$scuba = mysqli_real_escape_string($conn,$_POST['scuba']);
$sky = mysqli_real_escape_string($conn,$_POST['sky']);
$other1 = mysqli_real_escape_string($conn,$_POST['other1']);
$primaryfullname = mysqli_real_escape_string($conn,$_POST['primaryfullname']);
$primarygender = mysqli_real_escape_string($conn,$_POST['primarygender']);
$primaryrelation = mysqli_real_escape_string($conn,$_POST['primaryrelation']);
$primarybirthday = mysqli_real_escape_string($conn,$_POST['primarybirthday']);
$primarybirthmonth = mysqli_real_escape_string($conn,$_POST['primarybirthmonth']);
$primarybirthyear = mysqli_real_escape_string($conn,$_POST['primarybirthyear']);
$primarypercentage = mysqli_real_escape_string($conn,$_POST['primarypercentage']);
$contingentfullname = mysqli_real_escape_string($conn,$_POST['contingentfullname']);
$contingentgender = mysqli_real_escape_string($conn,$_POST['contingentgender']);
$contingentrelation = mysqli_real_escape_string($conn,$_POST['contingentrelation']);
$contingent_dob_month = mysqli_real_escape_string($conn,$_POST['contingent_dob_month']);
$contingentpercentage = mysqli_real_escape_string($conn,$_POST['contingentpercentage']);
$wantcoverage = mysqli_real_escape_string($conn,$_POST['wantcoverage']);
$owner = mysqli_real_escape_string($conn,$_POST['owner']);
$existing = mysqli_real_escape_string($conn,$_POST['existing']);
$firstdate = mysqli_real_escape_string($conn,$_POST['firstdate']);
$seconddate = mysqli_real_escape_string($conn,$_POST['seconddate']);
$location = mysqli_real_escape_string($conn,$_POST['location']);
$ssntext = mysqli_real_escape_string($conn,$_POST['ssntext']);
$licenseno = mysqli_real_escape_string($conn,$_POST['licenseno']);
$licensestate = mysqli_real_escape_string($conn,$_POST['licensestate']);
$licenseexpmonth = mysqli_real_escape_string($conn,$_POST['licenseexpmonth']);
$licenseexpday = mysqli_real_escape_string($conn,$_POST['licenseexpday']);
$licenseexpyear = mysqli_real_escape_string($conn,$_POST['licenseexpyear']);
 
 
 
$sql = "UPDATE main SET 
address1text='$address1text', 
address2text='$address2text',
citytext ='$citytext',
zipcodetext ='$zipcodetext',
state ='$state',
country ='$country',
residency ='$residency',
incometext ='$incometext',
assets ='$assets',
liabilities ='$liabilities',
reasonforapplying ='$reasonforapplying',
alzheimer ='$alzheimer',
backproblem ='$backproblem',
basal ='$basal',
cancer ='$cancer',
carpal ='$carpal',
copd ='$copd',
emphysema ='$emphysema',
epilepsy ='$epilepsy',
glaucoma ='$glaucoma',
headache ='$headache',
heart ='$heart',
kidney ='$kidney',
knee ='$knee',
mental ='$mental',
multiple ='$multiple',
other ='$other',
rheumatoid ='$rheumatoid',
stroke ='$stroke',
ulcerative ='$ulcerative',
vascular ='$vascular',
racing ='$racing',
hang ='$hang',
piloting ='$piloting',
rock ='$rock',
scuba ='$scuba',
sky ='$sky',
other1 ='$other1',
primaryfullname ='$primaryfullname',
primarygender ='$primarygender',
primaryrelation ='$primaryrelation',
primarybirthday ='$primarybirthday',
primarybirthmonth ='$primarybirthmonth',
primarybirthyear ='$primarybirthyear',
primarypercentage ='$primarypercentage',
contingentfullname ='$contingentfullname',
contingentgender ='$contingentgender',
contingentrelation ='$contingentrelation',
contingent_dob_month ='$contingent_dob_month',
contingentpercentage ='$contingentpercentage',
wantcoverage ='$wantcoverage',
owner ='$owner',
existing ='$existing',
firstdate = '$firstdate',
seconddate = '$seconddate',
location = '$location',
existing ='$existing',
ssntext ='$ssntext',
licenseno ='$licenseno',
licensestate ='$licensestate',
licenseexpmonth ='$licenseexpmonth',
licenseexpday ='$licenseexpday',
licenseexpyear ='$licenseexpyear'

WHERE userId='$user'";
 
 if ($conn->query($sql) === TRUE) {
     header('Location: index.php');
 } else {
     echo "Error updating record: " . $conn->error;
 }
    $conn->close();
}
 ?>