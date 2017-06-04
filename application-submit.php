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

// update database with user enter info
$address1text = mysqli_real_escape_string($conn, $_POST['address1text']);
$address2text = $_POST['address2text'];
$citytext = $_POST['citytext'];
$zipcodetext = $_POST['zipcodetext'];
$state = $_POST['state'];
$country = $_POST['country'];
$residency = $_POST['residency'];
$incometext = $_POST['incometext'];
$assets = $_POST['assets'];
$liabilities = $_POST['liabilities'];
$reasonforapplying = $_POST['reasonforapplying']; 
$alzheimer = $_POST['alzheimer'];
$backproblem = $_POST['backproblem'];
$basal = $_POST['basal'];
$cancer = $_POST['cancer'];
$carpal = $_POST['carpal'];
$copd = $_POST['copd'];
$emphysema = $_POST['emphysema'];
$epilepsy = $_POST['epilepsy'];
$glaucoma = $_POST['glaucoma'];
$headache = $_POST['headache'];
$heart = $_POST['heart'];
$kidney = $_POST['kidney'];
$knee = $_POST['knee'];
$mental = $_POST['mental'];
$multiple = $_POST['multiple'];
$other = $_POST['other'];
$rheumatoid = $_POST['rheumatoid'];
$stroke = $_POST['stroke'];
$ulcerative = $_POST['ulcerative'];
$vascular = $_POST['vascular'];
$racing = $_POST['racing'];
$hang = $_POST['hang'];
$piloting = $_POST['piloting'];
$rock = $_POST['rock'];
$scuba = $_POST['scuba'];
$sky = $_POST['sky'];
$other1 = $_POST['other1'];
$primaryfullname = $_POST['primaryfullname'];
$primarygender = $_POST['primarygender'];
$primaryrelation = $_POST['primaryrelation'];
$primarybirthday = $_POST['primarybirthday'];
$primarybirthmonth = $_POST['primarybirthmonth'];
$primarybirthyear = $_POST['primarybirthyear'];
$primarypercentage = $_POST['primarypercentage'];
$contingentfullname = $_POST['contingentfullname'];
$contingentgender = $_POST['contingentgender'];
$contingentrelation = $_POST['contingentrelation'];
$contingent_dob_month = $_POST['contingent_dob_month'];
$contingentpercentage = $_POST['contingentpercentage'];
$wantcoverage = $_POST['wantcoverage'];
$owner = $_POST['owner'];
$existing = $_POST['existing'];
$firstdate = $_POST['firstdate'];
$seconddate = $_POST['seconddate'];
$location = $_POST['location'];
$ssntext = $_POST['ssntext'];
$licenseno = $_POST['licenseno'];
$licensestate = $_POST['licensestate'];
$licenseexpmonth = $_POST['licenseexpmonth'];
$licenseexpday = $_POST['licenseexpday'];
$licenseexpyear = $_POST['licenseexpyear'];
 
 
 
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