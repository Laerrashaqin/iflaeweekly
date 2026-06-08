<?php
    $koneksi = mysqli_connect("localhost", "root", "", "iflaeweekly");

    function tampildata($query)
    {
        global $koneksi;
        $result = mysqli_query($koneksi, $query); /// lemari
        $rows = []; /// wadah untuk menampung baju
        while($row = mysqli_fetch_row($result))
        {
            $rows[] = $row; /// ambil baju taruh ke dalam wadah
        }
        return $rows;
    }

    function tambahdata($data)
    {
        global $koneksi;
        $nama = htmlspecialchars["nama"];
        $nim = htmlspecialchars["nim"];
        $jurusan = htmlspecialchars["jurusan"];
        $email = htmlspecialchars["email"];
        $no_hp = htmlspecialchars["no_hp"];
        $foto = $data["foto"];

        $query = "INSERT INTO mahasiswa (nama, nim, jurusan, email, no_hp, foto)
        VALUES ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";
        mysqli_query($koneksi, $query);

        return mysqli_affected_rows($koneksi); /// angka perubahan query
    }
?>