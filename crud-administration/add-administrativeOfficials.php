<?php
                    $officialClasses = [
                        'President' => 'Pres',
                        'Vice President' => 'Vicepres',
                        'Office of the President Staff' => 'opstaff',
                        'University and Board Secretary' => 'UniversityBoardSecretary',
                        'Directors' => 'Directors',
                        'Campus Administrators' => 'CampusAdministrators',
                        'Integrated Laboratory School Principals & Asst. Principals' => 'ILSPrincipals',
                        'Assistant & Associate Directors | Assistant Chairpersons | Special Assistants' => 'AssistantDirectors',
                        'Technical Assistants' => 'TechnicalAssistants',
                        'Chairpersons' => 'Chairpersons',
                        'Managers' => 'Managers',
                        'HEAD/CHAIR OF THE GRADUATE SCHOOL' => 'GraduateSchoolHead',
                        'Coordinator' => 'Coordinators',
                        'Section Chief' => 'SectionChiefs',
                        'Other Services' => 'OtherServices',
                    ];

                foreach ($officialClasses as $positionLabel => $className) {
                    require_once "../classes/{$className}.class.php";
                    $classObj = new $className();
                    $officials = $classObj->fetchAll();
                }

                ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/addAdminOfficials.css">
</head>
<body>
<div class="header">
        <img src="../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN - Administrative Officials</div>
    </div>

    <div class="container">
        <div class="select-header">SELECT FROM BELOW:</div>
        
        <table>
            <thead>
                <tr>
                    <th style="width: 70%;">TITLE</th>
                    <th style="width: 30%;">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($officialClasses as $positionLabel => $shortKey): ?>
                <tr>
                    <td class="title-col"><?php echo $positionLabel; ?></td>
                    <td>
                    <a href="../crud-administration/add-officials/add-official-<?php echo strtolower($shortKey); ?>.php" class="insert-link">Insert</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>

        </table>
        
        <a href="../sample-admin/administration" class="back-link">Back to Administration</a>
    </div>
</body>
</html>