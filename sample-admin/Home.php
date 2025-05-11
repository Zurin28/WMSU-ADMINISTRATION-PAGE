<?php
$page_title = "QuinStyle - Administration";

require_once '../__includes/head.php';
?>

<!-- Add these CSS links inside head.php or before closing head tag -->
<link rel="stylesheet" href="../css/administration.css">
<link rel="stylesheet" href="../css/tables.css">
<link rel="stylesheet" href="../css/modal.css">
<link rel="stylesheet" href="../css/style.css">
<body id="Home">
    <div class="wrapper">
        <?php
        require_once '../__includes/sidebar.php';
        ?>
        <div class="content-page px-3">
            <?php
            // Add this to load the administration view
            require_once '../crud-administration/view-administration-copy.php';
            ?>
        </div>
    </div>
    </div>

</body>

</html>