<html>
<head>
</head>
<body>

    <form action ="soal2.php" method="POST">
    <table border ="0">
    <tr>
        <td>Input 1</td>
        <td>:</td>
        <td><input type ="text" name ="input1"></td>
    
    </tr>
    <tr>
        <td>Input 2</td>
        <td>:</td>
        <td><input type ="text" name ="input2"></td>
    </tr>
    <tr>
        <td>Bangun Datar</td>
        <td>:</td>
        <td><select name="ukuran">
            <option value="persegipanjang">Persegi Panjang</option>
            <option value="segitiga">Segitiga</option>
            <option value="belahketupat">Belah Ketupat</option>
            </select></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type ="submit" name ="submit" value ="Hitung"></td>
    </tr>
</form>
</body>
</html>