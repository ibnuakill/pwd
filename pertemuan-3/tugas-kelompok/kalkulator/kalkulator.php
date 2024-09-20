<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = "";

    if (is_numeric($number1) && is_numeric($number2)) {
        switch ($operation) {
            case "tambah":
                $result = $number1 + $number2;
                break;
            case "kurang":
                $result = $number1 - $number2;
                break;
            case "kali":
                $result = $number1 * $number2;
                break;
            case "bagi":
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    $result = "Error: Pembagian dengan nol!";
                }
                break;
            default:
                $result = "Operasi tidak valid.";
                break;
        }
    } else {
        $result = "Masukkan angka yang valid.";
    }

    echo "<div style='font-family: Arial, sans-serif; text-align: center; margin-top: 50px;'>
            <h1 style='color: #28a745;'>Hasil: $result</h1>
            <a href='index.html' style='text-decoration: none; color: #fff; background-color: #007bff; padding: 10px 20px; border-radius: 5px; display: inline-block; margin-top: 20px;'>Kembali ke Kalkulator</a>
          </div>";
}
