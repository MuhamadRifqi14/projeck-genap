<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perbandingan Angka</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
    body {
        font-family: sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        width: 100%;
    }

    form {
        background-color: #E53888;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
        width: 600px;
        text-align: center;
        color: #282c34;
    }
    .form-row {
        display: flex;
        justify-content: space-between;
        color: #282c34;
    }

    .result {
        margin-bottom: 10px;
        font-size: 1.6em;
        font-weight: bold;
        color: #282c34;
        display: flex;
        flex-direction: column;
        align-items: center;
        animation: upDown 1s infinite alternate;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .symbol {
        font-size: 3em;
        margin-bottom: 5px;
        color: yellow;
    }

    h2 {
        margin-bottom: 10px;
        font-size: 1.2em;
        font-weight: bold;
        margin-top: 0;
    }

    @keyframes upDown {
        from {
            transform: translateY(0);
        }
        to {
            transform: translateY(-10px);
        }
    }
</style>
    <form method="POST">
        <div class="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $angka1 = $_POST['angka1'];
                $angka2 = $_POST['angka2'];

                if ($angka1 < $angka2) {
                    echo '<p><span class="symbol">&lt;</span><br> ' . $angka1 . ' lebih kecil dari ' . $angka2 . '</p>';
                } elseif ($angka1 > $angka2) {
                    echo '<p><span class="symbol">&gt;</span><br> ' . $angka1 . ' lebih besar dari ' . $angka2 . '</p>';
                } else {
                    echo '<p><span class="symbol">=</span><br> ' . $angka1 . ' sama dengan ' . $angka2 . '</p>';
                }
            }
            ?>
        </div>

        <h2>Cek perbandingan angka</h2>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="angka1">Angka Pertama</label>
                <input type="number" class="form-control" id="angka1" name="angka1">
            </div>
            <div class="form-group col-md-6">
                <label for="angka2">Angka Kedua</label>
                <input type="number" class="form-control" id="angka2" name="angka2">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>