<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <section id="navbar">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <h4>Aplikasi Absen</h4>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link smooth-scroll" href="dashboard.php">Home</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="tampilAbsen.php">Tampil Absen</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="inputAbsen.php">Input Absen</a></li>
            <li class="nav-item"><a class="nav-link smooth-scroll" href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </section>
	<!-- Awal Card Form -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Form Input Absen
	  </div>
	  <div class="card-body">
	    <form method="post" action="">
	    	<div class="form-group">
	    		<label>Nis</label>
	    		<input type="text" name="tnis" value="" class="form-control" placeholder="Input Ni disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Nama</label>
	    		<input type="text" name="tnama" value="" class="form-control" placeholder="Input Nama disini!" required>
	    	</div>
	    	<div class="form-group">
	    		<label>Kelas</label>
	    		<select class="form-control" name="tkelas">
	    			<option value=""></option>

	    			<option value="">1</option>
	    			<option value="">2</option>
	    			<option value="">3</option>
	    			<option value="">4</option>
	    			<option value="">5</option>
	    			<option value="">6</option>

	    		</select>
	    	</div>

	    	<button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
	    	<button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>

	    </form>
	  </div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
