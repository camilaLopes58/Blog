<?php 

include "config/connection.php";
include "view2.php";

$id = $_GET['id'];


$stmt = $conectar->prepare('SELECT id, title, description FROM posts WHERE id = :id');

$stmt->execute(array('id' => $id));



$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<main>
 		<div class="container">
 			<?php foreach ($results as $post):?>
 				<h1><?= $post["title"]?></h1>
 				<p><?= $post["description"]?></p>
 			<?php endforeach;?>
 		</div>
 	</main>
 </body>
 </html>
 