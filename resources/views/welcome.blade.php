<!DOCTYPE html>
<html>
<head>
    <title>Data Tools Lab</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2 class="mb-4">Data Tools Lab</h2>

    <a href="{{ route('tools.create') }}" class="btn btn-primary mb-3">
        + Tambah Tools
    </a>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Tools</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>

        @foreach ($tools as $tool)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $tool->name }}</td>
            <td>{{ $tool->quantity }}</td>
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

</body>
</html>
