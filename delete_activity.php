<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $activity_id = $_GET['activity_id'];

    // Delete activity from database
    $sql = "DELETE FROM activities WHERE activity_id = '$activity_id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: activity.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
