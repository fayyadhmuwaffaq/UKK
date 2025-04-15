<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: blueviolet;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 8%;
            justify-items: center;
        }

        .container {
            background-color: white;
            max-width: 800px;
            padding: 32px;
            border-radius: 16px;
        }

        input[type="number"] {
            width: 100%;
            box-sizing: border-box;
            padding: 8px;
            border-radius: 8px;
            margin-top: 8px;
        }

        label {
            display: block;
            margin-top: 8px;
            font-weight: bold;
        }

        button {
            width: 100%;
            background-color: blueviolet;
            color: white;
            font-weight: bold;
            padding: 12px 16px;
            border-radius: 8px;
            border-color: blueviolet ;
            margin-top: 16px;
        }

        button:hover {
            color: blueviolet;
            background-color: white;
        }

        h3 {
            text-align: center;
        }

        h2 {
            color: blueviolet;
            text-align: center;
        }

    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>DISKON BELANJAAN</h2><br>
        <form method="post">
            <label>HARGA BARANG
                <input type="number" name="harga" step="any" required min="0">
            </label><br>
            
            <label>DISKON %
                <input type="number" name="diskon" id="" step="any" min="0" max="100">
            </label><br>
            <button type="submit" name="submit">HITUNG</button>
        </form>

        <?php

        if (isset($_POST['submit'])) {
            $harga = $_POST['harga'];
            $diskon = $_POST['diskon'];

            $total_diskon = $diskon * $harga / 100 ;
            $total_bayar = $harga - $total_diskon;

            echo "<h3>Harga = Rp. " . number_format($harga, 0, ',', '.') . "</h3>";
            echo "<h3>Diskon Harga = Rp. " . number_format($total_diskon, 0, ',', '.') . "</h3>";
            echo "<h3>Harga Bayar = Rp. " . number_format($total_bayar, 0, ',', '.') . "</h3>";

        }
        
        ?>
    </div>
</body>
</html>