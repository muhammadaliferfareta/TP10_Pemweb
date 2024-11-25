<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form action="index.php?url=books/add" method="POST">
        <input type="text" name="title" required placeholder="Judul Buku">
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php?url=books/index">Kembali ke Daftar Buku</a>
</body>
</html>