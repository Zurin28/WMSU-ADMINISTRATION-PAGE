<?php
require_once '../../classes/presSubOffices.class.php';
require_once '../../classes/honorifics.class.php';

$honorificsObj = new Honorifics();

if (isset($_POST['submit'])) {
    $office = $_POST['office'];
    $office_head = $_POST['office_head'];
    $honorifics_id = $_POST['honorifics']; // Get the selected honorifics ID
    $description = $_POST['description'];

    $presSubOfficesObj = new PresSubOffices();

     // ✅ Define upload-related variables
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = "../../images/" . basename($file_name);

    if (move_uploaded_file($tempname, $folder)) {
        if ($presSubOfficesObj->upload($office, $office_head, $honorifics_id, $description ,$file_name)) {
            echo "Official added successfully!";
            header('Location: ../../sample-admin/Home');
            exit(); // best practice to stop execution after redirect
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
    <title>Add Officials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/insert.css">
</head>
<body>
    <div class="header">
    <img src="../../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>
    <h1>PRESIDENT’S SUBOFFICES</h1>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="office">Office</label>
                <input type="text" name="office" id="office" class="form-control border-danger" style="border-width: 2px;" required>
            </div>

            <div class="form-group">
    <label for="honorifics">Honorifics</label>
    <select name="honorifics" id="honorifics" class="form-control border-danger" style="border-width: 2px;" required>
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
                <label for="office_head">Office Head</label>
                <input type="text" name="office_head" id="office_head" class="form-control border-danger" style="border-width: 2px;" required>
            </div>

                        <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" class="form-control border-danger" style="border-width: 2px;" required>

                <div class="form-group">
                <label>Upload Image</label>
                <div class="image-upload">
                    <button type="button" class="image-upload-btn" onclick="document.getElementById('image').click()">Select Image</button>
                    <span id="file-selected">No file selected</span>
                </div>
                <input type="file" name="image" id="image" accept="image/*" hidden required>
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
