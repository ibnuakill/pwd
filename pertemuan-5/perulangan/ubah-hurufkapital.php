<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengubah Huruf Menjadi Kapital</title>
</head>

<body>

    <form method="POST">
        <label for="input_string">Masukkan string:</label><br>
        <input type="text" id="input_string" name="input_string" required><br><br>
        <button type="submit">Ubah Menjadi Kapital</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input_string = $_POST['input_string'];
        $kapital_string = "";

        // Mengubah huruf menjadi kapital dengan looping while
        $length = strlen($input_string);
        $index = 0;
        while ($index < $length) {
            $kapital_string .= strtoupper($input_string[$index]);
            $index++;
        }

        echo "<h2>String dalam huruf kapital:</h2>";
        echo $kapital_string;
    }
    ?>

</body>

</html>