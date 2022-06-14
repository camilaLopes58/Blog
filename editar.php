<?php 

include "config/connection.php";
include "session.php";
include "nav.php";

$id = $_GET['id'];
$stmt = $conectar->prepare('SELECT id, title, description FROM posts WHERE id = :id');

$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>
<?php include "header.php";?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<main class="col-md-9 col-lg-10">
 	<div class="container">
 		<h1 id="main-title">Editar Postagem</h1><br><br>
 	</div>
 	<form action="editar-fim.php" method="post" enctype="multipart/form-data">
 	<?php foreach ($results as $post):?>
 		<p><input type="text" value="<?= $post["id"]?>" name="id"></p>
 		<p><input type="text" value="<?= $post["title"]?>" name="title"></p>
 		<p><input type="text" value="<?= $post["description"]?>" name="description"></p>
 		<?php endforeach;?>
 			<input type="submit" value="EDITAR">
 	</form>
 </main>
</body>
</html>

 <?php
 include "footer.php";
  ?>