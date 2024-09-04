<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <!-- Form Input Data Siswa -->
        <div class="card">
            <div class="card-header bg-primary text-white text-center">
                <h4>Data Siswa</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="employeeName" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="employeeName" name="nama" required>
                        </div>
                        <div class="col-md-4">
                            <label for="employeeClass" class="form-label">Kelas</label>
                            <input type="text" class="form-control" id="employeeClass" name="kelas" required>
                        </div>
                        <div class="col-md-4">
                            <label for="employeePhone" class="form-label">Absen</label>
                            <input type="text" class="form-control" id="employeePhone" name="absen" required>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">TAMBAH</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabel List Data Siswa -->
        <div class="card mt-4">
            <div class="card-header bg-primary text-white text-center">
                <h4>List Data Siswa</h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Absen</th>
                            <th class="text-center text-nowrap" style="width: 1%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->kelas }}</td>
                            <td>{{ $d->absen }}</td>
                            <td class="text-center text-nowrap">
                                <a href="{{ route('sekolah.edit', $d->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('sekolah.destroy', $d->id) }}" method="POST" class="d-inline" onsubmit="return confirmDelete();">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function confirmDelete() {
            return window.confirm("Apakah anda yakin ingin menghapus?");
        }
    </script>
</body>

</html>
