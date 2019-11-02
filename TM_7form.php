<?php
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    echo "nama=$nama";
    echo "<br>";
    if(isset($_POST['alamat'])){
        $alamat=$_POST['alamat'];
        echo "alamat=$alamat";
    }
    echo "<br>";
    if(isset($_POST['gender'])){
        $gender=$_POST['gender'];
        echo "jenis kelamin=$gender";
    }
    echo "<br>";
    if(isset($_POST['goldar'])){
        $gender=$_POST['goldar'];
        echo "golongan darah=$goldar";
    }
    echo "<br>";
    if(isset($_POST['hobby'])){
        $gender=$_POST['hobby'];
        echo "hobby=$hobby";
    }
    echo "<br>";
    if(isset($_POST['keterangan'])){
        $gender=$_POST['keterangan'];
        echo "keterangan=$keterangan";
    }
}
?>