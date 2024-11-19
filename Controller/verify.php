<?php 
include '../Model/Db.php';

$certification_number = $_GET['certification_number'];

$query = "SELECT * FROM certifications WHERE certification_number = '$certification_number'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<h2>Certificate Information</h2>';
        echo '<p>Certification Number: '. $row['certification_number']. '</p>';
        echo '<p>Name: '. $row['name']. '</p>';
        echo '<p>training_type: '. $row['training_type']. '</p>';
        echo '<p>Course: '. $row['Course']. '</p>';
        echo '<p>start_date: '. $row['start_date']. '</p>';
        echo '<p>end_date: '. $row['end_date']. '</p>';
        // echo '<p>Description: '. $row['description']. '</p>';
        echo '<a href="view_certificates.php">Back to Certificates</a>';
    } 
 }
     ?>