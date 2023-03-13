<?php 
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "", "dbms_bbms");

    $sql = "DELETE FROM blood_don WHERE don_id = $id"; 

    if ($link->query($sql) === TRUE) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>