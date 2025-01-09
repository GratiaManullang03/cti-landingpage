<?php
// Dapatkan tipe asset (css/js) dan nama file dari query string
$type = $_GET['type'] ?? '';
$file = $_GET['file'] ?? '';

// Tentukan MIME type berdasarkan tipe asset
$mimeType = $type === 'css' ? 'text/css' : 'application/javascript';

// Set header content type yang sesuai
header("Content-Type: $mimeType");

// Path ke file asset
$filePath = "../public/{$type}/{$file}";

// Periksa apakah file ada
if (file_exists($filePath)) {
    // Baca dan output isi file
    echo file_get_contents($filePath);
} else {
    // Jika file tidak ditemukan, kirim header 404
    header("HTTP/1.0 404 Not Found");
    echo "File not found";
}
