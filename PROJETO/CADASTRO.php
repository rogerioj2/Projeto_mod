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
        <a class="nav-link" href="sobrenos.html" style="color: white;">Sobre nós</a>
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
      
     

<!-- Slides !-->

<div class="container">
    
  <h2 style="color:white">Preencha Os Dados</h2>
    
  <form method="post" enctype="multipart/form-data" class="form-horizontal" >
      
    <div class="form-group">
      <label style="color:white" class="control-label col-sm-2" for="txtnome">Nome:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="txtnome" placeholder="Enter Nome" name="txtnome">
      </div>
    </div>
      
    <div class="form-group">
      <label style="color:white" class="control-label col-sm-2" for="txtsobrenome">Sobrenome:</label>
      <div class="col-sm-10">          
        <input  type="text" class="form-control" id="txtsobrenome" placeholder="Enter Sobrenome" name="txtsobrenome">
      </div>
    </div> 
      
    <div class="form-group">
      <label style="color:white" class="control-label col-sm-2" for="txttel">Telefone:</label>
      <div class="col-sm-10"> 

         
        <input type="text"  class="form-control phone-ddd-mask" id="txttel" placeholder="Insira Numero do Telefone" name="txttel" data-mask="(00) 0000-0000">
      </div>
    </div>
      
   <div class="form-group">
      <label style="color:white" class="control-label col-sm-2" for="txtmensagem">Mensagem:</label>
      <div class="col-sm-10">          
        <textarea class="form-control" id="txtmensagem" placeholder="Digite Sua Mensagem" name="txtmensagem"></textarea>
      </div>
    </div>
      
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button formaction="inserir/insertport.php" class="btn btn-default" id="btoenviar">Enviar</button>
      </div>
    </div>
  </form>
</div>


<!-- Cards conteúdo !-->
      
      <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="imagenss/pecas.jpg" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este conteúdo é um pouco maior, para demonstração.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Atualizados 3 minutos atrás</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="imagenss/drone.jpg" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Atualizados 3 minutos atrás</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="imagenss/projetos.png" alt="Imagem de capa do card">
    <div class="card-body">
      <h5 class="card-title">Título do card</h5>
      <p class="card-text">Este é um card maior com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional. Este card tem o conteúdo ainda maior que o primeiro, para mostrar a altura igual, em ação.</p>
    </div>


    <div class="card-footer">
      <small class="text-muted">Atualizados 3 minutos atrás</small>
    </div>
  </div>
</div>


<footer>
  <div class="row">
  <div class="col"><h4 style="color: white;">Fale conosco</h4>

  </div>
  <div class="col"><h4 style="color: white;">Endereços</h4>
<p style="color: white;"> Av. Paulista</p>
  </div>
  <div class="col"><h4 style="color: white;">Parceiros</h4>
<a href="https://www.submarino.com.br/">Submarino</a><br>
<a href="https://www.americanas.com.br/">Americanas</a>
  </div>
</div>
</footer>

      
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>