<?php
require_once '../../classes/pageDescription.class.php';

// Get the page from URL (via href)
$page = isset($_GET['page']) ? $_GET['page'] : null;

if (isset($_POST['submit'])) {
    $description = $_POST['description'];
    $pageDescriptionObj = new PageDescription();

    if ($page && $pageDescriptionObj->add_page($page, $description)) {
        echo "Official added successfully!";
        header('Location: ../../sample-admin/Home');
        exit();
    } else {
        echo "Failed to insert into the database.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Officials</title>
    <link rel="stylesheet" href="../../css/insert.css">
</head>
<body>
    <div class="header">
        <img src="../../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>
    <h1>PAGE DESCRIPTION</h1>

    <div class="container">
        <form action="" method="post">

        <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="description" required rows="10" maxlength="50" style="width: 100%;"></textarea>
</div>

            <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>
        <a href="../../sample-admin/Home" class="back-link">Back to Administration</a>
    </div>
</body>
</html>
