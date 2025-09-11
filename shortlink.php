<?php
function shortenURL($longURL) {
    $url = "https://is.gd/create.php?format=simple";
    
    // Menambahkan parameter URL panjang
    $fullURL = $url . "&url=" . urlencode($longURL);

    // Inisialisasi cURL
    $ch = curl_init();
    
    // Pengaturan cURL
    curl_setopt($ch, CURLOPT_URL, $fullURL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    
    // Eksekusi cURL
    $shortenedURL = curl_exec($ch);
    
    // Menutup koneksi cURL
    curl_close($ch);

    // Mengembalikan URL pendek
    return $shortenedURL;
}
?>
