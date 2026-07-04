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
<section class="py-16 bg-white min-h-screen">
  <div class="max-w-xl mx-auto">
    <h1 class="text-3xl font-bold text-teal-700 mb-6 text-center">Formulir Kemitraan</h1>
    
    <form id="kemitraanForm" class="bg-[#e6faf8] p-6 rounded-lg shadow space-y-4">
      <div>
        <label class="block text-teal-700 font-semibold mb-1">Nama</label>
        <input type="text" name="nama" id="nama" required class="w-full border rounded px-3 py-2" />
      </div>
      <div>
        <label class="block text-teal-700 font-semibold mb-1">Email</label>
        <input type="email" name="email" id="email" required class="w-full border rounded px-3 py-2" />
      </div>
      <div>
        <label class="block text-teal-700 font-semibold mb-1">Instansi/Perusahaan</label>
        <input type="text" name="instansi" id="instansi" required class="w-full border rounded px-3 py-2" />
      </div>
      <div>
        <label class="block text-teal-700 font-semibold mb-1">Pesan</label>
        <textarea name="pesan" id="pesan" required class="w-full border rounded px-3 py-2" rows="4"></textarea>
      </div>
      <button type="submit" class="bg-teal-600 text-white px-6 py-2 rounded font-semibold hover:bg-teal-700 transition">Kirim</button>
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
  
  // Membuat konten email
  const subject = encodeURIComponent('Formulir Kemitraan - ' + nama);
  const body = encodeURIComponent(
    'Nama: ' + nama + '\n' +
    'Email: ' + email + '\n' +
    'Instansi/Perusahaan: ' + instansi + '\n\n' +
    'Pesan:\n' + pesan
  );
  
  // Membuka Gmail dengan konten yang sudah diisi
  const gmailUrl = 'https://mail.google.com/mail/?view=cm&fs=1&to=admin@azkomaritim.id&su=' + subject + '&body=' + body;
  window.open(gmailUrl, '_blank');
  
  // Menampilkan pesan sukses
  alert('Gmail akan terbuka dengan pesan yang sudah diisi. Silakan kirim email tersebut.');
});
</script>

<?php include 'component/footer_id.php'; ?>
</body>
</html> 