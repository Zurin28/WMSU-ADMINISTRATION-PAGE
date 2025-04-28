<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WMSU Admin</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #ffd9d9;
    }
    .container {
      width: 400px;
      margin: 50px auto;
      box-shadow: none;
      border: none;
    }
    .header {
      background-color: #990000;
      color: white;
      padding: 15px;
      display: flex;
      align-items: center;
    }
    .header img {
      height: 50px;
      margin-right: 15px;
    }
    .header .title {
      font-size: 20px;
      margin: 0;
    }
    .back {
      display: flex;
      align-items: center;
      padding: 15px;
    }

    .back img{
        width: 50px;
        height: 50px;   
    } 
    .back span {
      font-weight: bold;
      margin-left: 10px;
    }
    .link-list {
      display: flex;
      flex-direction: column;
      padding: 0 20px 20px;
    }
    .link-list a {
      margin: 10px 0;
      padding: 15px;
      font-size: 16px;
      color: white;
      background-color: #660000;
      border-radius: 10px;
      text-align: center;
      text-decoration: none;
      transition: background 0.3s;
    }
    .link-list a:hover {
      background-color: #990000;
    }
  </style>
</head>
<body>
  <div class="header">
    <img src="../../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
    <div class="title">WMSU ADMIN</div>
  </div>
  <div class="container">
    <div class="back">
    <span>
  <a href="../../sample-admin/administration" class="back-link">
    <img src="../../images/Ellipse7.svg" alt="Back">
  </a>
</span>
      <span>SELECT FROM BELOW:</span>
    </div>
    <div class="link-list">
      <a href="../add-officials/add-official-pres.php">PRESIDENT</a>
      <a href="../add-officials/add-official-VicePres.php">VICE PRESIDENT</a>
      <a href="../add-officials/add-official-opstaff.php">OFFICE OF THE PRESIDENT STAFF</a>
      <a href="../add-officials/add-official-universityboardsecretary.php">UNIV. BOARD AND SECRETARY</a>
      <a href="../add-officials/add-official-directors.php">DIRECTORS</a>
      <a href="../add-officials/add-official-campusadministrators.php">CAMPUS ADMINISTRATOR</a>
      <a href="../add-officials/add-official-ILSPrincipals.php">Integrated Laboratory School Principals & Asst. Principals</a>
      <a href="../add-officials/add-official-AssistantDirectors.php">Assistant & Associate Directors Assistant Chairpersons Special Assistants</a>
      <a href="../add-officials/add-official-TechnicalAssistants.php">Technical Assistant | Technical Associates</a>
      <a href="../add-officials/add-official-Chairpersons.php">Chairpersons</a>
      <a href="../add-officials/add-official-Managers.php">Manager</a>
      <a href="../add-officials/add-official-GraduateSchoolHead.php">HEAD/CHAIR OF THE GRADUATE SCHOOL</a>
      <a href="../add-officials/add-official-Coordinators.php">Coordinators</a>
      <a href="../add-officials/add-official-SectionChiefs.php">Section Chief</a>
      <a href="../add-officials/add-official-OtherServices.php">Other Services</a>

    </div>
  </div>
</body>
</html>
