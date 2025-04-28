<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU Administrative Officials</title>
    <?php require_once '../__includes/head-home.php'; ?>
    <style>
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
        @media (max-width: 768px) {
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
    </style>
</head>
<body>
    <?php require_once '../__includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="hero-title-main">ADMINISTRATION</span>
                <span class="hero-title-sub">PAGE</span>
            </h1>
            <p>The WMSU Administration page offers a comprehensive look into the <strong>individuals who lead and shape Western Mindanao State University</strong>. Here, you will find the <strong>Board of Regents, university officials</strong>, and key representatives whose leadership, dedication, and vision continue to drive the university toward <strong>academic excellence, innovation, and inclusive growth</strong>.</p>
            <p>This section highlights the people behind WMSU's progress — the decision-makers and advocates who work tirelessly to uphold its mission and empower its community.</p>
<a href="#org-chart" class="btn">Learn More</a>
    </div>
</section>

<section class="board-whity">


<!-- Organizational Chart Section -->
<div style="height: 40px;"></div>
<h2 id="org-chart" style="text-align:center; color:#7C0902; font-weight:800; margin-bottom: 20px;">WMSU Organizational Chart</h2>
<div class="org-chart">
    <img src="../images/orgchart.png" alt="WMSU Organizational Chart" style="width: 100%; height: auto; max-width: 1200px; margin: 0 auto; display: block;">
</div>

<div class="divider">
    <div class="divider-line"></div>
    <div class="divider-text">Board of Regents</div>
    <div class="divider-line"></div>
</div>

<section class="board-section">
        <div class="board-container">
            <h2 class="board-title">WHAT IS THE BOARD OF REGENTS?</h2>
            <div class="board-description">
                <p>The <span class="highlight">Board of Regents</span> is the highest policy-making body of <span class="highlight">Western Mindanao State University</span>. Composed of distinguished leaders from various sectors—including education, government, and the private sector—the Board is responsible for setting the strategic direction of the university, approving key policies, and ensuring the institution's alignment with its academic mission and public mandate.</p>
                <br />
                <p>Through collaborative governance and informed decision-making, the <span class="highlight">Board of Regents plays a vital role in upholding WMSU's standards of excellence</span> and fostering its continued growth as a premier institution in the region.</p>
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
                        <p id="modal-description">No description available.</p>
                        <div class="representation" id="modal-representation" style="display:none;">
                            <h3>REPRESENTED BY:</h3>
                            <img class="representative-image" src="" alt="" id="modal-rep-image">
                            <h2 id="modal-rep-name" style="text-align: right; margin-top: 10px;"></h2>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                window.boardMembers = <?php echo json_encode($boardMembers); ?>;
            </script>
            <script src="../js/organizational-chart.js"></script>




    <div class="container">
        <div class="header">
            <div class="header-line left-line"></div>
            <h1>Administrative Officials</h1>
            <div class="header-line right-line"></div>
        </div>
        
        <div class="description">
            <p>The <span class="admin-highlight">Administrative Officials</span> of Western Mindanao State University (WMSU) constitute the <span class="admin-highlight">comprehensive leadership team</span> responsible for the university's <span class="admin-highlight">strategic direction</span>, <span class="admin-highlight">academic excellence</span>, and <span class="admin-highlight">operational efficiency</span>. This organizational body includes the <span class="admin-highlight">University President</span>, <span class="admin-highlight">Vice
            <p>The <span class="highlight">administrative framework extends</span> to Campus Administrators <span class="highlight">across WMSU's satellite campuses</span>, Principals and Assistant Principals of the Integrated Laboratory Schools, as well as Assistant Directors, Chairpersons, and Coordinators who ensure the seamless operation of both academic and non-academic units.</p>
            <p>Together, these officials uphold <span class="highlight">WMSU's commitment</span> to <span class="highlight">providing quality education</span> and <span class="highlight">fostering community development</span>.</p>
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
            // Display honorifics and name dynamically for OP staff
            echo htmlspecialchars($staff['honorific_short']) . ' ' . htmlspecialchars($staff['name']);
            ?>
        </div>
        <div class="staff-title">
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
    // Create and show the modal
    var modal = new bootstrap.Modal(document.getElementById('vicePresSubOfficesModal'));
    modal.show();

    // Fetch the sub-offices data
    $.ajax({
        url: '../crud-administration/fetching/fetch-Vicepres_suboffices.php',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            const subOfficesList = document.getElementById('subOfficesList');
            subOfficesList.innerHTML = ''; // Clear existing content

            if (response && response.length > 0) {
                // Group sub-offices by VP
                const groupedOffices = {};
                response.forEach(office => {
                    if (!groupedOffices[office.office_of_vp_in]) {
                        groupedOffices[office.office_of_vp_in] = [];
                    }
                    groupedOffices[office.office_of_vp_in].push(office);
                });

                // Create HTML for each group
                for (const [vp, offices] of Object.entries(groupedOffices)) {
                    const groupDiv = document.createElement('div');
                    groupDiv.className = 'suboffice-group';
                    
                    groupDiv.innerHTML = `
                        <div class="suboffice-group-title">${vp}</div>
                        ${offices.map(office => `
                            <div class="suboffice-item">
                                <div style="font-weight: bold;">${office.office}</div>
                                <div>${office.honorific_short || ''} ${office.office_head}</div>
                            </div>
                        `).join('')}
                    `;
                    
                    subOfficesList.appendChild(groupDiv);
                }
            } else {
                subOfficesList.innerHTML = '<p class="text-center">No sub-offices found.</p>';
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching sub-offices:', error);
            document.getElementById('subOfficesList').innerHTML = 
                '<p class="text-center text-danger">Error loading sub-offices. Please try again later.</p>';
        }
    });
}

// Close modal when clicking outside or pressing ESC
$(document).ready(function() {
    $('#vicePresSubOfficesModal').on('click', function(e) {
        if ($(e.target).hasClass('modal')) {
            $(this).modal('hide');
        }
    });

    $(document).keydown(function(e) {
        if (e.key === "Escape") {
            $('#vicePresSubOfficesModal').modal('hide');
        }
    });
});
</script>

<!-- Add this modal HTML structure after your staff-card div -->
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
                        if (!empty($office['honorific_short'])) {
                            echo htmlspecialchars($office['honorific_short']) . ' ';
                        }
                        echo htmlspecialchars($office['office_head']) . '<br>';
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

<!-- Vice Presidents Sub-Offices Modal -->
<div class="modal fade" id="vicePresSubOfficesModal" tabindex="-1" aria-labelledby="vicePresSubOfficesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="vicePresSubOfficesModalLabel">SUB-OFFICES OF THE VICE PRESIDENTS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="subOfficesList"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>