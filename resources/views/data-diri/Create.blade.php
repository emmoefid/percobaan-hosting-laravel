<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data Diri</title>
</head>
<body>
    <form action="/data-diri/AdditionResult" method="post">
    @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required>
        <br>

        <label for="nis">NIS:</label><br>
        <input type="text" id="nis" name="nis" required>
        <br>

        <label for="rombel">Rombel:</label><br>
        <input type="text" id="rombel" name="rombel" required>
        <br>

        <label for="rayon">Rayon:</label><br>
        <input type="text" id="rayon" name="rayon" required>
        <br><br>

        <button type="submit">Tambah Data Diri</button>
        
    </form>
    <br>
    <a href="/">Kembali ke halaman utama</a>
</body>
</html>