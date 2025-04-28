<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU Administrative Officials</title>

</head>
<body>
    <?php require_once '../__includes/navbar.php'; ?>
    <?php require_once '../__includes/head-home.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="hero-title-main">ADMINISTRATION</span>
                <span class="hero-title-sub">PAGE</span>
            </h1>
            <p>The WMSU Administration page offers a comprehensive look into the <strong>individuals who lead and shape Western Mindanao State University</strong>. Here, you will find the <strong>Board of Regents, university officials</strong>, and key representatives whose leadership, dedication, and vision continue to drive the university toward <strong>academic excellence, innovation, and inclusive growth</strong>.</p>
            <p>This section highlights the people behind WMSU's progress — the decision-makers and advocates who work tirelessly to uphold its mission and empower its community.</p>
            <a href="#" class="btn">Learn More</a>
    </div>
</section>

<section class="board-whity">


<!-- Organizational Chart Section -->
<div style="height: 40px;"></div>
<h2 style="text-align:center; color:#7C0902; font-weight:800; margin-bottom: 20px;">WMSU Organizational Chart</h2>
<div class="org-chart">
    <img src="../images/orgchart.png" alt="WMSU Organizational Chart" style="width: 100%; height: auto; max-width: 1200px; margin: 0 auto; display: block;">
</div>

<div class="container">
        <div class="header">
            <div class="header-line left-line"></div>
            <h1 class = "head-title-pages">BOARD OF REGENTS</h1>
            <div class="header-line right-line"></div>
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
            <p>The <span class="highlight">Administrative Officials</span> of Western Mindanao State University (WMSU) constitute the <span class="highlight">comprehensive leadership team</span> responsible for the university's <span class="highlight">strategic direction</span>, <span class="highlight">academic excellence</span>, and <span class="highlight">operational efficiency</span>. This organizational body includes the <span class="highlight">University President</span>, <span class="highlight">Vice Presidents overseeing various sectors</span> such as Academic Affairs, Administration and Finance, Research, Extension Services, and Resource Generation. Supporting the executive leadership are the Office of the President staff, the University and Board Secretary, and a cadre of Directors managing key departments like Finance, Admissions, Student Affairs, and Information Technology.</p>
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
        echo '<button class="sub-offices-btn">See Sub-Offices</button>';
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
            <a href="../Offices/<?php echo urlencode($vicePres['page_link']); ?>" style="color: #7C0902; text-decoration: underline; font-weight: bold;">
                <?php echo htmlspecialchars($vicePres['title']); ?>
            </a>
        </div>
    </div>
<?php endforeach; ?>
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
            <a href="../Offices/<?php echo urlencode($staff['page_link']); ?>" style="color: #7C0902; text-decoration: underline; font-weight: bold;">
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