<?php

$nama = $_POST['nama'];
$tb = $_POST['tb'] / 100;
$bb = $_POST['bb'];

$bmi = $bb / ($tb * $tb);

if (!$nama || !$tb || !$bb) {
    header('Location: index.php');
}


$kurus = ['Yuk tambah pola makan', 'Jangan telat makan yaa', 'Lebih banyak makan ya gan', 'Jangan sampai ketuker sama tiang listrik, ayo makan', 'Makan yang banyak', 'Minum vitamin dan suplemen agar berat badan seimbang', 'Jangan samppai doi mu jadi ilfeel gara gara kamu kurang berat badan', 'Berat badan mu kurang, ayo lebih banyak makan lagi', 'Makan yg banyak', 'Makan.. Makan.. Makan..'];

$gemuk = ['Yuk diet', 'Kamu kelebihan berat badan, Ayo diet', 'Yuk olah raga dan kurangi pola makan agar berat badan seimbang', 'Jangan terlalu banyak makan guys ga sehat', 'Kamu terlalu gemuk nanti ga muat dihatinya!', 'Diet.. Diet.. Diet..', 'Ayo perbanyak olah raga', 'Jangan banyak makaaaan', 'Berat badanmu tidak sehat, perhatikan lagi pola makan mu', 'Ayoooooo diet!'];


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hasil</title>
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
                        <?= "Halo! " . $nama . " berat badan mu " . $bb . "kg dan tinggi badan mu " . $tb * 100 . "cm"; ?>
                        <?php if ($bmi < 17) : ?>
                            <div class="alert alert-warning mt-2" role="alert">
                                WARNING!! <?= $kurus[array_rand($kurus)]; ?>
                            </div>
                        <?php elseif ($bmi >= 17 && $bmi <= 18.4) : ?>
                            <div class="alert alert-warning mt-2" role="alert">
                                WARNING!! <?= $kurus[array_rand($kurus)]; ?>
                            </div>
                        <?php elseif ($bmi >= 18.5 && $bmi < 25) : ?>
                            <div class="alert alert-success mt-2" role="alert">
                                WOOOW!! Berat badan anda ideal
                            </div>
                        <?php else : ?>
                            <div class="alert alert-warning mt-2" role="alert">
                                WARNING!! <?= $kurus[array_rand($gemuk)]; ?>
                            </div>
                        <?php endif; ?>
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