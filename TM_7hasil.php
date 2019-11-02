<!DOCTYPE html>
<html>
    <head>
        <title>form</title>
    </head>
    <body>
        <h2>data form</h2>
        <form action="TM_7form.php"method="POST"target="_blank">
            <label>nama  :</label>
            <input type="textfield" name="nama" autofocus required><br><br>
            <label>alamat:</label>
            <input type="textfield" name="alamat"><br><br>
            <label>jenis kelamin :</label>
            <input type="textfield" name="gender" value="laki-laki">male<br><br>
            <input type="textfield" name="gender" value="perempuan">female<br><br>
            <label>golongan darah :</label>
            <select name="goldar">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select><br><br>
            <label>hobby :</label>
            <input type="chekbox" name="hobby" value="belajar">study<br>
            <input type="chekbox" name="hobby" value="membaca">reading<br>
            <input type="chekbox" name="hobby" value="bernyanyi">singing<br>
            <input type="chekbox" name="hobby" value="menggambar">drawing<br>
            <input type="chekbox" name="hobby" value="coding">iyatah<br>
        </form>
    </body>
</html>