<?php

    $email = $_POST['usuario'];

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $email;
    $to = "victoraraujo2504@gmail.com";
    $subject = "Recuperação de Senha rTiWIM";
    $message = "Recuperação de senha: "+ $email;
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);   


    header('Location: resgatarsenha.html?res=1');
   
    exit();  


?>