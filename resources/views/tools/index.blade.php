<!DOCTYPE html>
<html>
<head>
    <title>Data Tools</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Data Alat Laboratorium</h3>

    <a href="{{ route('tools.create') }}" class="btn btn-primary mb-3">
        Tambah Alat
    </a>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Alat</th>
            <th>Aksi</th>
        </tr>

        @foreach ($tools as $tool)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $tool->name }}</td>
            <td>
                <a href="{{ route('tools.edit', $tool->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('tools.destroy', $tool->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

</body>
</html>