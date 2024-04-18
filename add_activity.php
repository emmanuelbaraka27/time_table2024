<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $activity = $_POST['activity'];
    $time = $_POST['time'];
    $place = $_POST['place'];
    $day = $_POST['day'];

    // Remove activity_id from the INSERT query
    $sql = "INSERT INTO activities (activity, time, place, day) VALUES ('$activity', '$time', '$place', '$day')";

    if (mysqli_query($conn, $sql)) {
        header("Location: activity.php");
    } else {
        // Check if the error is due to duplicate entry
        if (mysqli_errno($conn) == 1062) {
            echo "Error: Duplicate entry. Please ensure activity_id is unique.";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
