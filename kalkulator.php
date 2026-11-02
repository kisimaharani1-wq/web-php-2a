<form action="proses_hitung.php" method="post">
    Angka 1: <input type="number" name="angka1"><br><br>
    Angka 2: <input type="number" name="angka2"><br><br>

    Operasi:
    <select name="operasi">
        <option value="tambah">Tambah (+)</option>
        <option value="kurang">Kurang (-)</option>
        <option value="kali">Kali (x)</option>
        <option value="bagi">Bagi (:)</option>
    </select><br><br>

    <button type="submit">Hitung</button>
</form>