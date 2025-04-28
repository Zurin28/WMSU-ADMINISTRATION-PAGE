<?php
require_once '../../classes/bor.class.php';

$id = $_GET['id'] ?? $_POST['id'] ?? null;
if ($id) {
    $bor = new Board();
    $member = $bor->fetchById($id);
    if ($member) {
        echo json_encode([
            'name' => $member['name'],
            'honorifics_id' => $member['honorifics_id'],
            'title_id' => $member['title_id'],
            'rank' => $member['rank']
        ]);
    } else {
        echo json_encode([]);
    }
} else {
    echo json_encode([]);
}
