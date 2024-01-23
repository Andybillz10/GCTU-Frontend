<?php
$uploadDir = 'uploads/';
$uploadedFile = $uploadDir . basename($_FILES['pdfFile']['name']);
$uploadSuccess = move_uploaded_file($_FILES['pdfFile']['tmp_name'], $uploadedFile);

if ($uploadSuccess) {
  echo json_encode(['success' => true, 'filename' => basename($uploadedFile)]);
} else {
  echo json_encode(['success' => false]);
}
?>
