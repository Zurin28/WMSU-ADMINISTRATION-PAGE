<?php
require_once '../../classes/designation_opstaff.class.php';

if (isset($_POST['submit'])) {
    $designation = $_POST['designation'];

    $designationOpstaff = new DesignationOpstaff();

    if ($designationOpstaff->add_designationOpstaff($designation)) {
        echo "Designation added successfully!";
        header('Location: ../../sample-admin/Home');
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
    <title>Add Office of the President Staff Designation</title>
    <link rel="stylesheet" href="../../css/insert.css">
</head>
<body>
    <div class="header">
        <img src="../../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>

    <h1>OFFICE OF THE PRESIDENT STAFF DESIGNATION</h1>

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" name="designation" id="designation" required>
            </div>

            <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>
        <a href="../../sample-admin/Home" class="back-link">Back to Administration</a>
    </div>
</body>
</html>
