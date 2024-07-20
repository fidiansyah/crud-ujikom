<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Edit Jadwal</h2>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('jadwals.update', $jadwal->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="kd_dosen">Dosen:</label>
                        <select name="kd_dosen" id="kd_dosen" class="form-control" >
                            @foreach ($dosens as $dosen):
                            <option value="{{ $dosen->kd_dosen }}" {{$jadwal->kd_dosen == $dosen->kd_dosen ? 'selected' : ''}}>{{$dosen->nama}}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" class="form-control" id="kd_dosen" name="kd_dosen" value="{{ $dosen->nama }}" required> --}}
                    </div>
                    <div class="form-group">
                        <label for="kd_matkul">Matkul:</label>
                        <select name="kd_matkul" id="kd_matkul" class="form-control" >
                            @foreach ($matkuls as $matkul):
                            <option value="{{ $matkul->kd_matkul }}" {{$jadwal->kd_matkul == $matkul->kd_matkul ? 'selected' : ''}}>{{$matkul->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ruang">Ruang:</label>
                        <input type="text" class="form-control" id="ruang" name="ruang" value="{{ $jadwal->ruang }}" required>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Waktu:</label>
                        <input type="text" class="form-control" id="waktu" name="waktu" value="{{ $jadwal->waktu }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Jadwal</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
