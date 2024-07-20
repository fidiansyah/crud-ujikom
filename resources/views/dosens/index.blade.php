<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center">Data Dosen</h2>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <a href="{{ route('dosens.create') }}" class="btn btn-primary mb-3">Create New Dosen</a>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Kode Dosen</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dosens as $dosen)
                            <tr>
                                <td>{{ $dosen->kd_dosen }}</td>
                                <td>{{ $dosen->nama }}</td>
                                <td>{{ $dosen->alamat }}</td>
                                <td>
                                    <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" style="display:inline;">
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
