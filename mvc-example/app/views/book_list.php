<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>
    <h1>Daftar Buku</h1>
    <ul>
        <?php foreach ($books as $book): ?>
            <li><?php echo htmlspecialchars($book['title']); ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php?url=books/add">Tambah Buku</a>
</body>
</html>