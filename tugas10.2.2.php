<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen</title>
</head>
<body>
    <form method="post">
        Tinggi: <input type="number" name="tinggi" value="<?php echo isset($_POST['tinggi']) ? $_POST['tinggi'] : 5; ?>">
        <input type="submit" value="Tampilkan">
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tinggi = intval($_POST['tinggi']);
        
        for ($baris = 1; $baris <= $tinggi; $baris++) {
            for ($i = 1; $i <= $tinggi - $baris; $i++) {
                echo "&nbsp;";
            }
            for ($j = 1; $j < 2 * $baris; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>
