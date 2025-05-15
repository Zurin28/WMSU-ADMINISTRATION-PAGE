<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1.0, maximum-scale=1.0, user-scalable=no">
    <title>WMSU Administrative Officials</title>
    <?php require_once '../__includes/head-home.php'; ?>
    <link rel="stylesheet" href="../css/vp-suboffices.css">
    <link rel="stylesheet" href="../css/footer.css">
    <style>

        .hero{
            padding-top: 140px;
        }
        .staff-card {
            padding: 20px;
            margin: 10px;
            background: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .staff-row {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .staff-row:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .staff-name {
            font-weight: bold;
            margin-bottom: 5px;
            color: #8B0000;
            font-size: 1.1em;
            letter-spacing: 0.5px;
        }

        .staff-title {
            margin-bottom: 10px;
        }

        .staff-title a {
            color: #000;
            text-decoration: underline;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .staff-title a:hover {
            color: #8B0000;
        }

        .sub-offices-btn {
            padding: 8px 16px;
            background-color: #8B0000;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s ease;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .sub-offices-btn:hover {
            background-color: #660000;
        }

        /* Modal styles */
        .suboffices-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            display: flex;
            flex-direction: column;
            width: 90%;
            max-width: 600px;
            position: relative;
            border-radius: 8px;
            overflow: hidden;
        }

        .modal-header-grey {
            background-color: #f0f0f0;
            padding: 15px 20px;
            text-align: center;
        }

        .modal-header-grey h2 {
            color: #8B0000;
            font-size: 1.2em;
            margin: 0;
            font-weight: bold;
        }

        .modal-body {
            background-color: #8B0000;
            padding: 20px;
        }

        .suboffice-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .suboffice-item {
            text-align: center;
            padding: 8px 0;
        }

        .suboffice-link {
            color: white;
            text-decoration: none;
            font-size: 1.1em;
            line-height: 1.4;
            display: block;
            padding: 5px;
            transition: all 0.3s ease;
        }

        .suboffice-link:hover {
            color: #ffeb3b; /* Yellow highlight on hover */
            transform: translateY(-2px);
        }

        .office-title {
            display: block;
            font-size: 0.9em;
            opacity: 0.9;
            margin-top: 3px;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #8B0000;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            background-color: white;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            line-height: 1;
        }

        .close-btn:hover {
            background-color: #f0f0f0;
        }

        /* Animation */
        @keyframes modalFadeIn {
            from {opacity: 0; transform: translateY(-20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        .modal-show {
            display: flex !important;
            animation: modalFadeIn 0.3s ease-out;
        }

        /* Media query for smaller screens */
        /*@media (max-width: 768px) {
            .modal-content {
                max-width: 95%;
                margin: 10px;
            }
            
            .modal-header-grey h2 {
                font-size: 1em;
            }
            
            .suboffice-link {
                font-size: 1em;
            }
        }
            */

        #vicePresSubOfficesModal .modal-content {
            border-radius: 10px;
            overflow: hidden;
        }

        #vicePresSubOfficesModal .modal-header {
            border-bottom: none;
            padding: 15px;
        }

        #vicePresSubOfficesModal .modal-title {
            font-weight: bold;
            color: #333;
        }

        #vicePresSubOfficesModal .modal-body {
            max-height: 400px;
            overflow-y: auto;
        }

        .sub-office-item {
            padding: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: background-color 0.3s;
        }

        .sub-office-item:last-child {
            border-bottom: none;
        }

        .sub-office-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        #vicePresSubOfficesModal .btn-close {
            background-color: white;
            opacity: 1;
        }

        #vicePresSubOfficesModal .btn-close:hover {
            opacity: 0.8;
        }

        .suboffices-button-container {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .sub-offices-btn {
            background-color: #8B0000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .sub-offices-btn:hover {
            background-color: #660000;
        }

        #allVicePresSubOfficesModal .modal-content {
            border-radius: 10px;
            overflow: hidden;
        }

        #allVicePresSubOfficesModal .modal-header {
            border-bottom: none;
            padding: 15px;
        }

        #allVicePresSubOfficesModal .modal-body {
            padding: 20px;
        }

        .vp-section {
            margin-bottom: 20px;
            padding: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .vp-section:last-child {
            border-bottom: none;
        }

        .vp-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .suboffice-item {
            margin: 10px 0;
            padding: 8px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }

        .suboffices-container {
            width: 100%;
            display: flex;
            justify-content: center;
            margin: 20px 0;
            padding: 10px;
        }

        .view-suboffices-btn {
            background-color: white;
            color: #8B0000;
            border: 2px solid #8B0000;
            padding: 10px 30px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            border-radius: 5px;
            text-transform: uppercase;
        }

        .view-suboffices-btn:hover {
            background-color: #8B0000;
            color: white;
        }

        /* Modal Styles */
        #vicePresSubOfficesModal .modal-content {
            background-color: #8B0000;
            color: white;
        }

        #vicePresSubOfficesModal .modal-header {
            background-color: #f4f4f4;
            color: #333;
            border-bottom: none;
        }

        #vicePresSubOfficesModal .modal-title {
            width: 100%;
            text-align: center;
            font-weight: bold;
        }

        #vicePresSubOfficesModal .btn-close {
            background-color: white;
        }

        #vicePresSubOfficesModal .modal-body {
            padding: 20px;
        }

        .suboffice-group {
            margin-bottom: 20px;
            padding: 15px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }

        .suboffice-group-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 10px;
        }

        .suboffice-item {
            padding: 8px;
            margin: 5px 0;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 3px;
        }

        .suboffice-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        /* VP Suboffices Modal Styles */
        .vp-suboffices-modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            overflow: auto;
        }

        .vp-suboffices-modal .modal-content {
            background-color: #ffffff;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #e0e0e0;
            width: 80%;
            max-width: 800px;
            position: relative;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .vp-suboffices-modal .modal-header-grey {
            background-color: #ffffff;
            color: #000000;
            padding: 15px;
            border-radius: 8px 8px 0 0;
            margin: -20px -20px 20px -20px;
            border-bottom: 2px solid #e0e0e0;
        }

        .vp-suboffices-modal .modal-header-grey h2 {
            margin: 0;
            font-size: 1.5em;
            font-weight: bold;
        }

        .vp-group {
            margin-bottom: 30px;
        }

        .vp-group-title {
            color: #000000;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .vp-suboffice-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .vp-suboffice-item {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 5px;
            transition: all 0.3s;
            border: 1px solid #e0e0e0;
        }

        .vp-suboffice-item:hover {
            background-color: #f8f8f8;
            transform: translateY(-2px);
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .vp-suboffice-link {
            text-decoration: none;
            color: #000000;
            display: block;
        }

        .vp-office-title {
            display: block;
            color: #555555;
            font-size: 0.9em;
            margin-top: 5px;
        }

        .close-btn {
            position: absolute;
            right: 20px;
            top: 15px;
            color: #000000;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-btn:hover {
            color: #555555;
        }

        /* Button Styles */
        .view-suboffices-btn {
            background-color: #ffffff;
            color: #000000;
            padding: 10px 20px;
            border: 2px solid #000000;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: all 0.3s;
            font-weight: bold;
        }

        .view-suboffices-btn:hover {
            background-color: #000000;
            color: #ffffff;
        }

        .suboffices-container {
            text-align: center;
            margin: 20px 0;
        }

        .scroll-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            display: inline-block;
            text-decoration: none;
        }

        .scroll-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(124, 9, 2, 0.3);
        }

        .scroll-btn:active {
            transform: translateY(1px);
        }

        /* Ripple effect */
        .scroll-btn::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, 0.2);
            transform: scale(0);
            transition: transform 0.3s ease;
            border-radius: inherit;
        }

        .scroll-btn:hover::after {
            transform: scale(1);
        }

        .highlight {
            font-weight: 700;
            color: #ffffff;
            display: inline;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }
        
        .admin-highlight {
            color: #ffffff;
            font-weight: 700;
            display: inline;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        }

        /* Add to your existing CSS */
        .containerwhitefiller {
            background-color: white;
            width: 100%;
            padding: 20px;
            margin: 0 auto;
        }

        .org-chart-section {
            max-width: 1260px;
            margin: 0 auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .org-chart-image {
            width: 100%;
            height: auto;
            max-width: 1200px;
            margin: 0 auto;
            display: block;
        }

        .org-chart-description {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        /* Base styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Container sizing */
.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Responsive Grid */
.members-grid {
    display: grid;
    gap: 20px;
    padding: 20px;
    grid-template-columns: repeat(3, 1fr); /* Changed from 4 to 3 columns */
}
/* Update the hero title styles inside your existing <style> tag */

.hero-title {
    text-align: center;
    width: 100%;
    padding: 0 15px;
    font-family: 'Montserrat', sans-serif;
}

.hero-title-main {
    font-size: clamp(1.5em, 5vw, 3em);
    color: white;
    margin-bottom: 10px;
    white-space: nowrap;
    letter-spacing: 29%;  /* Updated letter spacing */
    width: auto;
    display: inline-block;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    text-transform: uppercase;
}

.hero-title-sub {
    font-size: clamp(1.2em, 4vw, 2em);
    color: white;
    display: block;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 29%;  /* Match letter spacing */
}

/* Large Desktop (1200px and up) */
@media screen and (min-width: 1200px) {
    .members-grid {
        grid-template-columns: repeat(3, 1fr); /* Changed from 4 to 3 columns */
    }

    .staff-card {
        padding: 30px;
    }

    .hero-title-main {
        font-size: 3em;
    }

    .hero-title-sub {
        font-size: 2em;
    }

    .profile-bubble {
        width: 250px;  /* Reduced from 350px */
        height: 250px; /* Reduced from 350px */
    }
}

/* Desktop (992px to 1199px) */
@media screen and (min-width: 992px) and (max-width: 1199px) {
    .members-grid {
        grid-template-columns: repeat(3, 1fr); /* Keep 3 columns */
    }

    .hero-title-main {
        font-size: 2.5em;
    }

    .hero-title-sub {
        font-size: 1.8em;
    }

    .profile-bubble {
        width: 220px;  /* Reduced from 300px */
        height: 220px; /* Reduced from 300px */
    }
}

/* Tablet (768px to 991px) */
@media screen and (min-width: 768px) and (max-width: 991px) {
    .members-grid {
        grid-template-columns: repeat(2, 1fr); /* Keep existing tablet layout */
    }

    .hero {
        padding-top: 100px;
    }

    .hero-title-main {
        font-size: 2.2em;
    }

    .hero-title-sub {
        font-size: 1.6em;
    }

    .profile-bubble {
        width: 200px;  /* Reduced from 250px */
        height: 200px; /* Reduced from 250px */
    }

    .president-section {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .staff-card {
        padding: 15px;
    }

    .staff-row {
        padding: 12px;
    }

    .section-header {
        font-size: 1.8em;
    }

    .modal-content {
        width: 90%;
    }
}

/* Mobile Large (576px to 767px) */
@media screen and (min-width: 576px) and (max-width: 767px) {
    .members-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .hero {
        padding-top: 80px;
    }

    .hero-title-main {
        font-size: 2em;
    }

    .hero-title-sub {
        font-size: 1.4em;
    }

    .profile-bubble {
        width: 200px;
        height: 200px;
    }

    .staff-card {
        padding: 10px;
    }

    .staff-row {
        padding: 10px;
    }

    .staff-name {
        font-size: 0.9em;
    }

    .staff-title {
        font-size: 0.8em;
    }

    .section-header {
        font-size: 1.5em;
        padding: 15px 0;
    }

    .modal-content {
        width: 95%;
    }
}
@media screen and (max-width: 768px) {
    .hero-title {
        padding: 0 15px;
    }
    .hero-title-main {
        font-size: 2.5em;
        white-space: nowrap;
    }

    .hero-content {
        width: 100%;
        padding: 0 10px;
    }
}

@media screen and (max-width: 480px) {
    .hero-title-main {
        font-size: 2em;
        white-space: nowrap;
    }

    .hero-title-sub {
        font-size: 1.3em;
    }
}

@media screen and (max-width: 320px) {
    .hero-title-main {
        font-size: 1.5em;
        white-space: nowrap;
    }

    .hero-title-sub {
        font-size: 1.1em;
    }
}
/* Mobile Small (up to 575px) */
@media screen and (max-width: 575px) {
    .members-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .hero {
        padding-top: 60px;
    }

    .hero-title-main {
        font-size: 1.5em;
    }

    .hero-title-sub {
        font-size: 1.2em;
    }

    .profile-bubble {
        width: 180px;
        height: 180px;
    }

    .staff-card {
        padding: 8px;
        margin: 5px;
    }

    .staff-row {
        padding: 8px;
    }

    .staff-name {
        font-size: 0.85em;
    }

    .staff-title {
        font-size: 0.75em;
    }

    .section-header {
        font-size: 1.3em;
        padding: 10px 0;
    }

    .modal-content {
        width: 98%;
        margin: 5px;
    }

    .modal-header-grey h2 {
        font-size: 1em;
    }

    .suboffice-link {
        font-size: 0.9em;
    }

    .btn, 
    .sub-offices-btn,
    .view-suboffices-btn {
        padding: 8px 16px;
        font-size: 0.9em;
    }
}

/* Landscape Mode */
@media screen and (max-height: 500px) and (orientation: landscape) {
    .hero {
        padding-top: 40px;
        min-height: auto;
    }

    .profile-bubble {
        width: 150px;
        height: 150px;
    }

    .modal-content {
        max-height: 90vh;
        overflow-y: auto;
    }
}

/* Dark Mode Support */
@media (prefers-color-scheme: dark) {
    .modal-header-grey {
        background-color: #333;
    }

    .modal-header-grey h2 {
        color: #fff;
    }
}

/* Modal fixes for small screens */
@media screen and (max-width: 512px) {
    .modal-content {
        width: 95%;
        margin: 10px auto;
    }

    .hero {
        width: 100%;
        overflow: hidden;
    }

    .hero-content {
        padding: 0 15px;
    }

    .containerwhitefiller {
        width: 100%;
        margin: 0;
        padding: 15px;
    }

    .org-chart-section {
        width: 100%;
        margin: 0;
        padding: 15px;
    }

    .staff-card {
        margin: 5px 0;
        width: 100%;
    }

    .staff-row {
        margin: 5px 0;
        padding: 8px;
    }

    /* Fix any potential horizontal scroll */
    .members-grid {
        width: 100%;
        padding: 10px;
        gap: 10px;
    }

    /* Ensure proper container bounds */
    .container,
    .containerwhitefiller,
    .org-chart-section,
    .board-section,
    .president-section {
        max-width: 100vw;
        overflow-x: hidden;
    }
}

/* Update the profile bubble sizes */
.profile-bubble {
    width: 250px;  /* Reduced from 350px */
    height: 250px; /* Reduced from 350px */
    border-radius: 50%;
    overflow: hidden;
    position: relative;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

/* Update responsive breakpoints */
@media screen and (min-width: 1200px) {
    .profile-bubble {
        width: 250px;  /* Reduced from 350px */
        height: 250px; /* Reduced from 350px */
    }
}

@media screen and (min-width: 992px) and (max-width: 1199px) {
    .profile-bubble {
        width: 220px;  /* Reduced from 300px */
        height: 220px; /* Reduced from 300px */
    }
}

@media screen and (min-width: 768px) and (max-width: 991px) {
    .profile-bubble {
        width: 200px;  /* Reduced from 250px */
        height: 200px; /* Reduced from 250px */
    }
}

.representative-container {
    margin-top: 15px;
    text-align: center;
}

.representative-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin: 10px auto;
    display: block;
}

#modal-rep-name {
    color: #333;
    font-size: 1.2em;
    margin-top: 10px;
}

.representation h3 {
    color: #7C0902;
    text-align: center;
    margin-bottom: 15px;
    font-weight: bold;
}
    </style>
    <script src="../js/smooth-scroll.js" defer></script>
</head>
<?php
session_start();
// Clear session variables
if(isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('Location: ../crud-administration/admin_login.php');
    exit();
}
?>
<header> </header>
<body>
    <?php require_once '../__includes/navbar.php'; ?>

    <!-- Add this before the hero section -->
    <?php
    require_once '../classes/pageDescription.class.php';

    $pageDescriptionObj = new PageDescription();
    $pageDescriptions = $pageDescriptionObj->fetchAll();

    // Find the description for Administrative Officials
    $adminDescription = '';
    foreach ($pageDescriptions as $desc) {
        if ($desc['page'] === 'ADMINISTRATION PAGE') {
            $adminDescription = $desc['description'];
            break;
        }
    }

    // Split description into paragraphs
    $paragraphs = explode("\n\n", $adminDescription);
    ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="hero-title-main">ADMINISTRATION</span>
                <span class="hero-title-sub">PAGE</span>
            </h1>
            <div class="description">
                <?php foreach ($paragraphs as $index => $paragraph): ?>
                    <p><?php 
                    $text = htmlspecialchars($paragraph);
                    
                    // First paragraph uses admin-highlight
                    if ($index === 0) {
                        $text = preg_replace(
                            '/\*\*(.*?)\*\*/', 
                            '<span class="admin-highlight">$1</span>', 
                            str_replace(['<', '>'], ['&lt;', '&gt;'], $paragraph)
                        );
                    } else {
                        // Other paragraphs use highlight
                        $text = preg_replace(
                            '/\*\*(.*?)\*\*/', 
                            '<span class="highlight">$1</span>', 
                            str_replace(['<', '>'], ['&lt;', '&gt;'], $paragraph)
                        );
                    }
                    echo $text;
                    ?></p>
                <?php endforeach; ?>
            </div>
            <a href="#" class="btn scroll-btn" id="learn-more-btn" aria-label="Learn more about WMSU organization">Learn More</a>
        </div>
    </section>

    <!-- Add this before the organizational chart section -->
    <?php
    require_once '../classes/organizationalChart.class.php';

    $orgChartObj = new OrganizationalChart();
    $orgCharts = $orgChartObj->fetchAll();

    // Get the most recent organizational chart (assuming the latest one should be displayed)
    $latestOrgChart = !empty($orgCharts) ? $orgCharts[count($orgCharts) - 1] : null;
    ?>
    
    <!-- Organizational Chart Section -->
    <div class="containerwhitefiller">
    <h2 id="org-chart" style="text-align:center; background-color: white; color:#7C0902; padding-bottom: 30px; padding-top: 30px; font-weight:800; margin-bottom: 20px;">WMSU Organizational Chart</h2>
        <div class="org-chart-section">
            <?php if ($latestOrgChart): ?>
                <img src="../images/<?php echo htmlspecialchars($latestOrgChart['image']); ?>" 
                     alt="WMSU Organizational Chart" 
                     class="org-chart-image">
                <?php if (!empty($latestOrgChart['description'])): ?>
                    <p class="org-chart-description">
                        <?php echo htmlspecialchars($latestOrgChart['description']); ?>
                    </p>
                <?php endif; ?>
            <?php else: ?>
                <p style="text-align: center; color: #666;">No organizational chart available.</p>
            <?php endif; ?>
        </div>

        <div class="divider" style="background-color: white; margin-top: 0;">
            <div class="divider-line"></div>
            <div class="divider-text">Board of Regents</div>
            <div class="divider-line"></div>
        </div>
    </div>

    <!-- Add this before the board section -->
    <?php
    require_once '../classes/pageDescription.class.php';

    $pageDescriptionObj = new PageDescription();
    $pageDescriptions = $pageDescriptionObj->fetchAll();

    // Find the description for Board of Regents
    $boardDescription = '';
    foreach ($pageDescriptions as $desc) {
        if ($desc['page'] === 'BOARD OF REGENTS') {
            $boardDescription = $desc['description'];
            break;
        }
    }

    // Split description into paragraphs
    $paragraphs = explode("\n\n", $boardDescription);
    ?>

    <section class="board-section">
            <div class="board-container">
                <h2 class="board-title">WHAT IS THE BOARD OF REGENTS?</h2>
                <!-- Board Description Section -->
                <div class="board-description">
                    <?php 
                    $totalParagraphs = count($paragraphs);
                    foreach ($paragraphs as $index => $paragraph): 
                        // Process the paragraph to convert **text** to styled strong tags
                        $processedText = preg_replace('/\*\*(.*?)\*\*/', '<strong style="color: #8B0000;">$1</strong>', $paragraph);
                    ?>
                        <p><?php echo $processedText; ?></p>
                        <?php if ($index < $totalParagraphs - 1): ?>
                            <br />
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <!-- Board Members Grid -->
                <div class="members-grid">
                <?php
                require_once '../classes/bor.class.php';

                $bor = new Board();
                $boardMembers = $bor->fetchAll(); // Fetch all board members

                // Add representation info to specific members
                foreach ($boardMembers as &$member) {
                    if ($member['name'] === 'HON. ALAN PETER S. CAYETANO') {
                        $member['representation'] = [
                            [
                                'name' => 'HON. ROLANDO L. MACASAET',
                                'image' => 'macasaet-1.jpg'
                            ]
                        ];
                    } elseif ($member['name'] === 'HON. MARK O. GO') {
                        $member['representation'] = [
                            [
                                'name' => 'HON. EMMYLOU B. YANGA',
                                'image' => 'yanga.jpg'
                            ]
                        ];
                    }
                }
                unset($member);

                $count = 0;

                foreach ($boardMembers as $index => $member) {
                    // Skip representatives as separate members
                    if ($member['name'] === 'HON. ROLANDO L. MACASAET' || $member['name'] === 'HON. EMMYLOU B. YANGA' || $member['name'] === 'Represented by:') {
                        continue;
                    }
                    
                    // Limit to 12 members
                    if ($count >= 12) {
                        break;
                    }
                    $count++;

                    // Member card with data-index attribute for modal targeting
                    echo '<div class="member-card">';
                    echo '    <img class="profile-img" src="../images/' . htmlspecialchars($member['image']) . '" alt="' . htmlspecialchars($member['name']) . '">';
                    echo '    <h3>' . htmlspecialchars($member['name']) . '</h3>';
                    echo '    <p>' . htmlspecialchars($member['title_bor']) . '</p>';
                    
                    // See More button with data-index to identify member
                    echo '    <button class="btn see-more-btn" data-index="' . $index . '">See More</button>';
                    
                    echo '</div>';
                }
                ?>
                </div>
            </section>
            </section>

                <!-- Modal container -->
                <div id="member-modal" class="modal-container">
                    <div class="modal-header">
                        <button class="close-button" id="modal-close-btn">✕</button>
                    </div>
                    <div class="modal-content">
                        <div class="profile-image" id="modal-profile-image">
                            <img src="" alt="">
                        </div>
                        <div class="profile-info">
                            <h1 id="modal-name"></h1>
                            <h2 id="modal-title"></h2>
                            <p id="modal-description">The Board of Regents is the highest governing body of Western Mindanao State University (WMSU), tasked with setting the strategic direction and overarching policies of the institution. It ensures that the university upholds its mandate of delivering quality education, advancing research, and promoting community engagement.</p>
                            <div class="representation" id="modal-representation" style="display:none;">
                                <h3>REPRESENTED BY:</h3>
                                <div class="representative-container">
                                    <img class="representative-image" src="" alt="" id="modal-rep-image">
                                    <h2 id="modal-rep-name" style="text-align: right; margin-top: 10px;"></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    window.boardMembers = <?php echo json_encode($boardMembers); ?>;

                    function openModal(index) {
                        const member = boardMembers[index];
                        const modal = document.getElementById('member-modal');
                        const modalRepresentation = document.getElementById('modal-representation');
                        const modalRepImage = document.getElementById('modal-rep-image');
                        const modalRepName = document.getElementById('modal-rep-name');

                        // Set main member info
                        document.getElementById('modal-profile-image').querySelector('img').src = '../images/' + member.image;
                        document.getElementById('modal-name').textContent = member.name;
                        document.getElementById('modal-title').textContent = member.title_bor;

                        // Handle representatives for specific members
                        if (member.name === 'HON. ALAN PETER S. CAYETANO') {
                            modalRepresentation.style.display = 'block';
                            modalRepImage.src = '../images/macasaet-1.jpg';
                            modalRepName.textContent = 'HON. ROLANDO L. MACASAET';
                        } 
                        else if (member.name === 'HON. MARK O. GO') {
                            modalRepresentation.style.display = 'block';
                            modalRepImage.src = '../images/yanga.jpg';
                            modalRepName.textContent = 'HON. EMMYLOU B. YANGA';
                        } 
                        else {
                            modalRepresentation.style.display = 'none';
                        }

                        modal.classList.add('show');
                    }

                    // Close button functionality
                    document.getElementById('modal-close-btn').addEventListener('click', function() {
                        document.getElementById('member-modal').classList.remove('show');
                    });
                </script>
                <script src="../js/organizational-chart.js"></script>




    <div class="container">
        <div class="header">
            <div class="header-line left-line"></div>
            <h1>Administrative Officials</h1>
            <div class="header-line right-line"></div>
        </div>
        
        <div class="description">
            <?php 
        
            $pageDescriptionObj = new PageDescription();
            $pageDescriptions = $pageDescriptionObj->fetchAll();
        
            // Find the description for Board of Regents
            $boardDescription = '';
            foreach ($pageDescriptions as $desc) {
                if ($desc['page'] === 'ADMINISTRATIVE OFFICIALS') {
                    $boardDescription = $desc['description'];
                    break;
                }
            }
        
            // Split description into paragraphs
            $paragraphs = explode("\n\n", $boardDescription);
            ?>
            <?php
            foreach ($paragraphs as $index => $paragraph): ?>
                <p><?php 
                $text = htmlspecialchars($paragraph);
                
                // First paragraph uses admin-highlight
                if ($index === 0) {
                    $text = preg_replace(
                        '/\*\*(.*?)\*\*/', 
                        '<span class="admin-highlight">$1</span>', 
                        str_replace(['<', '>'], ['&lt;', '&gt;'], $paragraph)
                    );
                } else {
                    // Other paragraphs use highlight
                    $text = preg_replace(
                        '/\*\*(.*?)\*\*/', 
                        '<span class="highlight">$1</span>', 
                        str_replace(['<', '>'], ['&lt;', '&gt;'], $paragraph)
                    );
                }
                echo $text;
                ?></p>
            <?php endforeach; ?>
        </div>
        
        <div class="president-section">
            <div class="profile-bubble-container">
                <div class="small-bubble"></div>
                <div class="profile-bubble">
                <?php
    require_once '../classes/pres.class.php';

    $pres = new Pres();
    $Presidents = $pres->fetchAll(); // Fetch all presidents

    if ($Presidents) {
        foreach ($Presidents as $president) {
            echo '<div class="president-card">';
            
            // Image
            echo '<img src="../images/' . htmlspecialchars($president['image']) . '" alt="" class="profile-image">';
            
            // Title and Honorifics
          
            echo '</div>';
        }
    } else {
        echo '<p>No presidents found.</p>';
    }
    ?>

                </div>
            </div>

            
            <?php
    if ($Presidents) {
        foreach ($Presidents as $president) {
            echo '<div class="president-info">';
            echo '<h2>' . htmlspecialchars($president['honorific_short']) . ' ' . htmlspecialchars($president['name']) . '</h2>';
            echo '<h3>' . htmlspecialchars($president['title']) . '</h3>';
            echo '<button class="sub-offices-btn" onclick="viewPresidentSuboffices()">
        See Sub-Offices
    </button>';
            // The link is now white for better contrast
            echo '<a href="../Offices/' . urlencode($president['page_link']) . '" class="office-link" style="color: #fff; text-decoration: underline; font-weight: bold;">Proceed to President\'s Office Page</a>';
            echo '</div>';
        }
    } else {
        echo '<p>No presidents found.</p>';
    }
    ?>
        </div>
        
        <h2 class="section-header">Vice Presidents</h2>
        <?php
    require_once '../classes/Vicepres.class.php';
    $vicepres = new Vicepres();
    $vicePresidents = $vicepres->fetchAll(); // Fetch all vice presidents
    ?>
    <div class="staff-card">
    
    <?php foreach ($vicePresidents as $vicePres): ?>
    <div class="staff-row">
      
        <div class="staff-name">
    <?php echo htmlspecialchars($vicePres['honorific_short']) . ' ' . htmlspecialchars($vicePres['name']); ?>
</div>
<div class="staff-title">
    <a href="../Offices/<?php echo urlencode($vicePres['page_link']); ?>">
        <?php echo htmlspecialchars($vicePres['title']); ?>
    </a>
</div>
</div>

<?php endforeach; ?>
</div>

<!-- After the vice presidents section and before the Office of the President Staff section -->
<div class="suboffices-container">
    <button class="view-suboffices-btn" onclick="viewAllSubOffices()">
        SEE ALL VICE PRESIDENTS' SUB-OFFICES
    </button>
</div>


<h2 class="section-header">Office of the President Staff</h2>
<?php
// Include the necessary class and fetch data
require_once '../classes/OpStaff.class.php';
$opStaff = new OpStaff();
$staffMembers = $opStaff->fetchAll(); // Fetch all Office of the President staff members
?>
<div class="staff-card">
<?php foreach ($staffMembers as $staff): ?>
    <div class="staff-row">
        <div class="staff-name">
            <?php 
            echo htmlspecialchars($staff['honorific_short']) . ' ' . htmlspecialchars($staff['name']);
            ?>
        </div>
        <div class="staff-title">
            <?php echo htmlspecialchars($staff['office_name']); ?>
            <a href="../Offices/<?php echo urlencode($staff['page_link']); ?>" style="color: #000; text-decoration: underline; font-weight: normal;">
                <?php echo htmlspecialchars($staff['title']); ?>
            </a>
        </div>
    </div>
<?php endforeach; ?>
</div>

        
        <h2 class="section-header">University and Board Secretary</h2>
        
        <?php
    require_once '../classes/UniversityBoardSecretary.class.php';
    $univBoardSecretary = new UniversityBoardSecretary();
    $secretaries = $univBoardSecretary->fetchAll(); // Fetch all board secretaries
    ?>
    <div class="staff-card">
    <?php foreach ($secretaries as $secretary): ?>
        <div class="staff-row">
            <div class="staff-name"><?php echo htmlspecialchars($secretary['honorific_short']) . ' ' . htmlspecialchars($secretary['name']); ?></div>
            <div class="staff-title"><?php echo htmlspecialchars($secretary['title']); ?></div>
        </div>
    <?php endforeach; ?>
    </div>

        
        <h2 class="section-header">Directors</h2>
        
        <?php
    require_once '../classes/Directors.class.php';
    $DirectorsObj = new Directors();
    $directors = $DirectorsObj->fetchAll(); // Fetch all directors
    ?>
    <div class="staff-card">
    <?php foreach ($directors as $director): ?>
        <div class="staff-row">
            <div class="staff-name"><?php echo htmlspecialchars($director['honorific_short']) . ' ' . htmlspecialchars($director['name']); ?></div>
            <div class="staff-title"><?php echo htmlspecialchars($director['title']); ?></div>
        </div>
    <?php endforeach; ?>
    </div>

        
        <h2 class="section-header">Campus Administrators</h2>
        
        <?php
    require_once '../classes/CampusAdministrators.class.php';
    $campusAdmin = new CampusAdministrators();
    $administrators = $campusAdmin->fetchAll(); // Fetch all campus administrators
    ?>
    <div class="staff-card">
    <?php foreach ($administrators as $admin): ?>
        <div class="staff-row">
            <div class="staff-name"><?php echo htmlspecialchars($admin['honorific_short']) . ' ' . htmlspecialchars($admin['name']); ?></div>
            <div class="staff-title"><?php echo htmlspecialchars($admin['title']); ?></div>
        </div>
    <?php endforeach; ?>
    </div>

        
        <h2 class="section-header">Integrated Laboratory School Principals & Asst. Principals</h2>
        
        <?php
    require_once '../classes/ILSPrincipals.class.php';
    $ILSPrincipals = new ILSPrincipals();
    $principals = $ILSPrincipals->fetchAll(); // Fetch all principals
    ?>
    <div class="staff-card">
    <?php foreach ($principals as $principal): ?>
        <div class="staff-row">
            <div class="staff-name"><?php echo htmlspecialchars($principal['honorific_short']) . ' ' . htmlspecialchars($principal['name']); ?></div>
            <div class="staff-title"><?php echo htmlspecialchars($principal['title']); ?></div>
        </div>
    <?php endforeach; ?>
    </div>

        
        <h2 class="section-header">Assistant & Associate Directors | Assistant Chairpersons | Special Assistants</h2>
        
        <?php
    require_once '../classes/AssistantDirectors.class.php';
    $assistantDirector = new AssistantDirectors();
    $assistantDirectors = $assistantDirector->fetchAll(); // Fetch all assistant directors
    ?>
    <div class="staff-card">
    <?php foreach ($assistantDirectors as $director): ?>
        <div class="staff-row">
            <div class="staff-name"><?php echo htmlspecialchars($director['honorific_short']) . ' ' . htmlspecialchars($director['name']); ?></div>
            <div class="staff-title"><?php echo htmlspecialchars($director['title']); ?></div>
        </div>
    <?php endforeach; ?>
    </div>

        
        <h2 class="section-header">Technical Assistant | Technical Associates</h2>
        
        <?php
    require_once '../classes/TechnicalAssistants.class.php';
    $technicalAssistant = new TechnicalAssistants();
    $technicalAssistants = $technicalAssistant->fetchAll(); // Fetch all technical assistants
    ?>
    <div class="staff-card">
    <?php foreach ($technicalAssistants as $assistant): ?>
        <div class="staff-row">
            <div class="staff-name"><?php echo htmlspecialchars($assistant['honorific_short']) . ' ' . htmlspecialchars($assistant['name']); ?></div>
            <div class="staff-title"><?php echo htmlspecialchars($assistant['title']); ?></div>
        </div>
    <?php endforeach; ?>
    </div>

        
        <h2 class="section-header">Chairpersons</h2>
        
        <?php
    require_once '../classes/Chairpersons.class.php';
    $chairperson = new Chairpersons();
    $chairpersons = $chairperson->fetchAll(); // Fetch all chairpersons
    ?>
    <div class="staff-card">
    <?php foreach ($chairpersons as $chair): ?>
        <div class="staff-row">
            <div class="staff-name"><?php echo htmlspecialchars($chair['honorific_short']) . ' ' . htmlspecialchars($chair['name']); ?></div>
            <div class="staff-title"><?php echo htmlspecialchars($chair['title']); ?></div>
        </div>
    <?php endforeach; ?>
    </div>


<h2 class="section-header">Managers</h2>

<?php
// Include the necessary class and fetch data
require_once '../classes/Managers.class.php';
$managers = new Managers();
$managerList = $managers->fetchAll(); // Fetch all managers
?>
<div class="staff-card">
<?php foreach ($managerList as $manager): ?>
    <div class="staff-row">
        <div class="staff-name">
            <?php 
            // Display honorifics and name dynamically for Managers
            echo htmlspecialchars($manager['honorific_short']) . ' ' . htmlspecialchars($manager['name']);
            ?>
        </div>
        <div class="staff-title">
            <?php 
            // Display title dynamically for Managers
            echo htmlspecialchars($manager['title']);
            ?>
        </div>
    </div>
<?php endforeach; ?>
</div>

        <!-- Existing code remains the same until the HEAD/CHAIR OF THE GRADUATE SCHOOL section -->

<h2 class="section-header">HEAD/CHAIR OF THE GRADUATE SCHOOL</h2>
        
<?php
require_once '../classes/GraduateSchoolHead.class.php';
$graduateSchoolHead = new GraduateSchoolHead();
$graduateSchoolHeads = $graduateSchoolHead->fetchAll(); // Fetch all graduate school heads
?>
<div class="staff-card">
<?php foreach ($graduateSchoolHeads as $head): ?>
    <div class="staff-row">
        <div class="staff-name"><?php echo htmlspecialchars($head['honorific_short']) . ' ' . htmlspecialchars($head['name']); ?></div>
        <div class="staff-title"><?php echo htmlspecialchars($head['title']); ?></div>
    </div>
<?php endforeach; ?>
</div>


<h2 class="section-header">Coordinators</h2>

<?php
require_once '../classes/Coordinators.class.php';
$coordinator = new Coordinators();
$coordinators = $coordinator->fetchAll(); // Fetch all coordinators
?>
<div class="staff-card">
<?php foreach ($coordinators as $coordinatorItem): ?>
    <div class="staff-row">
        <div class="staff-name"><?php echo htmlspecialchars($coordinatorItem['honorific_short']) . ' ' . htmlspecialchars($coordinatorItem['name']); ?></div>
        <div class="staff-title"><?php echo htmlspecialchars($coordinatorItem['title']); ?></div>
    </div>
<?php endforeach; ?>
</div>


<h2 class="section-header">Section Chief</h2>

<?php
require_once '../classes/SectionChiefs.class.php';
$sectionChief = new SectionChiefs();
$sectionChiefs = $sectionChief->fetchAll(); // Fetch all section chiefs
?>
<div class="staff-card">
<?php foreach ($sectionChiefs as $chief): ?>
    <div class="staff-row">
        <div class="staff-name"><?php echo htmlspecialchars($chief['honorific_short']) . ' ' . htmlspecialchars($chief['name']); ?></div>
        <div class="staff-title"><?php echo htmlspecialchars($chief['title']); ?></div>
    </div>
<?php endforeach; ?>
</div>

<h2 class="section-header">Other Services</h2>

<?php
// Include the necessary class and fetch data
require_once '../classes/OtherServices.class.php';
$otherServices = new OtherServices();
$servicesList = $otherServices->fetchAll(); // Fetch all staff for other services
?>
<div class="staff-card">
<?php foreach ($servicesList as $service): ?>
    <div class="staff-row">
        <div class="staff-name">
            <?php 
            // Display honorifics and name dynamically for Other Services
            echo htmlspecialchars($service['honorific_short']) . ' ' . htmlspecialchars($service['name']);
            ?>
        </div>
        <div class="staff-title">
            <?php 
            // Display title dynamically for Other Services
            echo htmlspecialchars($service['title']);
            ?>
        </div>
    </div>
<?php endforeach; ?>
</div>



<h2 class="section-header">Academic Deans</h2>

<?php
// Include the necessary class and fetch data
require_once '../classes/AcademicDean.class.php';
$academicDeans = new AcademicDean();
$deansList = $academicDeans->fetchAll(); // Fetch all academic deans
?>
<div class="staff-card">
<?php foreach ($deansList as $dean): ?>
    <div class="staff-row">
        <div class="staff-name">
            <?php 
            // Display honorifics and name dynamically for Academic Deans
            echo htmlspecialchars($dean['honorific_short']) . ' ' . htmlspecialchars($dean['name']);
            ?>
        </div>
        <div class="staff-title">
            <?php 
            // Display title dynamically for Academic Deans
            echo htmlspecialchars($dean['title']);
            ?>
        </div>
    </div>
<?php endforeach; ?>
</div>


<h2 class="section-header">Associate Deans</h2>

<?php
// Include the necessary class and fetch data
require_once '../classes/AssociateDean.class.php';
$associateDeans = new AssociateDean();
$deansList = $associateDeans->fetchAll(); // Fetch all associate deans
?>
<div class="staff-card">
<?php foreach ($deansList as $dean): ?>
    <div class="staff-row">
        <div class="staff-name">
            <?php 
            // Display honorifics and name dynamically for Associate Deans
            echo htmlspecialchars($dean['honorific_short']) . ' ' . htmlspecialchars($dean['name']);
            ?>
        </div>
        <div class="staff-title">
            <?php 
            // Display title dynamically for Associate Deans
            echo htmlspecialchars($dean['title']);
            ?>
        </div>
    </div>
<?php endforeach; ?>
</div>


<h2 class="section-header">External Studies Unit</h2>

<?php
// Include the necessary class and fetch data
require_once '../classes/ExternalStudiesUnit.class.php';
$externalStudiesUnit = new ExternalStudiesUnit();
$unitMembers = $externalStudiesUnit->fetchAll(); // Fetch all external studies unit members
?>
<div class="staff-card">
<?php foreach ($unitMembers as $member): ?>
    <div class="staff-row">
        <div class="staff-name">
            <?php 
            // Display honorifics and name dynamically for External Studies Unit
            echo htmlspecialchars($member['honorific_short']) . ' ' . htmlspecialchars($member['name']);
            ?>
        </div>
        <div class="staff-title">
            <?php 
            // Display title dynamically for External Studies Unit
            echo htmlspecialchars($member['title']);
            ?>
        </div>
    </div>
<?php endforeach; ?>
</div>

<!-- The rest of the HTML remains unchanged -->

<script>
function viewAllSubOffices() {
    var modal = document.getElementById('vicePresidentSubofficesModal');
    modal.style.display = "block";
}

function closeVPModal() {
    var modal = document.getElementById('vicePresidentSubofficesModal');
    modal.style.display = "none";
}

// Close modal when clicking outside
window.onclick = function(event) {
    var vpModal = document.getElementById('vicePresidentSubofficesModal');
    if (event.target == vpModal) {
        vpModal.style.display = "none";
    }
}

// Close modal on escape key
document.addEventListener('keydown', function(event) {
    if (event.key === "Escape") {
        var vpModal = document.getElementById('vicePresidentSubofficesModal');
        vpModal.style.display = "none";
    }
});
</script>

<!-- Modal HTML structure -->
<div class="suboffices-modal" id="presidentSubofficesModal">
    <div class="modal-content">
        <div class="modal-header-grey">
            <h2>SUBOFFICES OF THE OFFICE OF THE PRESIDENT:</h2>
        </div>
        <div class="modal-body">
            <div class="suboffice-list">
                <?php
                require_once '../classes/presSubOffices.class.php';
                $presSubOffices = new PresSubOffices();
                $subOffices = $presSubOffices->fetchAll();
                
                if ($subOffices) {
                    foreach ($subOffices as $office) {
                        echo '<div class="suboffice-item">';
                        echo '<a href="../Offices/' . urlencode($office['office']) . '" class="suboffice-link">';
                        echo '<span class="office-title">' . htmlspecialchars($office['office']) . '</span>';
                        echo '</a>';
                        echo '</div>';
                    }
                } else {
                    echo '<div class="suboffice-item">No sub-offices found</div>';
                }
                ?>
            </div>
        </div>
        <span class="close-btn" onclick="closePresidentModal()">&times;</span>
    </div>
</div>

<style>
.suboffices-modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 1000;
    justify-content: center;
    align-items: center;
}

.modal-content {
    display: flex;
    flex-direction: column;
    width: 90%;
    max-width: 600px;
    position: relative;
    border-radius: 8px;
    overflow: hidden;
}

.modal-header-grey {
    background-color: #f0f0f0;
    padding: 15px 20px;
    text-align: center;
}

.modal-header-grey h2 {
    color: #8B0000;
    font-size: 1.2em;
    margin: 0;
    font-weight: bold;
}

.modal-body {
    background-color: #8B0000;
    padding: 20px;
}

.suboffice-list {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.suboffice-item {
    text-align: center;
    padding: 8px 0;
}

.suboffice-link {
    color: white;
    text-decoration: none;
    font-size: 1.1em;
    line-height: 1.4;
    display: block;
    padding: 5px;
    transition: all 0.3s ease;
}

.suboffice-link:hover {
    color: #ffeb3b; /* Yellow highlight on hover */
    transform: translateY(-2px);
}

.office-title {
    display: block;
    font-size: 0.9em;
    opacity: 0.9;
    margin-top: 3px;
}

.close-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    color: #8B0000;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
    background-color: white;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    line-height: 1;
}

.close-btn:hover {
    background-color: #f0f0f0;
}

@keyframes modalFadeIn {
    from {opacity: 0; transform: translateY(-20px);}
    to {opacity: 1; transform: translateY(0);}
}

.modal-show {
    display: flex !important;
    animation: modalFadeIn 0.3s ease-out;
}

/* Media query for smaller screens */
/*@media (max-width: 768px) {
    .modal-content {
        max-width: 95%;
        margin: 10px;
    }
    
    .modal-header-grey h2 {
        font-size: 1em;
    }
    
    .suboffice-link {
        font-size: 1em;
    }
}
    */
</style>

<script>
function viewPresidentSuboffices() {
    const modal = document.getElementById('presidentSubofficesModal');
    modal.classList.add('modal-show');
}

function closePresidentModal() {
    const modal = document.getElementById('presidentSubofficesModal');
    modal.classList.remove('modal-show');
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('presidentSubofficesModal');
    if (event.target == modal) {
        closePresidentModal();
    }
}

// Close modal with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === "Escape") {
        closePresidentModal();
    }
});
</script>



<!-- Add this at the bottom of your copy.php file, before the closing body tag -->
<div class="vp-suboffices-modal" id="vicePresidentSubofficesModal">
    <div class="modal-content">
        <div class="modal-header-grey">
            <h2>SUBOFFICES OF THE VICE PRESIDENTS:</h2>
        </div>
        <div class="modal-body">
            <div class="vp-suboffice-list">
                <?php
                require_once '../classes/vicepresSubOffices.class.php';
                
                $vpSubOffices = new VicepresSubOffices();
                $subOffices = $vpSubOffices->fetchAll();
                
                if ($subOffices) {
                    // Group suboffices by VP
                    $groupedOffices = array();
                    foreach ($subOffices as $office) {
                        $vpOffice = $office['office_of_vp_in'];
                        if (!isset($groupedOffices[$vpOffice])) {
                            $groupedOffices[$vpOffice] = array();
                        }
                        $groupedOffices[$vpOffice][] = $office;
                    }
                    
                    // Display grouped suboffices
                    foreach ($groupedOffices as $vpOffice => $offices) {
                        echo '<div class="vp-group">';
                        echo '<h3 class="vp-group-title" style="color: white;">' . htmlspecialchars($vpOffice) . '</h3>';
                        foreach ($offices as $office) {
                            echo '<div class="vp-suboffice-item">';
                            echo '<a href="../Offices/' . urlencode($office['office']) . '" class="vp-suboffice-link">';
                            echo '<span class="vp-office-title">' . htmlspecialchars($office['office']) . '</span>';
                            echo '</a>';
                            echo '</div>';
                        }
                        echo '</div>';
                    }
                } else {
                    echo '<div class="vp-suboffice-item">No sub-offices found</div>';
                }
                ?>
            </div>
        </div>
        <span class="close-btn" onclick="closeVPModal()">&times;</span>
    </div>
</div>



</body>
<footer><?php include_once '../__includes/footer_fragment.php'; ?></footer>
</html>