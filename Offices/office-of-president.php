<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chief of Staff, Office of the President</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <style>
        .office-container {
            max-width: 800px;
            margin: 40px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            padding: 32px;
            text-align: center;
        }
        .office-title {
            font-size: 2.2em;
            font-weight: bold;
            margin-bottom: 16px;
        }
        .office-image {
            width: 220px;
            height: 220px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 24px;
            border: 4px solid #eee;
        }
        .office-description {
            font-size: 1.15em;
            color: #444;
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <?php require_once '../__includes/navbar.php'; ?>
    <div class="office-container">
        <div class="office-title">Office of the President</div>
        <img src="../images/office-of-president.jpg" alt="Office of the President" class="office-image">
        <div class="office-description">
            The Office of the President is the central executive office responsible for the overall leadership and strategic direction of the institution. 
            It oversees all major administrative, academic, and operational functions, ensuring the university’s mission and vision are realized.
        </div>
    </div>
</body>
</html>