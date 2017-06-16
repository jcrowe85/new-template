

<?php 
$birthday = $_POST['Birthday'];
$birthMonth= $_POST['BirthMonth'];
$birthYear = $_POST['BirthYear'];
$sex = $_POST['Sex'];



  echo json_encode($birthday);
  echo json_encode($birthMonth);
?>