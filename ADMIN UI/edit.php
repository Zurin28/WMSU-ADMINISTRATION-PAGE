<?php
// Include database connection
require_once 'db_connect.php';

// Get section parameter from URL
$section = isset($_GET['section']) ? $_GET['section'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Define fields for each section (same as in insert.php)
$sections = [
    'regents' => [
        'title' => 'BOARD OF REGENTS',
        'fields' => ['image' => true, 'name' => true, 'title' => true],
        'has_image' => true,
        'table' => 'board_of_regents'
    ],
    'officials' => [
        'title' => 'ADMINISTRATIVE OFFICIALS',
        'fields' => ['name' => true, 'title' => true, 'office_link' => true],
        'table' => 'opstaff'
    ],
    'president' => [
        'title' => 'PRESIDENT',
        'fields' => ['name' => true, 'title' => true, 'office_link' => true],
        'table' => 'president'
    ],
    'vice-presidents' => [
        'title' => 'VICE PRESIDENTS',
        'fields' => ['name' => true, 'title' => true, 'office_link' => true],
        'table' => 'vice_presidents'
    ],
    'op-staff' => [
        'title' => 'OFFICE OF THE PRESIDENT STAFF',
        'fields' => ['name' => true, 'title' => true, 'office_link' => true],
        'table' => 'opstaff'
    ],
    'university-board' => [
        'title' => 'UNIVERSITY BOARD AND SECRETARY',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'university_board_secretary'
    ],
    'deans' => [
        'title' => 'ACADEMIC DEANS',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'academic_deans',
        'position_type' => 'Academic Dean'
    ],
    'directors' => [
        'title' => 'DIRECTORS',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'directors'
    ],
    'associate-deans' => [
        'title' => 'ASSOCIATE DEANS',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'academic_deans',
        'position_type' => 'Associate Dean'
    ],
    'campus-admin' => [
        'title' => 'CAMPUS ADMINISTRATORS',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'campus_administrators'
    ],
    'lab-principals' => [
        'title' => 'INTEGRATED LABORATORY SCHOOL PRINCIPALS AND ASSISTANT PRINCIPALS',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'ils_principals'
    ],
    'external' => [
        'title' => 'EXTERNAL STUDIES UNITS',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'academic_deans',
        'position_type' => 'External Studies Unit'
    ],
    'assistant-directors' => [
        'title' => 'ASSISTANT & ASSOCIATE DIRECTORS',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'assistant_directors'
    ],
    'assistant-chairpersons' => [
        'title' => 'ASSISTANT CHAIRPERSONS | SPECIAL ASSISTANTS',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'technical_assistants'
    ],
    'technical-assistant' => [
        'title' => 'TECHNICAL ASSISTANT | TECHNICAL ASSOCIATES',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'technical_assistants'
    ],
    'chairpersons' => [
        'title' => 'CHAIRPERSONS',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'chairpersons'
    ],
    'managers' => [
        'title' => 'MANAGER',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'managers'
    ],
    'graduate-school' => [
        'title' => 'HEAD/CHAIR OF THE GRADUATE SCHOOL',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'graduate_school_head'
    ],
    'coordinators' => [
        'title' => 'COORDINATORS',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'coordinators'
    ],
    'section-chief' => [
        'title' => 'SECTION CHIEF',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'section_chiefs'
    ],
    'other-services' => [
        'title' => 'OTHER SERVICES',
        'fields' => ['name' => true, 'title' => true],
        'table' => 'other_services'
    ],
];

// Function to handle file upload (same as in insert.php)
function handleFileUpload($fieldName) {
    $targetDir = "uploads/";
    
    // Create directory if it doesn't exist
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    
    $fileName = basename($_FILES[$fieldName]["name"]);
    $targetFilePath = $targetDir . time() . '_' . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES[$fieldName]["tmp_name"], $targetFilePath)) {
            return $targetFilePath;
        }
    }
    
    return "";
}

// Fetch the record to edit
$record = null;
if (isset($sections[$section]) && !empty($id)) {
    $sectionData = $sections[$section];
    $table = $sectionData['table'];
    
    $sql = "SELECT * FROM $table WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $record = $result->fetch_assoc();
    } else {
        $error_message = "Record not found.";
    }
    $stmt->close();
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($sections[$section])) {
    $sectionData = $sections[$section];
    $table = $sectionData['table'];
    
    // Initialize variables
    $name = $_POST['name'] ?? '';
    $title = $_POST['title'] ?? '';
    $office_link = $_POST['office_link'] ?? null;
    $image_path = null;
    
    // Handle image upload if section has image
    if (isset($sectionData['has_image']) && $sectionData['has_image'] && isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_path = handleFileUpload('image');
    }
    
    // Prepare SQL query based on section
    $sql = "";
    $params = [];
    $types = "";
    
    if ($table === 'board_of_regents') {
        if (!empty($image_path)) {
            $sql = "UPDATE $table SET name = ?, title = ?, image = ? WHERE id = ?";
            $params = [$name, $title, $image_path, $id];
            $types = "sssi";
        } else {
            $sql = "UPDATE $table SET name = ?, title = ? WHERE id = ?";
            $params = [$name, $title, $id];
            $types = "ssi";
        }
    } 
    elseif ($table === 'president' || $table === 'vice_presidents' || $table === 'opstaff') {
        $sql = "UPDATE $table SET name = ?, title = ?, page_link = ? WHERE id = ?";
        $params = [$name, $title, $office_link, $id];
        $types = "sssi";
    }
    elseif ($table === 'academic_deans' && isset($sectionData['position_type'])) {
        $sql = "UPDATE $table SET name = ?, title = ? WHERE id = ? AND position_type = ?";
        $params = [$name, $title, $id, $sectionData['position_type']];
        $types = "ssis";
    }
    else {
        $sql = "UPDATE $table SET name = ?, title = ? WHERE id = ?";
        $params = [$name, $title, $id];
        $types = "ssi";
    }
    
    // Execute query with prepared statement
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param($types, ...$params);
        $result = $stmt->execute();
        
        if ($result) {
            $success_message = "Data updated successfully!";
            
            // Refresh the record after update
            $sql = "SELECT * FROM $table WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $record = $result->fetch_assoc();
            }
        } else {
            $error_message = "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        $error_message = "Error in prepared statement: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU ADMIN - Edit <?php echo isset($sections[$section]) ? $sections[$section]['title'] : ''; ?></title>
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

        .form-group {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: normal;
            font-size: 14px;
        }

        .form-control {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 0;
        }

        .image-upload {
            display: flex;
            align-items: center;
        }

        .image-upload-btn {
            background-color: #8B0000;
            color: white;
            border: none;
            border-radius: 0;
            padding: 3px 8px;
            cursor: pointer;
            margin-right: 10px;
            font-size: 14px;
        }

        .image-preview {
            width: 80px;
            height: 80px;
            border: 1px dashed #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        .submit-btn {
            background-color: #8B0000;
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 0;
            cursor: pointer;
            display: block;
            margin: 10px auto 0;
            width: 100px;
            text-align: center;
            font-size: 14px;
            text-transform: uppercase;
        }

        .submit-btn:hover {
            background-color: #6B0000;
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
        
        .current-image {
            margin-top: 10px;
            text-align: center;
        }
        
        .current-image img {
            max-width: 100px;
            max-height: 100px;
            border: 1px solid #ddd;
            padding: 3px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="../imgs/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>

    <div class="container">
        <?php if (isset($sections[$section]) && $record): ?>
            <div class="section-title"><?php echo $sections[$section]['title']; ?> EDIT</div>
            
            <?php if (isset($success_message)): ?>
                <div class="alert alert-success"><?php echo $success_message; ?></div>
            <?php endif; ?>
            
            <?php if (isset($error_message)): ?>
                <div class="alert alert-danger"><?php echo $error_message; ?></div>
            <?php endif; ?>
            
            <form method="post" action="" enctype="multipart/form-data">
                <?php if (isset($sections[$section]['has_image']) && $sections[$section]['has_image']): ?>
                <div class="form-group">
                    <div class="form-label">Image:</div>
                    <?php if (!empty($record['image'])): ?>
                    <div class="current-image">
                        <img src="<?php echo $record['image']; ?>" alt="Current image">
                        <p>Current image</p>
                    </div>
                    <?php endif; ?>
                    <div class="image-upload">
                        <input type="file" name="image" id="image" accept="image/*" style="display: none;">
                        <button type="button" class="image-upload-btn" onclick="document.getElementById('image').click()">+</button>
                        <span id="file-selected">No file selected</span>
                    </div>
                    <div class="image-preview" id="image-preview"></div>
                </div>
                <?php endif; ?>
                
                <?php if (isset($sections[$section]['fields']['name']) && $sections[$section]['fields']['name']): ?>
                <div class="form-group">
                    <label class="form-label" for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($record['name']); ?>" required>
                </div>
                <?php endif; ?>
                
                <?php if (isset($sections[$section]['fields']['title']) && $sections[$section]['fields']['title']): ?>
                <div class="form-group">
                    <label class="form-label" for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($record['title']); ?>" required>
                </div>
                <?php endif; ?>
                
                <?php if (isset($sections[$section]['fields']['office_link']) && $sections[$section]['fields']['office_link']): ?>
                <div class="form-group">
                    <label class="form-label" for="office_link">Office Link:</label>
                    <input type="text" class="form-control" id="office_link" name="office_link" value="<?php echo isset($record['page_link']) ? htmlspecialchars($record['page_link']) : ''; ?>">
                </div>
                <?php endif; ?>
                
                <button type="submit" class="submit-btn">UPDATE</button>
            </form>
        <?php else: ?>
            <div class="section-title">Invalid Record</div>
            <p style="text-align: center;">The requested record does not exist.</p>
        <?php endif; ?>
        
        <a href="view.php?section=<?php echo urlencode($section); ?>" class="back-link">Back to List</a>
    </div>

    <script>
        // Script for image upload preview
        document.getElementById('image').addEventListener('change', function(e) {
            var fileName = e.target.files[0].name;
            document.getElementById('file-selected').textContent = fileName;
            
            var preview = document.getElementById('image-preview');
            preview.innerHTML = '';
            
            var img = document.createElement('img');
            img.src = URL.createObjectURL(e.target.files[0]);
            img.style.maxWidth = '100%';
            img.style.maxHeight = '100%';
            preview.appendChild(img);
        });
    </script>
</body>
</html>