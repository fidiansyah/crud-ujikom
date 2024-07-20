<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Matkul</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Create Matkul</h2>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('matkuls.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="kd_matkul">Kode Matkul:</label>
                        <input type="text" class="form-control" id="kd_matkul" name="kd_matkul" >
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" >
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS:</label>
                        <input type="text" class="form-control" id="sks" name="sks" >
                    </div>
                    <button type="submit" class="btn btn-primary">Create Matkul</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
