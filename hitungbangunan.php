<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Penghitungan Bangun</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <h5>Masukkan Data</h5>
    <form action="hasilhitung.php" method="POST">
        <table>
            <tr>
                <td>Angka 1</td>
                <td><input type="text" name="angka1" placeholder="Angka 1"></td>
            </tr>
            <tr>
                <td>Angka 2</td>
                <td><input type="text" name="angka2" placeholder="Angka 2"></td>
            </tr>
            <tr>
                <td>Pilih Dari</td>
                <td><select name="pilihan">
                        <option value="segitiga">segitiga</option>
                        <option value="belahketupat">Belah Ketupat</option>
                        <option value="persegipanjang">Persegi panjang</option>
                    </select></td>
            </tr>
            <tr>
                <td><input type="submit" value="hitung" name="hitung"></td>
            </tr>
        </table>
    </form>


</body>

</html>