<?php
$page_title = "WMSU - Administrative Official";

require_once '../__includes/head.php';
?>

<body id="AdministrativeOfficial">
    <div class="wrapper">
        <?php
        require_once '../__includes/sidebar.php';
        ?>
        <div class="content-page px-3">
            <!-- dynamic content here -->
            <?php require_once '../crud-administration/view/view-AdministrativeOfficial.php'; ?>
        </div>      

    </div>
    </div>
</body>

</html>