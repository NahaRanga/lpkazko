<?php
?>
<header class="bg-white">
  <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
    <a class="block text-teal-600" href="index.php">
      <span class="sr-only">Home</span>
      <img src="images/logo_azko.png" alt="Logo LPK Azko Bogor" class="h-14 w-14 rounded-full border-2 border-white shadow" />
    </a>
    
    <!-- Desktop Navigation -->
    <div class="flex flex-1 items-center justify-end md:justify-between">
      <nav aria-label="Global" class="hidden md:block">
        <ul class="flex items-center gap-6 text-sm">
          <li><a class="text-gray-500 transition hover:text-gray-500/75" href="index.php">Home</a></li>
          <li><a class="text-gray-500 transition hover:text-gray-500/75" href="about_id.php">Tentang</a></li>
          <li><a class="text-gray-500 transition hover:text-gray-500/75" href="training_id.php">Program Pelatihan</a></li>
          <li><a class="text-gray-500 transition hover:text-gray-500/75" href="job_id.php">Lowongan Kerja</a></li>
          <li><a class="text-gray-500 transition hover:text-gray-500/75" href="gallery_id.php">Galeri</a></li>
          <li><a class="text-gray-500 transition hover:text-gray-500/75" href="kemitraan_id.php">Kemitraan</a></li>
          <li><a class="text-gray-500 transition hover:text-gray-500/75" href="contact_id.php">Kontak</a></li>
        </ul>
      </nav>
      
      <!-- Desktop Language Switcher -->
      <div class="hidden md:flex items-center gap-4 ml-6 border-l border-gray-300 pl-4">
        <div class="flex items-center gap-2">
          <span class="flex items-center gap-1">
            <span class="inline-block w-5 h-3 bg-blue-500 rounded-sm mr-1" style="background: url('https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg'); background-size:cover;"></span>
            <span class="text-xs font-bold text-blue-900">ID</span>
          </span>
          <form id="langToggleForm" action="" method="get">
            <label for="langToggle" class="relative block h-8 w-14 rounded-full transition-colors bg-gray-300" id="langToggleLabel">
              <input type="checkbox" id="langToggle" name="lang" value="jp" class="peer sr-only" />
              <span class="absolute inset-y-0 start-0 m-1 size-6 rounded-full bg-white ring-[6px] ring-white transition-all ring-inset peer-checked:start-8 peer-checked:w-2 peer-checked:bg-red-500 peer-checked:ring-transparent"></span>
            </label>
          </form>
          <span class="flex items-center gap-1">
            <span class="inline-block w-5 h-3 bg-red-500 rounded-sm mr-1" style="background: url('https://upload.wikimedia.org/wikipedia/commons/9/9e/Flag_of_Japan.svg'); background-size:cover;"></span>
            <span class="text-xs font-bold text-red-700">JP</span>
          </span>
        </div>
      </div>
    </div>

    <!-- Mobile Burger Menu Button -->
    <button id="mobile-menu-button" class="md:hidden p-2 text-gray-500 hover:text-gray-700 focus:outline-none">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
  </div>

  <!-- Mobile Menu Overlay -->
  <div id="mobile-menu" class="md:hidden fixed inset-0 z-50 bg-black bg-opacity-50 hidden">
    <div class="fixed inset-y-0 right-0 w-64 bg-white shadow-lg">
      <div class="flex items-center justify-between p-4 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-900">Menu</h3>
        <button id="close-menu-button" class="p-2 text-gray-500 hover:text-gray-700 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      
      <!-- Mobile Navigation -->
      <nav class="p-4">
        <ul class="space-y-4">
          <li><a class="block text-gray-700 hover:text-gray-900 py-2 border-b border-gray-100" href="index.php">Home</a></li>
          <li><a class="block text-gray-700 hover:text-gray-900 py-2 border-b border-gray-100" href="about_id.php">Tentang</a></li>
          <li><a class="block text-gray-700 hover:text-gray-900 py-2 border-b border-gray-100" href="training_id.php">Program Pelatihan</a></li>
          <li><a class="block text-gray-700 hover:text-gray-900 py-2 border-b border-gray-100" href="job_id.php">Lowongan Kerja</a></li>
          <li><a class="block text-gray-700 hover:text-gray-900 py-2 border-b border-gray-100" href="gallery_id.php">Galeri</a></li>
          <li><a class="block text-gray-700 hover:text-gray-900 py-2 border-b border-gray-100" href="kemitraan_id.php">Kemitraan</a></li>
          <li><a class="block text-gray-700 hover:text-gray-900 py-2 border-b border-gray-100" href="contact_id.php">Kontak</a></li>
        </ul>
      </nav>
      
      <!-- Mobile Language Switcher -->
      <div class="p-4 border-t border-gray-200">
        <h4 class="text-sm font-medium text-gray-900 mb-3">Pilih Bahasa</h4>
        <div class="flex items-center gap-2">
          <span class="flex items-center gap-1">
            <span class="inline-block w-5 h-3 bg-blue-500 rounded-sm mr-1" style="background: url('https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg'); background-size:cover;"></span>
            <span class="text-xs font-bold text-blue-900">ID</span>
          </span>
          <form id="mobileLangToggleForm" action="" method="get">
            <label for="mobileLangToggle" class="relative block h-8 w-14 rounded-full transition-colors bg-gray-300" id="mobileLangToggleLabel">
              <input type="checkbox" id="mobileLangToggle" name="lang" value="jp" class="peer sr-only" />
              <span class="absolute inset-y-0 start-0 m-1 size-6 rounded-full bg-white ring-[6px] ring-white transition-all ring-inset peer-checked:start-8 peer-checked:w-2 peer-checked:bg-red-500 peer-checked:ring-transparent"></span>
            </label>
          </form>
          <span class="flex items-center gap-1">
            <span class="inline-block w-5 h-3 bg-red-500 rounded-sm mr-1" style="background: url('https://upload.wikimedia.org/wikipedia/commons/9/9e/Flag_of_Japan.svg'); background-size:cover;"></span>
            <span class="text-xs font-bold text-red-700">JP</span>
          </span>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Desktop language toggle functionality
    const toggle = document.getElementById('langToggle');
    const label = document.getElementById('langToggleLabel');
    toggle.checked = false;
    label.classList.remove('bg-red-500');
    label.classList.add('bg-gray-300');
    toggle.addEventListener('change', function() {
      // Dapatkan nama file saat ini
      const path = window.location.pathname;
      const filename = path.substring(path.lastIndexOf('/') + 1);
      // Ganti _id.php <-> _jp.php
      if (toggle.checked) {
        // ke versi Jepang
        if (filename.endsWith('_id.php')) {
          window.location.href = filename.replace('_id.php', '_jp.php');
        } else if (filename.endsWith('.php')) {
          window.location.href = filename.replace('.php', '_jp.php');
        } else {
          window.location.href = 'index_jp.php';
        }
      } else {
        // ke versi Indonesia
        if (filename.endsWith('_jp.php')) {
          window.location.href = filename.replace('_jp.php', '_id.php');
        } else if (filename.endsWith('.php')) {
          window.location.href = filename.replace('.php', '_id.php');
        } else {
          window.location.href = 'index_id.php';
        }
      }
    });

    // Mobile menu functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMenuButton = document.getElementById('close-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileToggle = document.getElementById('mobileLangToggle');
    const mobileLabel = document.getElementById('mobileLangToggleLabel');

    // Set mobile toggle state
    mobileToggle.checked = false;
    mobileLabel.classList.remove('bg-red-500');
    mobileLabel.classList.add('bg-gray-300');

    // Open mobile menu
    mobileMenuButton.addEventListener('click', function() {
      mobileMenu.classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    });

    // Close mobile menu
    closeMenuButton.addEventListener('click', function() {
      mobileMenu.classList.add('hidden');
      document.body.style.overflow = 'auto';
    });

    // Close mobile menu when clicking outside
    mobileMenu.addEventListener('click', function(e) {
      if (e.target === mobileMenu) {
        mobileMenu.classList.add('hidden');
        document.body.style.overflow = 'auto';
      }
    });

    // Mobile language toggle functionality
    mobileToggle.addEventListener('change', function() {
      // Dapatkan nama file saat ini
      const path = window.location.pathname;
      const filename = path.substring(path.lastIndexOf('/') + 1);
      // Ganti _id.php <-> _jp.php
      if (mobileToggle.checked) {
        // ke versi Jepang
        if (filename.endsWith('_id.php')) {
          window.location.href = filename.replace('_id.php', '_jp.php');
        } else if (filename.endsWith('.php')) {
          window.location.href = filename.replace('.php', '_jp.php');
        } else {
          window.location.href = 'index_jp.php';
        }
      } else {
        // ke versi Indonesia
        if (filename.endsWith('_jp.php')) {
          window.location.href = filename.replace('_jp.php', '_id.php');
        } else if (filename.endsWith('.php')) {
          window.location.href = filename.replace('.php', '_id.php');
        } else {
          window.location.href = 'index_id.php';
        }
      }
    });
  </script>
</header> 