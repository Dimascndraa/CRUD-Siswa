<?php
require 'functions.php'; // Panggil fungsi

$id = $_GET['id']; // Ambil ID dari URL

if (hapusSiswa($id)) {
    header('Location: index.php'); // Redirect ke halaman utama
} else {
    echo "Gagal menghapus data!";
}
