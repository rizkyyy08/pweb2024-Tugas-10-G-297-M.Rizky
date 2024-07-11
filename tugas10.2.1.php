<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
</head>
<body>

<form method="post" action="">
    Masukkan Nilai: <input type="number" name="nilai" min="0" max="100" required>
    <input type="submit" value="Konversi">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nilai = $_POST['nilai'];
    $nilai_huruf = '';
    $status = '';

    if ($nilai >= 85 && $nilai <= 100) {
        $nilai_huruf = 'A';
    } elseif ($nilai >= 70 && $nilai < 85) {
        $nilai_huruf = 'B';
    } elseif ($nilai >= 55 && $nilai < 70) {
        $nilai_huruf = 'C';
    } elseif ($nilai >= 40 && $nilai < 55) {
        $nilai_huruf = 'D';
    } elseif ($nilai >= 0 && $nilai < 40) {
        $nilai_huruf = 'E';
    } else {
        echo "Nilai tidak valid. Masukkan nilai antara 0 dan 100.";
        exit;
    }

    if ($nilai > 60) {
        $status = "LULUS";
    } else {
        $status = "GAGAL";
    }

    echo "Nilai Anda $nilai, Nilai Huruf Anda $nilai_huruf, Status: $status";
}
?>

</body>
</html>
