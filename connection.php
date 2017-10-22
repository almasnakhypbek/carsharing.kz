<?php
$link = mysqli_connect("localhost", "root", "", "carsharekz_db");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Error!')</script>";
}
    ?>