<?php
$uploadDir = 'uploads/';
$latestFile = '';

$files = glob($uploadDir . '*.pdf');
if ($files) {
    $latestFile = basename(end($files));
}

echo json_encode(['filename' => $latestFile]);
?>
