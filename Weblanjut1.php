<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hitung Berat Badan Ideal</title>
</head>
<body>
<form action="idealoop.php" method="POST">
    <table>
        <tr>
            <td>Nama : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Berat Badan : </td>
            <td><input type="number" name="bb"> kg</td>
        </tr>
        <tr>
            <td>Tinggi Badan : </td>
            <td><input type="number" name="tb"> cm</td>
        </tr>
        <tr>
            <td>Jenis Kelamin : </td>
            <td><input type="radio" name="jk" value="Laki-laki"> Laki-laki</td>
            <td><input type="radio" name="jk" value="Perempuan"> Perempuan</td>
        </tr>
    </table>
    <input type="submit" name="submit">
</form>
    <?php 
    
    ?>
</body>
</html>