<?php 

	require 'php/database.php';

	require 'php/jurusan.php';

	$jurusan = get_jurusan();

	

 ?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  	<nav class="navbar navbar-light bg-light">
  		<div class="container">
		  <a class="navbar-brand">BELAJAR AJAX</a>
		  <form class="form-inline">
		    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		  </form>
		</div>
	</nav>
  	<div class="container-fluid mt-5">
  		<div class="container">
	  		<div class="row">
	  			<div class="col-12">
	  				<h2>List Mahasiswa</h2>	  				
	  				<table class="table table-hover mt-4 mb-4">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Name</th>
					      <th scope="col">Email</th>
					      <th scope="col">Jurusan</th>
					      <th scope="col">Actions</th>
					    </tr>
					  </thead>
					  <tbody id="user">
					  	<td colspan="100%">User not found.</td>
					  </tbody>
					</table>					
				</div>				
	  		</div>
	  		<div class="row">
	  			<div class="col-12">
	  				<button type="button" id="btn-insert" class="btn btn-outline-primary" data-toggle="modal" style="padding: .5rem 48.3%;" data-target="#exampleModal">
					  Insert
					</button>
	  			</div>
	  		</div>
	  	</div>
  	</div>

  	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form action="php/insert.php" method="post">
		        <div class="form-group">
				    <label>Full Name</label>
				    <input type="text" class="form-control" name="name" placeholder="Enter name...">
				 </div>
				 <div class="form-group">
				    <label>Email address</label>
				    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email...">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				 </div>
				 <div class="form-group">
				 	<label for="combo">Select Jurusan</label>
				 	<select name="jurusan" class="form-control">
				 		<option value="">Select Jurusan...</option>	
				 		<?php foreach ($jurusan as $jurusan): ?>
				 			<option value="<?= $jurusan['jurusan_id']; ?>"><?= $jurusan['jurusan_name']; ?></option>			
				 		<?php endforeach ?>		 		
				 	</select>
				 </div>			
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save changes</button>
		      </div>
	      </form>
	    </div>
	  </div>
	</div>
	    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<script src="ajax/select.js"></script>

  </body>
</html>