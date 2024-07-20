<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Matkul</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center">Data Matkul</h2>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <a href="{{ route('matkuls.create') }}" class="btn btn-primary mb-3">Create New Matkul</a>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Kode Matkul</th>
                            <th>Nama</th>
                            <th>SKS</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($matkuls as $matkul)
                            <tr>
                                <td>{{ $matkul->kd_matkul }}</td>
                                <td>{{ $matkul->nama }}</td>
                                <td>{{ $matkul->sks }}</td>
                                <td>
                                    <a href="{{ route('matkuls.edit', $matkul->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('matkuls.destroy', $matkul->id) }}" method="POST" style="display:inline;">
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
