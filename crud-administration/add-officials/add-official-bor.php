<?php
require_once '../../classes/bor.class.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $title = $_POST['title'];
    
    // Correctly retrieve file information
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = '../../images/' . $file_name;

    // Move uploaded file to the 'images' folder
    if(move_uploaded_file($tempname, $folder)) {
        $boardobj = new Board();
        
        if ($boardobj->upload($name, $title, $file_name)) {
            echo "Uploaded successfully!";
            header('Location: ../../sample-admin/administration');
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
    <title>Add new Board of Regeant Official</title>
    <link rel="stylesheet" href="../../css/insert.css">
</head>
<body>
<div class="header">
        <img src="../../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>

    <div class="container">
        <h2 style="text-align:center; margin-bottom: 20px;">Add Board of Regent Official</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" required>
            </div>

            <div class="form-group">
                <label>Upload Image</label>
                <div class="image-upload">
                    <button type="button" class="image-upload-btn" onclick="document.getElementById('image').click()">Select Image</button>
                    <span id="file-selected">No file selected</span>
                </div>
                <input type="file" name="image" id="image" accept="image/*" required>
                <div class="image-preview" id="image-preview"></div>
            </div>

            <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>
        <a href="../../sample-admin/administration" class="back-link">Back to Administration</a>
    </div>

    <script>
        document.getElementById('image').addEventListener('change', function(e) {
            var fileName = e.target.files[0].name;
            document.getElementById('file-selected').textContent = fileName;

            var preview = document.getElementById('image-preview');
            preview.innerHTML = '';

            var img = document.createElement('img');
            img.src = URL.createObjectURL(e.target.files[0]);
            img.style.maxWidth = '100%';
            img.style.maxHeight = '100%';
            preview.appendChild(img);
        });
    </script>
</body>
</html>
