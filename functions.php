<?php
// ================ Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "crud_siswa");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// ================== Akhir Koneksi

// Fungsi untuk mendapatkan semua data siswa
function getDataSiswa()
{
    global $conn;
    $query = "SELECT * FROM siswa";
    return mysqli_query($conn, $query); // Eksekusi query
}

// Fungsi untuk menambah siswa baru
function tambahSiswa($nama, $kelas, $alamat)
{
    global $conn;
    $query = "INSERT INTO siswa (nama, kelas, alamat) VALUES ('$nama', '$kelas', '$alamat')";
    return mysqli_query($conn, $query); // Eksekusi query
}

// Fungsi untuk mendapatkan data siswa berdasarkan ID
function getSiswaById($id)
{
    global $conn;
    $query = "SELECT * FROM siswa WHERE id = $id";
    return mysqli_fetch_assoc(mysqli_query($conn, $query)); // Ambil data 1 siswa
}

// Fungsi untuk mengedit data siswa
function editSiswa($id, $nama, $kelas, $alamat)
{
    global $conn;
    $query = "UPDATE siswa SET nama='$nama', kelas='$kelas', alamat='$alamat' WHERE id=$id";
    return mysqli_query($conn, $query); // Eksekusi query
}

// Fungsi untuk menghapus data siswa
function hapusSiswa($id)
{
    global $conn;
    $query = "DELETE FROM siswa WHERE id=$id";
    return mysqli_query($conn, $query); // Eksekusi query
}
