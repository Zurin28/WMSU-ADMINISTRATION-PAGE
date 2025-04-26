<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WMSU ADMINISTRATION</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/home.css" />
    <link rel="stylesheet" href="../css/admin_officials.css" />
    
</head>
<body>
    <?php require_once '../__includes/navbar.php'; ?>
    <?php require_once '../__includes/head.php'; ?>

<?php
// Helper function to render staff rows
function renderStaffRows($staffList) {
    foreach ($staffList as $staff) {
        echo '<div class="staff-row">';
        echo '    <div class="staff-name">' . htmlspecialchars($staff['name']) . '</div>';
        echo '    <div class="staff-title">' . htmlspecialchars($staff['title']) . '</div>';
        echo '</div>';
    }
}
?>

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

            <style>
                /* Enhanced Modal CSS with smooth transitions and improved layout */
                .modal-container {
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%) scale(0.8);
                    width: 90%;
                    max-width: 900px;
                    max-height: 90vh;
                    border-radius: 15px;
                    overflow-y: auto;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                    background-color: #890909;
                    color: white;
                    z-index: 1000;
                    opacity: 0;
                    pointer-events: none;
                    transition: opacity 0.3s ease, transform 0.3s ease;
                }
                .modal-container.show {
                    opacity: 1;
                    pointer-events: auto;
                    transform: translate(-50%, -50%) scale(1);
                }

                .modal-header {
                    background-color: #e0e0e0;
                    padding: 20px;
                    text-align: right;
                }

                .close-button {
                    background-color: #900;
                    color: white;
                    border: none;
                    border-radius: 50%;
                    width: 40px;
                    height: 40px;
                    font-size: 20px;
                    cursor: pointer;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .modal-content {
                    display: flex;
                    padding: 30px;
                    flex-wrap: nowrap;
                }
                .profile-info {
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                    justify-content: flex-start;
                    align-items: flex-start;
                    gap: 20px;
                    text-align: left;
                }
                .profile-info h1, .profile-info h2, .profile-info p {
                    margin: 0;
                }
                .profile-info h1 {
                    font-size: 28px;
                    border-bottom: none;
                }
                .profile-info h2 {
                    font-size: 20px;
                    font-weight: 600;
                }
                .profile-info p {
                    font-size: 16px;
                    max-width: 100%;
                }

                .profile-image {
                    flex: 0 0 auto;
                    margin-right: 30px;
                    max-height: 80vh;
                    max-width: 350px;
                    border-radius: 10px;
                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
                    overflow: hidden;
                    background: transparent;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .profile-image img {
                    max-width: 100%;
                    max-height: 100%;
                    height: auto;
                    border-radius: 10px;
                    display: block;
                    margin: 0; /* Remove any auto margin that centers the image */
                    box-shadow: none;
                }

                .profile-info {
                    flex: 1;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    text-align: left;
                }

                .profile-info h1 {
                    font-size: 36px;
                    margin-bottom: 10px;
                    border-bottom: 2px solid white;
                    padding-bottom: 10px;
                    text-align: left;
                }

                .profile-info h2 {
                    font-size: 18px;
                    font-weight: normal;
                    margin-bottom: 20px;
                    text-align: left;
                }

                .profile-info p {
                    line-height: 1.6;
                    margin-bottom: 20px;
                    text-align: left;
                }

                .representation {
                    display: flex;
                    align-items: center;
                    margin-top: 20px;
                }

                .representation h3 {
                    margin-right: 20px;
                    font-size: 22px;
                }

                .representative-image {
                    width: 100px;
                    height: 100px;
                    border-radius: 50%;
                    object-fit: cover;
                    margin-left: auto;
                }
            </style>

            <script>
                // JavaScript to handle modal open/close and populate data with smooth transitions
                const boardMembers = <?php echo json_encode($boardMembers); ?>;
                const modal = document.getElementById('member-modal');
                const modalCloseBtn = document.getElementById('modal-close-btn');
                const modalProfileImage = document.querySelector('#modal-profile-image img');
                const modalName = document.getElementById('modal-name');
                const modalTitle = document.getElementById('modal-title');
                const modalDescription = document.getElementById('modal-description');
                const modalRepresentation = document.getElementById('modal-representation');
                const modalRepImage = document.getElementById('modal-rep-image');
                const modalRepName = document.getElementById('modal-rep-name');

                function openModal(index) {
                    const member = boardMembers[index];

                    modalProfileImage.src = '../images/' + member.image;
                    modalProfileImage.alt = member.name;
                    modalName.textContent = member.name;
                    modalTitle.textContent = member.title_bor;

                    // Placeholder description, can be replaced with real data if available
                    modalDescription.textContent = 'No description available.';

                    // Show or hide representation section based on data
                    if (member.representation && member.representation.length > 0) {
                        modalRepresentation.style.display = 'flex';
                        // For simplicity, show first representative only
                        const rep = member.representation[0];
                        modalRepImage.src = '../images/' + rep.image;
                        modalRepImage.alt = rep.name;
                        modalRepName.textContent = rep.name;
                    } else {
                        modalRepresentation.style.display = 'none';
                    }

                    // Show modal with animation
                    modal.classList.add('show');
                }

                function closeModal() {
                    // Hide modal with animation
                    modal.classList.remove('show');
                }

                document.querySelectorAll('.see-more-btn').forEach(button => {
                    button.addEventListener('click', () => {
                        const index = button.getAttribute('data-index');
                        openModal(index);
                    });
                });

                modalCloseBtn.addEventListener('click', () => {
                    closeModal();
                });

                // Close modal when clicking outside modal content
                window.addEventListener('click', (event) => {
                    if (event.target === modal) {
                        closeModal();
                    }
                });
            </script>

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
    
    <?php
    require_once '../classes/pres.class.php';
    $pres = new Pres();
    $PresOfficials = $pres->fetchAll();
    if (!empty($PresOfficials)) {
        $president = $PresOfficials[0];
        ?>
        <div class="president-section">
            <div class="profile-bubble-container">
                <div class="small-bubble"></div>
                <div class="profile-bubble">
                    <img src="../ADMIN UI/uploads/<?php echo htmlspecialchars($president['image']); ?>" alt="<?php echo htmlspecialchars($president['name']); ?>" class="profile-image">
                </div>
            </div>
            
            <div class="president-info">
                <h2><?php echo htmlspecialchars($president['name']); ?></h2>
                <h3><?php echo htmlspecialchars($president['title']); ?></h3>
                <button class="sub-offices-btn">See Sub-Offices</button>
                <?php if (!empty($president['page_link'])): ?>
                    <a href="../Offices/<?php echo htmlspecialchars($president['page_link']); ?>" class="office-link">Proceed to President's Office Page</a>
                <?php endif; ?>
            </div>
        </div>
        <?php
    }
    ?>
    
    <?php
    require_once '../classes/Vicepres.class.php';
    $vicePres = new VicePres();
    $VicePresOfficials = $vicePres->fetchAll();
    if (!empty($VicePresOfficials)) {
        ?>
        <h2 class="section-header">Vice Presidents</h2>
        
        <div class="staff-card">
            <?php renderStaffRows($VicePresOfficials); ?>
        </div>
        <div class="footer-btn-container">
            <button class="sub-offices-btn">See Sub-Offices</button>
        </div>
        <?php
    }
    ?>
    
    <?php
    require_once '../classes/opstaff.class.php';
    $opstaffobj = new OpStaff();
    $opstaff = $opstaffobj->fetchAll();
    if (!empty($opstaff)) {
        ?>
        <h2 class="section-header">Office of the President Staff</h2>
        
        <div class="staff-card">
            <?php renderStaffRows($opstaff); ?>
        </div>
        <?php
    }
    ?>
    
    <?php
    require_once '../classes/UniversityBoardSecretary.class.php';
    $uniBoardSecretaryObj = new UniversityBoardSecretary();
    $uniBoardSecretary = $uniBoardSecretaryObj->fetchAll();
    if (!empty($uniBoardSecretary)) {
        ?>
        <h2 class="section-header">University and Board Secretary</h2>
        
        <div class="staff-card">
            <?php renderStaffRows($uniBoardSecretary); ?>
        </div>
        <?php
    }
    ?>
    
    <?php
    require_once '../classes/Directors.class.php';
    $directorsObj = new Directors();
    $director = $directorsObj->fetchAll();
    if (!empty($director)) {
        ?>
        <h2 class="section-header">Directors</h2>
        
        <div class="staff-card">
            <?php renderStaffRows($director); ?>
        </div>
        <?php
    }
    ?>
    
    <?php
    require_once '../classes/CampusAdministrators.class.php';
    $campusAdminObj = new CampusAdministrators();
    $campusAdmin = $campusAdminObj->fetchAll();
    if (!empty($campusAdmin)) {
        ?>
        <h2 class="section-header">Campus Administrators</h2>
        
        <div class="staff-card">
            <?php renderStaffRows($campusAdmin); ?>
        </div>
        <?php
    }
    ?>
    
    <?php
    require_once '../classes/ILSPrincipals.class.php';
    $ILSPrincipalsObj = new ILSPrincipals();
    $ILSPrincipal = $ILSPrincipalsObj->fetchAll();
    if (!empty($ILSPrincipal)) {
        ?>
        <h2 class="section-header">Integrated Laboratory School Principals &amp; Asst. Principals</h2>
        
        <div class="staff-card">
            <?php renderStaffRows($ILSPrincipal); ?>
        </div>
        <?php
    }
    ?>
    
    <?php
    require_once '../classes/AssistantDirectors.class.php';
    $assistantDirectorObj = new AssistantDirectors();
    $assistantDirector = $assistantDirectorObj->fetchAll();
    if (!empty($assistantDirector)) {
        ?>
        <h2 class="section-header">Assistant &amp; Associate Directors | Assistant Chairpersons | Special Assistants</h2>
        
        <div class="staff-card">
            <?php renderStaffRows($assistantDirector); ?>
        </div>
        <?php
    }
    ?>
    
    <?php
    require_once '../classes/TechnicalAssistants.class.php';
    $techAssistObj = new TechnicalAssistants();
    $techAssist = $techAssistObj->fetchAll();
    if (!empty($techAssist)) {
        ?>
        <h2 class="section-header">Technical Assistant | Technical Associates</h2>
        
        <div class="staff-card">
            <?php renderStaffRows($techAssist); ?>
        </div>
        <?php
    }
    ?>
    
