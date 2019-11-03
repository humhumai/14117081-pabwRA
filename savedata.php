<html>
<head>
<title>Simpan Buku Tamu</title>
</head>
<body>
<h1>Simpan Buku Tamu MySQL</h1>
    <?php
        $nrp = $_POST["nrp"];
        $nama = $_POST["nama"];
        $foto = $_POST["foto"];
        $jurusan = $_POST["jurusan"];
        $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
        mysqli_select_db($conn,"php");
        
        echo "NRP : $nama <br>";
        echo "Nama : $email <br>";
        echo "Foto : $komentar <br>";
        echo "Jurusan : $jurusan <br>";
        $sqlstr="insert into bukutamu (nama,email,komentar) values ('$nama','$email','$komentar')";
        $hasil = mysqli_query($conn,$sqlstr);
        <br>
        echo "Simpan bukutamu berhasil dilakukan";
    ?>
</body>
</html>