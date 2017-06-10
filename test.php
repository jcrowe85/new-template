<?php include_once('conn.php')?>

<?php 

    $query = "INSERT INTO main (firstnametext)
    VALUES ('josh')";
    
    $res = mysqli_query($conn, $query);

    if (!mysqli_query($conn, $res)) {
    printf("Errormessage: %s\n", mysqli_error($conn));
}
?>