<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$ep = $_GET['ep'] ?? '';

if (!$ep) {
    echo json_encode(["error" => "Episode not specified"]);
    exit;
}

$apiUrl = "https://api.consumet.org/anime/gogo/watch/" . urlencode($ep);

$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

if (!$data || !isset($data['sources'])) {
    echo json_encode(["error" => "No data found"]);
    exit;
}

$source = $data['sources'][0]['url'] ?? null;

if ($source) {
    echo json_encode(["video" => $source]);
} else {
    echo json_encode(["error" => "No video URL found"]);
}
