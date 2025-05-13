<?php
$page_title = "WMSU - Home";

require_once '../__includes/head.php';
?>

<!-- Add these CSS links inside head.php or before closing head tag -->

<body id="Home">
    <div class="wrapper">
        <?php
        require_once '../__includes/sidebar.php';
        ?>
        <div class="content-page px-3">
            <?php
            // Add this to load the administration view
            require_once '../crud-administration/view-home.php';
            ?>
        </div>
    </div>
    </div>

</body>

</html>