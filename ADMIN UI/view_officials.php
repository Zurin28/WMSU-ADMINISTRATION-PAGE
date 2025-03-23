<?php
// Include database connection
require_once 'db_connect.php';

// Get category from URL
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Define categories and their database mappings
$categories = [
    'president' => ['table' => 'opstaff', 'position_type' => 'President', 'title' => 'PRESIDENT'],
    'vice-presidents' => ['table' => 'opstaff', 'position_type' => 'Vice President', 'title' => 'VICE PRESIDENTS'],
    'op-staff' => ['table' => 'opstaff', 'position_type' => 'OP Staff', 'title' => 'OFFICE OF THE PRESIDENT STAFF'],
    'university-board' => ['table' => 'opstaff', 'position_type' => 'University Secretary', 'title' => 'UNIVERSITY BOARD AND SECRETARY'],
    'directors' => ['table' => 'opstaff', 'position_type' => 'Director', 'title' => 'DIRECTORS'],
    'campus-admin' => ['table' => 'opstaff', 'position_type' => 'Campus Administrator', 'title' => 'CAMPUS ADMINISTRATORS'],
    'lab-principals' => ['table' => 'opstaff', 'position_type' => 'Lab Principal', 'title' => 'INTEGRATED LABORATORY SCHOOL PRINCIPALS AND ASSISTANT PRINCIPALS'],
    'assistant-directors' => ['table' => 'opstaff', 'position_type' => 'Assistant Director', 'title' => 'ASSISTANT & ASSOCIATE DIRECTORS'],
    'assistant-chairpersons' => ['table' => 'opstaff', 'position_type' => 'Assistant Chairperson', 'title' => 'ASSISTANT CHAIRPERSONS | SPECIAL ASSISTANTS'],
    'technical-assistant' => ['table' => 'opstaff', 'position_type' => 'Technical Assistant', 'title' => 'TECHNICAL ASSISTANT | TECHNICAL ASSOCIATES'],
    'chairpersons' => ['table' => 'opstaff', 'position_type' => 'Chairperson', 'title' => 'CHAIRPERSONS'],
    'managers' => ['table' => 'opstaff', 'position_type' => 'Manager', 'title' => 'MANAGER'],
    'graduate-school' => ['table' => 'opstaff', 'position_type' => 'Graduate School Head', 'title' => 'HEAD/CHAIR OF THE GRADUATE SCHOOL'],
    'coordinators' => ['table' => 'opstaff', 'position_type' => 'Coordinator', 'title' => 'COORDINATORS'],
    'section-chief' => ['table' => 'opstaff', 'position_type' => 'Section Chief', 'title' => 'SECTION CHIEF'],
    'other-services' => ['table' => 'opstaff', 'position_type' => 'Other Service', 'title' => 'OTHER SERVICES']
];

// Fetch data for the selected category
function fetchOfficials($conn, $table, $position_type) {
    $officials = [];
    $sql = "SELECT * FROM $table WHERE position_type = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $position_type);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $officials[] = $row;
        }
    }
    
    return $officials;
}

// Get officials data if category exists
$officials = [];
$categoryTitle = '';
if (isset($categories[$category])) {
    $categoryInfo = $categories[$category];
    $officials = fetchOfficials($conn, $categoryInfo['table'], $categoryInfo['position_type']);
    $categoryTitle = $categoryInfo['title'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU ADMIN - <?php echo $categoryTitle; ?></title>
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

        .category-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
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
        }

        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .name-cell {
            font-weight: bold;
        }

        .empty-message {
            text-align: center;
            padding: 20px;
            color: #777;
            font-style: italic;
        }

        .action-cell {
            width: 100px;
            text-align: center;
        }

        .action-btn {
            display: inline-block;
            padding: 3px 8px;
            margin: 2px;
            background-color: #8B0000;
            color: white;
            border-radius: 3px;
            text-decoration: none;
            font-size: 12px;
        }

        .edit-btn {
            background-color: #007bff;
        }

        .delete-btn {
            background-color: #dc3545;
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

        .insert-btn {
            display: block;
            width: 120px;
            background-color: #8B0000;
            color: white;
            text-align: center;
            padding: 8px;
            text-decoration: none;
            border-radius: 4px;
            margin: 0 auto 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="imgs/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>

    <div class="container">
        <?php if (!empty($categoryTitle)): ?>
            <div class="category-title"><?php echo $categoryTitle; ?></div>
            
            <a href="insert.php?section=<?php echo $category; ?>" class="insert-btn">Add New</a>
            
            <table>
                <thead>
                    <tr>
                        <th width="40%">NAME</th>
                        <th width="40%">TITLE</th>
                        <th width="20%">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($officials) > 0): ?>
                        <?php foreach ($officials as $official): ?>
                        <tr>
                            <td class="name-cell"><?php echo $official['name']; ?></td>
                            <td><?php echo $official['title']; ?></td>
                            <td class="action-cell">
                                <a href="edit.php?section=<?php echo $category; ?>&id=<?php echo $official['id']; ?>" class="action-btn edit-btn">Edit</a>
                                <a href="delete.php?section=<?php echo $category; ?>&id=<?php echo $official['id']; ?>" class="action-btn delete-btn" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" class="empty-message">No data available</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="category-title">Invalid Category</div>
            <p class="empty-message">The requested category does not exist.</p>
        <?php endif; ?>
        
        <a href="admin_officials.php" class="back-link">Back to Administrative Officials</a>
    </div>
</body>
</html>