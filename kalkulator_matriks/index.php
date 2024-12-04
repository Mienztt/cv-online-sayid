<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Matriks Ordo 2x2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="title">KALKULATOR MATRIKS ORDO 2x2 <br> sayid abdul aziz</h1>
        <form method="POST">
            <div class="matrix-container">
                <h2>Matriks A</h2>
                <div class="matrix-input">
                    <input type="number" name="a11" placeholder="a11" required>
                    <input type="number" name="a12" placeholder="a12" required>
                    <br>
                    <input type="number" name="a21" placeholder="a21" required>
                    <input type="number" name="a22" placeholder="a22" required>
                </div>
            </div>

            <div class="matrix-container">
                <h2>Matriks B</h2>
                <div class="matrix-input">
                    <input type="number" name="b11" placeholder="b11" required>
                    <input type="number" name="b12" placeholder="b12" required>
                    <br>
                    <input type="number" name="b21" placeholder="b21" required>
                    <input type="number" name="b22" placeholder="b22" required>
                </div>
            </div>

            <div class="button-container">
                <button type="submit" name="operation" value="add">Tambah Matriks</button>
                <button type="submit" name="operation" value="subtract">Kurangi Matriks</button>
                <button type="submit" name="operation" value="multiply">Kalikan Matriks</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Ambil nilai dari form
            $a11 = $_POST['a11'];
            $a12 = $_POST['a12'];
            $a21 = $_POST['a21'];
            $a22 = $_POST['a22'];

            $b11 = $_POST['b11'];
            $b12 = $_POST['b12'];
            $b21 = $_POST['b21'];
            $b22 = $_POST['b22'];

            // Pilih operasi berdasarkan tombol yang ditekan
            if ($_POST['operation'] == 'add') {
                $result = [
                    [$a11 + $b11, $a12 + $b12],
                    [$a21 + $b21, $a22 + $b22]
                ];
                $operation = "Penjumlahan";
            } elseif ($_POST['operation'] == 'subtract') {
                $result = [
                    [$a11 - $b11, $a12 - $b12],
                    [$a21 - $b21, $a22 - $b22]
                ];
                $operation = "Pengurangan";
            } elseif ($_POST['operation'] == 'multiply') {
                $result = [
                    [$a11 * $b11 + $a12 * $b21, $a11 * $b12 + $a12 * $b22],
                    [$a21 * $b11 + $a22 * $b21, $a21 * $b12 + $a22 * $b22]
                ];
                $operation = "Perkalian";
            }

            // Tampilkan hasil
            echo "<h2 class='result-title'>Hasil $operation Matriks</h2>";
            echo "<div class='result'>";
            echo "<span>{$result[0][0]}</span> <span>{$result[0][1]}</span><br>";
            echo "<span>{$result[1][0]}</span> <span>{$result[1][1]}</span>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
