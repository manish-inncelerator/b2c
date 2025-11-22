<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$endpoint = $_GET['endpoint'] ?? '';

$apiToken = 'WaxDb9Md9WHa6GUUrPxW54SNVLWjWQRhYb6abkVtHq48PT8hHQDnmSPJerCUhRHqVnzJNV8SAgZxt6pqupvPuR5aFfMrNomZNWHrZYZ4fmtB3JQrCbJuJprDSc9VGmjsnWLjx4LEgMRVSZHA3PLnr7jXYwwSFYwWBoUDSG2r2aLYNSoPMygagk7crN';

if ($endpoint === 'esim-countries') {
    $apiUrl = 'https://api-dev.getroamify.com/api/esim/countries';
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $apiToken,
        'Content-Type: application/json'
    ]);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);
    
    if ($curlError) {
        http_response_code(500);
        echo json_encode(['error' => 'CURL Error: ' . $curlError]);
        exit();
    }
    
    http_response_code($httpCode);
    echo $response;
} else if ($endpoint === 'esim-packages') {
    $country = $_GET['country'] ?? '';
    $apiUrl = 'https://api-dev.getroamify.com/api/esim/packages';
    
    if (!empty($country)) {
        $apiUrl .= '?country=' . urlencode($country);
    }
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $apiToken,
        'Content-Type: application/json'
    ]);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);
    curl_close($ch);
    
    if ($curlError) {
        http_response_code(500);
        echo json_encode(['error' => 'CURL Error: ' . $curlError]);
        exit();
    }
    
    http_response_code($httpCode);
    echo $response;
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Endpoint not found']);
}
?>

