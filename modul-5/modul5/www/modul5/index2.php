<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>📈 Timeline Perjalanan Belajar Coding</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f0f23 0%, #2a2a4a 50%, #1a1a3a 100%);
            color: #e0e6ed;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 80%, rgba(120,119,198,0.3) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(255,119,198,0.3) 0%, transparent 50%),
                        radial-gradient(circle at 40% 40%, rgba(120,219,255,0.2) 0%, transparent 50%);
            z-index: -1;
            animation: float 20s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: scale(1) rotate(0deg); }
            50% { transform: scale(1.05) rotate(180deg); }
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            z-index: 1;
        }
        
        .header {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .header h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            background: linear-gradient(45deg, #00d4ff, #ff6b9d, #ffd93d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
            font-weight: 700;
            text-shadow: 0 0 30px rgba(0,212,255,0.5);
        }
        
        .header p {
            font-size: 1.3rem;
            color: #b0b3c1;
            font-weight: 300;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Timeline Container */
        .timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 4px;
            background: linear-gradient(to bottom, #00d4ff, #ff6b9d, #ffd93d);
            transform: translateX(-50%);
            border-radius: 2px;
            box-shadow: 0 0 20px rgba(0,212,255,0.4);
        }
        
        .timeline-item {
            display: flex;
            align-items: center;
            margin: 60px 0;
            position: relative;
            opacity: 0;
            transform: translateY(50px);
            animation: slideInUp 0.8s ease forwards;
        }
        
        .timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }
        
        .timeline-item.animate {
            opacity: 1;
            transform: translateY(0);
        }
        
        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .timeline-content {
            width: 45%;
            padding: 30px;
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            border: 1px solid rgba(255,255,255,0.1);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            position: relative;
            transition: all 0.4s ease;
        }
        
        .timeline-content:hover {
            transform: translateY(-10px) scale(1.02);
            background: rgba(255,255,255,0.1);
            box-shadow: 0 30px 60px rgba(0,0,0,0.4);
        }
        
        .timeline-content.highlight {
            background: linear-gradient(135deg, rgba(255,215,61,0.2), rgba(255,107,157,0.2));
            border-color: #ffd93d;
            box-shadow: 0 0 30px rgba(255,215,61,0.5);
        }
        
        .timeline-date {
            font-size: 1.1rem;
            font-weight: 600;
            color: #00d4ff;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .timeline-date.highlight {
            color: #ffd93d;
            text-shadow: 0 0 10px rgba(255,217,61,0.8);
        }
        
        .timeline-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 15px;
            line-height: 1.3;
        }
        
        .timeline-desc {
            color: #b0b3c1;
            line-height: 1.7;
            font-weight: 300;
        }
        
        .timeline-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #00d4ff, #ff6b9d);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: white;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            z-index: 2;
            box-shadow: 0 0 30px rgba(0,212,255,0.6);
            transition: all 0.4s ease;
        }
        
        .timeline-item:nth-child(even) .timeline-icon {
            left: auto;
            right: 50%;
            transform: translateX(50%);
        }
        
        .timeline-icon.highlight {
            background: linear-gradient(135deg, #ffd93d, #ff6b9d);
            box-shadow: 0 0 40px rgba(255,217,61,0.8);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: translateX(-50%) scale(1); }
            50% { transform: translateX(-50%) scale(1.1); }
        }
        
        /* Navigation Buttons */
        .nav-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 80px;
            flex-wrap: wrap;
        }
        
        .nav-btn {
            padding: 18px 40px;
            background: linear-gradient(45deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05));
            backdrop-filter: blur(20px);
            border: 2px solid rgba(255,255,255,0.2);
            border-radius: 50px;
            color: #fff;
            font-size: 1.1rem;
            font-weight: 500;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .nav-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.6s;
        }
        
        .nav-btn:hover::before {
            left: 100%;
        }
        
        .nav-btn:hover {
            background: linear-gradient(45deg, #00d4ff, #ff6b9d);
            border-color: #00d4ff;
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,212,255,0.4);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .timeline::before {
                left: 30px;
            }
            
            .timeline-item,
            .timeline-item:nth-child(even) {
                flex-direction: column;
                margin: 40px 0;
            }
            
            .timeline-content,
            .timeline-item:nth-child(even) .timeline-content {
                width: 100%;
                margin-left: 70px;
            }
            
            .timeline-icon {
                left: 30px !important;
                transform: translateX(0) !important;
            }
            
            .timeline-item:nth-child(even) .timeline-icon {
                right: auto !important;
            }
        }
        
        /* Scroll Animation Trigger */
        .observe {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease;
        }
        
        .observe.animate {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-chart-line"></i> Timeline Coding Journey</h1>
            <p>Perjalanan panjang dari nol hingga menjadi developer handal. Setiap milestone adalah bukti perjuangan!</p>
        </div>
        
        <div class="timeline" id="timeline">
            <?php
            // 1. STRUKTUR DATA: Array Asosiatif Riwayat Belajar (5+ data)
            $timelineData = [
                [
                    'year' => '2018',
                    'title' => 'Mulai Belajar HTML & CSS',
                    'desc' => 'Memulai perjalanan coding dengan belajar dasar web development. Membuat website statis pertama menggunakan HTML5 dan CSS3.',
                    'icon' => 'fa-code',
                    'highlight' => false
                ],
                [
                    'year' => '2019',
                    'title' => 'Masuk Kuliah Teknik Informatika',
                    'desc' => 'Resmi menjadi mahasiswa Teknik Informatika. Mulai mempelajari algoritma, struktur data, dan pemrograman berorientasi objek.',
                    'icon' => 'fa-graduation-cap',
                    'highlight' => true  // HIGHLIGHT TAHUN PENTING
                ],
                [
                    'year' => '2020',
                    'title' => 'Pertama Kali JavaScript & Bootstrap',
                    'desc' => 'Belajar JavaScript vanilla dan Bootstrap 4. Membuat interactive web apps dan responsive landing page untuk portofolio.',
                    'icon' => 'fa-js-square',
                    'highlight' => false
                ],
                [
                    'year' => '2021',
                    'title' => 'Proyek Pertama: E-Commerce Website',
                    'desc' => 'Membuat website e-commerce lengkap dengan PHP, MySQL, dan Admin Dashboard. Proyek pertama yang di-deploy ke hosting.',
                    'icon' => 'fa-shopping-cart',
                    'highlight' => true  // HIGHLIGHT TAHUN PENTING
                ],
                [
                    'year' => '2022',
                    'title' => 'Laravel & Vue.js Mastery',
                    'desc' => 'Menguasai Laravel 9 untuk backend API dan Vue.js 3 untuk frontend SPA. Membangun aplikasi manajemen inventori untuk UMKM.',
                    'icon' => 'fa-server',
                    'highlight' => false
                ],
                [
                    'year' => '2023',
                    'title' => 'Freelance & Open Source Contributor',
                    'desc' => 'Mulai freelance dan berkontribusi di GitHub. Portofolio mencapai 10+ proyek live dan dapat sertifikasi Laravel Developer.',
                    'icon' => 'fa-laptop-code',
                    'highlight' => true  // HIGHLIGHT TAHUN SUKSES
                ],
                [
                    'year' => '2024',
                    'title' => 'Fullstack Developer Profesional',
                    'desc' => 'Bekerja sebagai Fullstack Developer dengan stack MERN + Laravel. Aktif mentoring junior developer dan menulis blog tutorial.',
                    'icon' => 'fa-rocket',
                    'highlight' => true
                ]
            ];
            
            // 4. FUNGSI KUSTOM: Penekanan pada tahun highlight
            function renderTimelineItem($item, $index) {
                $highlightClass = $item['highlight'] ? ' highlight' : '';
                $iconClass = $item['highlight'] ? 'fas ' . $item['icon'] : 'far ' . $item['icon'];
                
                return "
                <div class='timeline-item observe' data-index='$index'>
                    <div class='timeline-icon$highlightClass'>
                        <i class='$iconClass'></i>
                    </div>
                    <div class='timeline-content$highlightClass'>
                        <div class='timeline-date$highlightClass'>
                            <i class='fas fa-calendar-alt'></i>
                            {$item['year']}
                        </div>
                        <h3 class='timeline-title'>{$item['title']}</h3>
                        <p class='timeline-desc'>{$item['desc']}</p>
                    </div>
                </div>";
            }
            
            // 3. PERULANGAN FOREACH untuk membedah array
            foreach ($timelineData as $index => $item) {
                echo renderTimelineItem($item, $index);
            }
            ?>
        </div>
        
        <!-- Navigasi Buttons -->
        <div class="nav-buttons">
            <a href="index.php" class="nav-btn">
                <i class="fas fa-arrow-left"></i>
                Kembali ke Profil
            </a>
            <a href="blog.php" class="nav-btn">
                <i class="fas fa-blog"></i>
                Menuju Blog Developer
            </a>
        </div>
    </div>

    <script>
        // Scroll Animation untuk Timeline Items
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);
        
        document.querySelectorAll('.observe').forEach(el => {
            observer.observe(el);
        });
        
        // Smooth scroll dan particle effect on hover
        document.querySelectorAll('.timeline-content').forEach(content => {
            content.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px) scale(1.03)';
            });
            
            content.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
    </script>
</body>
</html>