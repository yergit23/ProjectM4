<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Post</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<form action="/project4/store.php" method="POST">
					<div class="form-group">
						<label for="">Title</label>
						<input type="text" name="title" class="form-control">
					</div>

					<div class="form-group">
						<button class="btn btn-success">Add Post</button>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>