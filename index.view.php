<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-light">
  		<div class="container-fluid">
    		<a class="navbar-brand" href="#">My Blog</a>
    		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        			<li class="nav-item">
          				<a class="nav-link" href="index.html">MainPage</a>
        			</li>
      			</ul>
    		</div>
  		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<a href="" class="btn btn-success">Add Post</a>
				<table class="table">
  					<thead>
    					<tr>
      						<th scope="col">#</th>
      						<th scope="col">Title</th>
      						<th scope="col">Actions</th>
    					</tr>
  					</thead>
  					<tbody>
  						<?php foreach($posts as $post):?>
    					<tr>
      						<th scope="row"><?php echo $post['id'];?></th>
      						<td><a href="show.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></td>
      						<td>
      							<a href="edit.php?id=<?php echo $post['id'];?>" class="btn btn-warning">Edit</a>
      							<a href="delete.php?id=<?php echo $post['id'];?>" class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</a>
      						</td>
    					</tr>
    					<?php endforeach;?>
  					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>