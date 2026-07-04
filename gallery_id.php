<?php
// Versi Indonesia
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>LPK Azko Bogor</title>
  <link rel="icon" href="images/logo_azko.png" type="image/png">
</head>
<body>
<?php include 'component/navbar_id.php'; ?>
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto">
    <h1 class="text-3xl font-bold text-teal-700 mb-6 text-center">Galeri Kegiatan</h1>
    <p class="text-gray-700 mb-8 text-center">Dokumentasi pelatihan, interview, keberangkatan, dan testimoni alumni LPK Azko Bogor.</p>
    
    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
      <?php
        $dir = 'images/kegiatan';
        $allowed_ext = ['webp'];
        $activity_names = [
          'Bounding' => 'Kegiatan Bounding',
          'Certification' => 'Sertifikasi',
          'Class1' => 'Kelas',
          'Class2' => 'Kelas', 
          'Class3' => 'Kelas',
          'Class4' => 'Kelas',
          'Class5' => 'Kelas',
          'class6' => 'Kelas',
          'exercise' => 'Latihan',
          'freespace' => 'Ruang Santai',
          'Gotoschool' => 'Ke Sekolah',
          'Mensetsu' => 'Interview',
          'mitra1' => 'Mitra',
          'mitra2' => 'Mitra',
          'mitra3' => 'Mitra',
          'mitra5' => 'Mitra',
          'mitra6' => 'Mitra',
          'mitra7' => 'Mitra',
          'mitra8' => 'Mitra',
          'Workout' => 'Olahraga'
        ];
        
        foreach (scandir($dir) as $file) {
          $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
          if (in_array($ext, $allowed_ext)) {
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $activity_name = isset($activity_names[$filename]) ? $activity_names[$filename] : $filename;
            $alt = 'Kegiatan ' . $activity_name;
            
            echo '<div class="bg-white rounded-lg p-4 shadow-md">';
            echo '<img src="' . $dir . '/' . $file . '" alt="' . htmlspecialchars($alt) . '" class="w-full h-48 object-cover rounded-lg mb-3" onerror="this.style.display=\'none\'; this.nextElementSibling.style.display=\'flex\';">';
            echo '<div class="w-full h-48 bg-gray-200 rounded-lg mb-3 flex items-center justify-center" style="display: none;">';
            echo '<span class="text-gray-500">Foto ' . htmlspecialchars($activity_name) . '</span>';
            echo '</div>';
            echo '<h4 class="font-semibold text-teal-600 text-center">' . htmlspecialchars($activity_name) . '</h4>';
            echo '</div>';
          }
        }
      ?>
    </div>
    
    <div class="text-center">
      <h2 class="text-xl font-semibold text-teal-700 mb-4">Testimoni Video Alumni</h2>
      <div class="flex flex-wrap justify-center gap-6">
        <!-- Embed Instagram Reel - Sebelahan -->
        <div class="flex flex-col md:flex-row justify-center items-start gap-8 w-full">
          <div class="flex flex-col items-center">
            <iframe src="https://www.instagram.com/reel/DIvePyOTPUB/embed" width="320" height="600" frameborder="0" allowfullscreen class="rounded-lg shadow"></iframe>
            <p class="text-center text-gray-500 mt-2 text-sm">
              Jika video tidak muncul, <a href="https://www.instagram.com/reel/DIvePyOTPUB/" target="_blank" class="text-teal-600 underline">klik di sini untuk menonton di Instagram</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'component/footer_id.php'; ?>
</body>
</html> 