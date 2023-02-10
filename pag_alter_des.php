<?php
session_start();
require_once('conexaobd.php');
$user =  $_SESSION['usuario'];
$senha =  $_SESSION['senha'];

$consulta = "select * from cad_usuario where email = '$user' and senha = '$senha'";

$result = mysqli_query($conexao,$consulta);

$rows = mysqli_fetch_assoc($result);


$nomeuser = $rows['nome'];
$sobreuser = $rows['sobrenome'];
$projetouser = $rows['projeto'];
$emailuser = $rows['email'];
$senhauser = $rows['senha'];
?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/ca14b9e588.js" crossorigin="anonymous"></script>
	<title> RTIWIM - Versão 2.0 </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">
	<script src="script.js"></script>
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="robots" content="index, follow"/>      

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fonts-icones.css">
    <link rel="shortcut icon" href="https://www.loopnerd.com.br/img/favicon.png" type="image/ico" />

</head>
<body>
	<header id="header">
		<a href="#" id="logo">
			<img src="img/logo-removebg-preview2.png">
			<span><b>rTiWIM</b></span>
		</a>

		<nav id="nav">
			<button id="btn-mobile">
				<span id="hamburger"></span>
			</button>

			<ul id="menu">
            <li><a href="index.html">Homepage</a></li>
                <li><a href="pag_alter_des.php">Perfil</a></li>
                <li><a href="index.html">Chat Online</a></li>
                <li><a href="cad_pag_val.html">Cadastrar Páginas</a></li>                
                <li><a href="index.html">Feedbacks</a></li>
                <li><a href="instrucoes.html">Instruções</a></li>					
				<li><a href="login.html">Logout</a></li>
			</ul>
		</nav>
	</header>

    <section class="boxLogin container">
        <div class="content">
              
              <form class="login" method="POST" name="cadUsuario" action="alt_cadDes.php">
                <h1><i class="icon icon-key-1"></i> Alterar Cadastro </h1>
                <div class="padding">
                  <label>
                    <input type="text" class="campos" placeholder="Primeiro nome" value="<?php echo $nomeuser?>" name="nomeusuario">
                  </label>
                  <label>
                    <input type="text" class="campos" placeholder="Segundo nome" value = "<?php echo $sobreuser?> " name="sobrenomeusuario">
                  </label>
                  <label>
                    <input type="text" class="campos" placeholder="Nome do projeto"  value ="<?php echo $projetouser?> " name="projeto">
                  </label>
                  <label>
                    <input type="email" class="campos" placeholder="Endereço de email" value = "<?php echo $emailuser?> " name="emailUsuario">
                  </label>

                  <label>
                    <input type="password" class="campos" placeholder="Insira sua senha"   value ="<?php echo $senhauser?> " name="senhausuario">
                  </label>
                  <label>
                    <input type="password" class="campos" placeholder="Confirme sua senha"  value ="<?php echo $senhauser?> " name="confsenha">
                  </label> 
                  <hr/>
                    <h4>Cliente</h4>
                    <label>
                        <input type="radio" class="campos" value="1" id="checkcliente" name="radio">
                    </label>             
                   <hr/>
                   <h4>Desenvolvedor</h4>
                    <label>
                        <input type="radio" class="campos" value="2" id="checkdesenvolvedor" name="radio" >
                      
                      </label>

                  
                  

                  <input type="submit" class="btn fade_8S" name="login" value="Alterar">
                  
                </div><!--padding-->
                <div class="linksForm">
                <a href="indexdesenvolvedor.html" class="fade_4S" title="Resgatar Senha"><i class="icon icon-forward-1"></i> Voltar</a> 
                  
                </div>

                <?php  
           mysqli_close($conexao);
          ?>
              </form>
         </div>
    </section><!--Login--> 




	<footer id="footer">
		<div class="fale-conosco">
			<h1>FALE COM A GENTE</h1>

			<span>Tel: (88) 99653-3715</span>
			<span>Email: joao.araujo7@prof.ce.gov.br</span>

			<p>
				<img src="img/facebook.png">
				<img src="img/twiter.png">
				<img src="img/instagram.png">
			</p>
		</div>
		
	</footer>

	<div class="desenvolvedor">
		<p>&copy; 2023 por Victor Araújo. </p>
	</div>

 

</body>
</html>