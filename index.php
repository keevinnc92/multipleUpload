
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Kevin Chong B.">
    <title>Carmizon upload artworks</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/"> -->

    <!-- Bootstrap core CSS -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<link href="css/style.css" rel="stylesheet">

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>


    <!-- Favicons -->
<!-- <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3"> -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
	<header>
	  <div class="collapse bg-dark" id="navbarHeader">
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-8 col-md-7 py-4">
	          <h4 class="text-white">Massive upload of artwork</h4>
	          <p class="text-muted">It allows uploading different works of art at the same time to the <a href="http://carmizon.com/">Carmizon</a> website.</p>
	        </div>
	        <div class="col-sm-4 offset-md-1 py-4">
	          <h4 class="text-white">Contact</h4>
	          <ul class="list-unstyled">
	            <li><a href="#" class="text-white">Author: Kevin Chong</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="navbar navbar-dark bg-dark shadow-sm">
	    <div class="container">
	      <a href="#" class="navbar-brand d-flex align-items-center">
	        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
	        <strong>Carmizon</strong>
	      </a>
	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	    </div>
	  </div>
	</header>

	<main>

	  <section class="py-5 text-center container">
	    <div class="row py-lg-5">
	      <div class="col-lg-6 col-md-8 mx-auto">
	        <h1 class="fw-light"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>Select images </h1>
	        <p class="lead text-muted">a 1: 1 format is recommended</p>
	        <p>
				<form method='post' action='' enctype="multipart/form-data">
					<input type="file" class="form-control" name="files[]" id="files" multiple="" />
					<input class="btn btn-primary my-2" type="button" id="submit" value='Next step'>
				</form>
	          <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
	        </p>
	      </div>
	    </div>
	  </section>

	  <div class="album py-5 bg-light">
	    <div class="container" id="viewArtworks">
	      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

	<div id='preview'></div>


	        <div class="col">
	          <div class="card shadow-sm">
	          	<img src="uploads/paint.jpg"  style="width: 100%" alt=""></text></svg>
	            <div class="card-body">
	              <p class="card-text">
	              	<div class="row row_input">
				  		<div class="col-sm-12">
		          			<input type="text" class="form-control" id="n_serie" placeholder="Serial number" value="" required="">
		          		</div>
	              	</div>
	              	<div class="row row_input">
				  		<div class="col-sm-12">
		          			<input type="text" class="form-control" id="title" placeholder="Title" value="" required="">
		          		</div>
	              	</div>
	              	<div class="row row_input">
				  		<div class="col-sm-12">
		          			<input type="text" class="form-control" id="XXX" placeholder="XXX" value="" required="">
		          		</div>
	              	</div>
	              	<div class="row row_input">
				  		<div class="col-sm-12">
				  			<div class="form-check form-switch">
							  <input class="form-check-input" type="checkbox" id="available" checked>
							  <label class="form-check-label" for="flexSwitchCheckChecked">Available</label>
							</div>
		          		</div>
	              	</div>
	              	<div class="row row_input">
				  		<div class="col-sm-12">
				  			<textarea id="description" name="description" rows="5" cols="20" placeholder="Description" class=" form-control"></textarea>
		          		</div>
	              	</div>
	          	  </p>
	              <div class="d-flex justify-content-between align-items-center">
	                <div class="btn-group">
	                  <button type="button" class="btn btn-sm btn-outline-primary">Save</button>
	                </div>
	                <small class="text-muted">...Editing</small>
	              </div>
	            </div>
	          </div>
	        </div>




	      </div>
	    </div>
	  </div>

	</main>

	<footer class="text-muted py-5">
	  <div class="container">
	    <p class="float-end mb-1">
	      <a href="#">Back to top</a>
	    </p>
	    <p class="mb-1">&copy; Carmzion.com</p>
	  </div>
	</footer>
      
  </body>
</html>
	<!-- Script -->
	<script type="text/javascript">
	$(document).ready(function(){
		
		$('#submit').click(function(){

			var form_data = new FormData();

			// Read selected files
            var totalfiles = document.getElementById('files').files.length;
            for (var index = 0; index < totalfiles; index++) {
                form_data.append("files[]", document.getElementById('files').files[index]);
            }

            // AJAX request
            $.ajax({
                url: 'ajaxfile.php',
               	type: 'post',
               	data: form_data,
               	dataType: 'json',
                contentType: false,
                processData: false,
                success: function (response) {
                   	
                   	for(var index = 0; index < response.length; index++) {
					    var src = response[index];

					    // Add img element in <div id='preview'>
					    $('#preview').append('<img src="'+src+'" width="200px;" height="200px">');
					}
                   	
                }
            });
		});
	});
	</script>