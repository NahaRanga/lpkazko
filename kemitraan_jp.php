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
<section class="py-16 bg-white min-h-screen">
  <div class="max-w-xl mx-auto">
    <h1 class="text-3xl font-bold text-teal-700 mb-6 text-center">パートナーシップ申込フォーム</h1>
    
    <form id="kemitraanForm" class="bg-[#e6faf8] p-6 rounded-lg shadow space-y-4">
      <div>
        <label class="block text-teal-700 font-semibold mb-1">お名前</label>
        <input type="text" name="nama" id="nama" required class="w-full border rounded px-3 py-2" />
      </div>
      <div>
        <label class="block text-teal-700 font-semibold mb-1">メール</label>
        <input type="email" name="email" id="email" required class="w-full border rounded px-3 py-2" />
      </div>
      <div>
        <label class="block text-teal-700 font-semibold mb-1">会社名</label>
        <input type="text" name="instansi" id="instansi" required class="w-full border rounded px-3 py-2" />
      </div>
      <div>
        <label class="block text-teal-700 font-semibold mb-1">メッセージ</label>
        <textarea name="pesan" id="pesan" required class="w-full border rounded px-3 py-2" rows="4"></textarea>
      </div>
      <button type="submit" class="bg-teal-600 text-white px-6 py-2 rounded font-semibold hover:bg-teal-700 transition">送信</button>
    </form>
  </div>
</section>

<script>
document.getElementById('kemitraanForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const nama = document.getElementById('nama').value;
  const email = document.getElementById('email').value;
  const instansi = document.getElementById('instansi').value;
  const pesan = document.getElementById('pesan').value;
  
  // メール内容を作成
  const subject = encodeURIComponent('パートナーシップ申込フォーム - ' + nama);
  const body = encodeURIComponent(
    'お名前: ' + nama + '\n' +
    'メール: ' + email + '\n' +
    '会社名: ' + instansi + '\n\n' +
    'メッセージ:\n' + pesan
  );
  
  // 内容が入力されたGmailを開く
  const gmailUrl = 'https://mail.google.com/mail/?view=cm&fs=1&to=admin@azkomaritim.id&su=' + subject + '&body=' + body;
  window.open(gmailUrl, '_blank');
  
  // 成功メッセージを表示
  alert('Gmailが開きます。内容が入力されたメールを送信してください。');
});
</script>

<?php include 'component/footer_jp.php'; ?>
</body>
</html> 