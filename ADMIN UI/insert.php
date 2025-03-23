<?php
// Get section parameter from URL
$section = isset($_GET['section']) ? $_GET['section'] : '';

// Define fields for each section
$sections = [
    'regents' => [
        'title' => 'BOARD OF REGENTS',
        'fields' => ['image' => true, 'name' => true, 'title' => true],
        'has_image' => true
    ],
    'president' => [
        'title' => 'PRESIDENT',
        'fields' => ['name' => true, 'title' => true, 'office_link' => true],
    ],
    'vice-presidents' => [
        'title' => 'VICE PRESIDENTS',
        'fields' => ['name' => true, 'title' => true, 'office_link' => true],
    ],
    'op-staff' => [
        'title' => 'OFFICE OF THE PRESIDENT STAFF',
        'fields' => ['name' => true, 'title' => true, 'office_link' => true],
    ],
    'university-board' => [
        'title' => 'UNIVERSITY BOARD AND SECRETARY',
        'fields' => ['name' => true, 'title' => true],
    ],
    'deans' => [
        'title' => 'ACADEMIC DEANS',
        'fields' => ['name' => true, 'title' => true],
    ],
    'directors' => [
        'title' => 'DIRECTORS',
        'fields' => ['name' => true, 'title' => true],
    ],
    'associate-deans' => [
        'title' => 'ASSOCIATE DEANS',
        'fields' => ['name' => true, 'title' => true],
    ],
    'campus-admin' => [
        'title' => 'CAMPUS ADMINISTRATORS',
        'fields' => ['name' => true, 'title' => true],
    ],
    'lab-principals' => [
        'title' => 'INTEGRATED LABORATORY SCHOOL PRINCIPALS AND ASSISTANT PRINCIPALS',
        'fields' => ['name' => true, 'title' => true],
    ],
    'external' => [
        'title' => 'EXTERNAL STUDIES UNITS',
        'fields' => ['name' => true, 'title' => true],
    ],
    'assistant-directors' => [
        'title' => 'ASSISTANT & ASSOCIATE DIRECTORS',
        'fields' => ['name' => true, 'title' => true],
    ],
    'assistant-chairpersons' => [
        'title' => 'ASSISTANT CHAIRPERSONS | SPECIAL ASSISTANTS',
        'fields' => ['name' => true, 'title' => true],
    ],
    'technical-assistant' => [
        'title' => 'TECHNICAL ASSISTANT | TECHNICAL ASSOCIATES',
        'fields' => ['name' => true, 'title' => true],
    ],
    'chairpersons' => [
        'title' => 'CHAIRPERSONS',
        'fields' => ['name' => true, 'title' => true],
    ],
    'managers' => [
        'title' => 'MANAGER',
        'fields' => ['name' => true, 'title' => true],
    ],
    'graduate-school' => [
        'title' => 'HEAD/CHAIR OF THE GRADUATE SCHOOL',
        'fields' => ['name' => true, 'title' => true],
    ],
    'coordinators' => [
        'title' => 'COORDINATORS',
        'fields' => ['name' => true, 'title' => true],
    ],
    'section-chief' => [
        'title' => 'SECTION CHIEF',
        'fields' => ['name' => true, 'title' => true],
    ],
    'other-services' => [
        'title' => 'OTHER SERVICES',
        'fields' => ['name' => true, 'title' => true],
    ],
];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form submission
    // This is where you would add database connection and insert logic
    
    // Redirect back to the administration page after submission
    header("Location: index.php?page=administration");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU ADMIN - Insert <?php echo isset($sections[$section]) ? $sections[$section]['title'] : ''; ?></title>
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
            height: 70px;
        }

        .logo {
            width: 40px;
            height: 40px;
            margin-right: 15px;
        }

        .title {
            font-size: 18px;
            font-weight: bold;
        }

        

        .container {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid black;
            border-radius: 8px;
            background-color: white;
        }
        .form-group {
            margin: 15px 0;
            text-align: left;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 2px solid #7a0000;
            border-radius: 5px;
        }

        .image-upload {
            display: flex;
            align-items: center;
        }

        .image-upload-btn {
            background-color: #8B0000;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        .image-preview {
            width: 100px;
            height: 100px;
            border: 1px dashed #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        .upload-btn {
            background-color: #7a0000;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn {
            background-color: #8B0000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: 20px auto 0;
            width: 120px;
            text-align: center;
        }

        .submit-btn:hover {
            background-color: #6B0000;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #8B0000;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
    <img src="imgs/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>

    <div class="container">
        <?php if (isset($sections[$section])): ?>
            <div class="section-title"><?php echo $sections[$section]['title']; ?> INSERT</div>
            
            <form method="post" action="" enctype="multipart/form-data">
                <?php if (isset($sections[$section]['has_image']) && $sections[$section]['has_image']): ?>
                <div class="form-group">
                    <div class="form-label">Image:</div>
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
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <?php endif; ?>
                
                <?php if (isset($sections[$section]['fields']['title']) && $sections[$section]['fields']['title']): ?>
                <div class="form-group">
                    <label class="form-label" for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <?php endif; ?>
                
                <?php if (isset($sections[$section]['fields']['office_link']) && $sections[$section]['fields']['office_link']): ?>
                <div class="form-group">
                    <label class="form-label" for="office_link">Office Link:</label>
                    <input type="text" class="form-control" id="office_link" name="office_link">
                </div>
                <?php endif; ?>
                
                <button type="submit" class="submit-btn">SUBMIT</button>
            </form>
        <?php else: ?>
            <div class="section-title">Invalid Section</div>
            <p style="text-align: center;">The requested section does not exist.</p>
        <?php endif; ?>
        
        <a href="index.php?page=administration" class="back-link">Back to Administration</a>
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