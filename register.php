<?php
 
 session_start();
 
 if( isset($_SESSION['user'])!="" ){
  header("Location: userdetails.php");
 }
 
 include_once 'conn.php';

 $error = false;

 if ( isset($_POST['continue']) ) {
  
  
  // set a session variable to user's email
  $_SESSION["sessionemailtext"] = $_POST['emailtext'];
  $_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
  
  // clean user inputs to prevent sql injections
    $firstnametext = mysqli_real_escape_string($conn, $_POST ['firstnametext']);
    $middlenametext = mysqli_real_escape_string($conn, $_POST ['middlenametext']);
    $lastnametext = mysqli_real_escape_string($conn, $_POST ['lastnametext']);
    $bestphonetext = mysqli_real_escape_string($conn, $_POST ['bestphonetext']);
    $email = mysqli_real_escape_string($conn, $_POST ['emailtext']);
    $pass = mysqli_real_escape_string($conn, $_POST ['passwordtext']);
    $premium = mysqli_real_escape_string($conn, $_POST ['premium']);
    $company = mysqli_real_escape_string($conn, $_POST ['company']);
    $sex = mysqli_real_escape_string($conn, $_POST ['Sex']);
    $smoker = mysqli_real_escape_string($conn, $_POST ['Smoker']);
    $address1text = mysqli_real_escape_string($conn, $_POST ['address1text']);   
    
  
  
  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT emailtext FROM main WHERE emailtext='$email'";
   $result = mysqli_query($conn, $query);
   $count = mysqli_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
  }
  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";
  } else if(strlen($pass) < 8) {
   $error = true;
   $passError = "Password must have atleast 8 characters.";
  }
  
  // password encrypt using SHA256();
//   $password = hash('sha256', $pass);
 
  
  // if there's no error, continue to signup
  if( !$error ) {
   
    $query = "INSERT INTO main (firstnametext, middlenametext, lastnametext, bestphonetext, emailtext, passwordtext, company, premium, sex, smoker)
    VALUES ('$firstnametext', '$middlenametext', '$lastnametext', '$bestphonetext', '$email', '$pass', '$company', '$premium', '$sex', '$smoker')";
    $res = mysqli_query($conn, $query);
    
   if ($res) {

   header('Location: userdetails.php');

        }
    // $errTyp = "success";
    // $errMSG = "Successfully registered, you may login now";
    // unset($email);
    // unset($pass);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
   } 
    
 
  
  
 }
?>