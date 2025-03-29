<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Function to invite a player to a party
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);

    if (!isset($data['friendId']) || !isset($data['partyId'])) {
        echo json_encode(["error" => "Missing parameters"]);
        exit;
    }

    $friendId = $data['friendId'];
    $partyId = $data['partyId'];

    echo json_encode(["message" => "Party invite sent to $friendId for party $partyId"]);
}
?>
