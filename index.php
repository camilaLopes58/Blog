<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="widht=device-widht, initial-scale=1"> 
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <!-- font google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">

  <title>Receitas Favoritas</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-md">
    <a class="navbar-brand text-white" href="#">Cozinha Suculenta</a>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link text-white" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index2.php" target="_blank">DOCES E SOBREMESAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index2.php">MASSAS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index2.php">COMIDA FIT</a>
  </li>
</ul>
    <img class="rounded-circle" src="https://source.unsplash.com/70x70/?food" alt="Logo do Blog">
  </div>
</nav>
  </header>
  <section>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://source.unsplash.com/1400x500/?chocolate" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1400x500/?bolo" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/1400x500/?carne" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-dark text-center my-3">
          <h1>Doces e Sobremesas</h1>
        </div>
      </div> 
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img src="images/mousse.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Mousse de Chocolate</h5>
              <p class="card-text">Mousse de chocolate fácil é uma receita simples e prática de sobremesa, perfeita para quem está com pouco tempo na cozinha!</p>
              <a href="https://www.tudogostoso.com.br/receita/14903-mousse-de-chocolate-hiper-facil-e-mega-gostoso.html" target="_blank" class="btn btn-outline-warning">Receita</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="images/cream.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Sorvetes</h5>
              <p class="card-text">A versão em massa do doce costuma ser mais cremosa que os picolés, mas também é uma ótima opção de sobremesa geladinha.</p>
              <a href="https://www.receiteria.com.br/receitas-de-sorvete/" target="_blank" class="btn btn-outline-warning">Receita</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="images/bolo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bolo de Laranja</h5>
              <p class="card-text">Quem não adora uma fatia de bolo de laranja na hora do lanche? Com um cafezinho, então, fica difícil de resistir!</p>
              <a href="https://www.tudogostoso.com.br/receita/13953-bolo-de-laranja.html" target="_blank" class="btn btn-outline-warning">Receita</a>
            </div>
          </div>
        </div>
        <div class="container">
      <div class="row">
        <div class="col-sm-12 text-dark text-center my-3">
          <h1>Massas</h1>
        </div>
      </div> 
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img src="images/pizza.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Pizza de Liquidificador</h5>
              <p class="card-text">Pizza de liquidificador é uma receita deliciosa e muito simples de preparar. Feita toda no liquidificador, ela é bem prática para o dia a dia!</p>
              <a href="https://www.tudogostoso.com.br/receita/93498-pizza-de-liquidificador-facil.html" target="_blank" class="btn btn-outline-warning">Receita</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="images/lasanha.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lasanha de Camarão</h5>
              <p class="card-text">A Lasanha de Camarão é um prato prático, delicioso e que vai deixar os seu familiares e convidados com água na boca!</p>
              <a href="https://receitatodahora.com.br/lasanha-de-camarao-2/" target="_blank" class="btn btn-outline-warning">Receita</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="images/panqueca.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Panqueca de Frango</h5>
              <p class="card-text">É uma ótima opção para um almoço de domingo, quando a gente quer fazer algo especial para a família!</p>
              <a href="https://www.tudogostoso.com.br/receita/63753-panqueca-de-frango.html" target="_blank" class="btn btn-outline-warning">Receita</a>
            </div>
          </div>
        </div>
        <div class="container">
      <div class="row">
        <div class="col-sm-12 text-dark text-center my-3">
          <h1>Comida Fit</h1>
        </div>
      </div> 
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img src="images/chocofit.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Charge Fit</h5>
              <p class="card-text">E quando a gente está morrendo de vontade de comer um doce mas está seguindo firme na dieta? O charge fit é uma versão mais saudável do famoso chocolate, serve como um ótimo  pré-treino!.</p>
              <a href="https://www.receiteria.com.br/receita/charge-fit/" target="_blank" class="btn btn-outline-warning">Receita</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="images/nhoque.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Nhoque de Batata-Doce</h5>
              <p class="card-text">Para aqueles que são fãs de massa, uma ótima alternativa é o nhoque de batata-doce. O prato é uma maneira bem gostosa de aproveitar a saudável e nutritiva batata-doce nas refeições!</p>
              <a href="https://www.tudoreceitas.com/receita-de-nhoque-de-batata-doce-fit-6529.html" target="_blank" class="btn btn-outline-warning">Receita</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img src="images/omelete.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Omelete de Forno</h5>
              <p class="card-text">Omelete é um clássico no café da manhã, mas para que esse seja um prato fit, é importante seguir algumas dicas importantes, como deixar o óleo de lado, por exemplo!</p>
              <a href="https://www.tudogostoso.com.br/receita/78091-omelete-de-forno-sem-oleo.html" target="_blank" class="btn btn-outline-warning">Receita</a>
            </div>
          </div>
        </div>
       </div>
      </div>
  </section>
  <footer class="mt-5 p-5 bg-light">
 <div class="container">
 <p class="float-end mb-1">
 <a href="#"><img src="images/seta.png" height="40x40"></a>
 <footer id="rodape">
</p>
 <p class="mb-1">&copy; 2022. Todos os Direitos Reservados.</p>
      <div class="rede"></div>
          <img class="ícone" src="images/facebook.png.png"  width="40x40">
          <img class="ícone" src="images/instagram.png.png" width="40x40">
          <img class="ícone" src="images/twitter.png.png" width="40x40">
          <img class="ícone" src="images/google-plus.png" width="40x40"> 
          <img class="ícone" src="images/youtube.png" width="40x40">
  </footer>
 </div>
</footer>
</body>
</html>
