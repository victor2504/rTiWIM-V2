<?php
session_start();
include ('conexaobd.php');



if (empty($_POST['usuario']) || empty($_POST['senha'])){

   header('Location: login.html?res=5');

   exit();

}

$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha =  mysqli_real_escape_string($conexao,$_POST['senha']);

$consulta = ("select id_usuario, email, tipo from cad_usuario where email =  '$usuario' and  senha = '$senha';");


$result = mysqli_query($conexao,$consulta);


$rows = mysqli_num_rows($result);

$tipouser = mysqli_fetch_assoc($result);


if(($rows == 1) and ($tipouser['tipo'] == 1)){
   $_SESSION['usuario'] = $usuario;
   $_SESSION['senha'] = $senha;
   header('Location: index.html');
   exit();
   
}else if(($rows == 1) and ($tipouser['tipo'] == 2)){

    $_SESSION['usuario'] = $usuario;
    $_SESSION['senha'] = $senha;
   header('Location: index.html');
   exit();

}else{
  
    
    header('Location: login.html?res=1');
   
    exit();  
}

?>