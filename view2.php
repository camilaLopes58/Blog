<?php 

include"config/connection.php";
include "nav.php";
include "session.php";

	

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

include "header.php";

 ?>

 	<main class="col-lg-10"><br>
 		<div class="container">
 			<h1 id="main-title">Meus Posts</h1>
 			<table class="table table-striped" id="contacts-table">
 				<thead>
 					<tr>
 						<th scope="col">#</th>
 						<th scope="col">Título</th>
 						<th scope="col">Descrição</th>
 						<th scope="col">Ações</th>
 					</tr>
 				</thead>
 				<tbody>
 					<tr>
 						<td scope="row">id</td>
 						<td scope="row">Título</td>
 						<td scope="row">Descrição</td>
 						<td class="actions">
 							<a href="">
 								 <img src="images/botao-play.png" width="20x20">
 							</a>
 							<a href="">
 							 <img src="images/botao-x.png" width="20x20">
 							</a>
 						</td>
 					</tr>
 				</tbody>
 				<tbody>
 					<?php foreach ($results as $post):?>
 						<tr>
 							<td scope="row"><?= $post["id"]?></td>
 							<td scope="row"><?= $post["title"]?></td>
 							<td scope="row"><?= $post["description"]?></td>
 							<td class="actions">
 								<a href="viewBlogExterno.php?id=<?= $post["id"]?>">
 									<i class="fas fa-eye check-icon">Ver</i>
 							    </a>
 							    <a href="editar.php?id=<?= $post["id"]?>">
 							    	<i class="fas fa-eye check-icon">Editar</i>
 							    	
 							    </a>
 							    <a href="delete.php?id=<?= $post["id"]?>">X</a>
 								
 							</td>
 						</tr>
 					<?php endforeach;?>
 				</tbody>

 			</table>

 			
 		</div>
 	</main>
 </body>
 </html>
 <?php include "footer.php";?>