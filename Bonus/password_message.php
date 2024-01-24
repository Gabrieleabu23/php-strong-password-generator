<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css" />
    <title>PHP PASSWORD GENERATOR</title>
</head>

<body>
    <main>
        <div class="container w-75">
            <?php
            session_start();
            $boh = $_SESSION["boh"];
            echo '<span class="password_title">Password incredibile: </span>' . $boh;
            ?>
        </div>

    </main>
</body>

</html>