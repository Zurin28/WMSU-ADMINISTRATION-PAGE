
<?php
require_once '../../classes/pres.class.php';
require_once '../../classes/honorifics.class.php';

$honorificsObj = new Honorifics();

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $title = $_POST['title'];
    $title_bor = $_POST['title_bor'];
    $page_link = $_POST['page_link'];
    $honorifics_id = $_POST['honorifics']; // Added this line to get the honorifics ID
    $rank = 0; // Default rank
    
    // Correctly retrieve file information
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = '../../images/' . $file_name;

    // Move uploaded file to the 'images' folder
    if(move_uploaded_file($tempname, $folder)) {
        $presobj = new Pres();
        
        if ($presobj->upload($name, $title, $title_bor, $page_link, $file_name, $rank, $honorifics_id)) {
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
    <h1>PRESIDENT</h1>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>

            <label for="honorifics">Designation</label>
    <select name="honorifics" id="honorifics" required>
        <option value="">Select a designation</option>
        <?php
            $honorific = $honorificsObj->fetchHonorifics();
            foreach ($honorific as $honorifics){
        ?>
            <option value="<?= $honorifics['id'] ?>"><?= htmlspecialchars($honorifics['name']) ?></option>
        <?php
            }
        ?>
    </select>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" required>
            </div>

            <div class="form-group">
                <label for="title_bor">Title for Board of Regeant</label>
                <input type="text" name="title_bor" id="title_bor" required>
            </div>

            <div class="form-group">
                <label for="page_link">Page Link</label>
                <input type="text" name="page_link" id="page_link" required>
            </div>

            

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
