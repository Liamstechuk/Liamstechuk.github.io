<?php
// Store your Discord webhook URL here
$webhookUrl = "https://discord.com/api/webhooks/1277686951507656806/k8I4OOkCrPvUz-PdxO1CFAgZezZ-Nlu3Q1pscMj_aNCMPOKLPhYA6h4aq8fc5kOEITG7";

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the posted data
    $data = json_decode(file_get_contents('php://input'), true);

    // Prepare the data for Discord
    $embedData = [
        'content' => '',
        'embeds' => [
            [
                'title' => 'Visitor Information',
                'fields' => [
                    ['name' => 'IP Address', 'value' => $data['ip'], 'inline' => true],
                    ['name' => 'Device Type', 'value' => $data['device_type'], 'inline' => true],
                ],
                'color' => 7506394, // Hex color code for the embed
            ],
        ],
    ];

    // Send data to Discord webhook
    $ch = curl_init($webhookUrl);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($embedData));
    $response = curl_exec($ch);
    curl_close($ch);
}
?>
