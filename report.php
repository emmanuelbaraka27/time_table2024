<?php
include 'config.php';

// Retrieve data from the database
$sql = "SELECT * FROM activities";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output table headers
    echo "<table border='1'>";
    echo "<tr><th>Activity</th><th>Time</th><th>Place</th><th>Day</th><th>Action</th></tr>";

    // Output data rows
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['activity'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";
        echo "<td>" . $row['place'] . "</td>";
        echo "<td>" . $row['day'] . "</td>";
        echo "<td><a href='get_started.php'><button>Back</button></a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No activities found";
}

// Close the database connection
mysqli_close($conn);
?>

