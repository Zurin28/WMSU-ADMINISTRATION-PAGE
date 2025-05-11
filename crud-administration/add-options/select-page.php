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
  <a href="../../sample-admin/Home" class="back-link">
    <img src="../../images/Ellipse7.svg" alt="Back">
  </a>
</span>
      <span>SELECT FROM BELOW:</span>
    </div>
    <div class="link-list">
    <a href="../add-officials/add-page.php?page=ADMINISTRATION PAGE">ADMINISTRATION PAGE</a>
    <a href="../add-officials/add-page.php?page=BOARD OF REGENTS">BOARD OF REGENTS</a>
  <a href="../add-officials/add-page.php?page=ADMINISTRATIVE OFFICIALS">ADMINISTRATIVE OFFICIALS</a>
  <a href="../add-officials/add-page.php?page=ACADEMIC DEANS">ACADEMIC DEANS</a>
  
    </div>
  </div>
</body>
</html>
