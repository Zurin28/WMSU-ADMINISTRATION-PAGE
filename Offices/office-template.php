
<?php 
require_once '../__includes/navbar.php';
require_once '../classes/personnel.class.php';

$personnelObj = new Personnel();
$designation = $_GET['title'] ?? '';

// Fetch all sub-offices under this designation
$offices = $personnelObj->fetchSubOfficesByDesignationVP($designation);

// Grouped data holds office info and personnel
$groupedData = [];

foreach ($offices as $office) {
    $personnelList = $personnelObj->fetchPersonnelByOfficeId($office['office']);

    $groupedData[] = [
        'office' => $office['office'],
        'description' => $office['description'],
        'image' => $office['image'],
        'personnel' => array_map(function ($p) {
            return $p['honorific_short'] . ' ' . $p['PersonnelName'];
        }, $personnelList)
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chief of Staff, Office of the President</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
        }

        .office-container {
            max-width: 900px;
            margin: 40px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
            padding: 40px 32px;
            text-align: center;
        }

        .office-title {
            font-size: 2.4em;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .office-image {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 24px;
            border: 5px solid #e0e0e0;
        }

        .office-description {
            font-size: 1.15em;
            color: #555;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .section {
            max-width: 900px;
            margin: 20px auto 60px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            padding: 24px 32px;
        }

        .section-header {
            font-size: 1.75em;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }

        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        thead {
            background-color: #3498db;
            color: #fff;
        }

        th, td {
            padding: 12px 16px;
            text-align: left;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        td {
            font-weight: 500;
            color: #2d3436;
        }
    </style>
</head>


<body>
    <?php foreach ($groupedData as $office): ?>
        <div class="office-container">
            <div class="office-title"><?= htmlspecialchars($office['office']) ?></div>
            <img src="../images/<?= htmlspecialchars($office['image']) ?>" alt="Office Image" class="office-image">
            <div class="office-description"><?= htmlspecialchars($office['description']) ?></div>
        </div>

        <div class="section">
            <div class="section-header">Personnel</div>
            <div class="table-responsive">
                <table>
                    <thead><tr><th>Name</th></tr></thead>
                    <tbody>
                        <?php if (!empty($office['personnel'])): ?>
                            <?php foreach ($office['personnel'] as $name): ?>
                                <tr><td><?= htmlspecialchars($name) ?></td></tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td>No personnel found for this office.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endforeach; ?>
</body>
</html>
