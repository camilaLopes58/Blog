<?php 

include "config/connection.php";

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");
$stmt->execute();

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
