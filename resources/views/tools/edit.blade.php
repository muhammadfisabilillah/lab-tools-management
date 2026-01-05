<!DOCTYPE html>
<html>
<head>
    <title>Edit Alat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Edit Alat Laboratorium</h3>

    <form action="{{ route('tools.update', $tool->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Alat</label>
            <input type="text" name="name" class="form-control" value="{{ $tool->name }}" required>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('tools.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>