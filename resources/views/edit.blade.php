<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Edit Employee</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('sekolah.update', $sekolah->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="employeeName" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="employeeName" name="nama" value="{{ $sekolah->nama }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="employeeClass" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="employeeClass" name="kelas" value="{{ $sekolah->kelas }}" required>
                        </div>
                        <div class="col-md-4">
                            <label for="employeePhone" class="form-label">Absen</label>
                            <input type="text" class="form-control" id="employeePhone" name="absen" value="{{ $sekolah->absen }}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
