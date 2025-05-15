<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of the Vice President for Academic Affairs</title>
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
            font-size: 2.5em;
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

        .name-cell {
            font-weight: 500;
            color: #2d3436;
        }
    </style>
</head>
<body>
    <?php require_once '../__includes/navbar.php'; 
          require_once '../classes/personnel.class.php';
          $personnelObj = new Personnel();
          $Office = $personnelObj->fetchOffice();

          ?>

    <div class="office-container">
        <div class="office-title">Office of the Vice President for Academic Affairs</div>
        <img src="../images/ovp-academic.jpg" alt="VP for Academic Affairs" class="office-image">
        <div class="office-description">
            The Office of the Vice President for Academic Affairs is responsible for the development and implementation of academic policies and programs. 
            It ensures the quality of instruction, research, and extension services, and promotes academic excellence across all colleges and departments.
        </div>
    </div>

    <!-- ACADEMIC AFFAIRS PERSONNEL TABLE -->
    <div class="section">
        <div class="section-header">
            Academic Affairs Personnel
        </div>
        <div class="table-responsive">
            <table id="table-vp-personnel">
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $academicAffairsPersonnel = $personnelObj->fetchAllPersonnel();
                    ?>
                    <?php foreach ($academicAffairsPersonnel as $person): ?>
                        <tr>
                            <td class="name-cell"><?= htmlspecialchars($person['honorific_short'] . ' ' . $person['PersonnelName']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
