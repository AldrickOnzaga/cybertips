<?php
// Establish a database connection
@include_once 'config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch news data from the database
$sql = "SELECT id, title, content, created_at FROM news ORDER BY created_at DESC";
$result = $conn->query($sql);

// Display news data in the news-container
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $title = $row['title'];
        $content = $row['content'];
        $created_at = $row['created_at'];
        $first_paragraph = substr($content, 0, strpos($content, "\n"));

        echo '<div class="news-item">';
        echo '<h2>' . $title . '</h2>';
        echo '<p>' . $created_at . '</p>';
        echo $first_paragraph;
        echo '<br>';
        echo '<a href="news-content.php?id=' . $id . '" class="read-more">Read more</a>';
        echo '</div>';
    }
} else {
    echo 'No news found.';
}

$conn->close();
?>
