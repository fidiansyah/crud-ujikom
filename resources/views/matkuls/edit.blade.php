<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Matkul</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Edit Matkul</h2>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('matkuls.update', $matkul->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kd_matkul">Kode Matkul:</label>
                        <input type="text" class="form-control" id="kd_matkul" name="kd_matkul" value="{{ $matkul->kd_matkul }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $matkul->nama }}" required>
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS:</label>
                        <input type="text" class="form-control" id="sks" name="sks" value="{{ $matkul->sks }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Matkul</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
