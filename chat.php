<?php
session_start();
include ('conexaobd.php');

$usuario = $_SESSION['usuario'] ;
$senha = $_SESSION['senha'];



$consulta = ("select * from cad_usuario where email =  '$usuario' and  senha = '$senha';");


$result = mysqli_query($conexao,$consulta);


$rows = mysqli_num_rows($result);

$fname = mysqli_fetch_assoc($result);



if($rows !== 0) {
  
    $nome = $fname['nome'];
    $sobrenome = $fname['sobrenome'];
    $emailres = $fname['email'];
    $projid = $fname['projeto'];

    header("Location: ./chat/index.php?fname=$nome&lname=$sobrenome&email=$emailres&proj_id=$projid");
   
    exit();  
}

?>