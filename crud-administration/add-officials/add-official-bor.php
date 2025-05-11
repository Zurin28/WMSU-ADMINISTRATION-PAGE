<?php
require_once '../../classes/bor.class.php';
require_once '../../classes/honorifics.class.php';
require_once '../../classes/designation_bor.class.php';

$honorificsObj = new Honorifics();
$designationBorObj = new DesignationBor();

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $title_id = $_POST['title_id']; // Changed from title to title_id
    $honorifics_id = $_POST['honorifics'];
    $rank = 0; // Default rank
    
    // Correctly retrieve file information
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = '../../images/' . $file_name;

    // Move uploaded file to the 'images' folder
    if(move_uploaded_file($tempname, $folder)) {
        $boardobj = new Board();
        
        if ($boardobj->upload($name, $title_id, $file_name, $rank, $honorifics_id)) {
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
    <link rel="stylesheet" href="../../css/insert.css">
</head>
<body>
<div class="header">
        <img src="../../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>
    <h1>BOARD OF REGENTS</h1>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="honorifics">Honorifics</label>
                <select name="honorifics" id="honorifics" required>
                    <option value="">Select honorific</option>
                    <?php
                        $honorific = $honorificsObj->fetchHonorifics();
                        foreach ($honorific as $honorifics){
                    ?>
                        <option value="<?= $honorifics['id'] ?>"><?= htmlspecialchars($honorifics['name']) ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="title_id">Designation</label>
                <select name="title_id" id="title_id" required>
                    <option value="">Select designation</option>
                    <?php
                        $designations = $designationBorObj->fetchdesignation_bor();
                        foreach ($designations as $designation){
                    ?>
                        <option value="<?= $designation['id'] ?>"><?= htmlspecialchars($designation['designation']) ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>

            <div>
                <label>Upload Image</label>
                <div class="image-upload">
                    <button type="button" class="image-upload-btn" onclick="document.getElementById('image').click()">Select Image</button>
                    <span id="file-selected">No file selected</span>
                </div>
                <input type="file" name="image" id="image" accept="image/*"hidden required>
                <div class="image-preview" id="image-preview"></div>
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
