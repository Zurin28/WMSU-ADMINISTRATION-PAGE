<?php
require_once '../../classes/organizationalChart.class.php';

if(isset($_POST['submit'])) {
    $description = $_POST['description'];
    
    // Correctly retrieve file information
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = '../../images/' . $file_name;

    // Move uploaded file to the 'images' folder
    if(move_uploaded_file($tempname, $folder)) {
        $organizationalChartObj = new OrganizationalChart();
        
        if ($organizationalChartObj->upload($file_name, $description)) {
            echo "Uploaded successfully!";
            header('Location: ../../sample-admin/Home');
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
    <title>Add Official</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/insert.css">
</head>
<body>
<div class="header">
        <img src="../../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>
    <h1>Organizational Chart</h1>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">

            

            <div>
                <label>Upload Image</label>
                <div class="image-upload">
                    <button type="button" class="image-upload-btn form-control border-danger" style="border-width: 2px;" onclick="document.getElementById('image').click()">Select Image</button>
                    <span id="file-selected">No file selected</span>
                </div>
                <input type="file" name="image" id="image" accept="image/*"hidden required>
                <div class="image-preview" id="image-preview"></div>
            </div>

            <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" rows="4" maxlength="50" style="width: 100%; border-width: 2px;" class="form-control border-danger"></textarea>
</div>

            <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>
        <a href="../../sample-admin/Home" class="back-link">Back to Administration</a>
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
