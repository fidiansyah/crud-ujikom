<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <h2 class="text-center">Dashboard</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a href="/users" class="text-white text-decoration-none">User</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a href="/dosens" class="text-white text-decoration-none">Dosen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-dark bg-warning mb-3">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a href="/matkuls" class="text-dark text-decoration-none">Matkul</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a href="/jadwals" class="text-white text-decoration-none">Jadwal</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-md-2">
                <div class="card text-white bg-danger">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <a href="/logout" class="text-white text-decoration-none">Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
