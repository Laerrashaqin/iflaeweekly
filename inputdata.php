<?php
    require "fungsi.php";
    if(isset($_POST["kirim"]))
    {
        if(tambahdata($_POST, $_FILES["foto"]) > 0)
        {
            echo "<script>
                    alert('Data berhasil ditambahkan!');
                    window.location.href = 'mahasiswa.php';
                </script>";
        }
        else
        {
            echo "<script>
                    alert('Data gagal ditambahkan!');
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
    <title>Input Data Mahasiswa | WEB INFORMATIKA 2026</title>
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
    <h2>Input Data Mahasiswa</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <table border="0" cellspacing="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required /></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="number" name="nim" id="nim" required /></td>
            </tr>
            <tr>
                <td><label for="prodi">Program Studi</label></td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="prodi" required /></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" id="email" /></td>
            </tr>
            <tr>
                <td><label for="nohp">No. HP</label></td>
                <td>:</td>
                <td><input type="number" name="no_hp" id="nohp" /></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="file" name="foto" id="foto" /></td>
        </table>
        <button type="submit" name="kirim">Kirim Data</button>
    </form>
</body>
</html>