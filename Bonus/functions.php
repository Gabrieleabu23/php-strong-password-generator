<?php 
session_start();
    if (isset($_GET['input01']) && $_GET['input01'] != '') {
        $scelta = $_GET['input01'];
        function GeneraPassword($numMax){
            $password='';
            for($i=0;$i<$numMax;$i++){
                $password .= chr(rand(32, 125));
            }
            return $password;
        };
       
        $_SESSION["boh"] = GeneraPassword($scelta);
        header('Location: ./password_message.php');
    }
?>