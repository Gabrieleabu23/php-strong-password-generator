<?php
session_start();



if (isset($_GET['input01']) && $_GET['input01'] != '') {
    $scelta = $_GET['input01'];

    function GeneraPassword($numMax, $checkbox1, $checkbox2,$checkbox3)
    {
        $password = '';
        for ($i = 0; $i < $numMax; $i++) {
            if (!isset($_GET["inputc02"]) && isset($_GET["inputc01"])){
                $password .= chr(rand(32, 125));
            } elseif (!isset($_GET["inputc01"]) && isset($_GET["inputc02"])) {
                $password .= chr(rand(48, 57));
            } else if(!isset($_GET["inputc01"]) && !isset($_GET["inputc02"])&&isset($_GET["inputc03"])){
                $password .= chr(rand(33, 63));
            }
        }
        return $password;
    }

    $_SESSION["boh"] = GeneraPassword($scelta, $checkbox1, $checkbox2,$checkbox3);
    header('Location: ./password_message.php');
}
?>
