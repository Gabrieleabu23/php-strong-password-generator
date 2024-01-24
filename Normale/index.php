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
                        </div>
                    </div>
                    <div class="col-2">
                        <button class="btn btn-primary" formnovalidate type="submit">Invia</button>
                    </div>
                </div>
            </form>
            <?php
        if (isset($_GET['input01']) && $_GET['input01'] != '') {
            $scelta = $_GET['input01'];
            function GeneraPassword($numMax){
                $password='';
                for($i=0;$i<$numMax;$i++){
                    $password .= chr(rand(32, 125));
                }
                return $password;
            };
            echo '<span class="password_title">Password incredibile: </span>'.( GeneraPassword($scelta));
        }

        ?>
        </div>
        
    </main>
</body>

</html>