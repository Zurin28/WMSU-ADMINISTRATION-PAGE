<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- President -->
 <div class="position-title">President</div>
            <?php
            require_once '../classes/Pres.class.php';
                $pres = new Pres();
                $presidents = $pres->fetchAll();
                foreach ($presidents as $president) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $president['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $president['title'] . '</p>';
                    echo "<img src='" . $president['page_link'] . "' width='200px' alt='Image'>";
                    if (!empty($president['link_to_office'])) {
                        echo '<a href="' . $president['link_to_office'] . '" class="Offices">Office of the President</a>';
                    }
                    echo '</div></div>';
                }
            ?>

            <!-- Vice Presidents -->
            <div class="position-title">Vice Presidents</div>
            <?php
            require_once '../classes/Vicepres.class.php';
                $vicePres = new VicePres();
                $vicePresidents = $vicePres->fetchAll();
                foreach ($vicePresidents as $vicePresident) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $vicePresident['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $vicePresident['title'] . '</p>';
                    if (!empty($vicePresident['link_to_office'])) {
                        echo '<a href="' . $vicePresident['link_to_office'] . '" class="Offices">Office of the Vice President</a>';
                    }
                    echo '</div></div>';
                }
            ?>

            <!-- Office of the President Staff -->
            <div class="position-title">Office of the President Staff</div>
            <?php
            require_once '../classes/opstaff.class.php';
                $opStaff = new OpStaff();
                $opStaffs = $opStaff->fetchAll();
                foreach ($opStaffs as $staff) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $staff['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $staff['title'] . '</p></div>';
                    if (!empty($staff['link_to_office'])) {
                        echo '<a href="' . $staff['link_to_office'] . '" class="Offices">Office of the Staff</a>';
                    }
                    echo '</div>';
                }
            ?>

            <!-- University and Board Secretary -->
            <div class="position-title">University and Board Secretary</div>
            <?php
            require_once '../classes/UniversityBoardSecretary.class.php';
                $universityBoardSecretary = new UniversityBoardSecretary();
                $secretaries = $universityBoardSecretary->fetchAll();
                foreach ($secretaries as $secretary) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $secretary['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $secretary['title'] . '</p></div>';
                    echo '</div>';
                }
            ?>

            <!-- Directors -->
            <div class="position-title">Directors</div>
            <?php
            require_once '../classes/Directors.class.php';
                $directors = new Directors();
                $directorsList = $directors->fetchAll();
                foreach ($directorsList as $director) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $director['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $director['title'] . '</p></div>';
                    echo '</div>';
                }
            ?>

            <!-- Campus Administrators -->
            <div class="position-title">Campus Administrators</div>
            <?php
            require_once '../classes/CampusAdministrators.class.php';
                $campusAdministrators = new CampusAdministrators();
                $administrators = $campusAdministrators->fetchAll();
                foreach ($administrators as $administrator) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $administrator['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $administrator['title'] . '</p></div>';
                    echo '</div>';
                }
            ?>

            <!-- Integrated Laboratory School Principals & Asst. Principals -->
            <div class="position-title">Integrated Laboratory School Principals & Asst. Principals</div>
            <?php
            require_once '../classes/ILSPrincipals.class.php';
                $ilsPrincipals = new ILSPrincipals();
                $principals = $ilsPrincipals->fetchAll();
                foreach ($principals as $principal) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $principal['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $principal['title'] . '</p></div>';
                    echo '</div>';
                }
            ?>

            <!-- Assistant & Associate Directors | Assistant Chairpersons | Special Assistants -->
            <div class="position-title">Assistant & Associate Directors | Assistant Chairpersons | Special Assistants</div>
            <?php
            require_once '../classes/AssistantDirectors.class.php';
                $assistantDirectors = new AssistantDirectors();
                $assistants = $assistantDirectors->fetchAll();
                foreach ($assistants as $assistant) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $assistant['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $assistant['title'] . '</p></div>';
                    echo '</div>';
                }
            ?>

            <!-- Technical Assistant | Technical Associates -->
            <div class="position-title">Technical Assistant | Technical Associates</div>
            <?php
            require_once '../classes/TechnicalAssistants.class.php';
                $technicalAssistants = new TechnicalAssistants();
                $technicals = $technicalAssistants->fetchAll();
                foreach ($technicals as $technical) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $technical['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $technical['title'] . '</p></div>';
                    echo '</div>';
                }
            ?>

            <!-- Chairpersons -->
            <div class="position-title">Chairpersons</div>
            <?php
            require_once '../classes/Chairpersons.class.php';
                $chairpersons = new Chairpersons();
                $chairs = $chairpersons->fetchAll();
                foreach ($chairs as $chair) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $chair['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $chair['title'] . '</p></div>';
                    echo '</div>';
                }
            ?>

            <!-- Managers -->
            <div class="position-title">Managers</div>
            <?php
            require_once '../classes/Managers.class.php';
                $managers = new Managers();
                $managersList = $managers->fetchAll();
                foreach ($managersList as $manager) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $manager['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $manager['title'] . '</p></div>';
                    echo '</div>';
                }
            ?>

            <!-- Head/Chair of Graduate School -->
            <div class="position-title">Head/Chair of Graduate School</div>
            <?php
            require_once '../classes/GraduateSchoolHead.class.php';
                $graduateSchoolHead = new GraduateSchoolHead();
                $heads = $graduateSchoolHead->fetchAll();
                foreach ($heads as $head) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $head['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $head['title'] . '</p></div>';
                    echo '</div>';
                }
            ?>

            <!-- Coordinators -->
            <div class="position-title">Coordinators</div>
            <?php
            require_once '../classes/Coordinators.class.php';
                $coordinators = new Coordinators();
                $coordinatorsList = $coordinators->fetchAll();
                foreach ($coordinatorsList as $coordinator) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $coordinator['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $coordinator['title'] . '</p></div>';
                    echo '</div>';
                }
            ?>

            <!-- Section Chief -->
            <div class="position-title">Section Chief</div>
            <?php
            require_once '../classes/SectionChiefs.class.php';
                $sectionChiefs = new SectionChiefs();
                $chiefs = $sectionChiefs->fetchAll();
                foreach ($chiefs as $chief) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $chief['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $chief['title'] . '</p></div>';
                    echo '</div>';
                }
            ?>

            <!-- Other Services -->
            <div class="position-title">Other Services</div>
            <?php
            require_once '../classes/OtherServices.class.php';
                $otherServices = new OtherServices();
                $services = $otherServices->fetchAll();
                foreach ($services as $service) {
                    echo '<div class="official-row">';
                    echo '<div class="official-name"><h3>' . $service['name'] . '</h3></div>';
                    echo '<div class="official-position"><p>' . $service['title'] . '</p></div>';
                    echo '</div>';
                }
            ?>
        </div>
</body>
</html>