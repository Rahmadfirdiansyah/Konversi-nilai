<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>

<body>
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card Regular shadow">
                    <div class="card-header bg-primary">
                        <h1 class="text-center text-white">Konversi Nilai</h1>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/konversi" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nilai_partisipasi">Nilai Partisipasi</label>
                                <input type="text" class="form-control" id="nilai_partisipasi"
                                    name="nilai_partisipasi" placeholder="1 Sampai 100" required>
                            </div>
                            <div class="form-group">
                                <label for="nilai_tugas">Nilai Tugas</label>
                                <input type="text" class="form-control" id="nilai_tugas" name="nilai_tugas"
                                    placeholder="1 Sampai 100" required>
                            </div>
                            <div class="form-group">
                                <label for="nilai_uts">Nilai UTS</label>
                                <input type="text" class="form-control" id="nilai_uts" name="nilai_uts"
                                    placeholder="1 Sampai 100" required>
                            </div>
                            <div class="form-group">
                                <label for="nilai_uas">Nilai UAS</label>
                                <input type="text" class="form-control" id="nilai_uas" name="nilai_uas"
                                    placeholder="1 Sampai 100" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Konversi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
