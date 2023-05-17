<?php

include_once '../config/config.php';
include_once '../config/process-news.php';
include_once '../config/delete.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION['admin_name'])) {
    // Redirect to login page if user is not logged in
    header('location:login.php');
    exit;
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CYBERTIPS</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/news-management.css">
  </head>
  <body>
    <div class="container">
        <div class="nav">
            <div class="logo">
                <img src="../resources/cyb6.png" alt="CYBERTIPS Logo" />
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">News management</a></li>
                    <li><a href="#">Email</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="main">
            <h1>News management</h1>
            <div class="news-management">
                <h1>Add News</h1>
                <form action="../config/process-news.php" method="POST" enctype="multipart/form-data">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>
                    
                    <label for="content">Content:</label>
                    <textarea id="content" name="content" required></textarea>
                    
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="image">
                    
                    <label for="link">Link:</label>
                    <input type="text" id="link" name="link">
                    
                    <button type="submit" name="upload">Submit</button>
                </form>
                <br></br>
                <div class="table-management">
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Link</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>

                        <?php
                        // Assuming you have established a database connection

                        // Select all rows from the 'news' table
                        $query = "SELECT * FROM news";
                        $result = mysqli_query($conn, $query);

                        // Loop through each row and display the data in the table
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['content'] . "</td>";
                            echo "<td><img src='resources/img/" . $row['image'] . "' alt='News Image'></td>";
                            echo "<td>" . $row['link'] . "</td>";
                            echo "<td>" . $row['created_at'] . "</td>";
                            echo "<td>";
                            echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a> ";
                            echo "<a href='../config/delete.php?id=" . $row['id'] . "'>Delete</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="footer">
            <h1>CYBERTIPS</h1>
        </div>
    </div>
  </body>
</html>
