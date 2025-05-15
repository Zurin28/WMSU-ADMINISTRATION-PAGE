

<?php
require_once '../../classes/vicepresSubOffices.class.php';
require_once '../../classes/Honorifics.class.php';
require_once '../../classes/personnel.class.php';

$honorificsObj = new Honorifics();
$vicepresSubOfficesObj = new VicepresSubOffices();

if (isset($_POST['submit'])) {
    $PersonnelName = $_POST['PersonnelName'];
    $personnel_honorifics_id = $_POST['honorifics']; // Get the selected honorifics ID
    $VpSuboffice_id = $_POST['offices']; // Get the selected honorifics ID

    $personnel = new Personnel();

    // Assuming `add_official()` accepts name and title as parameters
    if ($personnel->add_vicepres_personnel($PersonnelName, $VpSuboffice_id, $personnel_honorifics_id)) {
        echo "Official added successfully!";
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
    <title>Add Personnel</title>
    <link rel="stylesheet" href="../../css/insert.css">
</head>
<body>
    <div class="header">
    <img src="../../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>
    <h1>Add Personnel Vice President</h1>

    <div class="container">
        <form action="" method="post">


            <div class="form-group">
    <label for="honorifics">Honorifics</label>
    <select name="honorifics" id="honorifics" required>
        <option value="">Select a Honorifics</option>
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
                <label for="offices">Sub Office</label>
                <select name="offices" id="offices" required>
                    <option value="">Select a Sub Office</option>
                    <?php
                        $subOffices = $vicepresSubOfficesObj->fetchSubOffices();
                        foreach ($subOffices as $subOffice){
                    ?>
                        <option value="<?= $subOffice['id'] ?>"><?= htmlspecialchars($subOffice['office']) ?></option>
                    <?php
                        }
                    ?>
                </select>

            <div class="form-group">
                <label for="PersonnelName">Name</label>
                <input type="text" name="PersonnelName" id="PersonnelName" required>
            </div>

            <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>
        <a href="../../sample-admin/Home" class="back-link">Back to Administration</a>
    </div>
</body>
</html>
