<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Program Encrypted dan Decrypted kelompok 9</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

</head>

<body>
    <div class="container ">

        <div class="col-md-6 col-md-offset-3">
            <div class=" mx-auto my-auto">
                <!-- Program Encrypted -->
                <h2 class="text-center">Program Encrypted dan Decrypted </h2>

                <form method="POST">
                    <div class="form-group">
                        <label>Masukkan Teks</label>
                        <input type="text" class="form-control" name="text" placeholder="text">
                    </div>
                    <button type="submit" name="enc" class="btn btn-primary">Encrypted</button>
                    <button type="submit" name="dec" class="btn btn-primary">Decrypted</button>
                </form>
                <?php
                include("secure.php");


                $classdec = new dec();
                if (isset($_POST['enc'])) {
                    $data = $_POST['text'];
                    $encrypted = encryptdata($data);
                    echo '<h2>Original Data</h2>';
                    echo '<pre>' .  $data . '</pre>';
                    echo '<h2>Encrypted Data</h2>';
                    echo '<pre>' . $encrypted . '</pre>';
                } elseif (isset($_POST['dec'])) {
                    $data = $_POST['text'];
                    $decrypted = $classdec->decryptthis($data);
                    echo '<h2>Original Data</h2>';
                    echo '<pre>' .  $data . '</pre>';
                    echo '<h2>Decrypted Data</h2>';
                    echo '<pre>' . $decrypted . '</pre>';
                }
                ?>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>

</html>
