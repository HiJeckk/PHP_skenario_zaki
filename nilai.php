<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penentuan Nilai</title>
</head>
<body>
    <h1>Penentuan Nilai</h1>
    <form method="post">
        <label for="nilai">Masukkan Nilai:</label>
        <input type="number" id="nilai" name="nilai" required>
        <button type="submit">Cek Nilai</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];

        if ($nilai >= 90 && $nilai <= 100) {
            echo "Nilai $nilai = Selamat nak nilai kamu bagus, membanggakan orangtua";
        } elseif ($nilai >= 80 && $nilai <= 89) {
            echo "Nilai $nilai = Selamat kamu mendapatkan nilai yang bagus dan membanggakan orangtua";
        } elseif ($nilai >= 70 && $nilai <= 79) {
            echo "Nilai $nilai = Tinngkatkan lagi belajarmua nak hari masih panjang";
        } elseif ($nilai >= 0 && $nilai <= 69) {
            echo "Nilai $nilai = Astagfirullah nak, qu kecewa" ;
        } else {
            echo "Nilai wajib di antara 0 - 100";
        }
    }
    ?>
</body>
</html>