<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU Administration - Board of Regents</title>
    <style>
       * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        /* Container for overall layout */
        .container {
            display: grid;
            grid-template-columns: 1fr 8fr 1fr; /* 1fr for left margin, 8fr for content, 1fr for right margin */
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .content-area {
            grid-column: 2 / 3; /* Content takes the middle column */
        }
        
        /* Empty columns for margins */
        .left-margin {
            grid-column: 1 / 2;
        }
        
        .right-margin {
            grid-column: 3 / 4;
        }
        
        /* Header Styles */
        .news-bar {
            background-color: #FF0033;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            grid-column: 1 / 4; /* Header spans all columns */
        }
        
        .news-left {
            display: flex;
            align-items: center;
        }
        
        .news-left span {
            margin-right: 15px;
        }
        
        .icon-circle {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: white;
            margin: 0 5px;
            text-align: center;
            line-height: 20px;
        }
        
        .contact-info {
            display: flex;
            align-items: center;
        }
        
        .contact-info a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            display: flex;
            align-items: center;
        }
        
        .contact-info a img {
            margin-right: 5px;
        }
        
        /* Navigation Bar */
        .nav-bar {
            background-color: #AA0022;
            display: flex;
            padding: 15px 20px;
            grid-column: 1 / 4; /* Nav bar spans all columns */
        }
        
        .nav-bar a {
            color: white;
            text-decoration: none;
            padding: 0 15px;
        }
        
        .mywmsu-button {
            margin-left: auto;
            background-color: #3684D6;
            padding: 5px 15px;
            color: white;
            border: none;
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
            background-color: #AA0022;
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
            background-color: #AA0022;
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
            color: #B01330;
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
    </style>
</head>
<body>
    <!-- Header Section - Full width -->
    <div class="news-bar">
        <div class="news-left">
            <span>News:</span>
            <span>WMSU ILS Elementary</span>
            <div class="icon-circle">✓</div>
            <div class="icon-circle">❤</div>
        </div>
        <div class="contact-info">
            <a href="tel:991-1771">
                <img src="path/to/phone-icon.png" alt="Phone">
                991-1771
            </a>
            <a href="mailto:wmsu@wmsu.edu.ph">
                <img src="path/to/email-icon.png" alt="Email">
                wmsu@wmsu.edu.ph
            </a>
            <span>ISO 9001:2015</span>
        </div>
    </div>
    
    <!-- Navigation Bar - Full width -->
    <div class="nav-bar">
        <a href="#">Home</a>
        <a href="#">About Us</a>
        <a href="#">Admission</a>
        <a href="#">Administration</a>
        <a href="#">Procurement</a>
        <a href="#">Research</a>
        <a href="#">Career</a>
        <a href="#">Other Links</a>
        <button class="mywmsu-button">MyWMSU</button>
    </div>
    
    <!-- Main Content with side margins -->
    <div class="container">
        <div class="left-margin"></div>
        
        <div class="content-area">
            <h1 class="administration-title">ADMINISTRATION</h1>
            
            <div class="board-title">Board of Regents</div>
            
            <div class="board-grid">
                <!-- First Row -->
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/ronald-adamat.jpg" alt="Hon. Ronald L. Adamat">
                    </div>
                    <div class="member-info">
                        <div class="member-name">HON. RONALD L. ADAMAT</div>
                        <div class="member-title">COMMISSIONER, CHED<br>CHAIR-DESIGNATE, WMSU-BOR</div>
                    </div>
                </div>
                
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/carla-ochotorena.jpg" alt="Hon. Ma. Carla A. Ochotorena">
                    </div>
                    <div class="member-info">
                        <div class="member-name">HON. MA. CARLA A. OCHOTORENA</div>
                        <div class="member-title">PRESIDENT, WMSU<br>VICE-CHAIRPERSON, WMSU-BOR</div>
                    </div>
                </div>
                
                <!-- Second Row -->
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/cayetano.jpg" alt="Hon. Alan Peter S. Cayetano">
                    </div>
                    <div class="member-info">
                        <div class="member-name">HON. ALAN PETER S. CAYETANO</div>
                        <div class="member-title">CHAIRMAN, SENATE COMMITTEE ON HIGHER TECHNICAL AND VOCATIONAL EDUCATIONS,<br>MEMBER – WMSU-BOR</div>
                    </div>
                </div>
                
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/macasaet-1.jpg" alt="Hon. Rolando L. Macasaet">
                    </div>
                    <div class="member-info">
                        <div class="represented-by">Represented by:</div>
                        <div class="member-name">HON. ROLANDO L. MACASAET</div>
                    </div>
                </div>
                
                <!-- Third Row -->
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/mark-ogo.jpg" alt="Hon. Mark O. Go">
                    </div>
                    <div class="member-info">
                        <div class="member-name">HON. MARK O. GO</div>
                        <div class="member-title">CHAIRMAN, HOUSE COMMITTEE ON HIGHER AND TECHNICAL EDUCATION,<br>MEMBER – WMSU-BOR</div>
                    </div>
                </div>
                
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/yanga.jpg" alt="Hon. Emmylou B. Yanga">
                    </div>
                    <div class="member-info">
                        <div class="represented-by">Represented by:</div>
                        <div class="member-name">HON. EMMYLOU B. YANGA</div>
                    </div>
                </div>
                
                <!-- Fourth Row -->
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/guerrero.jpg" alt="Hon. Maria Felicidad R. Guerrero">
                    </div>
                    <div class="member-info">
                        <div class="member-name">HON. MARIA FELICIDAD R. GUERRERO</div>
                        <div class="member-title">OFFICER-IN-CHARGE REGIONAL DIRECTOR NEDA IX<br>WMSU BOARD OF REGENTS</div>
                    </div>
                </div>
                
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/martin-wee.jpg" alt="Hon. Martin A. Wee">
                    </div>
                    <div class="member-info">
                        <div class="member-name">HON. MARTIN A. WEE</div>
                        <div class="member-title">REGIONAL DIRECTOR, DOST IX<br>MEMBER, WMSU-BOR</div>
                    </div>
                </div>
                
                <!-- Fifth Row -->
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/LOCSON.jpg" alt="Hon. Inocente P. Locson">
                    </div>
                    <div class="member-info">
                        <div class="member-name">HON. INOCENTE P. LOCSON</div>
                        <div class="member-title">PRIVATE SECTOR REPRESENTATIVE<br>MEMBER, WMSU-BOR</div>
                    </div>
                </div>
                
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/lobregat.jpg" alt="Hon. Jose L. Lobregat">
                    </div>
                    <div class="member-info">
                        <div class="member-name">HON. JOSE L. LOBREGAT</div>
                        <div class="member-title">PRIVATE SECTOR REPRESENTATIVE<br>MEMBER, WMSU-BOR</div>
                    </div>
                </div>
                
                <!-- Sixth Row -->
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/florencioblank.jpg" alt="Hon. Florencio M. Liong, Jr">
                    </div>
                    <div class="member-info">
                        <div class="member-name">HON. FLORENCIO M. LIONG, JR</div>
                        <div class="member-title">PRESIDENT, WMSU UNITED GENERAL ALUMNI ASSOCIATION, INC.<br>MEMBER, WMSU-BOR</div>
                    </div>
                </div>
                
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/semorlan.jpg" alt="Hon. Adrian P. Semorlan">
                    </div>
                    <div class="member-info">
                        <div class="member-name">HON. ADRIAN P. SEMORLAN</div>
                        <div class="member-title">PRESIDENT, WMSU FACULTY UNION ASSOCIATION, INC<br>MEMBER, WMSU-BOR</div>
                    </div>
                </div>
                
                <!-- Seventh Row -->
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/mundoc_blank.jpg" alt="Hon. Ahmad G. Mundoc">
                    </div>
                    <div class="member-info">
                        <div class="member-name">HON. AHMAD G. MUNDOC</div>
                        <div class="member-title">PRESIDENT, UNIVERSITY STUDENT COUNCIL<br>MEMBER, WMSU-BOR</div>
                    </div>
                </div>
                
                <div class="board-member">
                    <div class="member-image">
                        <img src="Board of Regents/MOHAMMAD.jpg" alt="Prof. Al-Ghani D. Mohammad">
                    </div>
                    <div class="member-info">
                        <div class="member-name">PROF. AL-GHANI D. MOHAMMAD</div>
                        <div class="member-title">UNIVERSITY AND BOARD SECRETARY</div>
                    </div>
                </div>
            </div>
            <div class="board-title">Administrative Officials</div>

            <div class="position-title">President</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Ma. Carla A. Ochotorena</h3>
            </div>
            <div class="official-position">
                <p>University President</p>
            </div>
        </div>

        <!-- Vice Presidents -->
        <div class="position-title">Vice Presidents</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Nursia M. Barjose</h3>
            </div>
            <div class="official-position">
                <p>Vice President for Academic Affairs</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Joel G. Fernando</h3>
            </div>
            <div class="official-position">
                <p>Vice President for Research Extension Services & External Linkages</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Joselito D. Madroñal</h3>
            </div>
            <div class="official-position">
                <p>Vice President for Administration and Finance</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Teresita A. Narvaez</h3>
            </div>
            <div class="official-position">
                <p>Vice President for Resource Generation in concurrent capacity as Agribusiness Department Chair</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Fredelino M. San Juan</h3>
            </div>
            <div class="official-position">
                <p>Vice President for Student Affairs and Services in concurrent capacity as Director of Special Programs and Projects Office</p>
            </div>
        </div>

        <!-- Office of the President Staff -->
        <div class="position-title">Office of the President Staff</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Berhana I. Flores</h3>
            </div>
            <div class="official-position">
                <p>Chief of Staff, Office of the President</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Darlyn P. Flores</h3>
            </div>
            <div class="official-position">
                <p>Special Assistant to the President</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Aldrin S. Valerio</h3>
            </div>
            <div class="official-position">
                <p>Executive Assistant to the Office of the President</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Shamir R. Kassim</h3>
            </div>
            <div class="official-position">
                <p>University Curriculum Chair/Executive Assistant for Special Academic Affairs Concerns</p>
            </div>
        </div>

        <!-- University and Board Secretary -->
        <div class="position-title">University and Board Secretary</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Al-Ghani D. Mohammad</h3>
            </div>
            <div class="official-position">
                <p>Univ. and Board Secretary</p>
            </div>
        </div>

        <!-- Directors -->
        <div class="position-title">Directors</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Leonilo B. Abella</h3>
            </div>
            <div class="official-position">
                <p>Director, WESMAARRDEC Consortium</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Reynante E. Autida</h3>
            </div>
            <div class="official-position">
                <p>Director, Research Development & Eval. Center</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Joselito R. Custodio</h3>
            </div>
            <div class="official-position">
                <p>OIC – Director, Office of the Center for Continuing Education</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Mark L. Flores</h3>
            </div>
            <div class="official-position">
                <p>Director, Data Protection and IT Security Officer</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Ferdinand S. Guardo</h3>
            </div>
            <div class="official-position">
                <p>Director, Management Information Systems & Technology Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Al-Rashid T. Jama</h3>
            </div>
            <div class="official-position">
                <p>Director, University Disaster Risk Reduction Management Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Norman Lloyd B. Manginsay</h3>
            </div>
            <div class="official-position">
                <p>OIC – Director of University Sports Development Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Evelyn N. Angeles</h3>
            </div>
            <div class="official-position">
                <p>Director, Office of the Student Affairs</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Mario R. Obra, Jr.</h3>
            </div>
            <div class="official-position">
                <p>Director, Quality Management Office, International Relations Office & External Linkages</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Hernan N. Rosaldo II</h3>
            </div>
            <div class="official-position">
                <p>OIC-Director, Department of Extension Services and Community Development</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Arch. Joseph Andrew L. Sahial</h3>
            </div>
            <div class="official-position">
                <p>Director, Physical Plant concurrent capacity as the University Architect</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Roberto M. Sala</h3>
            </div>
            <div class="official-position">
                <p>Director of WMSU – Affiliated Renewable Energy Center (AREC)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Bernard Q. Suriaga</h3>
            </div>
            <div class="official-position">
                <p>Director, University Center for Local Governance</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Rosalie T. Arcillas</h3>
            </div>
            <div class="official-position">
                <p>Director, Finance</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Fuvie R. Bayot</h3>
            </div>
            <div class="official-position">
                <p>Director, Distance Education</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Fini Joy P. Buenafe</h3>
            </div>
            <div class="official-position">
                <p>Director, Guidance & Counseling Center</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Mary Grace M. Buñol</h3>
            </div>
            <div class="official-position">
                <p>OIC – Director for Testing and Evaluation Center (TEC)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Nerlyne C. Concepcion</h3>
            </div>
            <div class="official-position">
                <p>Director, WMSU Career and Job Placement Center</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Ludivina B. Dekit</h3>
            </div>
            <div class="official-position">
                <p>Director, Peace & Human Security Institute</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Marilou C. Elago</h3>
            </div>
            <div class="official-position">
                <p>Director, Office of the Univ. Biosafety and Biosecurity Committee</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Vicenta T. Escobar</h3>
            </div>
            <div class="official-position">
                <p>Director for Admissions Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Mariam Z. Julkarnain</h3>
            </div>
            <div class="official-position">
                <p>Director, Gender Research & Resource Center</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Ma. Nora D. Lai</h3>
            </div>
            <div class="official-position">
                <p>Director, Alumni Relations Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Melanie F. Lear</h3>
            </div>
            <div class="official-position">
                <p>Director, Centro de Estudio Mindanao, concurrent capacity as Community Outreach and Development Advocacy Program (CODAP)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Glory Jean G. Leonin</h3>
            </div>
            <div class="official-position">
                <p>Director, Scholarship Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Maria Dolores J. Macrohon</h3>
            </div>
            <div class="official-position">
                <p>Director, Office of Auxiliary Services</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Almira E. Nochefranca</h3>
            </div>
            <div class="official-position">
                <p>Director, Office of the Culture and the Arts</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Aubrey F. Reyes</h3>
            </div>
            <div class="official-position">
                <p>Director, Sentro ng Wika at Kultura</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mrs. Ma. Teresita J. Rodriguez</h3>
            </div>
            <div class="official-position">
                <p>Director for Administration</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Girlie C. Tangalin</h3>
            </div>
            <div class="official-position">
                <p>Director National Service Training Program Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Lea E. Usman</h3>
            </div>
            <div class="official-position">
                <p>Director, Public Affairs Office in concurrent capacity as Director of the Language Development Resource Center</p>
            </div>
        </div>

        <!-- Campus Administrators -->
        <div class="position-title">Campus Administrators</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Mary Jocelyn V. Battung</h3>
            </div>
            <div class="official-position">
                <p>Campus Administrator, Pagadian</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Maria Celeste B. Dela Cruz</h3>
            </div>
            <div class="official-position">
                <p>Campus Administrator, Malangas</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Felwin Lovely R. Natividad</h3>
            </div>
            <div class="official-position">
                <p>Campus Administrator, Ipil</p>
            </div>
        </div>

        <!-- Integrated Laboratory School Principals & Asst. Principals -->
        <div class="position-title">Integrated Laboratory School Principals & Asst. Principals</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Riah Barcelona</h3>
            </div>
            <div class="official-position">
                <p>Principal. ILS -High School</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Anna Louisa R. Perez</h3>
            </div>
            <div class="official-position">
                <p>Principal, ILS- Elementary</p>
            </div>
        </div>

        <!-- Assistant & Associate Directors | Assistant Chairpersons | Special Assistants -->
        <div class="position-title">Assistant & Associate Directors | Assistant Chairpersons | Special Assistants</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Richard C. Dagalea</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director, Public Affairs Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Swidin S. Husin</h3>
            </div>
            <div class="official-position">
                <p>Associate Director of the Research Development and Evaluation Center</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Elmer M. Labad</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director, Gender Research and Resource Center (GRRC)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Joel C. Macasinag</h3>
            </div>
            <div class="official-position">
                <p>Asst. Manager, University PRESS(UPRESS)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Reynaldo R. Macaso</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director of the scholarship Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Keynard L. Ponce</h3>
            </div>
            <div class="official-position">
                <p>Asst. to the Director of Center for Continuing Education (CCE)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Vinchall A. Siason</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director of the Quality Assurance Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Salimar B. Tahil</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director of the Management Information System and Technology Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Rochard T. Tarroza</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director, Student Affairs Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Sophia L. Bensali</h3>
            </div>
            <div class="official-position">
                <p>Asst. to the Director of Center for Science Teaching and Training</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Melodina V. Francisco</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director, Alumi Relations Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Mely Jane D. Jacinto</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director, Quality Management Systems Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Dulce Amor P. Matondo</h3>
            </div>
            <div class="official-position">
                <p>Assistant to the VPRESEL</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Atty. Aenn Bernielee C. Limbaga</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director, Special Program and Projects Office (SPPO)</p>
            </div>
        </div>

        <!-- Technical Assistant | Technical Associates -->
        <div class="position-title">Technical Assistant | Technical Associates</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Edwin I. Arip</h3>
            </div>
            <div class="official-position">
                <p>Tech. Associate (BS Com Sci)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Ahmedzam S. Nasaluddin</h3>
            </div>
            <div class="official-position">
                <p>Tech. Associate Under the Office of the President, for the infrastructure Project concurrent capacity as Technical Working group of the BIDS and Awards Committee</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Victor Ryan H. Tangalin</h3>
            </div>
            <div class="official-position">
                <p>Technical Associate, Center for Hands of Goodwill</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Ryan B. Cabangcala</h3>
            </div>
            <div class="official-position">
                <p>Technical Associate to the Vice President for Research Extension Services and External Linkages</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Shamir R. Kassim</h3>
            </div>
            <div class="official-position">
                <p>Executive Assistant for Special Academic concerns at the Office of the President</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Marlon C. Grande</h3>
            </div>
            <div class="official-position">
                <p>Technical Associate for the Community Outreach and Development Advocacy Program (CODAP) in concurrent capacity as the Extension Coordinator of the College of Engineering</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Johana J. Abdula</h3>
            </div>
            <div class="official-position">
                <p>Tech. Asso. for the External Studies Unit – BS Crim. Program</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Abigail F. Antonio</h3>
            </div>
            <div class="official-position">
                <p>Technical Associate to the Vice President for Academic Affairs</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Mercendes A. Bejerano</h3>
            </div>
            <div class="official-position">
                <p>Tech. Asst. to the Vice-President for Academic Affairs</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Bernadeth A. Encarnacion</h3>
            </div>
            <div class="official-position">
                <p>Tech. Asso. for the External Studies Unit – BS Crim. Program</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Melanie A. Turco</h3>
            </div>
            <div class="official-position">
                <p>Technical Associate to the Vice President for Administration and Finance</p>
            </div>
        </div>

        <!-- Chairpersons -->
        <div class="position-title">Chairpersons</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Ferdinand S. Guardo</h3>
            </div>
            <div class="official-position">
                <p>Chief Information Officer (CIO) of the University RE DICT</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Fredelino M. San Juan</h3>
            </div>
            <div class="official-position">
                <p>Chair Bids and Award Committee</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Ricardo B. Gonzales</h3>
            </div>
            <div class="official-position">
                <p>Chair of the Tech. Inspection Committee</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Ruperto D. Mendoza, Jr.</h3>
            </div>
            <div class="official-position">
                <p>Chair, University Review and Evaluation Committee</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Analyn D. Saavedra</h3>
            </div>
            <div class="official-position">
                <p>Chair, Research Ethics Oversight Committee (REOC)</p>
            </div>
        </div>

        <!-- Manager -->
        <div class="position-title">Manager</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Russel J. Ingkoh</h3>
            </div>
            <div class="official-position">
                <p>Marketing Service Manager</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Antonio Angelo J. Limbaga</h3>
            </div>
            <div class="official-position">
                <p>MITHI</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Joel C. Macasinag</h3>
            </div>
            <div class="official-position">
                <p>Manager University PRESS</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Angelito B. Noynay</h3>
            </div>
            <div class="official-position">
                <p>Manager of the Garment Shop</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Atty. Maria Luisa Pilar C. Elago</h3>
            </div>
            <div class="official-position">
                <p>Manager of the Innovation and Technology Support Office (ITSO)</p>
            </div>
        </div>

        <!-- HEAD/CHAIR OF THE GRADUATE SCHOOL -->
        <div class="position-title">HEAD/CHAIR OF THE GRADUATE SCHOOL</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Leo A. Hermosilla</h3>
            </div>
            <div class="official-position">
                <p>CSSPE</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Arnel R. Madrazo</h3>
            </div>
            <div class="official-position">
                <p>Chair, Graduate School, College of Teacher Education on concurrent Coordinator of the Research for Utilization, Publication and Information</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Rochelleo E. Mariano</h3>
            </div>
            <div class="official-position">
                <p>College of Science & Mathematics</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Nurwin Adam O. Muhammad</h3>
            </div>
            <div class="official-position">
                <p>College of Engineering</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Johana J. Abdula</h3>
            </div>
            <div class="official-position">
                <p>College of Criminal Justice Education</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Rubelle Marshah H. Alavar</h3>
            </div>
            <div class="official-position">
                <p>College of Nursing</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Marites A. Barrios</h3>
            </div>
            <div class="official-position">
                <p>College of Home Economics</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Wylen L. Lipanglipang</h3>
            </div>
            <div class="official-position">
                <p>CSWCD</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Fadzralyn A. Karanain</h3>
            </div>
            <div class="official-position">
                <p>Chair of the Graduate School, College of Liberal Arts</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Emerissa Jane L. Tendero</h3>
            </div>
            <div class="official-position">
                <p>Chair of Graduate, College of Public Administration and Development Studies</p>
            </div>
        </div>

        <!-- Coordinators -->
        <div class="position-title">Coordinators</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Julito B. Bande</h3>
            </div>
            <div class="official-position">
                <p>Campus Coordinator, Alicia</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Noel A. Comeros</h3>
            </div>
            <div class="official-position">
                <p>Campus Coordinator, Curuan</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Hernan N. Rosaldo II</h3>
            </div>
            <div class="official-position">
                <p>Coordinator, Library and Archive</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Ariel M. Macailing</h3>
            </div>
            <div class="official-position">
                <p>Campus Coordinator, Imelda</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Pacamalan, Leo Myco</h3>
            </div>
            <div class="official-position">
                <p>Campus Coordinator, Siay</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Eryle Edvin E. Protacio</h3>
            </div>
            <div class="official-position">
                <p>Coordinator, Local Studies</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Noel V. Pugosa</h3>
            </div>
            <div class="official-position">
                <p>Campus Coordinator, Molave</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Hernan N. Rosaldo II</h3>
            </div>
            <div class="official-position">
                <p>Coordinator, BIDANI</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Jiellzon Jaime T. Villarama</h3>
            </div>
            <div class="official-position">
                <p>Coordinator, University Museum</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Carmela J. Go Silk</h3>
            </div>
            <div class="official-position">
                <p>OIC – Campus Coordinator Diplahan</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Lolita R. Lacao-Lacao</h3>
            </div>
            <div class="official-position">
                <p>OIC – Campus Coordinator Olutanga</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Divine Grace M. Marumas</h3>
            </div>
            <div class="official-position">
                <p>Coordinator Instructional Support & Materials Production (ISMP)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Michelle S. Paderan</h3>
            </div>
            <div class="official-position">
                <p>OIC – Campus Coordinator of Mabuhay</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Arlyn O. Rebuza</h3>
            </div>
            <div class="official-position">
                <p>Campus Coordinator College of Agriculture</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Nosca Bonna Ar D. Taasin</h3>
            </div>
            <div class="official-position">
                <p>OIC – Campus Coordinator of Tungawan</p>
            </div>
        </div>

        <!-- Section Chief -->
        <div class="position-title">Section Chief</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Eric H. Alfaro</h3>
            </div>
            <div class="official-position">
                <p>University Registrar</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. John Paul S. Alvarez</h3>
            </div>
            <div class="official-position">
                <p>Supervising Administrative Officer (Finance)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Benhur A. Asid</h3>
            </div>
            <div class="official-position">
                <p>University Librarian</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Erlando G. Coros</h3>
            </div>
            <div class="official-position">
                <p>Chief Security Services</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Edgar A. Demayo</h3>
            </div>
            <div class="official-position">
                <p>Engineer III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Ricardo B. Gonzales</h3>
            </div>
            <div class="official-position">
                <p>University Electrical Engineer on concurrent Chairman of the Inspection Committee</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Alen M. Marcelino</h3>
            </div>
            <div class="official-position">
                <p>Head, Motorpool</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Alfredo D. Montero</h3>
            </div>
            <div class="official-position">
                <p>Supply Officer III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Ariel R. Perez</h3>
            </div>
            <div class="official-position">
                <p>Labor General Foreman</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Joerland- Jansen R. Reyes</h3>
            </div>
            <div class="official-position">
                <p>Property Management Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Atty. Roberto Rivero III</h3>
            </div>
            <div class="official-position">
                <p>Attorney IV</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Oscar S. Sicat</h3>
            </div>
            <div class="official-position">
                <p>Supervising Administrative Officer</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Suzette G. Ducanes</h3>
            </div>
            <div class="official-position">
                <p>Budget Officer</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Felicitas Asuncion C. Elago</h3>
            </div>
            <div class="official-position">
                <p>Medical Officer III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Ma. Teresita J. Rodriguez</h3>
            </div>
            <div class="official-position">
                <p>OIC-Human Resource Management Officer III on concurrent capacity Director for Administration</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mrs. Erlinda C. Macaso</h3>
            </div>
            <div class="official-position">
                <p>Records Officer III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Venus Lyn C. Martin</h3>
            </div>
            <div class="official-position">
                <p>Internal Auditor III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Lallaine Anne. L. Mariano</h3>
            </div>
            <div class="official-position">
                <p>Cashier III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Abigail Irene B. Marquez</h3>
            </div>
            <div class="official-position">
                <p>Information Officer III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Cristianne Dawn R. Sicat</h3>
            </div>
            <div class="official-position">
                <p>OIC – Accountant II</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Darea Jonnah B. Soliterio</h3>
            </div>
            <div class="official-position">
                <p>APA, President</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mrs. Carolina E. Tejero</h3>
            </div>
            <div class="official-position">
                <p>General Services</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Debra Ann M. Ponce</h3>
            </div>
            <div class="official-position">
                <p>University Planning Officer III</p>
            </div>
        </div>

        <!-- Other Services -->
        <div class="position-title">Other Services</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Eric Roland R. Natividad</h3>
            </div>
            <div class="official-position">
                <p>Moderator, University Theatre Guild</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Anthony B. Barandino</h3>
            </div>
            <div class="official-position">
                <p>Moderator, Visual Arts</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Nathaniel G. Saavedra</h3>
            </div>
            <div class="official-position">
                <p>Moderator, Jambangan Dance Troupe</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Arch. Joseph Andrew L. Sahial</h3>
            </div>
            <div class="official-position">
                <p>University Project Management Officer</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Jeremiah D. Calisang</h3>
            </div>
            <div class="official-position">
                <p>Moderator, WMSU Grand Chorale</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Ruzzel L. Nazario</h3>
            </div>
            <div class="official-position">
                <p>Moderator, Literary Arts</p>
            </div>
        </div>

        <!-- ACADEMIC DEANS -->
        <div class="section-header">
            Academic Deans
        </div>

        <div class="container">
            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Abdel-Azeem A. Moammad Siddique</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Asian & Islamic Studies</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Mohammad Khasim I. Abdulmajid</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Medicine</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Hashim N. Alawi</h3>
                </div>
                <div class="official-position">
                    <p>OIC – Dean, College of Nursing</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Engr. Ulmen Riff L. Circulado</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Engineering</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Engr. Mark L. Flores</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Computing Studies</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Byron B. Go Silk</h3>
                </div>
                <div class="official-position">
                    <p>Dean, External Studies Unit</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Mario Ritchie O. Hibionada</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Criminology</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Almudi G. Lukman</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Forestry & Environmental Studies</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Atty. Irma Mari Madelle-Rivero</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Law</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Mohammad Nur S. Paspasan</h3>
                </div>
                <div class="official-position">
                    <p>Acting Dean, College of Science and Mathematics</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Roel F. Marcial</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Liberal Arts</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Ricardo A. Somblingo</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Teacher Education</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Elderico P. Tabal</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Agriculture</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Jocelyn T. Gaas</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Social Work & Community Development</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Ma. Blancaflor R. Jimeno</h3>
                </div>
                <div class="official-position">
                    <p>Dean, CSSPE</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Maria Socorro Yvonne H. Ramos</h3>
                </div>
                <div class="official-position">
                    <p>Coordinating Dean, Graduate School</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Arch. Ruby Alita A. Sahi</h3>
                </div>
                <div class="official-position">
                    <p>OIC – Dean, College of Architecture</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Lucia M. Santos</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Home Economics</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Sarah S. Taupan</h3>
                </div>
                <div class="official-position">
                    <p>OIC- Dean, CPADS on concurrent Director, Quality Assurance Center Office / Chair of the ISA</p>
                </div>
            </div>

            <!-- Associate Dean -->
            <div class="position-title">Associate Dean</div>
            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Roel P. Borja</h3>
                </div>
                <div class="official-position">
                    <p>College of Liberal Arts</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asst. Prof. Darwin V. Mendoza</h3>
                </div>
                <div class="official-position">
                    <p>College of Home Economics</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Ricardo Danilo E. Corteza</h3>
                </div>
                <div class="official-position">
                    <p>College of Sports Science and Physical Education</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Kent Adnil C. Lao</h3>
                </div>
                <div class="official-position">
                    <p>College of Teacher Education</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Nurmia L. Ticao</h3>
                </div>
                <div class="official-position">
                    <p>College of Asian and Islamic Studies</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Engr. Czarina Adelene J. Aquino</h3>
                </div>
                <div class="official-position">
                    <p>College of Engineering</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Edwin I. Arip</h3>
                </div>
                <div class="official-position">
                    <p>College of Computing Studies</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Bernard Q. Suriaga</h3>
                </div>
                <div class="official-position">
                    <p>College of Public Administration and Development Studies</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asst. Prof. Sophia L. Bensali</h3>
                </div>
                <div class="official-position">
                    <p>College of Science and Mathematics concurrent OIC-Director RSTC</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Grace N. Floriano</h3>
                </div>
                <div class="official-position">
                    <p>College of Nursing</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso Prof. Jannet R. Francisco</h3>
                </div>
                <div class="official-position">
                    <p>College of Social Work and Community Development</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Gladess A. Pagal</h3>
                </div>
                <div class="official-position">
                    <p>College of Agriculture</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asst. Prof. Ruzzel L. Nazario</h3>
                </div>
                <div class="official-position">
                    <p>WMSU External Studies Unit (ESU)</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Maryam-Lizbeth L. Sahijuan</h3>
                </div>
                <div class="official-position">
                    <p>College of Medicine</p>
                </div>
            </div>

            <!-- External Studies Units -->
            <div class="position-title">External Studies Units</div>
            <div class="official-row">
                <div class="official-name">
                    <h3>Prof. Nicasio F. Gonzales</h3>
                </div>
                <div class="official-position">
                    <p>OIC- Campus Administrator, WMSU Curuan Campus</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Ariel Macailing</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Imelda</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Mr. Myco Leo B. Pacamalan</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Siay</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Mr. Reymond G. Paragas</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Naga</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Mr. Noel V. Pugosa</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Molave</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Mr. Nerio P. Sacro</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Aurora</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Carmela Go Silk</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Diplahan</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Ms. Lolita R. Lacao-Lacao</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Olutanga</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asst. Prof. Erjorie Laguna</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Malangas</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Ms. Felwyn Lovely R. Natividad</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Ipil</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Ms. Michelle S. Paderan</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Mabuhay</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Ms. Criselda D. Ricohermoso</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Pagadian</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Ms. Nosca Bonna Ar D. Taasin</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Tungawan</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Ms. Abigail Villamor</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Alicia</p>
                </div>
            </div>

        
        <div class="right-margin"></div>

        
    </div>
</body>
</html>
