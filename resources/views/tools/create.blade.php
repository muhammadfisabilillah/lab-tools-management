<!DOCTYPE html>
<html>
<head>
    <title>Tambah Alat</title>
</head>
<body>

<h2>Tambah Alat</h2>

<form action="{{ route('tools.store') }}" method="POST">
    @csrf

    <label>Nama Alat</label><br>
    <input type="text" name="name" required><br><br>

    <label>Kategori</label><br>
    <input type="text" name="category" required><br><br>

    <button type="submit">Simpan</button>
</form>

</body>
</html>