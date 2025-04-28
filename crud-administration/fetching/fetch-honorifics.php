<?php
    require_once('../../classes/honorifics.class.php');

    $honorificsObj = new Honorifics();

    $honorifics = $honorificsObj->fetchHonorifics();

    header('Content-Type: application/json');
    echo json_encode($honorifics);
?>
