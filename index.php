
<?php

$servicos = [
  ["imagem"=>"images/site.svg","titulo"=>"Criar um site","descrição"=>"Descrição do Serviço 1"],

  ["imagem"=>"images/mktplace.svg","titulo"=>"Criar uma Loja Virtual","descrição"=>"Descrição do Serviço 2"],
  
  ["imagem"=>"images/blog.svg","titulo"=>"Criar um Blog","descrição"=>"Descrição do Serviço 3"]
  
];

?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css" />

  <link rel="stylesheet" href="css/style.css">
  <title>Agencia 23</title>
</head>

<body>

  <header>
    <!-- Just an image -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" width="120" alt="">
      </a>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sobre Nós</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contato</a>
        </li>
      </ul>
    </nav>
    <section id="banner">
      <h2>COMPRE NOSSOS PRODUTOS! =)</h2>
    </section>
    <section id="servico" class="container mt-5">
      <div class=row>

      <?php foreach($servicos as $servico){ ?>
        <div class="col-4">
          <div class="card">
            <img src="<?php echo $servico["imagem"]; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">
              <?php echo $servico["titulo"]; ?>
              </h5>
              <p class="card-text"><?php echo $servico["descrição"]; ?></p>
              <a href="#" class="btn btn-primary">Converse conosco!</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      </div>

    </section>
    <section id="about" class="container mt-5">
      <div class=row>
        <div class="col-6">
          <img src="images/about.svg" class="img-fluid" />
        </div>
        <div class="col-6 d-flex justify-content-center flex-column">
          <h1>Sobre Nós</h1>
          <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus nesciunt rem perspiciatis, earum odit modi similique
            pariatur. Tempore ipsam vitae voluptate aperiam, sunt reiciendis, natus a deserunt porro odit at?</p>
        </div>
      </div>
    </section>
  </header>
</body>

</html>