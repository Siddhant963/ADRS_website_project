<?php 
include './Model/Db.php';

$certification_number = $_GET['certification_number'];

$query = "SELECT * FROM training_certificates WHERE certification_number = '$certification_number'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<h2>Certificate Information</h2>';
        echo '<p>Certification Number: '. $row['certification_number']. '</p>';
        echo '<p>Course Name: '. $row['course_name']. '</p>';
        echo '<p>Trainer Name: '. $row['trainer_name']. '</p>';
        echo '<p>Date of Issue: '. $row['date_of_issue']. '</p>';
        echo '<p>Expiry Date: '. $row['expiry_date']. '</p>';
        echo '<p>Status: '. $row['status']. '</p>';
        echo '<p>Description: '. $row['description']. '</p>';
        echo '<a href="view_certificates.php">Back to Certificates</a>';
?>