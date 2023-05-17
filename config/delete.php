<?php


@include_once 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve the image path from the database
    $query = "SELECT image FROM news WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $imagePath = $row['image'];

        // Delete the news item from the database
        $deleteQuery = "DELETE FROM news WHERE id = '$id'";
        $deleteResult = mysqli_query($conn, $deleteQuery);

        if ($deleteResult) {
            // Delete the image file from the img directory
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            
            // Deletion successful
            header("Location: ../admin/index.php");
            exit();
        } else {
            // Deletion failed
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Failed to retrieve image path
        echo "Error: " . mysqli_error($conn);
    }
}
?>
