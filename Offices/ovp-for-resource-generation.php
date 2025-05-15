<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of the Vice President for Resource Generation</title>
    <link rel="stylesheet" href="../css/navbar.css">
    <style>
       .office-container {
        max-width: 800px;
        margin: 0 auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        padding: 32px;
        text-align: center;
        padding-top: 80px; /* Added for navbar spacing */
        margin-top: 40px; /* Added for additional spacing */
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
    <?php require_once '../__includes/navbar.php'; ?>
    <div class="office-container">
        <div class="office-title">Office of the Vice President for Resource Generation</div>
        <img src="../images/ovp-resource-generation.jpg" alt="VP for Resource Generation" class="office-image">
        <div class="office-description">
            This office is tasked with generating and managing additional resources for the university. 
            It develops fundraising strategies, oversees income-generating projects, and cultivates partnerships to support institutional growth.
        </div>
    </div>
</body>
</html>