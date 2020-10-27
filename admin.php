<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="col-7 mx-auto" style="background: #cfcfcf">
		<button class="back btn bg-danger">Обратно</button>
		<form class="text-center" method="GET" action="insert.php">
			<input type="" name="name" class="col-10 mt-3 form-control mx-auto" placeholder=Название>
			<textarea name="description" class="col-10 mt-3 form-control mx-auto" placeholder="Описание"></textarea>
			<input type="" name="img" class="col-10 mt-3 form-control mx-auto" placeholder="путь до картинки">
			<input type="" name="price" class="col-10 mt-3 form-control mx-auto" placeholder="цена">

			<div>
				<button class="btn bg-secondary mt-2 mb-2">Выставить</button>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		let back = document.querySelector('.back');
		back.onclick = function() {
			window.location.href = 'index.php';
		}
	</script>
</body>
</html>