<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Interaktif Developer Pemula</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 2.2em;
            margin-bottom: 10px;
        }
        
        .content {
            padding: 40px;
        }
        
        .profile-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
            background: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }
        
        .profile-table th,
        .profile-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e9ecef;
        }
        
        .profile-table th {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            font-weight: 600;
        }
        
        .profile-table tr:hover {
            background: #e3f2fd;
        }
        
        .form-section {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #333;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        textarea {
            resize: vertical;
            min-height: 100px;
        }
        
        .checkbox-group,
        .radio-group {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .checkbox-group label,
        .radio-group label {
            display: flex;
            align-items: center;
            margin: 0;
            font-weight: normal;
            cursor: pointer;
        }
        
        input[type="checkbox"],
        input[type="radio"] {
            width: auto;
            margin-right: 8px;
        }
        
        .btn {
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            color: white;
            padding: 15px 40px;
            border: none;
            border-radius: 50px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        
        .result {
            background: #d4edda;
            border: 2px solid #c3e6cb;
            border-radius: 10px;
            padding: 25px;
            margin-top: 30px;
        }
        
        .result h3 {
            color: #155724;
            margin-bottom: 20px;
        }
        
        .skill-message {
            background: #fff3cd;
            border: 1px solid #ffeaa7;
            padding: 15px;
            border-radius: 8px;
            margin: 15px 0;
            font-weight: 600;
            color: #856404;
        }
        
        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid #f5c6cb;
        }
        
        @media (max-width: 768px) {
            .content {
                padding: 20px;
            }
            
            .checkbox-group,
            .radio-group {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>👨‍💻 Profil Interaktif Developer Pemula</h1>
            <p>Tampilkan skill dan pengalaman Anda dengan interaktif!</p>
        </div>
        
        <div class="content">
            <!-- Tabel Profil Statis -->
            <table class="profile-table">
                <thead>
                    <tr>
                        <th colspan="2">DATA PROFIL DEVELOPER</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Nama</strong></td>
                        <td> Merrina Sagala</td>
                    </tr>
                    <tr>
                        <td><strong>ID Developer</strong></td>
                        <td>DEV-024</td>
                    </tr>
                    <tr>
                        <td><strong>Kota/Tgl Lahir</strong></td>
                        <td>Parbumbunan, 24 Desember 2007</td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td>nina@email.com</td>
                    </tr>
                    <tr>
                        <td><strong>No. WhatsApp</strong></td>
                        <td>+62 812-3456-7890</td>
                    </tr>
                </tbody>
            </table>

            <!-- Form Input Dinamis -->
            <?php
            // Fungsi Kustom untuk memproses data
            function prosesDataDeveloper($postData) {
                $errors = [];
                $result = [];
                
                // Validasi semua field wajib diisi
                $requiredFields = ['framework', 'pengalaman', 'minat', 'skill'];
                foreach ($requiredFields as $field) {
                    if (empty($postData[$field])) {
                        $errors[] = "Field " . ucfirst($field) . " wajib diisi!";
                    }
                }
                
                if (empty($errors)) {
                    // Proses Framework menjadi Array dengan explode
                    $frameworks = array_filter(array_map('trim', explode(',', $postData['framework'])));
                    $frameworkCount = count($frameworks);
                    
                    $result = [
                        'frameworks' => $frameworks,
                        'frameworkCount' => $frameworkCount,
                        'pengalaman' => htmlspecialchars($postData['pengalaman']),
                        'minat' => $postData['minat'],
                        'skill' => $postData['skill'],
                        'tools' => isset($postData['tools']) ? $postData['tools'] : []
                    ];
                    
                    // Kondisi tambahan: Skill luas jika framework > 2
                    $result['skillLuas'] = $frameworkCount > 2;
                }
                
                return ['errors' => $errors, 'result' => $result];
            }
            
            // Proses form submission
            $output = '';
            if ($_POST) {
                $processResult = prosesDataDeveloper($_POST);
                
                if (empty($processResult['errors'])) {
                    $data = $processResult['result'];
                    $output = '
                    <div class="result">
                        <h3>✅ Data Berhasil Diproses!</h3>
                        
                        <!-- Tabel Hasil Input -->
                        <table style="width: 100%; margin-bottom: 20px; border-collapse: collapse;">
                            <tr>
                                <td style="padding: 12px; background: #28a745; color: white; font-weight: bold;">Framework/Tools:</td>
                                <td style="padding: 12px;">' . implode(', ', $data['frameworks']) . ' (' . $data['frameworkCount'] . ' tools)</td>
                            </tr>
                            <tr>
                                <td style="padding: 12px; background: #28a745; color: white; font-weight: bold;">Minat Bidang:</td>
                                <td style="padding: 12px;">' . $data['minat'] . '</td>
                            </tr>
                            <tr>
                                <td style="padding: 12px; background: #28a745; color: white; font-weight: bold;">Tingkat Skill:</td>
                                <td style="padding: 12px;">' . $data['skill'] . '</td>
                            </tr>
                            <tr>
                                <td style="padding: 12px; background: #28a745; color: white; font-weight: bold;">Tools Penunjang:</td>
                                <td style="padding: 12px;">' . (empty($data['tools']) ? 'Tidak ada' : implode(', ', $data['tools'])) . '</td>
                            </tr>
                        </table>
                        
                        <!-- Paragraf Pengalaman -->
                        <div style="background: white; padding: 20px; border-radius: 8px; border-left: 5px solid #28a745;">
                            <strong>Pengalaman Anda:</strong><br><br>
                            ' . nl2br($data['pengalaman']) . '
                        </div>';
                    
                    // Pesan skill luas
                    if ($data['skillLuas']) {
                        $output .= '
                        <div class="skill-message">
                            🎉 Skill Anda cukup luas di bidang development! (Menguasai ' . $data['frameworkCount'] . ' framework/tools)
                        </div>';
                    }
                } else {
                    $output = '<div class="error">' . implode('<br>', $processResult['errors']) . '</div>';
                }
            }
            echo $output;
            ?>

            <form method="POST" class="form-section">
                <h2 style="margin-bottom: 25px; color: #333;">📝 Isi Data Skill & Pengalaman</h2>
                
                <div class="form-group">
                    <label for="framework">Framework/Tools yang dikuasai * 
                        <small>(pisahkan dengan koma: Laravel, React, Vue.js)</small>
                    </label>
                    <input type="text" id="framework" name="framework" required 
                           placeholder="Contoh: Laravel, React, Vue.js, Bootstrap" 
                           value="<?php echo isset($_POST['framework']) ? htmlspecialchars($_POST['framework']) : ''; ?>">
                </div>
                
                <div class="form-group">
                    <label for="pengalaman">Cerita singkat pengalaman membuat aplikasi/website *</label>
                    <textarea id="pengalaman" name="pengalaman" required 
                              placeholder="Ceritakan pengalaman Anda..."><?php echo isset($_POST['pengalaman']) ? htmlspecialchars($_POST['pengalaman']) : ''; ?></textarea>
                </div>
                
                <div class="form-group">
                    <label>Tools Penunjang</label>
                    <div class="checkbox-group">
                        <label><input type="checkbox" name="tools[]" value="VS Code"> VS Code</label>
                        <label><input type="checkbox" name="tools[]" value="GitHub"> GitHub</label>
                        <label><input type="checkbox" name="tools[]" value="Figma"> Figma</label>
                        <label><input type="checkbox" name="tools[]" value="Postman"> Postman</label>
                        <label><input type="checkbox" name="tools[]" value="Docker"> Docker</label>
                        <label><input type="checkbox" name="tools[]" value="MySQL"> MySQL</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Minat Bidang *</label>
                    <div class="radio-group">
                        <label><input type="radio" name="minat" value="Frontend" required 
                            <?php echo (isset($_POST['minat']) && $_POST['minat'] == 'Frontend') ? 'checked' : ''; ?>> Frontend</label>
                        <label><input type="radio" name="minat" value="Backend" required 
                            <?php echo (isset($_POST['minat']) && $_POST['minat'] == 'Backend') ? 'checked' : ''; ?>> Backend</label>
                        <label><input type="radio" name="minat" value="Fullstack" required 
                            <?php echo (isset($_POST['minat']) && $_POST['minat'] == 'Fullstack') ? 'checked' : ''; ?>> Fullstack</label>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="skill">Tingkat Skill Coding *</label>
                    <select id="skill" name="skill" required>
                        <option value="">Pilih tingkat skill</option>
                        <option value="Dasar" <?php echo (isset($_POST['skill']) && $_POST['skill'] == 'Dasar') ? 'selected' : ''; ?>>Dasar</option>
                        <option value="Cukup" <?php echo (isset($_POST['skill']) && $_POST['skill'] == 'Cukup') ? 'selected' : ''; ?>>Cukup</option>
                        <option value="Profesional" <?php echo (isset($_POST['skill']) && $_POST['skill'] == 'Profesional') ? 'selected' : ''; ?>>Profesional</option>
                    </select>
                </div>
                
                <button type="submit" class="btn">🚀 Proses Data Saya</button>
            </form>
        </div>
    </div>
</body>
</html>






