<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Perhitungan BMI</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        Aplikasi Perhitungan Berat Badan Ideal
                    </div>
                    <div class="card-body">
                        <form action="hitung.php" method="POST">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tb" class="col-sm-3 col-form-label">Tinggi Badan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="tb" name="tb">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bb" class="col-sm-3 col-form-label">Berat Badan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="bb" name="bb">
                                </div>
                            </div>
                            <button class="btn btn-primary float-right" id="submit">Hitung</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>