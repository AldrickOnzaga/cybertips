<?php

@include_once 'config.php';

if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $link = $_POST['link'];

    // Move the uploaded image to a desired directory
    $upload_directory = '../admin/resources/img/'; // Specify the directory to store the uploaded images
    $uploaded_image = $upload_directory . $image;
    move_uploaded_file($image_tmp, $uploaded_image);

    // Insert the form data into the database
    $query = "INSERT INTO news (title, content, image, link) VALUES ('$title', '$content', '$uploaded_image', '$link')";
    $result = mysqli_query($conn, $query);

    if ($result) {

        // Redirect back to index.php
        header("Location: ../admin/index.php");
        exit();
    } else {
        // Data insertion failed
        echo "Error: " . mysqli_error($conn);
    }
}
?>
