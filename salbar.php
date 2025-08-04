<!DOCTYPE html>
<html lang="mn">
<head>
    <meta charset="UTF-8">
    <title>Салбарууд - NOROO</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 0;
            background: #f8f8f8;
        }
        h2 {
            text-align: center;
            padding: 20px;
        }
        .branch-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
        }
        .branch-card {
            width: 300px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .branch-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .branch-info {
            padding: 15px;
        }
        .branch-info h3 {
            margin: 0 0 10px;
        }
        .branch-info p {
            margin: 5px 0;
            color: #444;
        }
    </style>
</head>
<body>

<h2>САЛБАРУУД</h2>

<div class="branch-container">

    <div class="branch-card">
        <img src="uploads/darkhan-olon-uls.jpg" alt="Прогресс төв">
        <div class="branch-info">
            <h3>дархан олон улсын худалдааны төв</h3>
            <p>Утас: 89443369, 96063699</p>
        </div>
    </div>

    <div class="branch-card">
        <img src="uploads/orgil-center.jpg" alt="Титан төв">
        <div class="branch-info">
            <h3>Оргил худалдааны төв</h3>
            <p>Утас: 95239129, 89443369</p>
        </div>
    </div>

    <div class="branch-card">
        <img src="uploads/darkhan-ikh-delguur.jpg" alt="BIG төв">
        <div class="branch-info">
            <h3>Дархан Их Дэлгүүр</h3>
            <p>Утас: 88017565, 89443369</p>
        </div>
    </div>

</div>

</body>
</html>

<!DOCTYPE html>
<html lang="mn">
<head>
  <meta charset="UTF-8">
  <title>Дархан дахь салбарууд</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
  <style>
    #map {
      height: 400px;
      width: 100%;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <h2>Дархан дахь манай салбарууд</h2>

  <div id="map"></div>

  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script>
    // Дархан хотын төв цэг дээр газрын зургийг төвлөрүүлнэ
    var map = L.map('map').setView([49.4841, 105.9228], 14);

    // Газрын зурагны tile тохируулга
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap'
    }).addTo(map);

    // Салбаруудын нэр болон байршлын координатууд (Жишээ координаттай)
    var branches = [
      { name: "Олон улсын худалдааны төв", coords: [49.4890, 105.9250] },
      { name: "Оргил худалдааны төв", coords: [49.4846, 105.9302] },
      { name: "Дархан Их Дэлгүүр", coords: [49.4778, 105.9185] }
    ];

    // Байршлуудыг газрын зураг дээр тэмдэглэх
    branches.forEach(branch => {
      L.marker(branch.coords).addTo(map)
        .bindPopup(branch.name);
    });
  </script>

</body>
</html>
