<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU Administrative Officials</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans:wght@700;800&family=Poppins:wght@700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #8b0000;
            color: white;
        }

        /* Hero Section */
.hero {
    background: 
        linear-gradient(rgba(124, 9, 2, 0.85), rgba(124, 9, 2, 0.85)),
        url('../images/admin-building.jpg') center/cover no-repeat;
    color: white;
    padding: 80px 20px;
    text-align: center;
    position: relative;
    min-height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    margin: 0 auto;
}

.hero h1, .hero-title {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 20px;
}

.hero-title-main {
    font-family: 'Montserrat', sans-serif;
    font-size: 4.5rem;
    text-transform: uppercase;
    letter-spacing: 0.29em;
    font-weight: 800;
    color: white;
    margin-bottom: 0.5rem;
    text-shadow: 
        2px 2px 4px rgba(0, 0, 0, 0.3),
        0 0 20px rgba(255, 255, 255, 0.5);
    position: relative;
}

.hero-title-sub {
    font-family: 'Montserrat', sans-serif;
    font-size: 3rem;
    text-transform: uppercase;
    letter-spacing: 0.29em;
    font-weight: 600;
    color: white;
    text-shadow: 
        2px 2px 4px rgba(0, 0, 0, 0.3),
        0 0 15px rgba(255, 255, 255, 0.4);
    position: relative;
}

.hero p {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.1rem;
    margin-bottom: 30px;
    line-height: 1.8;
    font-weight: 500;
}

.btn {
    display: inline-block;
    background-color: transparent;
    color: white;
    padding: 10px 25px;
    border: 2px solid white;
    border-radius: 30px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
}

.btn:hover {
    background-color: white;
    color: #7C0902;
}

        
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }
        
        .header h1 {
            font-size: 32px;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }
        
        .header h1::before,
        .header h1::after {
            content: "•";
            position: absolute;
            top: 50%;
            font-size: 18px;
            transform: translateY(-50%);
        }
        
        .header h1::before {
            left: -60px;
        }
        
        .header h1::after {
            right: -60px;
        }
        
        .header-line {
            position: absolute;
            height: 2px;
            background-color: white;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
        }
        
        .left-line {
            left: 45px;
        }
        
        .right-line {
            right: 45px;
        }
        
        .description {
            text-align: justify;
            margin-bottom: 40px;
            line-height: 1.6;
            font-size: 15px;
            font-family: 'Montserrat', sans-serif;
        }
        
        .highlight {
            font-weight: 700;
            color: #ffcc66;
            display: inline;
        }
        
        .president-section {
            display: flex;
            align-items: center;
            margin: 40px 0;
        }
        
        .profile-bubble-container {
            position: relative;
            margin-right: 20px;
        }
        
        .small-bubble {
            width: 30px;
            height: 30px;
            background-color: #ff9999;
            border-radius: 50%;
            position: absolute;
            top: -15px;
            left: -15px;
        }
        
        .profile-bubble {
            width: 180px;
            height: 180px;
            background-color: #ff9999;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
        
        .profile-image {
            width: 170px;
            height: 170px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
        }
        
        .president-info {
            flex-grow: 1;
            text-align: center;
        }
        
        .president-info h2 {
            font-size: 36px;
            margin-bottom: 5px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 800;
        }
        
        .president-info h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            font-family: 'Open Sans', sans-serif;
        }
        
        .sub-offices-btn {
            background-color: transparent;
            color: white;
            border: 1px solid white;
            border-radius: 20px;
            padding: 5px 15px;
            font-size: 12px;
            cursor: pointer;
            margin-bottom: 15px;
        }
        
        .office-link {
            display: block;
            color: white;
            text-decoration: none;
            font-size: 14px;
            margin-top: 10px;
        }
        
        .section-header {
            font-size: 24px;
            margin: 30px 0 20px 0;
        }
        
        .staff-card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            color: #333;
            margin-bottom: 30px;
        }
        
        .staff-row {
            display: flex;
            margin-bottom: 15px;
            align-items: flex-start;
        }
        
        .staff-row:last-child {
            margin-bottom: 0;
        }
        
        .staff-name {
            flex: 1;
            color: #8b0000;
            font-weight: bold;
            padding-right: 10px;
        }
        
        .staff-title {
            flex: 1.5;
            font-size: 14px;
        }
        
        .footer-btn-container {
            text-align: center;
        }
        
        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .staff-row {
                flex-direction: column;
            }
            
            .staff-name, .staff-title {
                flex: none;
                width: 100%;
                margin-bottom: 5px;
            }
            
            .president-section {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-bubble-container {
                margin-right: 0;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>


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
                
                    
                    // Honorific + Name
                    echo '<h2>' . htmlspecialchars($president['honorific_short']) . ' ' . htmlspecialchars($president['name']) . '</h2>';
                    
                    // Title
                    echo '<h3>' . htmlspecialchars($president['title']) . '</h3>';
                    
                    // Static Button and Link (blank/dummy for now)
                    echo '<button class="sub-offices-btn">See Sub-Offices</button>';
                    echo '<a href="#" class="office-link">Proceed to President\'s Office Page</a>';
                    
                    echo '</div>';
                }
            } else {
                echo '<p>No presidents found.</p>';
            }
            ?>
        </div>
        
        <h2 class="section-header">Vice Presidents</h2>
        
        <div class="staff-card">
            <div class="staff-row">
                <div class="staff-name">Dr. Nursia M. Barjose</div>
                <div class="staff-title">Vice President for Academic Affairs</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Joel G. Fernando</div>
                <div class="staff-title">Vice President for Research Extension Services & External Linkages</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Joselito D. Madroñal</div>
                <div class="staff-title">Vice President for Administration and Finance</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Teresita A. Narvaez</div>
                <div class="staff-title">Vice President for Resource Generation Capacity as Agribusiness Department Chair</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Fredelino M. San Juan</div>
                <div class="staff-title">Vice President for Student Affairs and Services in concurrent capacity as Director of Special Program and Projects Office</div>
            </div>
        </div>
        <div class="footer-btn-container">
            <button class="sub-offices-btn">See Sub-Offices</button>
        </div>
        
        <h2 class="section-header">Office of the President Staff</h2>
        
        <div class="staff-card">
            <div class="staff-row">
                <div class="staff-name">Dr. Berhana I. Flores</div>
                <div class="staff-title">Chief of Staff, Office of the President</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Darlyn P. Flores</div>
                <div class="staff-title">Special Assistant to the President</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asst. Prof. Aldrin S. Valerio</div>
                <div class="staff-title">Executive Assistant to the Office of the President</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Shamir R. Kassim</div>
                <div class="staff-title">University Curriculum Chair/Executive Assistant for Special Academic Affairs Concerns</div>
            </div>
        </div>
        
        <h2 class="section-header">University and Board Secretary</h2>
        
        <div class="staff-card">
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Al-Ghani D. Mohammad</div>
                <div class="staff-title">Univ. and Board Secretary</div>
            </div>
        </div>
        
        <h2 class="section-header">Directors</h2>
        
        <div class="staff-card">
            <div class="staff-row">
                <div class="staff-name">Dr. Leonilo B. Abella</div>
                <div class="staff-title">Director, WESMAARRDEC Consortium</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Reynante E. Autida</div>
                <div class="staff-title">Director, Research Development & Eval. Center</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Joselito R. Custodio</div>
                <div class="staff-title">OIC – Director, Office of the Center for Continuing Education</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Engr. Mark L. Flores</div>
                <div class="staff-title">Director, Data Protection and IT Security Officer</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Engr. Ferdinand S. Guardo</div>
                <div class="staff-title">Director, Management Information Systems & Technology Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asst. Prof. Al-Rashid T. Jama</div>
                <div class="staff-title">Director, University Disaster Risk Reduction Management Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asst. Prof. Norman Lloyd B. Manginsay</div>
                <div class="staff-title">OIC – Director of University Sports Development Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Engr. Evelyn N. Angeles</div>
                <div class="staff-title">Director, Office of the Student Affairs</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Mario R. Obra, Jr.</div>
                <div class="staff-title">Director, Quality Management Office, International Relations Office & External Linkages</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Engr. Hernan N. Rosaldo II</div>
                <div class="staff-title">OIC-Director, Department of Extension Services and Community Development</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Arch. Joseph Andrew L. Sahial</div>
                <div class="staff-title">Director, Physical Plant concurrent capacity as the University Architect</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Roberto M. Sala</div>
                <div class="staff-title">Director of WMSU – Affiliated Renewable Energy Center (AREC)</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Bernard Q. Suriaga</div>
                <div class="staff-title">Director, University Center for Local Governance</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Ms. Rosalie T. Arcillas</div>
                <div class="staff-title">Director, Finance</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Fuvie R. Bayot</div>
                <div class="staff-title">Director, Distance Education</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Fini Joy P. Buenafe</div>
                <div class="staff-title">Director, Guidance & Counseling Center</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asst. Prof. Mary Grace M. Buñol</div>
                <div class="staff-title">OIC – Director for Testing and Evaluation Center (TEC)</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Nerlyne C. Concepcion</div>
                <div class="staff-title">Director, WMSU Career and Job Placement Center</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asst. Prof. Ludivina B. Dekit</div>
                <div class="staff-title">Director, Peace & Human Security Institute</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Marilou C. Elago</div>
                <div class="staff-title">Director, Office of the Univ. Biosafety and Biosecurity Committee</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Vicenta T. Escobar</div>
                <div class="staff-title">Director for Admissions Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Mariam Z. Julkarnain</div>
                <div class="staff-title">Director, Gender Research & Resource Center</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Ma. Nora D. Lai</div>
                <div class="staff-title">Director, Alumni Relations Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Melanie F. Lear</div>
                <div class="staff-title">Director, Centro de Estudio Mindanao, concurrent capacity as Community Outreach and Development Advocacy Program (CODAP)</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Glory Jean G. Leonin</div>
                <div class="staff-title">Director, Scholarship Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Maria Dolores J. Macrohon</div>
                <div class="staff-title">Director, Office of Auxiliary Services</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Almira E. Nochefranca</div>
                <div class="staff-title">Director, Office of the Culture and the Arts</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Aubrey F. Reyes</div>
                <div class="staff-title">Director, Sentro ng Wika at Kultura</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Mrs. Ma. Teresita J. Rodriguez</div>
                <div class="staff-title">Director for Administration</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Ms. Girlie C. Tangalin</div>
                <div class="staff-title">Director National Service Training Program Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Lea E. Usman</div>
                <div class="staff-title">Director, Public Affairs Office in concurrent capacity as Director of the Language Development Resource Center</div>
            </div>
        </div>
        
        <h2 class="section-header">Campus Administrators</h2>
        
        <div class="staff-card">
            <div class="staff-row">
                <div class="staff-name">Dr. Mary Jocelyn V. Battung</div>
                <div class="staff-title">Campus Administrator, Pagadian</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Ms. Maria Celeste B. Dela Cruz</div>
                <div class="staff-title">Campus Administrator, Malangas</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asst. Prof. Felwin Lovely R. Natividad</div>
                <div class="staff-title">Campus Administrator, Ipil</div>
            </div>
        </div>
        
        <h2 class="section-header">Integrated Laboratory School Principals & Asst. Principals</h2>
        
        <div class="staff-card">
            <div class="staff-row">
                <div class="staff-name">Dr. Riah Barcelona</div>
                <div class="staff-title">Principal. ILS -High School</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Anna Louisa R. Perez</div>
                <div class="staff-title">Principal, ILS- Elementary</div>
            </div>
        </div>
        
        <h2 class="section-header">Assistant & Associate Directors | Assistant Chairpersons | Special Assistants</h2>
        
        <div class="staff-card">
            <div class="staff-row">
                <div class="staff-name">Dr. Richard C. Dagalea</div>
                <div class="staff-title">Asst. Director, Public Affairs Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Engr. Swidin S. Husin</div>
                <div class="staff-title">Associate Director of the Research Development and Evaluation Center</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Elmer M. Labad</div>
                <div class="staff-title">Asst. Director, Gender Research and Resource Center (GRRC)</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Joel C. Macasinag</div>
                <div class="staff-title">Asst. Manager, University PRESS(UPRESS)</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Reynaldo R. Macaso</div>
                <div class="staff-title">Asst. Director of the scholarship Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Mr. Keynard L. Ponce</div>
                <div class="staff-title">Asst. to the Director of Center for Continuing Education (CCE)</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Vinchall A. Siason</div>
                <div class="staff-title">Asst. Director of the Quality Assurance Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Mr. Salimar B. Tahil</div>
                <div class="staff-title">Asst. Director of the Management Information System and Technology Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Rochard T. Tarroza</div>
                <div class="staff-title">Asst. Director, Student Affairs Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asst. Prof. Sophia L. Bensali</div>
                <div class="staff-title">Asst. to the Director of Center for Science Teaching and Training</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Ms. Melodina V. Francisco</div>
                <div class="staff-title">Asst. Director, Alumi Relations Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Mely Jane D. Jacinto</div>
                <div class="staff-title">Asst. Director, Quality Management Systems Office</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Dulce Amor P. Matondo</div>
                <div class="staff-title">Assistant to the VPRESEL</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Atty. Aenn Bernielee C. Limbaga</div>
                <div class="staff-title">Asst. Director, Special Program and Projects Office (SPPO)</div>
            </div>
        </div>
        
        <h2 class="section-header">Technical Assistant | Technical Associates</h2>
        
        <div class="staff-card">
            <div class="staff-row">
                <div class="staff-name">Mr. Edwin I. Arip</div>
                <div class="staff-title">Tech. Associate (BS Com Sci)</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Engr. Ahmedzam S. Nasaluddin</div>
                <div class="staff-title">Tech. Associate Under the Office of the President, for the infrastructure Project concurrent capacity as Technical Working group of the BIDS and Awards Committee</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Mr. Victor Ryan H. Tangalin</div>
                <div class="staff-title">Technical Associate, Center for Hands of Goodwill</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Ryan B. Cabangcala</div>
                <div class="staff-title">Technical Associate to the Vice President for Research Extension Services and External Linkages</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Shamir R. Kassim</div>
                <div class="staff-title">Executive Assistant for Special Academic concerns at the Office of the President</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Engr. Marlon C. Grande</div>
                <div class="staff-title">Technical Associate for the Community Outreach and Development Advocacy Program (CODAP) in concurrent capacity as the Extension Coordinator of the College of Engineering</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Johana J. Abdula</div>
                <div class="staff-title">Tech. Asso. for the External Studies Unit – BS Crim. Program</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Abigail F. Antonio</div>
                <div class="staff-title">Technical Associate to the Vice President for Academic Affairs</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asst. Prof. Mercendes A. Bejerano</div>
                <div class="staff-title">Tech. Asst. to the Vice-President for Academic Affairs</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Ms. Bernadeth A. Encarnacion</div>
                <div class="staff-title">Tech. Asso. for the External Studies Unit – BS Crim. Program</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Melanie A. Turco</div>
                <div class="staff-title">Technical Associate to the Vice President for Administration and Finance</div>
            </div>
        </div>
        
        <h2 class="section-header">Chairpersons</h2>
        
        <div class="staff-card">
            <div class="staff-row">
                <div class="staff-name">Engr. Ferdinand S. Guardo</div>
                <div class="staff-title">Chief Information Officer (CIO) of the University RE DICT</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Fredelino M. San Juan</div>
                <div class="staff-title">Chair Bids and Award Committee</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Engr. Ricardo B. Gonzales</div>
                <div class="staff-title">Chair of the Tech. Inspection Committee</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Ruperto D. Mendoza, Jr.</div>
                <div class="staff-title">Chair, University Review and Evaluation Committee</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Dr. Analyn D. Saavedra</div>
                <div class="staff-title">Chair, Research Ethics Oversight Committee (REOC)</div>
            </div>
        </div>
        
        <h2 class="section-header">Manager</h2>
        
        <div class="staff-card">
            <div class="staff-row">
                <div class="staff-name">Dr. Russel J. Ingkoh</div>
                <div class="staff-title">Marketing Service Manager</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Engr. Antonio Angelo J. Limbaga</div>
                <div class="staff-title">MITHI</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Asso. Prof. Joel C. Macasinag</div>
                <div class="staff-title">Manager University PRESS</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Mr. Angelito B. Noynay</div>
                <div class="staff-title">Manager of the Garment Shop</div>
            </div>
            
            <div class="staff-row">
                <div class="staff-name">Atty. Maria Luisa Pilar C. Elago</div>
                <div class="staff-title">Manager of the Innovation and Technology Support Office (ITSO)</div>
            </div>
        </div>
        
        <!-- Existing code remains the same until the HEAD/CHAIR OF THE GRADUATE SCHOOL section -->

<h2 class="section-header">HEAD/CHAIR OF THE GRADUATE SCHOOL</h2>
        
<div class="staff-card">
    <div class="staff-row">
        <div class="staff-name">Asst. Prof. Leo A. Hermosilla</div>
        <div class="staff-title">CSSPE</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Dr. Arnel R. Madrazo</div>
        <div class="staff-title">Chair, Graduate School, College of Teacher Education on concurrent Coordinator of the Research for Utilization, Publication and Information</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Dr. Rochelleo E. Mariano</div>
        <div class="staff-title">College of Science & Mathematics</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Engr. Nurwin Adam O. Muhammad</div>
        <div class="staff-title">College of Engineering</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Dr. Johana J. Abdula</div>
        <div class="staff-title">College of Criminal Justice Education</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Dr. Rubelle Marshah H. Alavar</div>
        <div class="staff-title">College of Nursing</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Asso. Prof. Marites A. Barrios</div>
        <div class="staff-title">College of Home Economics</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Asso. Prof. Wylen L. Lipanglipang</div>
        <div class="staff-title">CSWCD</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Dr. Fadzralyn A. Karanain</div>
        <div class="staff-title">Chair of the Graduate School, College of Liberal Arts</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Asst. Prof. Emerissa Jane L. Tendero</div>
        <div class="staff-title">Chair of Graduate, College of Public Administration and Development Studies</div>
    </div>
</div>

<h2 class="section-header">Coordinators</h2>

<div class="staff-card">
    <div class="staff-row">
        <div class="staff-name">Asst. Prof. Julito B. Bande</div>
        <div class="staff-title">Campus Coordinator, Alicia</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Mr. Noel A. Comeros</div>
        <div class="staff-title">Campus Coordinator, Curuan</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Engr. Hernan N. Rosaldo II</div>
        <div class="staff-title">Coordinator, Library and Archive</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Asst. Prof. Ariel M. Macailing</div>
        <div class="staff-title">Campus Coordinator, Imelda</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Asst. Prof. Pacamalan, Leo Myco</div>
        <div class="staff-title">Campus Coordinator, Siay</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Mr. Eryle Edvin E. Protacio</div>
        <div class="staff-title">Coordinator, Local Studies</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Mr. Noel V. Pugosa</div>
        <div class="staff-title">Campus Coordinator, Molave</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Engr. Hernan N. Rosaldo II</div>
        <div class="staff-title">Coordinator, BIDANI</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Dr. Jiellzon Jaime T. Villarama</div>
        <div class="staff-title">Coordinator, University Museum</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Dr. Carmela J. Go Silk</div>
        <div class="staff-title">OIC – Campus Coordinator Diplahan</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Asst. Prof. Lolita R. Lacao-Lacao</div>
        <div class="staff-title">OIC – Campus Coordinator Olutanga</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Asso. Prof. Divine Grace M. Marumas</div>
        <div class="staff-title">Coordinator Instructional Support & Materials Production (ISMP)</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Asst. Prof. Michelle S. Paderan</div>
        <div class="staff-title">OIC – Campus Coordinator of Mabuhay</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Asst. Prof. Arlyn O. Rebuza</div>
        <div class="staff-title">Campus Coordinator College of Agriculture</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Asst. Prof. Nosca Bonna Ar D. Taasin</div>
        <div class="staff-title">OIC – Campus Coordinator of Tungawan</div>
    </div>
</div>

<h2 class="section-header">Section Chief</h2>

<div class="staff-card">
    <div class="staff-row">
        <div class="staff-name">Mr. Eric H. Alfaro</div>
        <div class="staff-title">University Registrar</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Mr. John Paul S. Alvarez</div>
        <div class="staff-title">Supervising Administrative Officer (Finance)</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Dr. Benhur A. Asid</div>
        <div class="staff-title">University Librarian</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Mr. Erlando G. Coros</div>
        <div class="staff-title">Chief Security Services</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Engr. Edgar A. Demayo</div>
        <div class="staff-title">Engineer III</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Engr. Ricardo B. Gonzales</div>
        <div class="staff-title">University Electrical Engineer on concurrent Chairman of the Inspection Committee</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Mr. Alen M. Marcelino</div>
        <div class="staff-title">Head, Motorpool</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Mr. Alfredo D. Montero</div>
        <div class="staff-title">Supply Officer III</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Mr. Ariel R. Perez</div>
        <div class="staff-title">Labor General Foreman</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Mr. Joerland- Jansen R. Reyes</div>
        <div class="staff-title">Property Management Office</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Atty. Roberto Rivero III</div>
        <div class="staff-title">Attorney IV</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Dr. Oscar S. Sicat</div>
        <div class="staff-title">Supervising Administrative Officer</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Ms. Suzette G. Ducanes</div>
        <div class="staff-title">Budget Officer</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Dr. Felicitas Asuncion C. Elago</div>
        <div class="staff-title">Medical Officer III</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Ms. Ma. Teresita J. Rodriguez</div>
        <div class="staff-title">OIC-Human Resource Management Officer III on concurrent capacity Director for Administration</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Mrs. Erlinda C. Macaso</div>
        <div class="staff-title">Records Officer III</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Ms. Venus Lyn C. Martin</div>
        <div class="staff-title">Internal Auditor III</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Ms. Lallaine Anne. L. Mariano</div>
        <div class="staff-title">Cashier III</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Ms. Abigail Irene B. Marquez</div>
        <div class="staff-title">Information Officer III</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Ms. Cristianne Dawn R. Sicat</div>
        <div class="staff-title">OIC – Accountant II</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Ms. Darea Jonnah B. Soliterio</div>
        <div class="staff-title">APA, President</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Mrs. Carolina E. Tejero</div>
        <div class="staff-title">General Services</div>
    </div>
    
    <div class="staff-row">
        <div class="staff-name">Ms. Debra Ann M. Ponce</div>
        <div class="staff-title">University Planning Officer III</div>
    </div>
</div>

<!-- The rest of the HTML remains unchanged -->