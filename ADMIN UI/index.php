<?php
// Include database connection
require_once 'db_connect.php';

// Determine which page to display based on URL parameter
$current_page = isset($_GET['page']) ? $_GET['page'] : 'homepage';

// Function to fetch data from a specific table
function fetchData($conn, $table, $whereCondition = "") {
    $data = [];
    $sql = "SELECT * FROM " . $table;
    
    if (!empty($whereCondition)) {
        $sql .= " WHERE " . $whereCondition;
    }
    
    $result = $conn->query($sql);
    
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WMSU ADMIN</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #f5f5f5;
    }

    .header {
      background-color: #8B0000;
      color: white;
      display: flex;
      align-items: center;
      padding: 10px 20px;
      height: 90px;
    }

    .logo {
      width: 70px;
      height: 70px;
      margin-right: 15px;
    }

    .title {
      font-size: 28px;
      font-weight: bold;
    }

    .container {
      display: flex;
      min-height: calc(100vh - 90px);
    }

    .sidebar {
      width: 180px;
      background-color: #FFF8DC;
      padding: 10px 0;
    }

    .sidebar-item {
      padding: 15px;
      border-bottom: 1px solid #e0e0e0;
      font-weight: bold;
      color: #333;
      text-decoration: none;
      display: block;
    }

    .sidebar-item:hover {
      background-color: #f0e6c0;
    }

    .sidebar-item.active {
      background-color: #BD0F04;
      color: white;
    }

    .main-content {
      flex: 1;
      padding: 20px;
    }

    .section {
      margin-bottom: 30px;
    }

    .section-header {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      font-size: 18px;
      font-weight: bold;
    }

    .insert-btn {
      background-color: #8B0000;
      color: white;
      padding: 3px 8px;
      border-radius: 3px;
      margin-left: 10px;
      font-size: 12px;
      text-decoration: none;
    }

    .insert-btn:hover {
      background-color: #6B0000;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
      background-color: white;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    th {
      background-color: #BD0F04;
      color: white;
      padding: 10px;
      text-align: center;
    }

    td {
      padding: 10px;
      border: 1px solid #e0e0e0;
      text-align: center;
      vertical-align: middle;
    }

    .image-cell {
      padding: 5px;
      width: 120px;
    }

    .profile-image {
      max-width: 100%;
      height: auto;
      max-height: 100px;
    }

    .name-cell {
      font-weight: bold;
    }

    .empty-message {
      text-align: center;
      padding: 20px;
      color: #777;
      font-style: italic;
    }
    
    .action-cell {
      width: 100px;
    }
    
    .action-btn {
      display: inline-block;
      padding: 3px 8px;
      margin: 2px;
      background-color: #8B0000;
      color: white;
      border-radius: 3px;
      text-decoration: none;
      font-size: 12px;
    }
    
    .edit-btn {
      background-color: #007bff;
    }
    
    .delete-btn {
      background-color: #dc3545;
    }
  </style>
</head>
<body>
  <div class="header">
    <img src="imgs/WMSU-Logo.png" alt="WMSU Logo" class="logo">
    <div class="title">WMSU ADMIN</div>
  </div>

  <div class="container">
    <div class="sidebar">
      <a href="index.php?page=homepage" class="sidebar-item <?php echo ($current_page == 'homepage') ? 'active' : ''; ?>">HOMEPAGE</a>
      <a href="index.php?page=administration" class="sidebar-item <?php echo ($current_page == 'administration') ? 'active' : ''; ?>">ADMINISTRATION</a>
      <a href="index.php?page=extension" class="sidebar-item <?php echo ($current_page == 'extension') ? 'active' : ''; ?>">EXTENSION SERVICES</a>
    </div>

    <div class="main-content">
      <?php if($current_page == 'homepage'): ?>
        <!-- Homepage Content -->
        <h2>Welcome to WMSU Admin System</h2>
        <p>Please select a section from the sidebar menu to manage university data.</p>

      <?php elseif($current_page == 'administration'): ?>
        <!-- Administration Content -->
        <div class="section">
          <div class="section-header">
            BOARD OF REGENTS
            <a href="insert.php?section=regents" class="insert-btn">Insert</a>
          </div>
          <table>
            <thead>
              <tr>
                <th width="20%">IMAGE</th>
                <th width="30%">NAME</th>
                <th width="30%">TITLE</th>
                <th width="20%">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $regentsData = fetchData($conn, "board_of_regents");
              if (count($regentsData) > 0):
                foreach ($regentsData as $regent):
              ?>
              <tr>
                <td class="image-cell">
                  <?php if (!empty($regent['image'])): ?>
                    <img src="<?php echo $regent['image']; ?>" alt="<?php echo $regent['name']; ?>" class="profile-image">
                  <?php else: ?>
                    <span>No image</span>
                  <?php endif; ?>
                </td>
                <td class="name-cell"><?php echo $regent['name']; ?></td>
                <td><?php echo $regent['title']; ?></td>
                <td class="action-cell">
                  <a href="edit.php?section=regents&id=<?php echo $regent['id']; ?>" class="action-btn edit-btn">Edit</a>
                  <a href="delete.php?section=regents&id=<?php echo $regent['id']; ?>" class="action-btn delete-btn" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a>
                </td>
              </tr>
              <?php 
                endforeach;
              else:
              ?>
              <tr>
                <td colspan="4" class="empty-message">No data available</td>
              </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <div class="section">
          <div class="section-header">
            ADMINISTRATIVE OFFICIALS
            <a href="insert.php?section=officials" class="insert-btn">Insert</a>
          </div>
          <table>
            <thead>
              <tr>
                <th width="25%">NAME</th>
                <th width="30%">TITLE</th>
                <th width="25%">OFFICE LINK</th>
                <th width="20%">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $officialsData = fetchData($conn, "opstaff");
              if (count($officialsData) > 0):
                foreach ($officialsData as $official):
              ?>
              <tr>
                <td class="name-cell"><?php echo $official['name']; ?></td>
                <td><?php echo $official['title']; ?></td>
                <td>
                  <?php if (!empty($official['page_link'])): ?>
                    <a href="<?php echo $official['page_link']; ?>" target="_blank"><?php echo $official['page_link']; ?></a>
                  <?php else: ?>
                    <span>-</span>
                  <?php endif; ?>
                </td>
                <td class="action-cell">
                  <a href="edit.php?section=officials&id=<?php echo $official['id']; ?>" class="action-btn edit-btn">Edit</a>
                  <a href="delete.php?section=officials&id=<?php echo $official['id']; ?>" class="action-btn delete-btn" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a>
                </td>
              </tr>
              <?php 
                endforeach;
              else:
              ?>
              <tr>
                <td colspan="4" class="empty-message">No data available</td>
              </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
        <!-- Add this section to the Administration Content section in index.php -->
<!-- Place it right after the section-header div for ADMINISTRATIVE OFFICIALS -->

<div class="section">
  <div class="section-header">
    ADMINISTRATIVE OFFICIALS
    <a href="admin_officials.php" class="insert-btn">Manage Categories</a>
    <a href="insert.php?section=officials" class="insert-btn">Insert</a>
  </div>
  <!-- ... rest of the existing table and code ... -->
</div>

        <div class="section">
          <div class="section-header">
            ACADEMIC DEANS
            <a href="insert.php?section=deans" class="insert-btn">Insert</a>
          </div>
          <table>
            <thead>
              <tr>
                <th width="40%">NAME</th>
                <th width="40%">TITLE</th>
                <th width="20%">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $deansData = fetchData($conn, "academic_deans", "position_type = 'Academic Dean'");
              if (count($deansData) > 0):
                foreach ($deansData as $dean):
              ?>
              <tr>
                <td class="name-cell"><?php echo $dean['name']; ?></td>
                <td><?php echo $dean['title']; ?></td>
                <td class="action-cell">
                  <a href="edit.php?section=deans&id=<?php echo $dean['id']; ?>" class="action-btn edit-btn">Edit</a>
                  <a href="delete.php?section=deans&id=<?php echo $dean['id']; ?>" class="action-btn delete-btn" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a>
                </td>
              </tr>
              <?php 
                endforeach;
              else:
              ?>
              <tr>
                <td colspan="3" class="empty-message">No data available</td>
              </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <div class="section">
          <div class="section-header">
            ASSOCIATE DEANS
            <a href="insert.php?section=associate-deans" class="insert-btn">Insert</a>
          </div>
          <table>
            <thead>
              <tr>
                <th width="40%">NAME</th>
                <th width="40%">TITLE</th>
                <th width="20%">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $associateDeansData = fetchData($conn, "academic_deans", "position_type = 'Associate Dean'");
              if (count($associateDeansData) > 0):
                foreach ($associateDeansData as $dean):
              ?>
              <tr>
                <td class="name-cell"><?php echo $dean['name']; ?></td>
                <td><?php echo $dean['title']; ?></td>
                <td class="action-cell">
                  <a href="edit.php?section=associate-deans&id=<?php echo $dean['id']; ?>" class="action-btn edit-btn">Edit</a>
                  <a href="delete.php?section=associate-deans&id=<?php echo $dean['id']; ?>" class="action-btn delete-btn" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a>
                </td>
              </tr>
              <?php 
                endforeach;
              else:
              ?>
              <tr>
                <td colspan="3" class="empty-message">No data available</td>
              </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <div class="section">
          <div class="section-header">
            EXTERNAL STUDIES UNIT
            <a href="insert.php?section=external" class="insert-btn">Insert</a>
          </div>
          <table>
            <thead>
              <tr>
                <th width="40%">NAME</th>
                <th width="50%">TITLE</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan="2" class="empty-message">No data available</td>
              </tr>
            </tbody>
          </table>
        </div>

      <?php elseif($current_page == 'extension'): ?>
        <!-- Extension Services Content -->
        <h2>Extension Services</h2>
        <p>Extension services content will be displayed here.</p>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>