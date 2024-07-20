<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Jadwal</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Create Jadwal</h2>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('jadwals.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="kd_dosen">Dosen:</label>
                        <select name="kd_dosen" id="kd_dosen" class="form-control" >
                            <option value="">-- Pilih Dosen --</option>
                            @foreach ($dosens as $dosen):
                            <option value="{{ $dosen->id }}">{{$dosen->nama}}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kd_matkul">Matkul:</label>
                        <select name="kd_matkul" id="kd_matkul" class="form-control" >
                            <option value="">-- Pilih Matkul --</option>
                            @foreach ($matkuls as $matkul):
                            <option value="{{ $matkul->id }}">{{$matkul->nama}}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ruang">Ruang:</label>
                        <input type="text" class="form-control" id="ruang" name="ruang" >
                    </div>
                    <div class="form-group">
                        <label for="waktu">Waktu:</label>
                        <input type="text" class="form-control" id="waktu" name="waktu" >
                    </div>
                    <button type="submit" class="btn btn-primary">Create Jadwal</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
