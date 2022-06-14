<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <main>
    	<div class="container">
    		<form action="envia.php" method="POST" enctype="multipart/form-data">

    			<h1>INSERIR</h1>

    			<label>Titulo: </label>
    			<input type="text" name="title" class="form-control" placeholder="Digite o titulo"><br><br>

    			<label>Data: </label>
    			<input type="date" name="data"><br><br>

    			<label>Texto descritivo: </label>
    			<input type="longtext" name="description" placeholder="Descrição"> <br><br>

    			<label>Insira uma imagem</label>
    			<input type="file" id="formGroupExampleInput3" name="image"/><br><br>

    			<button class="btn btn-primary" type="submit">Publicar</button>

    		</form>
    		
    	</div>
    </main>
</body>
</html>