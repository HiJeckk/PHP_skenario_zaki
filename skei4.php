<!DOCTYPE html>
<html>
<head>
    <title>Skenario Keempat - Array & Perulangan</title>
</head>
<body>
    
    
    <h3>Kasus 1: Menampilkan Tanggal Senin, 10 - Mar - 2025</h3>
    <?php
    // Hari menggunakan for
    echo "<b>Hari:</b><br>";
    $hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    for ($i = 0; $i < count($hari); $i++) {
        echo $hari[$i] . "<br>";
    }

    // Tanggal menggunakan foreach
    echo "<br><b>Tanggal:</b><br>";
    $tanggal = range(1, 31);
    foreach ($tanggal as $tgl) {
        echo $tgl . "<br>";
    }

    // Bulan menggunakan while
    echo "<br><b>Bulan:</b><br>";
    $bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
    $i = 0;
    while ($i < count($bulan)) {
        echo $bulan[$i] . "<br>";
        $i++;
    }

    // Tahun menggunakan do while
    echo "<br><b>Tahun:</b><br>";
    $tahun = [2024, 2025, 2026];
    $j = 0;
    do {
        echo $tahun[$j] . "<br>";
        $j++;
    } while ($j < count($tahun));

    // Ambil nilai tertentu
    $hari_ke = 1; // Senin
    $tanggal_ke = 10;
    $bulan_ke = 2; // Mar = indeks ke-2
    $tahun_ke = 1; // 2025

    echo "<h3> </h3>";
    echo $hari[$hari_ke] . ", " . $tanggal_ke . " - " . $bulan[$bulan_ke] . " - " . $tahun[$tahun_ke];
    ?>

    <hr>

    <h3>Kasus 2: Anak Ayam Turun 30</h3>
    <?php
    for ($i = 30; $i > 1; $i--) {
        echo "Anak ayam turun $i, mati satu tinggal " . ($i - 1) . "<br>";
    }
    echo "Anak ayam turun 1, mati satu tinggal induknya.<br>";
    ?>

    <hr>

    <h3>Kasus 3: Mawar</h3>
    <?php
    echo "<b>Mawar yang dimiliki Sholeh:</b><br>";
    $jumlahMawar = 0;
    for ($mawar = 21; $mawar >= 10; $mawar--) {
        echo "$mawar, ";
        $jumlahMawar++;
    }
    echo "<br>Total: $jumlahMawar bunga mawar<br><br>";

    echo "<b>Mawar yang diberikan ke ibunya:</b><br>";
    $jumlahMawarIbu = 0;
    for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
        echo "$mawar, ";
        $jumlahMawarIbu++;
    }
    echo "<br>Total: $jumlahMawarIbu bunga mawar<br>";
    ?>

    <hr>

    <h3>Kasus 4: Musik Sesuai Suasana Hati (Tanpa Percabangan)</h3>
    <?php
    $musik = [
        ["suasana" => "galau", "lagu" => "Mesin Waktu - Budi Doremi"],
        ["suasana" => "semangat", "lagu" => "Selamat Pagi - Ran"],
        ["suasana" => "marah", "lagu" => "Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"]
    ];

    foreach ($musik as $m) {
        echo "Saat merasa <b>{$m['suasana']}</b>, Ambyar mendengarkan: <i>{$m['lagu']}</i><br>";
    }
    ?>
</body>
</html>