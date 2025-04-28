<?php
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    // Remove htmlspecialchars here if it exists
    return $data;
}