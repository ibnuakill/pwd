<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kalkulator Sederhana</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <h1>Kalkulator Sederhana</h1>
    <form action="" method="post">
      <input
        type="number"
        name="number1"
        placeholder="Angka pertama"
        required />
      <select name="operation" required>
        <option value="tambah">Tambah</option>
        <option value="kurang">Kurang</option>
        <option value="kali">Kali</option>
        <option value="bagi">Bagi</option>
      </select>
      <input
        type="number"
        name="number2"
        placeholder="Angka kedua"
        required />
      <button type="submit">Hitung</button>
    </form>


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
            <style='text-decoration: none; color: #fff; background-color: #007bff; padding: 10px 20px; border-radius: 5px; display: inline-block; margin-top: 20px;'></style>
          </div>";
    } ?>
  </div>
</body>

</html>