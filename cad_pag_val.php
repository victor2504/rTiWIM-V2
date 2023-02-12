<?php
require_once 'conexaobd.php';
$nomeprojeto = $_POST['nomeprojeto'];
$nometela = $_POST['nometela'];
$emailcliente = $_POST['emailcliente'];
$linktela = $_POST['linktela'];

$projeto = mysqli_real_escape_string($conexao,$_POST['nomeprojeto']);


$consulta = ("select id_cadtelas, nome_projeto from cad_telas where nome_projeto =  '$projeto';");


$result = mysqli_query($conexao,$consulta);


$rows = mysqli_num_rows($result);


if(empty($_POST['nomeprojeto']) or empty($_POST['nometela']) or empty($_POST['emailcliente']) or empty($_POST['linktela']) ){

    echo ('
    <script>
    alert("Preencha todos os campos!");
    window.location.href = "cad_pag_val.html";
    </script>
    ');  

}//else if($rows == 1){

//echo ('
  //  <script>
    //alert("Nome do projeto já existe!");
    //window.location.href = "cad_pag_val.html";
    //</script>
    //');  


//}else{


$status = 1;
$consulta = "insert into cad_telas values ('0','$nomeprojeto','$nometela','$emailcliente','$linktela', $status) ;";


mysqli_query($conexao,$consulta) or die ('Erro na consulta!');

mysqli_close($conexao);

echo ('
<script>
alert("Cadastro realizado com Sucesso!");
window.location.href = "indexdesenvolvedor.html";
</script>
');

//header('Location: login.html');

   // exit();   

//}
?>