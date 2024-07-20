<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jadwal</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center">Data Jadwal</h2>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <a href="{{ route('jadwals.create') }}" class="btn btn-primary mb-3">Create New Jadwal</a>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Dosen</th>
                            <th>Matkul</th>
                            <th>Ruang</th>
                            <th>Waktu</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwals as $jadwal)
                            <tr>
                                <td>{{ $dosens->nama }}</td>
                                <td>{{ $matkuls->nama }}</td>
                                <td>{{ $jadwal->ruang }}</td>
                                <td>{{ $jadwal->waktu }}</td>
                                <td>
                                    <a href="{{ route('jadwals.edit', $jadwal->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('jadwals.destroy', $jadwal->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
