<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mapdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM points";
$result = $conn->query($sql);

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Map App</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <div id="map" style="height: 600px;"></div>
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map("map").setView([35.6895, 139.6917], 13); // 東京の座標

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors"
        }).addTo(map);';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= 'L.marker([' . $row["lat"] . ', ' . $row["lng"] . ']).addTo(map).bindPopup("' . $row["name"] . '");';
    }
}

$html .= '</script>
</body>
</html>';

file_put_contents('index.html', $html);
$conn->close();
?>
