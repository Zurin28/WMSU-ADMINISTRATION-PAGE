<?php
// Include database connection
require_once 'db_connect.php';

// Get parameters from URL
$section = isset($_GET['section']) ? $_GET['section'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Define sections array (same as in insert.php/edit.php)
$sections = [
    'regents' => [
        'title' => 'BOARD OF REGENTS',
        'table' => 'board_of_regents'
    ],
    'officials' => [
        'title' => 'ADMINISTRATIVE OFFICIALS',
        'table' => 'opstaff'
    ],
    'president' => [
        'title' => 'PRESIDENT',
        'table' => 'president'
    ],
    'vice-presidents' => [
        'title' => 'VICE PRESIDENTS',
        'table' => 'vice_presidents'
    ],
    'op-staff' => [
        'title' => 'OFFICE OF THE PRESIDENT STAFF',
        'table' => 'opstaff'
    ],
    'university-board' => [
        'title' => 'UNIVERSITY BOARD AND SECRETARY',
        'table' => 'university_board_secretary'
    ],
    'deans' => [
        'title' => 'ACADEMIC DEANS',
        'table' => 'academic_deans',
        'position_type' => 'Academic Dean'
    ],
    'directors' => [
        'title' => 'DIRECTORS',
        'table' => 'directors'
    ],
    'associate-deans' => [
        'title' => 'ASSOCIATE DEANS',
        'table' => 'academic_deans',
        'position_type' => 'Associate Dean'
    ],
    'campus-admin' => [
        'title' => 'CAMPUS ADMINISTRATORS',
        'table' => 'campus_administrators'
    ],
    'lab-principals' => [
        'title' => 'INTEGRATED LABORATORY SCHOOL PRINCIPALS AND ASSISTANT PRINCIPALS',
        'table' => 'ils_principals'
    ],
    'external' => [
        'title' => 'EXTERNAL STUDIES UNITS',
        'table' => 'academic_deans',
        'position_type' => 'External Studies Unit'
    ],
    'assistant-directors' => [
        'title' => 'ASSISTANT & ASSOCIATE DIRECTORS',
        'table' => 'assistant_directors'
    ],
    'assistant-chairpersons' => [
        'title' => 'ASSISTANT CHAIRPERSONS | SPECIAL ASSISTANTS',
        'table' => 'technical_assistants'
    ],
    'technical-assistant' => [
        'title' => 'TECHNICAL ASSISTANT | TECHNICAL ASSOCIATES',
        'table' => 'technical_assistants'
    ],
    'chairpersons' => [
        'title' => 'CHAIRPERSONS',
        'table' => 'chairpersons'
    ],
    'managers' => [
        'title' => 'MANAGER',
        'table' => 'managers'
    ],
    'graduate-school' => [
        'title' => 'HEAD/CHAIR OF THE GRADUATE SCHOOL',
        'table' => 'graduate_school_head'
    ],
    'coordinators' => [
        'title' => 'COORDINATORS',
        'table' => 'coordinators'
    ],
    'section-chief' => [
        'title' => 'SECTION CHIEF',
        'table' => 'section_chiefs'
    ],
    'other-services' => [
        'title' => 'OTHER SERVICES',
        'table' => 'other_services'
    ],
];

$message = '';
$messageType = '';

// Check if section and ID are valid
if (isset($sections[$section]) && !empty($id)) {
    $sectionData = $sections[$section];
    $table = $sectionData['table'];
    
    // Fetch record for confirmation (to show details before deletion)
    $record = null;
    $sql = "SELECT * FROM $table WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $record = $result->fetch_assoc();
    } else {
        $message = "Record not found.";
        $messageType = "danger";
    }
    $stmt->close();
    
    // Process deletion if confirmed
    if (isset($_POST['delete']) && $_POST['delete'] == 'yes') {
        $sql = "";
        $params = [];
        $types = "";
        
        if ($table === 'academic_deans' && isset($sectionData['position_type'])) {
            $sql = "DELETE FROM $table WHERE id = ? AND position_type = ?";
            $params = [$id, $sectionData['position_type']];
            $types = "is";
        } else {
            $sql = "DELETE FROM $table WHERE id = ?";
            $params = [$id];
            $types = "i";
        }
        
        $stmt = $conn->prepare($sql);
        if ($stmt) {
            $stmt->bind_param($types, ...$params);
            $result = $stmt->execute();
            
            if ($result) {
                // If the record has an image, delete the image file
                if (isset($record['image']) && !empty($record['image']) && file_exists($record['image'])) {
                    unlink($record['image']);
                }
                
                $message = "Record deleted successfully!";
                $messageType = "success";
                $record = null; // Clear record after deletion
            } else {
                $message = "Error deleting record: " . $stmt->error;
                $messageType = "danger";
            }
            $stmt->close();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU ADMIN - Delete <?php echo isset($sections[$section]) ? $sections[$section]['title'] : ''; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #000000;
        }

        .header {
            background-color: #8B0000;
            color: white;
            display: flex;
            align-items: center;
            padding: 10px 20px;
            height: 60px;
        }

        .logo {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .title {
            font-size: 16px;
            font-weight: bold;
        }

        .container {
            max-width: 400px;
            margin: 20px auto;
            background: white;
            padding: 15px;
            border-radius: 0;
            box-shadow: none;
        }

        .section-title {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .record-info {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 20px;
        }

        .record-item {
            margin-bottom: 10px;
        }

        .record-label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .record-value {
            padding: 5px 0;
        }

        .record-image {
            text-align: center;
            margin-top: 10px;
        }

        .record-image img {
            max-width: 100px;
            max-height: 100px;
            border: 1px solid #ddd;
        }

        .alert {
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 0;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .btn {
            padding: 8px 20px;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            font-size: 14px;
        }

        .btn-danger {
            background-color: #8B0000;
            color: white;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #8B0000;
            text-decoration: none;
            font-size: 14px;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .confirmation-text {
            text-align: center;
            margin: 20px 0;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="../imgs/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>

    <div class="container">
        <div class="section-title"><?php echo isset($sections[$section]) ? $sections[$section]['title'] : 'Unknown Section'; ?> DELETE</div>
        
        <?php if (!empty($message)): ?>
            <div class="alert alert-<?php echo $messageType; ?>"><?php echo $message; ?></div>
        <?php endif; ?>
        
        <?php if ($record): ?>
            <div class="record-info">
                <?php if (isset($record['image']) && !empty($record['image'])): ?>
                <div class="record-item">
                    <div class="record-label">Image:</div>
                    <div class="record-image">
                        <img src="<?php echo $record['image']; ?>" alt="Record Image">
                    </div>
                </div>
                <?php endif; ?>
                
                <div class="record-item">
                    <div class="record-label">Name:</div>
                    <div class="record-value"><?php echo htmlspecialchars($record['name']); ?></div>
                </div>
                
                <div class="record-item">
                    <div class="record-label">Title:</div>
                    <div class="record-value"><?php echo htmlspecialchars($record['title']); ?></div>
                </div>
                
                <?php if (isset($record['page_link']) && !empty($record['page_link'])): ?>
                <div class="record-item">
                    <div class="record-label">Office Link:</div>
                    <div class="record-value"><?php echo htmlspecialchars($record['page_link']); ?></div>
                </div>
                <?php endif; ?>
            </div>
            
            <div class="confirmation-text">Are you sure you want to delete this record?</div>
            
            <form method="post" action="">
                <input type="hidden" name="delete" value="yes">
                <div class="action-buttons">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="view.php?section=<?php echo urlencode($section); ?>" class="btn btn-secondary" style="text-decoration: none;">Cancel</a>
                </div>
            </form>
        <?php elseif ($messageType !== 'success'): ?>
            <div class="alert alert-danger">Record not found or invalid request.</div>
        <?php endif; ?>
        
        <?php if ($messageType === 'success'): ?>
            <a href="view.php?section=<?php echo urlencode($section); ?>" class="back-link">Back to List</a>
    <?php endif; ?>
    </div>
</body>
</html>