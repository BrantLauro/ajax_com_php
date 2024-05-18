<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
	<title>Sistema de Comentários | PHP e AJAX</title>
</head>
<body>
	<section class="content">
		<div class="box_form">
			<h1>Deixe seu Comentário!</h1>
			<form id="form1">
				<div class="input">
					<label for="name">Nome</label><br>
					<input type="text" name="name" id="name" required/>
					<br><br>
				</div>
				<div class="input">
					<label for="comment">Comentário</label><br>
					<textarea name="comment" id="comment" required></textarea>
					<br><br>
				</div>
				

				<div class="input-bt">
					<input type="submit" form="form1" class="btn-sub" value="Enviar Comentário"/><br><br>
				</div>
			</form>
		</div>

		<div class="box_comment">
			
		</div>

		<footer>
        	<p>&copy; LauroBrant</p>
    	</footer>
	</section>
	
	<script src="assets/js/jQuery/jquery-3.5.1.min.js"></script>
	<script src="assets/js/script.js"></script>
	<script>getComments();</script>
</body>
</html>
