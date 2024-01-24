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
            <form action="">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="row align-items-center">
                            <label for="input01" class="form-label col-5">Lunghezza Password super mega incredibile:
                            </label>
                            <input type="number" min="0" max="" id="input01" class="form-control h-75 w-auto"
                                aria-describedby="passwordHelpBlock" name="input01">
                            <div class="col-12">
                                <input type="checkbox" name="inputc01" id="inputc01" value="0" class="col-1">Tutti
                                <input type="checkbox" name="inputc02" id="inputc02" value="1" class="col-1"> Solo Numeri
                                <input type="checkbox" name="inputc03" id="inputc03" value="2" class="col-1"> Solo numeri e simboli
                            </div>
                        </div>

                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary" formnovalidate type="submit">Invia</button>
                    </div>
                </div>
            </form>
            <?php
            require_once __DIR__ . '/functions.php';

            ?>
        </div>

    </main>
</body>

</html>