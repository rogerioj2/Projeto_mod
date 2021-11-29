<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" href="csss/style.css" crossorigin="anonymous">
<link rel="stylesheet" href="csss/style.css">
    <title>Jet Shark</title>
  </head>
  <body>
<!-- Menu de navegação !-->

      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="Index.html" style="color: white;">Jet Shark</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Index.html" style="color: white;">Home<span class="sr-only">(página atual)</span></a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="sobrenos.html" style="color: white;">Sobre nós</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
          Lojas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Paulista</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>


      <div id="sobre">
 <?php 
	
	include ('inserir/conexao.php');
	
	try{
		
		$sql = $conn->query("select * from jet_shark");
        
        $html='';
		
		foreach($sql as $qualquer){
			
			
			
            $html.= '<div id="img">';
			$html.= '<p>Código: '.$qualquer[0].'<br/>';
			$html.= 'Nome: '.$qualquer[1].'<br/>';
			$html.= 'sobrenome: '.$qualquer[2].'<br/>';
			$html.='telefone: '.$qualquer[3].'<br/>';
			$html.= 'mensagem: '.$qualquer[4].'<br/></p>';
			//echo '<hr>';
			$html.= '</div>';
			
			
			
			//echo '<hr>';
			
		}
	}catch(PDOException $e){
		echo $e->getMessage();
	}
    echo $html;
	
	?>
</div>
      

      
<br>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>