<?php
// Include database connection
require_once 'db_connect.php';

// Function to fetch data from a specific table
function fetchData($conn, $table, $whereCondition = "") {
    $data = [];
    $sql = "SELECT * FROM " . $table;
    
    if (!empty($whereCondition)) {
        $sql .= " WHERE " . $whereCondition;
    }
    
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    
    return $data;
}

// Define the admin official categories
$categories = [
    'president' => 'PRESIDENT',
    'vice-presidents' => 'VICE PRESIDENTS',
    'op-staff' => 'Office of the President Staff',
    'university-board' => 'University and Board Secretary',
    'directors' => 'Directors',
    'campus-admin' => 'Campus Administrators',
    'lab-principals' => 'Integrated Laboratory School Principals & Asst. Principals',
    'assistant-directors' => 'Assistant & Associate Directors',
    'assistant-chairpersons' => 'Assistant Chairpersons Special Assistants',
    'technical-assistant' => 'Technical Assistant | Technical Associates',
    'chairpersons' => 'Chairpersons',
    'managers' => 'Manager',
    'graduate-school' => 'HEAD/CHAIR OF THE GRADUATE SCHOOL',
    'coordinators' => 'Coordinators',
    'section-chief' => 'Section Chief',
    'other-services' => 'Other Services'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU ADMIN - Administrative Officials</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
        }

        .header {
            background-color: #8B0000;
            color: white;
            display: flex;
            align-items: center;
            padding: 10px 20px;
            height: 90px;
        }

        .logo {
            width: 70px;
            height: 70px;
            margin-right: 15px;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .select-header {
            font-weight: bold;
            margin-bottom: 15px;
            font-size: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #8B0000;
            color: white;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            vertical-align: middle;
        }

        .title-col {
            font-weight: bold;
            font-size: 16px;
            text-align: center;
        }

        .insert-link {
            color: #8B0000;
            text-decoration: underline;
            font-weight: bold;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #8B0000;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="imgs/WMSU-Logo.png" alt="WMSU Logo" class="logo">
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
                <?php foreach ($categories as $key => $title): ?>
                <tr>
                    <td class="title-col"><?php echo $title; ?></td>
                    <td><a href="insert.php?section=<?php echo $key; ?>" class="insert-link">Insert</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <a href="index.php?page=administration" class="back-link">Back to Administration</a>
    </div>
</body>
</html>