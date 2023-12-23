<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #F5F5F5;
        margin: 0;
        padding: 0;
    }
    h1 {
        text-align: center;
        padding: 20px;
        margin: 0;
        color: #333;
    }
    .notice-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .notice {
        background-color: #FFF;
        border: 1px solid #E0E0E0;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        padding: 20px;
        margin: 20px;
        max-width: 800px;
        flex: 0 0 calc(33.33% - 40px);
        box-sizing: border-box;
    }
    .notice h3 {
        margin-top: 0;
        margin-bottom: 10px;
        color: #333;
    }
    .notice p {
        margin-top: 0;
        margin-bottom: 10px;
        color: #666;
        line-height: 1.5;
    }
    .notice span {
        font-style: italic;
        color: #999;
    }
</style>

<?php
// connect to the database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'student';

$conn = mysqli_connect($host, $username, $password, $dbname);

// check if the connection was successful
if (!$conn) {
    die('Could not connect to the database: ' . mysqli_connect_error());
}

// retrieve the notices from the database
$sql = "SELECT * FROM notices ORDER BY date_added DESC";
$result = mysqli_query($conn, $sql);

// check if there are any notices
if (mysqli_num_rows($result) > 0) {
    // output each notice
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="notice">';
        echo '<h3>' . $row['title'] . '</h3>';
        echo '<p>' . $row['description'] . '</p>';
        echo '<p>' . $row['date_added'] . '</p>';
        echo '</div>';
    }
}
 else {
    echo '<p>No notices found.</p>';
}
// close the database connection
mysqli_close($conn);
?>