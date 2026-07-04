<?php
// 日本語バージョン
?>
<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>LPK Azko Bogor</title>
  <link rel="icon" href="images/logo_azko.png" type="image/png">
</head>
<body>
<?php include 'component/navbar_jp.php'; ?>
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto">
    <h1 class="text-3xl font-bold text-teal-700 mb-6 text-center">活動ギャラリー</h1>
    <p class="text-gray-700 mb-8 text-center">LPKアズコ ボゴールの研修、面接、出発、卒業生の声のドキュメント。</p>
    
    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
      <?php
        $dir = 'images/kegiatan';
        $allowed_ext = ['webp'];
        $activity_names = [
          'Bounding' => 'バウンディング活動',
          'Certification' => '認証',
          'Class1' => '授業',
          'Class2' => '授業', 
          'Class3' => '授業',
          'Class4' => '授業',
          'Class5' => '授業',
          'class6' => '授業',
          'exercise' => '練習',
          'freespace' => 'リラックススペース',
          'Gotoschool' => '学校へ',
          'Mensetsu' => '面接',
          'mitra1' => 'パートナー',
          'mitra2' => 'パートナー',
          'mitra3' => 'パートナー',
          'mitra5' => 'パートナー',
          'mitra6' => 'パートナー',
          'mitra7' => 'パートナー',
          'mitra8' => 'パートナー',
          'Workout' => '運動'
        ];
        
        foreach (scandir($dir) as $file) {
          $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
          if (in_array($ext, $allowed_ext)) {
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $activity_name = isset($activity_names[$filename]) ? $activity_names[$filename] : $filename;
            $alt = $activity_name . 'の活動';
            
            echo '<div class="bg-white rounded-lg p-4 shadow-md">';
            echo '<img src="' . $dir . '/' . $file . '" alt="' . htmlspecialchars($alt) . '" class="w-full h-48 object-cover rounded-lg mb-3" onerror="this.style.display=\'none\'; this.nextElementSibling.style.display=\'flex\';">';
            echo '<div class="w-full h-48 bg-gray-200 rounded-lg mb-3 flex items-center justify-center" style="display: none;">';
            echo '<span class="text-gray-500">' . htmlspecialchars($activity_name) . 'の写真</span>';
            echo '</div>';
            echo '<h4 class="font-semibold text-teal-600 text-center">' . htmlspecialchars($activity_name) . '</h4>';
            echo '</div>';
          }
        }
      ?>
    </div>
    
    <div class="text-center">
      <h2 class="text-xl font-semibold text-teal-700 mb-4">卒業生のビデオメッセージ</h2>
      <div class="flex flex-wrap justify-center gap-6">
        <!-- Embed Instagram Reel - Sebelahan -->
        <div class="flex flex-col md:flex-row justify-center items-start gap-8 w-full">
          <div class="flex flex-col items-center">
            <iframe src="https://www.instagram.com/reel/DIvePyOTPUB/embed" width="320" height="600" frameborder="0" allowfullscreen class="rounded-lg shadow"></iframe>
            <p class="text-center text-gray-500 mt-2 text-sm">
              動画が表示されない場合は、<a href="https://www.instagram.com/reel/DIvePyOTPUB/" target="_blank" class="text-teal-600 underline">こちらをクリックしてInstagramでご覧ください</a>。
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'component/footer_jp.php'; ?>
</body>
</html> 