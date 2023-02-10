<?php
session_start();
require_once 'conexaobd.php';

$emailusuario = $_SESSION['usuario'];


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>

.btn-danger{
    font-family: arial, sans-serif;
    
    color: white;
    background-color: #292929;
    font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}

td, th {
  border: 4px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>




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
                <li><a href="feedback_usuario.php">Feedbacks</a></li>
                <li><a href="instrucoes.html">Instruções</a></li>					
				<li><a href="login.html">Logout</a></li>
			</ul>
		</nav>
	</header>

    <section class="boxLogin container">
               
   
        <div class="content">
        <div class="linksForm">
                  <a href="indexdesenvolvedor.html" class="fade_4S" title="Resgatar Senha"><i class="icon icon-forward-1"></i> Voltar</a> 
                  
                </div>     
        <h1> Feedbacks dos Projetos</h1>

        <table class="table table-striped">
                    <thead>
                      <tr id="teste">
                        <th scope="col">#</th>
                        <th scope="col">Versão</th>
                        <th scope="col">Usuário</th>                        
                        <th scope="col">Página</th>
                        <th scope="col">Log</th>
                        
                        
                      </tr>
                    </thead>

                    <?php 
                    $consulta = "select * from cad_feedback ;";
                    $result = mysqli_query($conexao,$consulta);

                    if($result){
                      while($row = mysqli_fetch_assoc($result)){                    
                    ?>
                    <tbody>
                      <tr>
                        <th scope="row"><?php echo "<p></p>",$row['id_feedback'] ?></th>
                        <td><?php echo "<p></p>",$row['versao'] ?></td>
                        <td><?php echo "<p></p>",$row['nome_usuario'] ?></td>
                        <td><?php echo "<p></p>",$row['pagina'] ?></td>
                        <td><?php echo "<p></p>",$row['log'] ?></td>
                        
                      </tr>
                      </tbody>
                      <?php
                      }
                      }
                      mysqli_close($conexao);
                      ?>
                  </table>

                  
                </div><!--padding-->
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