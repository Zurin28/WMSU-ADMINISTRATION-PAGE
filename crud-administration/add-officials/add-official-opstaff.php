<?php
require_once '../../classes/opstaff.class.php';
require_once '../../classes/honorifics.class.php';

$honorificsObj = new Honorifics();
$opstaffobj = new OpStaff();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $title_id = $_POST['title_id'];
    $page_link = $_POST['page_link'];
    $honorifics_id = $_POST['honorifics'];
    $office_name = $_POST['office_name'];

    if ($opstaffobj->add_official($name, $title_id, $page_link, $honorifics_id, $office_name)) {
        header('Location: ../../sample-admin/Home');
        exit;
    } else {
        echo "Failed to insert into the database.";
    }
}

// Get all designations directly using OpStaff class
$designations = $opstaffobj->fetchDesignations();
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
    <h1>OFFICE OF THE PRESIDENT STAFF</h1>

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control border-danger" style="border-width: 2px;" required>
            </div>

            <div class="form-group">
                <label for="honorifics">Honorific</label>
                <select name="honorifics" id="honorifics" class="form-control border-danger" style="border-width: 2px;" required>
                    <option value="">Select an honorific</option>
                    <?php
                    $honorific = $honorificsObj->fetchHonorifics();
                    foreach ($honorific as $hon) {
                        echo "<option value='" . $hon['id'] . "'>" . htmlspecialchars($hon['name']) . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="title_id">Designation</label>
                <select name="title_id" id="title_id" class="form-control border-danger" style="border-width: 2px;" required>
                    <option value="">Select designation</option>
                    <?php
                    foreach ($designations as $designation) {
                        echo "<option value='" . $designation['id'] . "'>" . htmlspecialchars($designation['designation']) . "</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="office_name">Office Name</label>
                <input type="text" name="office_name" id="office_name" class="form-control border-danger" style="border-width: 2px;" required>
            </div>

            <div class="form-group">
                <label for="page_link">Page Link</label>
                <input type="text" name="page_link" id="page_link" class="form-control border-danger" style="border-width: 2px;" required>
            </div>

            <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>
        <a href="../../sample-admin/Home" class="back-link">Back to Administration</a>
    </div>
</body>
</html>
