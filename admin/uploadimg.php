<?php
require_once '../classes/Pres.class.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $title = $_POST['title'];
    
    // Correctly retrieve file information
    $file_name = $_FILES['page_link']['name'];
    $tempname = $_FILES['page_link']['tmp_name'];
    $folder = 'images/' . $file_name;

    // Move uploaded file to the 'images' folder
    if(move_uploaded_file($tempname, $folder)) {
        $pres = new Pres();
        
        if ($pres->upload($name, $title, $file_name)) {
            echo "Uploaded successfully!";
        } else {
            echo "Failed to insert into the database.";
        }
    } else {
        echo "Failed to upload file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload President</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>

        <label for="page_link">Upload Image</label>
        <input type="file" name="page_link" id="page_link" required>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
