<?php  include 'db.php';


    $sql = "SELECT * FROM websiteconfig WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $logoPath = $row['logo'];
        $contactNo = $row['contact_No'];
        $address = $row['address'];
    } else {
        $logoPath = 'uploads/default-logo.png';
    }
?>
