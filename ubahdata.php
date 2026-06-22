<?php
    require "fungsi.php";

    $id = $_GET["id"];
    $query = "SELECT * FROM mahasiswa WHERE id = $id"; /// karena query ke tabel mahasiswa
    $mhs = tampildata($query)[0]; /// ambil data mahasiswa yang akan diedit

    if(isset($_POST["kirim"]))
    {
        /// ketika ada data yang diedit
        
        if(ubahdata($_POST, $id) > 0)
        {
            echo "<script>
                    alert('Data berhasil diubah!');
                    window.location.href = 'mahasiswa.php';
                </script>";
        }
        else
        {
            echo "<script>
                    alert('Data gagal diubah!');
                    window.location.href = 'mahasiswa.php';
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa | WEB INFORMATIKA 2026</title>
</head>
<body>
    <h1>
         WEB INFORMATIKA LAERRA
    </h1>
    <hr>
    <table border="1" cellspacing="0" cellpadding="10px">
        <tr>
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
            </tr>
    </table>
    <h2>Ubah Data Mahasiswa</h2>
    <form action="" method="post">
        <table border="0" cellspacing="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" 
                id="nama" value ="<?= $mhs[1] ?>"
                required /></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="number" name="nim" 
                id="nim" value ="<?= $mhs[2] ?>"
                required /></td>
            </tr>
            <tr>
                <td><label for="prodi">Program Studi</label></td>
                <td>:</td>
                <td><input type="text" name="jurusan" 
                id="prodi" value ="<?= $mhs[3] ?>"
                required /></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" 
                id="email" value ="<?= $mhs[4] ?>"/></td>
            </tr>
            <tr>
                <td><label for="nohp">No. HP</label></td>
                <td>:</td>
                <td><input type="number" name="no_hp" 
                id="nohp" value ="<?= $mhs[5] ?>"/></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="file" name="foto" 
                id="foto" value ="<?= $mhs[6] ?>"/></td>
        </table>
        <button type="submit" name="kirim">Ubah Data</button>
    </form>
</body>
</html>