<?php
header('Content-Type: application/json');

$apiUrl = 'http://localhost:4800/api/gallery';

$response = file_get_contents($apiUrl);

if ($response === FALSE) {
    echo json_encode(['error' => 'Failed to fetch data']);
    exit;
}

echo $response;
?>
