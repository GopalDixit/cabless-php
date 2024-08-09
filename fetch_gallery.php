<?php
header('Content-Type: application/json');

$apiUrl = 'https://adminpanel-fback.onrender.com/api/gallery';

$response = file_get_contents($apiUrl);

if ($response === FALSE) {
    echo json_encode(['error' => 'Failed to fetch data']);
    exit;
}

echo $response;
?>
