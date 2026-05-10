<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Interaktif Developer Pemula</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #2c3e50;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #3498db;
            color: white;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #34495e;
        }
        input[type="text"], input[type="email"], input[type="tel"], 
        textarea, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        .checkbox-group, .radio-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .checkbox-group label, .radio-group label {
            display: flex;
            align-items: center;
            font-weight: normal;
            gap: 8px;
        }
        input[type="checkbox"], input[type="radio"] {
            width: auto;
        }
        button {
            background-color: #27ae60;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #219a52;
        }
        .output {
            margin-top: 30px;
            padding: 20px;
            background-color: #ecf0f1;
            border-radius: 5px;
        }
        .alert {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            font-weight: bold;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profil Interaktif Developer Pemula</h1>
        
        <!-- FORM INPUT -->
        <form method="POST" action="">
            <!-- PROFIL STATIS -->
            <h2>1. Data Profil Statis</h2>
            <table>
                <tr>
                    <td><label>Nama:</label></td>
                    <td><input type="text" name="nama" value="<?= isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '' ?>" required></td>
                </tr>
                <tr>
                    <td><label>ID Developer:</label></td>
                    <td><input type="text" name="id_dev" value="<?= isset($_POST['id_dev']) ? htmlspecialchars($_POST['id_dev']) : '' ?>" required></td>
                </tr>
                <tr>
                    <td><label>Kota/Tgl Lahir:</label></td>
                    <td><input type="text" name="kota_tgl" placeholder="Contoh: Jakarta, 15-05-2000" value="<?= isset($_POST['kota_tgl']) ? htmlspecialchars($_POST['kota_tgl']) : '' ?>" required></td>
                </tr>
                <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required></td>
                </tr>
                <tr>
                    <td><label>No. WhatsApp:</label></td>
                    <td><input type="tel" name="whatsapp" placeholder="08xxxxxxxxxx" value="<?= isset($_POST['whatsapp']) ? htmlspecialchars($_POST['whatsapp']) : '' ?>" required></td>
                </tr>
            </table>

            <!-- FORM DINAMIS -->
            <h2>2. Data Pengalaman & Skill</h2>
            
            <div class="form-group">
                <label>Framework/Tools yang dikuasai (pisahkan dengan koma):</label>
                <input type="text" name="framework" placeholder="HTML, CSS, JavaScript, PHP" 
                       value="<?= isset($_POST['framework']) ? htmlspecialchars($_POST['framework']) : '' ?>" required>
            </div>

            <div class="form-group">
                <label>Cerita singkat pengalaman membuat aplikasi/website:</label>
                <textarea name="pengalaman" required><?= isset($_POST['pengalaman']) ? htmlspecialchars($_POST['pengalaman']) : '' ?></textarea>
            </div>

            <div class="form-group">
                <label>Tools Penunjang:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="tools[]" value="VS Code" <?= isset($_POST['tools']) && in_array('VS Code', $_POST['tools']) ? 'checked' : '' ?>> VS Code</label>
                    <label><input type="checkbox" name="tools[]" value="GitHub" <?= isset($_POST['tools']) && in_array('GitHub', $_POST['tools']) ? 'checked' : '' ?>> GitHub</label>
                    <label><input type="checkbox" name="tools[]" value="Figma" <?= isset($_POST['tools']) && in_array('Figma', $_POST['tools']) ? 'checked' : '' ?>> Figma</label>
                    <label><input type="checkbox" name="tools[]" value="Postman" <?= isset($_POST['tools']) && in_array('Postman', $_POST['tools']) ? 'checked' : '' ?>> Postman</label>
                    <label><input type="checkbox" name="tools[]" value="Laravel" <?= isset($_POST['tools']) && in_array('Laravel', $_POST['tools']) ? 'checked' : '' ?>> Laravel</label>
                </div>
            </div>

            <div class="form-group">
                <label>Minat Bidang:</label>
                <div class="radio-group">
                    <label><input type="radio" name="minat" value="Frontend" <?= isset($_POST['minat']) && $_POST['minat'] == 'Frontend' ? 'checked' : '' ?>> Frontend</label>
                    <label><input type="radio" name="minat" value="Backend" <?= isset($_POST['minat']) && $_POST['minat'] == 'Backend' ? 'checked' : '' ?>> Backend</label>
                    <label><input type="radio" name="minat" value="Fullstack" <?= isset($_POST['minat']) && $_POST['minat'] == 'Fullstack' ? 'checked' : '' ?>> Fullstack</label>
                </div>
            </div>

            <div class="form-group">
                <label>Tingkat Skill Coding:</label>
                <select name="skill" required>
                    <option value="">-- Pilih Tingkat Skill --</option>
                    <option value="Dasar" <?= isset($_POST['skill']) && $_POST['skill'] == 'Dasar' ? 'selected' : '' ?>>Dasar</option>
                    <option value="Cukup" <?= isset($_POST['skill']) && $_POST['skill'] == 'Cukup' ? 'selected' : '' ?>>Cukup</option>
                    <option value="Profesional" <?= isset($_POST['skill']) && $_POST['skill'] == 'Profesional' ? 'selected' : '' ?>>Profesional</option>
                </select>
            </div>

            <button type="submit" name="submit">Proses Profil</button>
        </form>

        <?php
        // FUNGSI KUSTOM UNTUK MEMPROSES DATA
        function prosesProfil($data) {
            $output = [];
            
            // Validasi semua field wajib diisi
            $required_fields = ['nama', 'id_dev', 'kota_tgl', 'email', 'whatsapp', 'framework', 'pengalaman', 'minat', 'skill'];
            foreach($required_fields as $field) {
                if(empty($data[$field])) {
                    return ['error' => 'Semua field wajib diisi!'];
                }
            }

            // Proses framework menjadi array menggunakan explode
            $framework_array = array_map('trim', explode(',', $data['framework']));
            
            // Kondisi tambahan: cek jumlah framework
            $skill_message = '';
            if(count($framework_array) > 2) {
                $skill_message = '<div class="alert alert-success">✅ Skill Anda cukup luas di bidang development!</div>';
            }

            $output['profil'] = [
                'Nama' => $data['nama'],
                'ID Developer' => $data['id_dev'],
                'Kota/Tgl Lahir' => $data['kota_tgl'],
                'Email' => $data['email'],
                'No. WhatsApp' => $data['whatsapp']
            ];

            $output['framework'] = $framework_array;
            $output['pengalaman'] = $data['pengalaman'];
            $output['tools'] = isset($data['tools']) ? $data['tools'] : [];
            $output['minat'] = $data['minat'];
            $output['skill'] = $data['skill'];
            $output['skill_message'] = $skill_message;

            return $output;
        }

        // PROSES FORM SUBMISSION
        if(isset($_POST['submit'])) {
            $hasil = prosesProfil($_POST);
            
            if(isset($hasil['error'])) {
                echo '<div class="alert alert-error">'.$hasil['error'].'</div>';
            } else {
                // TAMPILKAN HASIL OUTPUT
                echo '<div class="output">';
                echo '<h2>✅ Profil Developer Berhasil Diproses!</h2>';
                
                // TABEL PROFIL STATIS
                echo '<h3>Data Profil Statis</h3>';
                echo '<table>';
                echo '<tr><th>Kolom</th><th>Data</th></tr>';
                foreach($hasil['profil'] as $key => $value) {
                    echo '<tr><td>'.$key.'</td><td>'.htmlspecialchars($value).'</td></tr>';
                }
                echo '</table>';

                // FRAMEWORK
                echo '<h3>Framework/Tools yang Dikuasai:</h3>';
                echo '<p><strong>'.implode(', ', $hasil['framework']).'</strong></p>';
                echo $hasil['skill_message'];

                // PENGALAMAN (PARAGRAF)
                echo '<h3>Pengalaman Development:</h3>';
                echo '<p style="background: white; padding: 15px; border-left: 4px solid #3498db; line-height: 1.6;">';
                echo nl2br(htmlspecialchars($hasil['pengalaman']));
                echo '</p>';

                // TOOLS, MINAT, SKILL
                echo '<h3>Informasi Tambahan:</h3>';
                echo '<ul>';
                echo '<li><strong>Tools Penunjang:</strong> '.(empty($hasil['tools']) ? 'Belum dipilih' : implode(', ', $hasil['tools'])).'</li>';
                echo '<li><strong>Minat Bidang:</strong> '.$hasil['minat'].'</li>';
                echo '<li><strong>Tingkat Skill:</strong> '.$hasil['skill'].'</li>';
                echo '</ul>';
                echo '</div>';
            }
        }
        ?>
    </div>
</body>
</html>