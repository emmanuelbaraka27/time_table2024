<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity | Time Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <div class="navbar">
            <h1>Time Management System</h1>
        </div>
    </nav>
    <div class="sidebar">
        <a href="get_started.php">Dashboard</a>
        <a href="activity.php">Activity</a>
        <a href="report.php">Report</a>
    </div>
    <section class="activity">
        <h2>Current Activities</h2>
        <!-- Display current activities here -->
        <form action="add_activity.php" method="POST">
            <label for="activity">Activity:</label>
            <input type="text" id="activity" name="activity" required>
            <label for="time">Time:</label>
            <input type="text" id="time" name="time" required> 
            <label for="place">Place:</label>
            <input type="text" id="place" name="place" required>
            <label for="day">Day:</label>
            <select id="day" name="day" required>
                <option value="">Select a day</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
            </select><br><br>
            <button type="submit">Add Activity</button>
        </form>
        <h3>Delete Activity</h3>
        <form action="delete_activity.php" method="GET">
            <label for="activity_id">Select Activity to Delete:</label>
            <select id="activity_id" name="activity_id">
            <option value="" disabled selected>Select Activity</option> <!-- Added the default option -->
                <!-- Fetch and display activities dynamically -->
                <?php
                include 'config.php';
                $sql = "SELECT * FROM activities";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['activity'] . "</option>";
                    }
                }
                mysqli_close($conn);
                ?>
            </select><br><br>
            <button type="submit">Delete Activity</button>
        </form>
    </section>
</body>
</html>
