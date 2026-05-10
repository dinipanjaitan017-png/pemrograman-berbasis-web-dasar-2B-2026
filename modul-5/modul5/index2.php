<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Belajar - Timeline</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .timeline {
            position: relative;
            max-width: 600px;
            margin: 0 auto;
        }
        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background-color: #3498db;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -3px;
        }
        .container {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }
        .container::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            right: -17px;
            background-color: white;
            border: 4px solid #3498db;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        .left {
            left: 0;
        }
        .right {
            left: 50%;
        }
        .right::after {
            left: -16px;
        }
        .content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .highlight {
            font-weight: bold;
            color: #e74c3c !important;
            background-color: #ffebee;
            border-left: 4px solid #e74c3c;
        }
        .year {
            font-weight: bold;
            font-size: 18px;
            color: #2c3e50;
        }
        .desc {
            margin-top: 5px;
            color: #7f8c8d;
        }
        .navigation {
            text-align: center;
            margin-top: 40px;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin: 0 10px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #2980b9;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>

<h1>Timeline Riwayat Belajar</h1>

<div class="timeline" id="timeline">
    <?php
   
    $riwayatBelajar = [
        "2025" => "Masuk Kuliah",
        "Maret 2026" => "Belajar HTML",
        "April 2026" => "Belajar CSS & JS",
        "Mei 2026" => "Proyek Website Pertama",
        "Sekarang" => "Belajar Backend"
    ];

    
    function highlightTahun($tahun, $contentClass) {
        $highlightTahun = ["2025", "Mei 2026"]; // Tahun yang akan dihighlight
        if (in_array($tahun, $highlightTahun)) {
            $contentClass .= " highlight";
        }
        return $contentClass;
    }

    
    $index = 0;
    foreach ($riwayatBelajar as $tahun => $deskripsi) {
        $leftRight = ($index % 2 == 0) ? 'left' : 'right';
        $contentClass = highlightTahun($tahun, 'content');
        
        echo "<div class='container $leftRight'>";
        echo "  <div class='$contentClass'>";
        echo "    <div class='year'>$tahun</div>";
        echo "    <div class='desc'>$deskripsi</div>";
        echo "  </div>";
        echo "</div>";
        $index++;
    }
    ?>
</div>

->
<div class="navigation">
    <a href="index1.php" class="btn">Kembali ke Timeline</a>
    <a href="index3.php" class="btn">Menuju Blog Developer</a>
</div>

</body>
</html>