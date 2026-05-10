<?php
$articles = [
    "html" => [
        "judul" => "Belajar HTML Pertama Kali",
        "tanggal" => "20 maret 2026",
        "isi" => "Pertama kali belajar HTML terasa membingungkan, tapi lama-lama jadi paham dan mulai menikmati coding.",
        "gambar" => "belajrhtml.jpg",
        "link" => "https://www.w3schools.com/html/"
    ],
    "error" => [
        "judul" => "Error Pertama",
        "tanggal" => "20 maret 2026",
        "isi" => "Saya pernah error karena lupa tutup tag. Dari situ saya belajar lebih teliti saat coding.",
        "gambar" => "Kode-Python.webp",
        "link" => "https://developer.mozilla.org/en-US/docs/Web/HTML"
    ]
];

$key = $_GET['artikel'] ?? null;

$quotes = [
    "Coding itu seni, bukan sekadar logika.",
    "Error adalah teman belajar.",
    "Jangan takut mencoba.",
    "Terus belajar, pasti bisa."
];

$randomQuote = $quotes[array_rand($quotes)];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Blog Coding</title>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
        }

        h1 {
            text-align: center;
            padding: 20px;
            color: white;
            background: linear-gradient(90deg, #ff6a00, #ee0979);
            margin: 0;
        }

        .nav {
            padding: 15px;
            text-align: center;
        }

        .nav a {
            background: white;
            color: #333;
            padding: 8px 15px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .nav a:hover {
            background: #ff6a00;
            color: white;
        }

        .container {
            display: flex;
            margin: 20px;
            gap: 20px;
        }

        .sidebar {
            width: 25%;
            background: white;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .sidebar h3 {
            text-align: center;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            margin: 10px 0;
            background: #f1f1f1;
            border-radius: 10px;
            text-decoration: none;
            color: #333;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #74ebd5;
            color: white;
        }

        .content {
            width: 75%;
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .content h2 {
            color: #ee0979;
        }

        img {
            width: 250px;
            border-radius: 10px;
            margin-top: 10px;
        }

        .quote {
            margin-top: 100px;
            padding: 15px;
            background: linear-gradient(90deg, #ffecd2, #fcb69f);
            border-radius: 10px;
            font-style: italic;
            text-align: center;
        }
    </style>
</head>

<body>

<h1>✨ Blog Pengalaman Coding ✨</h1>

<div class="nav">
 

<div class="container">

    <div class="sidebar">
        <h3>📚 Artikel</h3>
        <?php foreach ($articles as $id => $art): ?>
            <a href="?artikel=<?php echo $id; ?>">
                <?php echo $art['judul']; ?>
            </a>
        <?php endforeach; ?>
    </div>

    <div class="content">
        <?php if ($key && isset($articles[$key])): 
            $art = $articles[$key];
        ?>
            <h2><?php echo $art['judul']; ?></h2>
            <small><?php echo $art['tanggal']; ?></small>

            <p><?php echo $art['isi']; ?></p>

            <img src="<?php echo $art['gambar']; ?>">

            <p>
                🔗 <a href="<?php echo $art['link']; ?>" target="_blank">Referensi Belajar</a>
            </p>
        <?php else: ?>
            <p>Pilih artikel di sebelah kiri ya 😊</p>
        <?php endif; ?>

        <div class="quote">
            "<?php echo $randomQuote; ?>"
            <div class="navigation">
    <a href="index1.php" class="btn">Profil Interaktif Developer Pemul</a>
    <a href="index2.php" class="btn">Kembali ke Timeline</a>
</div>
        </div>
    </div>

</div>

</body>
</html>