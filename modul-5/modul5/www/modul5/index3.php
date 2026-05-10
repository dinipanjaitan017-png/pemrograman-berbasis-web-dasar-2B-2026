<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📝 Blog Reflektif Developer</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1e1e2f 0%, #2a2a40 50%, #3b3b5a 100%);
            color: #e8ecef;
            line-height: 1.7;
            overflow-x: hidden;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 50%, rgba(120,119,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,119,198,0.1) 0%, transparent 50%);
            z-index: -1;
            animation: bgShift 15s ease-in-out infinite alternate;
        }
        
        @keyframes bgShift {
            0% { background-position: 0% 50%, 100% 20%; }
            100% { background-position: 100% 50%, 0% 20%; }
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            z-index: 1;
        }
        
        /* Header */
        .header {
            text-align: center;
            margin-bottom: 50px;
            padding: 40px 0;
        }
        
        .header h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            background: linear-gradient(45deg, #667eea, #764ba2, #f093fb);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .header p {
            font-size: 1.2rem;
            color: #a0a8b0;
            max-width: 600px;
            margin: 0 auto;
            font-weight: 300;
        }
        
        /* Navigation Breadcrumbs */
        .breadcrumbs {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 40px;
            font-size: 0.95rem;
        }
        
        .breadcrumbs a {
            color: #667eea;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .breadcrumbs a:hover {
            color: #764ba2;
        }
        
        /* Main Content Grid */
        .main-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            margin-bottom: 60px;
        }
        
        /* Article List */
        .article-list {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(20px);
            border-radius: 25px;
            padding: 35px;
            border: 1px solid rgba(255,255,255,0.1);
            height: fit-content;
            box-shadow: 0 25px 50px rgba(0,0,0,0.3);
        }
        
        .article-list h2 {
            margin-bottom: 30px;
            color: #fff;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .article-item {
            padding: 20px;
            margin-bottom: 15px;
            background: rgba(255,255,255,0.03);
            border-radius: 15px;
            border-left: 4px solid transparent;
            cursor: pointer;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .article-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, #667eea, #764ba2);
            transition: width 0.4s ease;
            z-index: -1;
        }
        
        .article-item:hover {
            transform: translateX(10px);
            border-left-color: #667eea;
            box-shadow: 0 15px 35px rgba(102,126,234,0.3);
        }
        
        .article-item:hover::before {
            width: 4px;
        }
        
        .article-item.active {
            background: linear-gradient(135deg, rgba(102,126,234,0.2), rgba(118,75,162,0.2));
            border-left-color: #f093fb;
            box-shadow: 0 0 30px rgba(240,147,251,0.4);
        }
        
        .article-item h3 {
            color: #fff;
            font-size: 1.1rem;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .article-item small {
            color: #a0a8b0;
        }
        
        /* Article Detail */
        .article-detail {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(25px);
            border-radius: 25px;
            padding: 40px;
            border: 1px solid rgba(255,255,255,0.15);
            box-shadow: 0 30px 60px rgba(0,0,0,0.4);
            position: relative;
            overflow: hidden;
        }
        
        .article-detail::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2, #f093fb);
        }
        
        .article-detail h2 {
            font-family: 'Playfair Display', serif;
            font-size: 2.2rem;
            color: #fff;
            margin-bottom: 20px;
            line-height: 1.3;
        }
        
        .article-meta {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
            color: #a0a8b0;
            font-size: 0.95rem;
        }
        
        .article-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 20px;
            margin-bottom: 25px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            transition: transform 0.4s ease;
        }
        
        .article-image:hover {
            transform: scale(1.02);
        }
        
        .article-content {
            font-size: 1.05rem;
            color: #d1d8e0;
            margin-bottom: 30px;
            line-height: 1.8;
        }
        
        /* Quote Section */
        .quote-section {
            background: linear-gradient(135deg, rgba(255,215,61,0.1), rgba(255,165,0,0.1));
            border: 1px solid rgba(255,215,61,0.3);
            border-radius: 20px;
            padding: 30px;
            margin: 30px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .quote-section::before {
            content: '"';
            position: absolute;
            top: -10px;
            left: 30px;
            font-size: 6rem;
            color: rgba(255,215,61,0.3);
            font-family: 'Playfair Display', serif;
            z-index: 0;
        }
        
        .quote-text {
            font-size: 1.2rem;
            font-style: italic;
            color: #fff;
            font-weight: 500;
            position: relative;
            z-index: 1;
            margin-bottom: 15px;
        }
        
        .quote-author {
            color: #ffd700;
            font-weight: 600;
        }
        
        /* References */
        .references {
            margin-top: 30px;
        }
        
        .ref-item {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
            color: #a0a8b0;
        }
        
        .ref-item a {
            color: #667eea;
            text-decoration: none;
        }
        
        .ref-item a:hover {
            color: #764ba2;
        }
        
        /* Navigation Buttons */
        .nav-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 60px;
            flex-wrap: wrap;
        }
        
        .nav-btn {
            padding: 16px 35px;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(20px);
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: 50px;
            color: #fff;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.4s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .nav-btn:hover {
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-color: #667eea;
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102,126,234,0.4);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .main-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .article-list,
            .article-detail {
                padding: 25px;
            }
        }
        
        .no-article {
            text-align: center;
            color: #a0a8b0;
            font-style: italic;
            padding: 40px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Breadcrumbs Navigation -->
        <div class="breadcrumbs">
            <a href="index.php"><i class="fas fa-home"></i> Profil</a>
            <i class="fas fa-chevron-right"></i>
            <a href="timeline.php"><i class="fas fa-chart-line"></i> Timeline</a>
            <i class="fas fa-chevron-right"></i>
            <span>Blog</span>
        </div>
        
        <div class="header">
            <h1><i class="fas fa-blog"></i> Blog Reflektif</h1>
            <p>Catatan perjalanan coding, error, dan pelajaran berharga dari setiap langkah pengembangan.</p>
        </div>
        
        <div class="main-content">
            <!-- 1. DAFTAR ARTIKEL dengan GET Navigation -->
            <div class="article-list">
                <h2><i class="fas fa-list"></i> Pilih Artikel</h2>
                <?php
                // Array Judul Artikel
                $articles = [
                    'html-pertama' => ['title' => 'Belajar HTML Pertama Kali', 'date' => '15 Jan 2018'],
                    'error-pertama' => ['title' => 'Error Pertama: Syntax PHP', 'date' => '22 Mar 2019'],
                    'proyek-pertama' => ['title' => 'Proyek Pertama Gagal Total', 'date' => '10 Agu 2020'],
                    'laravel-magic' => ['title' => 'Magic Laravel: Eloquent ORM', 'date' => '5 Des 2021'],
                    'debugging-ninja' => ['title' => 'Menjadi Debugging Ninja', 'date' => '18 Feb 2023'],
                    'deployment-drama' => ['title' => 'Drama Deployment ke Production', 'date' => '30 Jun 2024']
                ];
                
                // GET Parameter untuk artikel aktif
                $activeArticle = $_GET['article'] ?? '';
                ?>
                
                <?php foreach ($articles as $slug => $data): ?>
                    <div class="article-item <?php echo $activeArticle === $slug ? 'active' : ''; ?>" 
                         onclick="selectArticle('<?php echo $slug; ?>')">
                        <h3><?php echo htmlspecialchars($data['title']); ?></h3>
                        <small><i class="fas fa-calendar"></i> <?php echo $data['date']; ?></small>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- 2. KONTEN DINAMIS Artikel Detail -->
            <div class="article-detail" id="articleDetail">
                <?php if (empty($activeArticle) || !isset($articles[$activeArticle])): ?>
                    <div class="no-article">
                        <i class="fas fa-feather-alt" style="font-size: 4rem; color: #667eea; margin-bottom: 20px;"></i>
                        <h3>Pilih artikel untuk membaca refleksi</h3>
                        <p>Klik salah satu judul di sebelah kiri untuk memulai perjalanan refleksi coding!</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <?php
    // Data Artikel Lengkap
    $articleData = [
        'html-pertama' => [
            'title' => 'Belajar HTML Pertama Kali',
            'date' => '15 Januari 2018',
            'content' => 'Hari itu saya pertama kali membuka editor teks dan mengetik &lt;h1&gt;Hello World&lt;/h1&gt;. Rasanya seperti membuka pintu dunia baru! Tapi ternyata browser tidak mau menampilkan apa-apa. Setelah 2 jam debugging, saya sadar lupa save file dengan ekstensi .html. Pelajaran pertama: perhatikan detail kecil. Dari situ saya belajar bahwa coding adalah 90% debugging dan 10% menulis kode.',
            'image' => 'html-coding.jpg',
            'references' => [
                'https://developer.mozilla.org/en-US/docs/Web/HTML',
                'https://www.w3schools.com/html/'
            ]
        ],
        'error-pertama' => [
            'title' => 'Error Pertama: Syntax PHP',
            'date' => '22 Maret 2019',
            'content' => 'echo "Hello World"; seharusnya sudah benar, tapi PHP ngambek dengan error Parse. Setelah googling 30 menit, ternyata saya lupa tanda titik koma! Dari situ saya belajar membaca error message dengan teliti. Error bukan musuh, tapi guru terbaik dalam coding.',
            'image' => 'php-error.jpg',
            'references' => [
                'https://www.php.net/manual/en/',
                'https://phptherightway.com/'
            ]
        ],
        'proyek-pertama' => [
            'title' => 'Proyek Pertama Gagal Total',
            'date' => '10 Agustus 2020',
            'content' => 'Website toko online impian saya collapse total di hari demo. Database connection gagal, CSS hilang, JavaScript error. Client kecewa, tapi dari kegagalan itu saya belajar pentingnya testing, version control, dan backup. Kini setiap proyek saya punya checklist deployment.',
            'image' => 'project-fail.jpg',
            'references' => [
                'https://git-scm.com/',
                'https://phpunit.de/'
            ]
        ],
        'laravel-magic' => [
            'title' => 'Magic Laravel: Eloquent ORM',
            'date' => '5 Desember 2021',
            'content' => 'Saat pertama kali menulis User::find(1), database query otomatis jalan tanpa raw SQL. Laravel seperti sulap! Dari situ saya paham konsep ORM dan abstraction layer. Code jadi lebih readable dan maintainable.',
            'image' => 'laravel.jpg',
            'references' => [
                'https://laravel.com/docs/eloquent',
                'https://laravel.com/docs/10.x/orm'
            ]
        ],
        'debugging-ninja' => [
            'title' => 'Menjadi Debugging Ninja',
            'date' => '18 Februari 2023',
            'content' => 'Setelah ribuan jam debugging, saya menemukan pola: 80% bug ada di data flow, 15% di logic, 5% di syntax. Tools seperti Xdebug, Laravel Telescope, dan browser devtools jadi senjata utama. Sekarang debugging lebih cepat dari menulis kode!',
            'image' => 'debugging.jpg',
            'references' => [
                'https://xdebug.org/',
                'https://laravel.com/docs/telescope'
            ]
        ],
        'deployment-drama' => [
            'title' => 'Drama Deployment ke Production',
            'date' => '30 Juni 2024',
            'content' => 'Midnight deployment yang berujung 404 everywhere. Ternyata .env production salah config. Dari drama itu saya buat deployment checklist: backup, test staging, rollback plan, monitoring. Sekarang deployment smooth seperti butter!',
            'image' => 'deployment.jpg',
            'references' => [
                'https://forge.laravel.com/',
                'https://envoyer.io/'
            ]
        ]
    ];
    
    // 4. KUTIPAN MOTIVASI RANDOM dengan array_rand()
    $quotes = [
        ['text' => '“Code is like humor. When you have to explain it, it’s bad.”', 'author' => '- Cory House'],
        ['text' => '“Debugging is twice as hard as writing the code in the first place.”', 'author' => '- Brian Kernighan'],
        ['text' => '“First, solve the problem. Then, write the code.”', 'author' => '- John Johnson'],
        ['text' => '“The best error message is the one that never shows up.”', 'author' => '- Thomas Fuchs'],
        ['text' => '“Any fool can write code that a computer can understand. Good programmers write code that humans can understand.”', 'author' => '- Martin Fowler'],
        ['text' => '“Perfection is achieved not when there is nothing more to add, but when there is nothing left to take away.”', 'author' => '- Antoine de Saint-Exupéry']
    ];
    
    $randomQuote = $quotes[array_rand($quotes)];
    ?>
    
    <?php if (!empty($activeArticle) && isset($articleData[$activeArticle])): ?>
    <!-- Render Artikel Aktif -->
    <div class="container">
        <div class="article-detail">
            <h2><?php echo htmlspecialchars($articleData[$activeArticle]['title']); ?></h2>
            <div class="article-meta">
                <span><i class="fas fa-calendar"></i> <?php echo $articleData[$activeArticle]['date']; ?></span>
                <span><i class="fas fa-eye"></i> 2.5k views</span>
                <span><i class="fas fa-heart"></i> 156 likes</span>
            </div>
            
            <img src="img/<?php echo $articleData[$activeArticle]['image']; ?>" 
                 alt="<?php echo htmlspecialchars($articleData[$activeArticle]['title']); ?>" 
                 class="article-image">
            
            <div class="article-content">
                <?php echo nl2br(htmlspecialchars($articleData[$activeArticle]['content'])); ?>
            </div>
            
            <!-- Quote Random -->
            <div class="quote-section">
                <div class="quote-text"><?php echo htmlspecialchars($randomQuote['text']); ?></div>
                <div class="quote-author"><?php echo $randomQuote['author']; ?></div>
            </div>
            
            <!-- References -->
            <div class="references">
                <h4 style="color: #fff; margin-bottom: 15px;"><i class="fas fa-link"></i> Referensi:</h4>
                <?php foreach ($articleData[$activeArticle]['references'] as $ref): ?>
                    <div class="ref-item">
                        <i class="fas fa-external-link-alt"></i>
                        <a href="<?php echo htmlspecialchars($ref); ?>" target="_blank"><?php echo htmlspecialchars($ref); ?></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <!-- Navigation Buttons -->
        <div class="nav-buttons">
            <a href="timeline.php" class="nav-btn">
                <i class="fas fa-arrow-left"></i> Kembali ke Timeline
            </a>
            <a href="index.php" class="nav-btn">
                <i class="fas fa-home"></i> Ke Profil Utama
            </a>
        </div>
    </div>
    <?php endif; ?>

    <script>
        // 1. NAVIGASI GET dengan JavaScript
        function selectArticle(slug) {
            const url = new URL(window.location);
            url.searchParams.set('article', slug);
            window.history.pushState({}, '', url);
            loadArticle(slug);
        }
        
        function loadArticle(slug) {
            window.location.href = `?article=${slug}`;
        }
        
        // Handle browser back/forward
        window.addEventListener('popstate', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const article = urlParams.get('article');
            if (article) {
                loadArticle(article);
            }
        });
        
        // Auto select first article on load if none selected
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const activeArticle = urlParams.get('article');
            
            if (!activeArticle) {
                const firstArticle = document.querySelector('.article-item');
                if (firstArticle) {
                    firstArticle.click();
                }
            }
        });
        
        // Smooth animations
        document.querySelectorAll('.article-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(15px) scale(1.02)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0) scale(1)';
            });
        });
    </script>
</body>
</html>