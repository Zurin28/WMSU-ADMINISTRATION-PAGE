<?php
$page_title = "WMSU - Personnel";

require_once '../__includes/head.php';
?>

<!-- Add these CSS links inside head.php or before closing head tag -->

<body id="Personnel">
    <div class="wrapper">
        <?php
        require_once '../__includes/sidebar.php';
        ?>
        <div class="content-page px-3">
            <?php
            // Add this to load the administration view
            require_once '../crud-administration/view/view-Personnel.php';
            ?>
        </div>
    </div>
    </div>

</body>

</html>