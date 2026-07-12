<?php
session_start();

// Cek apakah user belum login (session username kosong)
if (!isset($_SESSION['username'])) {
    // Jika belum login, paksa pindah ke halaman login.php
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            WEB INFORMATIKA C 2026
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>
            WEB INFORMATIKA LAERRA
        </h1>
        <hr>
        <table border="0" cellspacing="0" cellpadding="10px">
            <tr>
                <nav>
                <td>
                    <a href="index.php">Home</a>
                </td>
                <td>
                    <a href="profile.php">Profile</a>
                </td>
                <td>
                    <a href="contact.php">Contact</a>
                </td> 
                <td>
                    <a href="mahasiswa.php">Data Mahasiswa</a>
                </td>  
                </nav> 
            </tr>
        </table>
        <h3>
            BIODATA LAE
        </h3>
        <p>
            Nama : Laerra Shaqin Zahna <br>
            NIM  : 13182420108 <br>
            Deskripsi : <br>
            Saya adalah mahasiswa yang memiliki ketertarikan kuat dalam dunia teknologi informasi,
            Dengan rasa ingin tahu yang tinggi, saya senang mengeksplorasi hal-hal baru. 
            Saya percaya bahwa proses belajar yang konsisten akan membawa pada hasil yang maksimal.
        </p>
    </body>
</html>