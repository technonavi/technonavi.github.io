var map = L.map('map').setView([35.6895, 139.6917], 13); // 東京の座標

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// 例: 東京の一部ポイントを追加
var marker = L.marker([35.6895, 139.6917]).addTo(map)
    .bindPopup('Tokyo')
    .openPopup();
