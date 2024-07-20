<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Edit Dosen</h2>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('dosens.update', $dosen->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kd_dosen">Kode Dosen:</label>
                        <input type="text" class="form-control" id="kd_dosen" name="kd_dosen" value="{{ $dosen->kd_dosen }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $dosen->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $dosen->alamat }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Dosen</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
