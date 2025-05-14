<?php
require_once '../../classes/bor.class.php';
require_once '../../classes/honorifics.class.php';
require_once '../../classes/designation_bor.class.php';

$honorificsObj = new Honorifics();
$designationBorObj = new DesignationBor();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $title_id = $_POST['title_id'];
    $honorifics_id = $_POST['honorifics'];
    $representedby_honorifics_id = $_POST['representedby_honorifics_id'];
    $representedby_name = $_POST['representedby_name'];
    $rank = 0; // Default rank

    // Main image
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_path = '../../images/' . $image_name;

    // Represented-by image
    $representedby_image_name = $_FILES['representedby_image']['name'];
    $representedby_image_tmp = $_FILES['representedby_image']['tmp_name'];
    $representedby_image_path = '../../images/' . $representedby_image_name;

// Check if 'representedby' image was uploaded
$representedby_uploaded = !empty($representedby_image_tmp) && is_uploaded_file($representedby_image_tmp);

// Move main image (required)
if (move_uploaded_file($image_tmp, $image_path)) {

    // If 'representedby' image exists, try to upload it
    if ($representedby_uploaded) {
        if (!move_uploaded_file($representedby_image_tmp, $representedby_image_path)) {
            echo "Failed to upload 'represented by' image.";
            exit();
        }
    } else {
        // If no image was uploaded, set the image name to null
        $representedby_image_name = null;
    }

    // Nullify empty optional fields
    $representedby_honorifics_id = empty($representedby_honorifics_id) ? null : $representedby_honorifics_id;
    $representedby_name = empty($representedby_name) ? null : $representedby_name;

    $boardobj = new Board();
    if ($boardobj->upload(
        $name,
        $title_id,
        $image_name,
        $rank,
        $honorifics_id,
        $representedby_honorifics_id,
        $representedby_image_name,
        $representedby_name
    )) {
        echo "Uploaded successfully!";
        header('Location: ../../sample-admin/Home');
        exit();
    } else {
        echo "Failed to insert into the database.";
    }

} else {
    echo "Failed to upload main image.";
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

            <!-- Represented By Honorifics -->
<div class="form-group">
    <label for="representedby_honorifics_id">Represented By Honorifics</label>
    <select name="representedby_honorifics_id" id="representedby_honorifics_id">
        <option value="">Select honorific</option>
        <?php
            $honorific = $honorificsObj->fetchHonorifics();
            foreach ($honorific as $h) {
        ?>
            <option value="<?= $h['id'] ?>"><?= htmlspecialchars($h['name']) ?></option>
        <?php } ?>
    </select>
</div>

<!-- Represented By Name -->
<div class="form-group">
    <label for="representedby_name">Represented By Name</label>
    <input type="text" name="representedby_name" id="representedby_name" >
</div>

<!-- Represented By Image -->
<div>
    <label>Upload Represented By Image</label>
    <div class="image-upload">
        <button type="button" class="image-upload-btn" onclick="document.getElementById('representedby_image').click()">Select Image</button>
        <span id="representedby-file-selected">No file selected</span>
    </div>
    <input type="file" name="representedby_image" id="representedby_image" accept="image/*" hidden >
    <div class="image-preview" id="representedby-image-preview"></div>
</div>


            <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>
        <a href="../../sample-admin/Home" class="back-link">Back to Administration</a>
    </div>

    <script>
        // Main image preview (already exists)
document.getElementById('image').addEventListener('change', function(e) {
    const fileName = e.target.files[0].name;
    document.getElementById('file-selected').textContent = fileName;
    const preview = document.getElementById('image-preview');
    preview.innerHTML = '';
    const img = document.createElement('img');
    img.src = URL.createObjectURL(e.target.files[0]);
    img.style.maxWidth = '100%';
    img.style.maxHeight = '100%';
    preview.appendChild(img);
});

// Represented-by image preview
document.getElementById('representedby_image').addEventListener('change', function(e) {
    const fileName = e.target.files[0].name;
    document.getElementById('representedby-file-selected').textContent = fileName;
    const preview = document.getElementById('representedby-image-preview');
    preview.innerHTML = '';
    const img = document.createElement('img');
    img.src = URL.createObjectURL(e.target.files[0]);
    img.style.maxWidth = '100%';
    img.style.maxHeight = '100%';
    preview.appendChild(img);
});



    </script>
</body>
</html>