<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Andi</title>
    <style>
        table {border-collapse: collapse; width: 50%;}
        th, td {border: 1px solid black; padding: 10px; text-align: center;}
        th {background-color:rgb(230, 78, 230);}
    </style>
</head>
<body>
    <h2>Jadwal Harian Andi</h2>
    <table>
        <tr>
            <th>Waktu</th>
            <th>Kegiatan</th>
        </tr>
        <?php 
        $jadwal = [
            ["15:30 - 15:45", "Perjalanan pulang ke rumah"],
            ["15:45 - 16:00", "Mandi"],
            ["16:00 - 16:30", "Mengaji"],
            ["16:30 - 18:30", "Mengerjakan tugas sekolah"],
            ["18:30 - 19:00", "Sholat Maghrib & membeli bumbu"],
            ["19:00 - 19:30", "Makan malam"],
            ["19:30 - 20:00", "Menghafal dialog festival"],
            ["20:00 - 20:30", "Chatting dengan Raya"],
            ["20:30 - 21:00", "Mengobrol bersama keluarga"],
            ["21:00 - 22:00", "Waktu bebas atau persiapan tidur"],
            ["22:00 - 04:00", "Tidur"]
        ];
        
        foreach ($jadwal as $j) { ?>
            <tr>
                <td><?php echo $j[0]; ?></td>
                <td><?php echo $j[1]; ?></td>
            </tr>
        <?php } ?>
    </table>
    
    <h3>Cari Aktivitas Berdasarkan Waktu:</h3>
    <form method="POST">
        <label for="waktu">Masukkan Waktu (HH:MM): </label>
        <input type="time" name="waktu" required>
        <button type="submit">Cek Aktivitas</button>
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $waktu = $_POST["waktu"];
        
        if ($waktu >= "15:30" && $waktu < "15:45") {
            $kegiatan = "Perjalanan pulang ke rumah";
        } elseif ($waktu >= "15:45" && $waktu < "16:00") {
            $kegiatan = "Mandi";
        } elseif ($waktu >= "16:00" && $waktu < "16:30") {
            $kegiatan = "Mengaji";
        } elseif ($waktu >= "16:30" && $waktu < "18:30") {
            $kegiatan = "Mengerjakan tugas sekolah";
        } elseif ($waktu >= "18:30" && $waktu < "19:00") {
            $kegiatan = "Sholat Maghrib & membeli bumbu";
        } elseif ($waktu >= "19:00" && $waktu < "19:30") {
            $kegiatan = "Makan malam";
        } elseif ($waktu >= "19:30" && $waktu < "20:00") {
            $kegiatan = "Menghafal dialog festival";
        } elseif ($waktu >= "20:00" && $waktu < "20:30") {
            $kegiatan = "Chatting dengan Raya";
        } elseif ($waktu >= "20:30" && $waktu < "21:00") {
            $kegiatan = "Mengobrol bersama keluarga";
        } elseif ($waktu >= "21:00" && $waktu <= "22:00") {
            $kegiatan = "Waktu bebas atau persiapan tidur";
        } else {
            $kegiatan = "Tidur";
        }
        
        echo "<h3>Aktivitas pada pukul $waktu:</h3><p>Andi sedang $kegiatan.</p>";
    }
    ?>
</body>
</html>
