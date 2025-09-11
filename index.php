<?php
function generateRandomSubdomain($length = 30) {
    $characters = 'abcdefghijklmnopqrstuvwxyz0123456789-';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Crate Web P | Otomatis Terbaru</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
<style>
 @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
 body { font-family: 'Inter', sans-serif; }
</style>
</head>
<body class="bg-white text-gray-900">

<!-- Pesan informasi -->
<div id="info-message" class="hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 max-w-xs w-80 bg-gradient-to-r from-blue-600 to-indigo-700 text-white px-6 py-5 rounded-xl shadow-2xl flex flex-col items-center space-y-4 opacity-0 pointer-events-none transition-opacity duration-500 z-50">
  <span class="font-semibold text-sm md:text-base text-center leading-snug">
    Harap scroll tampilan hingga ke bawah untuk melihat tampilan lainnya.<br>
    script geratis di bawah.
  </span>
  
  <!-- Tombol download yang lebih keren -->
  <a href="https://www.mediafire.com/file/84wdlmnsl69wwgx/download.zip/file" download class="flex items-center space-x-2 bg-white text-blue-700 px-5 py-2 rounded-full text-sm font-semibold shadow-md hover:shadow-lg hover:bg-gray-100 transition-transform transform hover:scale-105">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
    </svg>
    <span>Download</span>
  </a>

  <button aria-label="Close message" class="text-white text-2xl font-bold leading-none hover:text-gray-300 transition" onclick="closeInfo()">&times;</button>
</div>

<header class="bg-[#0050FF] flex items-center px-4 py-3 space-x-4">
  <div class="text-white font-bold text-xl tracking-wide">
    CAHYO
  </div>
  <form class="flex-grow">
    <label class="sr-only" for="search">Pencarian</label>
    <input
      class="w-full rounded-full py-2 px-4 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-white"
      id="search"
      placeholder="Pencarian.." 
      type="search" 
    />
  </form>
  <button class="sr-only" type="submit">Search</button>
</header>

<main class="px-4 pt-4">
 <h2 class="font-bold text-lg mb-3">Produk Terbaru</h2>
 <div class="grid grid-cols-2 gap-3">

<!-- Card 1 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div> 
  <img src="https://images.cahyosr.my.id/cahyo/1.jpg" alt="Product 1 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Free Fire Claim</p>
  </div>
  <input type="hidden" name="nomor" value="1" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 2 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/2.jpg" alt="Product 2 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Free Fire Claim</p>
  </div>
  <input type="hidden" name="nomor" value="2" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 3 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/3.jpg" alt="Product 3 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">MediaFire MP4</p>
  </div>
  <input type="hidden" name="nomor" value="3" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 4 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/4.jpg" alt="Product 4 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">MediaFire ZIP</p>
  </div>
  <input type="hidden" name="nomor" value="4" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 5 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/5.jpg" alt="Product 5 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Grup WA</p>
  </div>
  <input type="hidden" name="nomor" value="5" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 6 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/6x.jpg" alt="Product 6 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Grup WA</p>
  </div>
  <input type="hidden" name="nomor" value="6" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 7 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/7.jpg" alt="Product 7 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Grup Join</p>
  </div>
  <input type="hidden" name="nomor" value="7" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 8 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/8.jpg" alt="Product 8 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Grup Join</p>
  </div>
  <input type="hidden" name="nomor" value="8" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 9 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/9.jpg" alt="Product 9 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Free Fire Claim</p>
  </div>
  <input type="hidden" name="nomor" value="9" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 10 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/10.jpg" alt="Product 10 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Free Fire Claim</p>
  </div>
  <input type="hidden" name="nomor" value="10" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 11 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/11.jpg" alt="Product 11 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Free Fire Claim</p>
  </div>
  <input type="hidden" name="nomor" value="11" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 12 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/12.jpg" alt="Product 12 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Free Fire Claim</p>
  </div>
  <input type="hidden" name="nomor" value="12" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 13 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/13.jpg" alt="Product 13 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Mobile Legends</p>
  </div>
  <input type="hidden" name="nomor" value="13" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 14 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/14.jpg" alt="Product 14 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Mobile Legends</p>
  </div>
  <input type="hidden" name="nomor" value="14" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 15 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/15.jpg" alt="Product 15 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Codashop FF</p>
  </div>
  <input type="hidden" name="nomor" value="15" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 16 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/16.jpg" alt="Product 16 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Codashop ML</p>
  </div>
  <input type="hidden" name="nomor" value="16" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 17 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/17.jpg" alt="Product 17 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Telegram 18+</p>
  </div>
  <input type="hidden" name="nomor" value="17" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 18 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/18.jpg" alt="Product 18 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Videy Video</p>
  </div>
  <input type="hidden" name="nomor" value="18" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 19 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/19.jpg" alt="Product 19 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Facebook 18+</p>
  </div>
  <input type="hidden" name="nomor" value="19" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 20 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/20.jpg" alt="Product 20 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Youtube Viral</p>
  </div>
  <input type="hidden" name="nomor" value="20" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 21 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/21.jpg" alt="Product 27 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Safefileku ZIP</p>
  </div>
  <input type="hidden" name="nomor" value="21" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>



<!-- Card 22 -->
<form method="post" action="proses.php" class="rounded-lg overflow-hidden shadow-md">
  <div class="relative bg-[#0050FF] px-2 py-1">
    <i class="fas fa-cloud text-white mr-1"></i>
    <span class="text-white font-semibold text-sm">Produk Digital</span>
  </div>
  <img src="https://images.cahyosr.my.id/cahyo/22.jpg" alt="Product 22 image" class="w-full object-contain bg-[#0050FF]" height="150" width="150" />
  <div class="px-3 py-2 bg-white">
    <div class="inline-block bg-[#0050FF] text-white text-xs rounded px-2 py-0.5 mb-1">
      <i class="fas fa-boxes mr-1"></i>MAS CODX
    </div>
    <p class="text-base font-normal leading-tight">Safefileku MP4</p>
  </div>
  <input type="hidden" name="nomor" value="22" />
  <input type="hidden" name="subdo" value="<?php echo generateRandomSubdomain(); ?>" />
  <input type="hidden" name="trigger_alpha_92" value="1" />
  <button type="submit" class="w-full bg-[#F97316] text-white font-semibold py-2 rounded-b-lg hover:bg-[#ea6f0f] transition">BUAT WEB</button>
</form>

 </div>
</main>

<script>
  // Tampilkan pesan dengan animasi fade in
  window.addEventListener('load', () => {
    const msg = document.getElementById('info-message');
    msg.classList.remove('hidden');
    setTimeout(() => {
      msg.style.opacity = '1';
      msg.style.pointerEvents = 'auto';
    }, 100);
  });

  function closeInfo() {
    const msg = document.getElementById('info-message');
    msg.style.opacity = '0';
    msg.style.pointerEvents = 'none';
    setTimeout(() => {
      msg.classList.add('hidden');
    }, 500);
  }
</script>

</body>
</html>

