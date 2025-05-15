
<?php
require_once '../../classes/presSubOffices.class.php';
require_once '../../classes/Honorifics.class.php';
require_once '../../classes/personnel.class.php';

$honorificsObj = new Honorifics();
$presSubOfficesObj = new PresSubOffices();

if (isset($_POST['submit'])) {
    $PersonnelName = $_POST['PersonnelName'];
    $personnel_honorifics_id = $_POST['honorifics']; // Get the selected honorifics ID
    $PresSuboffice_id = $_POST['offices']; // Get the selected honorifics ID

    $personnel = new Personnel();

    // Assuming `add_official()` accepts name and title as parameters
    if ($personnel->add_president_personnel($PersonnelName, $PresSuboffice_id, $personnel_honorifics_id)) {
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
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/insert.css">
   
</head>
<body>
    <div class="header">
    <img src="../../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>
    <h1>Add Personnel President</h1>

    <div class="container">
        <form action="" method="post">


            <div class="form-group">
    <label for="honorifics">Honorifics</label>
    <select name="honorifics" class="form-control border-danger" style="border-width: 2px;" id="honorifics" required>
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
                <select name="offices" class="form-control border-danger" style="border-width: 2px;" id="offices" required>
                    <option value="">Select a Sub Office</option>
                    <?php
                        $subOffices = $presSubOfficesObj->fetchSubOffices();
                        foreach ($subOffices as $subOffice){
                    ?>
                        <option value="<?= $subOffice['id'] ?>"><?= htmlspecialchars($subOffice['office']) ?></option>
                    <?php
                        }
                    ?>
                </select>

            <div class="form-group">
                <label for="PersonnelName">Name</label>
                <input type="text" name="PersonnelName" id="PersonnelName" class="form-control border-danger"  required>
            </div>

            <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>
        <a href="../../sample-admin/Home" class="back-link">Back to Administration</a>
    </div>
</body>
</html>
