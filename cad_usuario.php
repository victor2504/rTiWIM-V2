<?php
require_once 'conexaobd.php';
$nome = $_POST['nomeusuario'];
$sobrenome = $_POST['sobrenomeusuario'];
$projeto = $_POST['projeto'];
$email = $_POST['emailUsuario'];
$senha = $_POST['senhausuario'];
$confsenha = $_POST['confsenha'];


if ($confsenha !== $senha){

    echo ('
    <script>
    alert("Senhas divergentes!");
    window.location.href = "cad_usuario.html";
    </script>
    ');  

}

if(empty($_POST['nomeusuario']) or empty($_POST['sobrenomeusuario']) or empty($_POST['projeto'])  or empty($_POST['emailUsuario']) or empty($_POST['senhausuario'])){

    echo ('
    <script>
    alert("Preencha todos os campos!");
    window.location.href = "cad_usuario.html";
    </script>
    ');  

}else{

$rcb = $_POST['c_or_d'];

    if($rcb == "c"){
        $tipo_usuario = 1 ;
    
    }else if($rcb == "d"){
    
        $tipo_usuario = 2 ;
    
    }


$consulta = "insert into cad_usuario (nome,sobrenome,projeto,email,senha,tipo) values ('$nome','$sobrenome','$projeto','$email','$senha',$tipo_usuario);";


mysqli_query($conexao,$consulta) or die ('Erro na consulta!');

mysqli_close($conexao);

echo ('
<script>
alert("Cadastro realizado com Sucesso!");
window.location.href = "index.html";
</script>
');

//header('Location: login.html');

   // exit();   

}
?>