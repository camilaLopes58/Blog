<?php 

include "config/connection.php";


$stmt = $conectar->prepare("SELECT * FROM posts WHERE title LIKE '%buscar'");

$stmt->execute();

$search = $stmt->fetchAll();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<h2>Resultado da busca</h2>
		<?php foreach ($search as $key => $value):?>
			<h5 class="card-title">
			<a href="index.php"></a>
				<?= $value["title"]?>
				
			</a> 
				
			</h5>
		<?php endforeach;?>
	</div>
	<nav class="navbar bg-light">
  <div class="container-fluid" >
    <form class="d-flex" role="search">
    	<a href="index.php"></a>
      <input class="form-control me-2" type="search" placeholder="Search"   aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Pesquisar</button>
    </form>
  </div>
</nav>
</body>
</html>
