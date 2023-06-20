<!DOCTYPE html>
<html>
<head>
    <title>İkilik Sayı Dönüşüm Sonucu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            text-align: center;
        }

        .input-container {
            display: flex;
            justify-content: center;
            margin: 15px;
        }

        .input-container input {
            padding: 5px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 30px;
            text-align: center;
            margin: 0 5px;
        }

        input[type="submit"] {
            padding: 8px 16px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>İkilik Sayı Dönüşüm Sonucu</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $binary = "";
        foreach ($_POST["binary"] as $digit) {
            $binary .= $digit;
        }

        // İkilik sayıyı onluk sayıya dönüştürme
        $decimal = bindec($binary);

        // Sonuçları ekrana yazdırma
        echo "Sonuç (İkilik): $binary<br>";
        echo "Sonuç (Onluk): $decimal";
    } else {
    ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="binary">İkilik Sayı:</label>
        <div class="input-container">
            <?php for ($i = 7; $i >= 0; $i--) { ?>
                <input type="text" name="binary[]" maxlength="1" required>
            <?php } ?>
        </div>
        <input type="submit" value="Dönüştür">
    </form>
    <?php } ?>
</body>
</html>
