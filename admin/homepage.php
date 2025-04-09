<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU ADMINISTRATION</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <?php require_once '../__includes/navbar.php'; ?>
    <?php require_once '../__includes/head.php'; ?>
    
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
                <br>
                <p>Through collaborative governance and informed decision-making, the <span class="highlight">Board of Regents plays a vital role in upholding WMSU's standards of excellence</span> and fostering its continued growth as a premier institution in the region.</p>
            </div>

            <!-- Board Members Grid -->
            <div class="members-grid">
            <?php
require_once '../classes/bor.class.php';

$bor = new Board();
$boardMembers = $bor->fetchAll(); // Fetch all board members
$count = 0;

foreach ($boardMembers as $member) {
    // Skip "represented by" members
    if (strpos($member['title'], 'represented by') !== false) {
        continue;
    }
    
    // Limit to 12 members
    if ($count >= 12) {
        break;
    }
    $count++;

    echo '<div class="member-card">';
    echo '    <img class="profile-img" src="../images/' . htmlspecialchars($member['image']) . '" alt="' . htmlspecialchars($member['name']) . '">';
    echo '    <h3>' . htmlspecialchars($member['name']) . '</h3>';
    echo '    <p>' . htmlspecialchars($member['title']) . '</p>';
    
    // Add "See More" button matching hero section style
    echo '    <a href="#" class="btn">See More</a>';
    
    echo '</div>';
}
?>
            </div>
            <div class="board-title">Administrative Officials</div>


            <div class="title-row">
            <div class="position-title">President</div>
            </div>

            <div class="official-row">
    <?php
    require_once '../classes/pres.class.php';

    $pres = new Pres();
    $PresOfficials = $pres->fetchAll(); // Fetch all officials

    foreach ($PresOfficials as $Presofficial) {
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($Presofficial['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($Presofficial['title']) . '</p>';
        
        if (!empty($Presofficial['page_link'])) {
            echo '<a href="../Offices/' . htmlspecialchars($Presofficial['page_link']) . '" class="Offices">Office of the President</a>';
        }
        
        echo '</div>';
    }
    ?>
</div>


        <!-- Vice Presidents -->
        <div class="position-title">Vice Presidents</div>
        <?php
    require_once '../classes/Vicepres.class.php';

    $vicePres = new VicePres();
    $VicePresOfficials = $vicePres->fetchAll(); // Fetch all officials

        foreach ($VicePresOfficials as $VicePresofficial) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($VicePresofficial['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($VicePresofficial['title']) . '</p>';
        
        if (!empty($VicePresofficial['page_link'])) {
            echo '<a href="../Offices/' . htmlspecialchars($VicePresofficial['page_link']) . '" class="Offices">Office of the Vice President</a>';
        }
        
        echo '</div>';
        echo '</div>';
    }
    ?>



        <!-- Office of the President Staff -->
        <div class="position-title">Office of the President Staff</div>
        <?php
    require_once '../classes/opstaff.class.php';

    $opstaffobj = new OpStaff();
    $opstaff = $opstaffobj->fetchAll(); // Fetch all officials

        foreach ($opstaff as $opstaffs) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($opstaffs['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($opstaffs['title']) . '</p>';
        
        if (!empty($opstaffs['page_link'])) {
            echo '<a href="../Offices/' . htmlspecialchars($opstaffs['page_link']) . '" class="Offices">Office of the President Staff</a>';
        }
        
        echo '</div>';
        echo '</div>';
    }
    ?>


        <!-- University and Board Secretary -->
        <div class="position-title">University and Board Secretary</div>
        <?php
    require_once '../classes/UniversityBoardSecretary.class.php';

    $uniBoardSecretaryObj = new UniversityBoardSecretary();
    $uniBoardSecretary = $uniBoardSecretaryObj->fetchAll(); // Fetch all officials

        foreach ($uniBoardSecretary as $uniBoardSecretarys) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($uniBoardSecretarys['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($uniBoardSecretarys['title']) . '</p>';
        
        if (!empty($uniBoardSecretarys['page_link'])) {
            echo '<a href="../Offices/' . htmlspecialchars($uniBoardSecretarys['page_link']) . '" class="Offices">Office of the President Staff</a>';
        }
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- Directors -->
        <div class="position-title">Directors</div>
        <?php
    require_once '../classes/Directors.class.php';

    $directorsObj = new Directors();
    $director = $directorsObj->fetchAll(); // Fetch all officials

        foreach ($director as $directors) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($directors['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($directors['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- Campus Administrators -->
        <div class="position-title">Campus Administrators</div>
        <?php
    require_once '../classes/CampusAdministrators.class.php';

    $campusAdminObj = new CampusAdministrators();
    $campusAdmin = $campusAdminObj->fetchAll(); // Fetch all officials

        foreach ($campusAdmin as $campusAdmins) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($campusAdmins['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($campusAdmins['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- Integrated Laboratory School Principals & Asst. Principals -->
        <div class="position-title">Integrated Laboratory School Principals & Asst. Principals</div>
        <?php
    require_once '../classes/ILSPrincipals.class.php';

    $ILSPrincipalsObj = new ILSPrincipals();
    $ILSPrincipal = $ILSPrincipalsObj->fetchAll(); // Fetch all officials

        foreach ($ILSPrincipal as $ILSPrincipals) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($ILSPrincipals['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($ILSPrincipals['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>


        <!-- Assistant & Associate Directors | Assistant Chairpersons | Special Assistants -->
        <div class="position-title">Assistant & Associate Directors | Assistant Chairpersons | Special Assistants</div>
        <?php
    require_once '../classes/AssistantDirectors.class.php';

    $assistantDirectorObj = new AssistantDirectors();
    $assistantDirector = $assistantDirectorObj->fetchAll(); // Fetch all officials

        foreach ($assistantDirector as $assistantDirectors) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($assistantDirectors['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($assistantDirectors['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- Technical Assistant | Technical Associates -->
        <div class="position-title">Technical Assistant | Technical Associates</div>
        <?php
    require_once '../classes/TechnicalAssistants.class.php';

    $techAssistObj = new TechnicalAssistants();
    $techAssist = $techAssistObj->fetchAll(); // Fetch all officials

        foreach ($techAssist as $techAssists) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($techAssists['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($techAssists['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- Chairpersons -->
        <div class="position-title">Chairpersons</div>
        <?php
    require_once '../classes/Chairpersons.class.php';

    $chairpersonObj = new Chairpersons();
    $chairperson = $chairpersonObj->fetchAll(); // Fetch all officials

        foreach ($chairperson as $chairpersons) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($chairpersons['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($chairpersons['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- Manager -->
        <div class="position-title">Manager</div>
        <?php
    require_once '../classes/Managers.class.php';

    $managerObj = new Managers();
    $manager = $managerObj->fetchAll(); // Fetch all officials

    foreach ($manager as $managers) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($managers['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($managers['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- HEAD/CHAIR OF THE GRADUATE SCHOOL -->
        <div class="position-title">HEAD/CHAIR OF THE GRADUATE SCHOOL</div>
        <?php
    require_once '../classes/GraduateSchoolHead.class.php';

    $graduateSchoolHeadObj = new GraduateSchoolHead();
    $graduateSchoolHead = $graduateSchoolHeadObj->fetchAll(); // Fetch all officials

    foreach ($graduateSchoolHead as $graduateSchoolHeads) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($graduateSchoolHeads['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($graduateSchoolHeads['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- Coordinators -->
        <div class="position-title">Coordinators</div>
        <?php
    require_once '../classes/Coordinators.class.php';

    $coordinatorObj = new Coordinators();
    $coordinator = $coordinatorObj->fetchAll(); // Fetch all officials

    foreach ($coordinator as $coordinators) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($coordinators['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($coordinators['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- Section Chief -->
        <div class="position-title">Section Chief</div>
        <?php
    require_once '../classes/SectionChiefs.class.php';

    $sectionChiefObj = new SectionChiefs();
    $sectionChief = $sectionChiefObj->fetchAll(); // Fetch all officials

    foreach ($sectionChief as $sectionChiefs) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($sectionChiefs['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($sectionChiefs['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- Other Services -->
        <div class="position-title">Other Services</div>
        <?php
    require_once '../classes/OtherServices.class.php';

    $otherServiceObj = new OtherServices();
    $otherService = $otherServiceObj->fetchAll(); // Fetch all officials

    foreach ($otherService as $otherServices) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($otherServices['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($otherServices['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- ACADEMIC DEANS -->
        <div class="board-title">
            Academic Deans
        </div>
        <?php
    require_once '../classes/AcademicDean.class.php';

    $academicDeanObj = new AcademicDean();
    $academicDean = $academicDeanObj->fetchAll(); // Fetch all officials
        echo "<br>";
    foreach ($academicDean as $academicDeans) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($academicDeans['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($academicDeans['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>
        

            <!-- Associate Dean -->
            <div class="position-title">Associate Dean</div>
            <?php
    require_once '../classes/AssociateDean.class.php';

    $associateDeanObj = new AssociateDean();
    $associateDean = $associateDeanObj->fetchAll(); // Fetch all officials

    foreach ($associateDean as $associateDeans) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($associateDeans['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($associateDeans['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>

            <!-- External Studies Units -->
            <div class="position-title">External Studies Units</div>
            <?php
    require_once '../classes/ExternalStudiesUnit.class.php';

    $externalStudiesUnitObj = new ExternalStudiesUnit();
    $externalStudiesUnit = $externalStudiesUnitObj->fetchAll(); // Fetch all officials

    foreach ($externalStudiesUnit as $externalStudiesUnits) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<p>' . htmlspecialchars($externalStudiesUnits['name']) . '</p>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($externalStudiesUnits['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>
    </div>
</div>
</body>
</html>