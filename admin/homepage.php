<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU ADMINISTRATION</title>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}


/* Main Content */
.administration-title {
    text-align: center;
    font-size: 35px;
    font-weight: bold;
    letter-spacing: 50px;
    margin: 30px 0;
    font-family: 'Montserrat', sans-serif;
}


.board-title {
    background-color: #7C0A02;
    color: white;
    padding: 15px;
    font-size: 30px;
    font-weight: bold;
    font-family: 'Poppins', sans-serif;
}


/* Board Members Grid */
.board-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    padding: 20px;
}

.board-member {
    display: flex;
    margin-bottom: 20px;
}

.member-image {
    width: 180px;
    height: 200px;
    background-color: #f0f0f0;
    margin-right: 10px;
}

.member-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.member-info {
    flex: 1;
}

.member-name {
    font-weight: bold;
    font-size: 20px;
    border-bottom: 1px solid #000;
    padding-bottom: 5px;
    margin-bottom: 5px;
    font-family: 'Open Sans', sans-serif;
}

.member-title {
    font-size: 14px;
}

.represented-by {
    margin-top: 10px;
    font-weight: bold;
}

/* Additional CSS from academicdeansofficials.html */
body {
    line-height: 1.6;
}

.section-header {
    background-color: #7C0A02;
    color: white;
    padding: 15px 20px;
    margin-bottom: 20px;
    font-size: 28px;
    font-weight: bold;
}

.position-title {
    font-size: 22px;
    font-weight: bold;
    margin-top: 30px;
    margin-bottom: 15px;
}

.official-row {
    display: flex;
    margin-bottom: 20px;
}

.official-name {
    flex: 0 0 40%;
    padding-left: 30px;
}

.official-name h3 {
    color: #BD0F03;
    margin: 0;
    font-size: 18px;
}

.official-position {
    flex: 0 0 60%;
}

.official-position p {
    margin: 0;
    font-size: 16px;
}

@media (max-width: 768px) {
    .official-row {
        flex-direction: column;
    }
    
    .official-name, .official-position {
        flex: 0 0 100%;
        padding-left: 0;
        margin-bottom: 10px;
    }
}

.hero-section {
    position: relative; /* Enables absolute positioning for overlay */
    width: 100%;
    max-width: 100vw;
    overflow: hidden;
}

.hero-img {
    width: 100%;
    height: auto;
    display: block;
}

/* Overlay Effect */
.hero-section::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #BD0F03; /* Adjust color & transparency */
    opacity: .3;
    pointer-events: none; /* Prevents interaction issues */
}

.title-row{
    display: flex;
}

.Offices{
    justify-content: center;
    align-items: center;
    color:#BD0F03;
}
</style>

<body>
    <?php require_once '../__includes/navbar.php'; ?>
    <?php require_once '../__includes/head.php'; ?>
    
    <!-- Main Content with side margins -->
<div class="container">
        <div class="left-margin"></div>
        
        <div class="content-area">
            <h1 class="administration-title">ADMINISTRATION</h1>
            
            <div class="board-title">Board of Regents</div>
            
            <div class="board-grid">
            <?php
require_once '../classes/bor.class.php';

$bor = new Board();
$boardMembers = $bor->fetchAll(); // Fetch all board members

foreach ($boardMembers as $member) {
    echo '<div class="board-member">';
    echo '    <div class="member-image">';
    echo '        <img src="../images/' . htmlspecialchars($member['image']) . '" alt="' . htmlspecialchars($member['name']) . '" width="200px">';
    echo '    </div>';
    echo '    <div class="member-info">';
    echo '        <div class="member-name">' . htmlspecialchars($member['name']) . '</div>';
    echo '        <div class="member-title">' . htmlspecialchars($member['title_bor']) . '</div>';
    
    if (!empty($member['link_to_office'])) {
        echo '        <a href="' . htmlspecialchars($member['link_to_office']) . '" class="Offices">Office of the President</a>';
    }
    
    echo '    </div>';
    echo '</div>';
}
?>
            </div>
            <div class="board-title">Administrative Officials</div>


            <div class="title-row">
            <div class="position-title">President - </div>
            </div>

            <div class="official-row">
    <?php
    require_once '../classes/pres.class.php';

    $pres = new Pres();
    $PresOfficials = $pres->fetchAll(); // Fetch all officials

    foreach ($PresOfficials as $Presofficial) {
        echo '<div class="official-name">';
        echo '<h3>' . htmlspecialchars($Presofficial['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($VicePresofficial['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($opstaffs['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($uniBoardSecretarys['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($directors['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($campusAdmins['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($ILSPrincipals['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($assistantDirectors['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($techAssists['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($chairpersons['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($managers['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($graduateSchoolHeads['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($coordinators['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($sectionChiefs['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($otherServices['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($academicDeans['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($associateDeans['name']) . '</h3>';
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
        echo '<h3>' . htmlspecialchars($externalStudiesUnits['name']) . '</h3>';
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