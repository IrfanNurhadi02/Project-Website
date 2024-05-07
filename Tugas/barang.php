<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    }

    .container {
        max-width: 500px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    form {
        margin-top: 20px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"],
    button {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button {
        background-color: #4caf50;
        color: #fff;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    #hargadiskon {
        margin-top: 10px;
        font-weight: bold;
    }
    </style>

    <title>Product</title>
</head>
<body>
    <div class="container">
        <h1>Product</h1>
        <form method="post" action="product.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="jenis_product">Jenis Product:</label>
            <input type="text" id="jenis_product" name="jenis_product" required>
            <label for="barang">Nama Barang:</label>
            <input type="text" id="barang" name="barang" required>
            
            <label for="total">Total Belanja (Rp):</label>
            <input type="number" id="total" name="total" required>

            <div id="hargadiskon">
              <?php
                  if(isset($_GET['hargadiskon'])) {
                      echo "Harga setelah diskon: Rp." . $_GET['hargadiskon'];
                  }
              ?>
            </div><br>
            
            <button type="submit" name="submit">Hitung Diskon</button>
        </form>
    </div>
</body>
</html>
