
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

	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


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
        .img {
       		width: 60%;
    		margin-left: 20%;
    		margin-top: 10%;
    		border-radius: 5px;
    		box-shadow: 0 4px 5px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
    		width: 60%;
        }
        .buttonClose{
        	text-align: right;
    		margin: 3%;
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

	  <section class="py-5 text-center container" id="selectImage">
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
	      <div id="preview" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

	      	<!-- Artworks -->
	        <div class="col">
	          <div class="card shadow-sm">
				<p class="buttonClose"><button type="button" class="btn-close" aria-label="Close" onclick="closeCard()"></button></p>
	          	<img src="uploads/paint.jpg" alt="" class="img"></text></svg>
	            <div class="card-body">
	              <p class="card-text">
				  		<div class="col-sm-12 row_input">
		          			<input type="text" class="form-control" id="n_serie" placeholder="Serial number" value="" required="">
		          		</div>
				  		<div class="col-sm-12 row_input">
		          			<input type="text" class="form-control" id="title" placeholder="Title" value="" required="">
		          		</div>
				  		<div class="col-sm-12 row_input">
		          			<input type="text" class="form-control" id="XXX" placeholder="XXX" value="" required="">
		          		</div>
				  		<div class="col-sm-12 row_input">
				  			<div class="form-check form-switch">
							  <input class="form-check-input" type="checkbox" id="available" checked>
							  <label class="form-check-label" for="flexSwitchCheckChecked">Available</label>
							</div>
		          		</div>
				  		<div class="col-sm-12 row_input">
				  			<textarea id="description" name="description" rows="5" cols="20" placeholder="Description" class=" form-control"></textarea>
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
	        <!-- fin Artworks -->

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
                url: 'action/upImage.php',
               	type: 'post',
               	data: form_data,
               	dataType: 'json',
                contentType: false,
                processData: false,
                success: function (response) {
                	printArtwork(response);
                   	//for(var index = 0; index < response.length; index++) {
					//    var src = response[index];
					//    // Add img element in <div id='preview'>
					//    $('#preview').append('<img src="'+src+'" width="200px;" height="200px">');
					//}
                   	
                }
            });
		});


	function createCardArtwork(lastId){
		  // Selecting last id 
		  // var lastname_id = $('.content-form input[type=text]').last().attr('id');
		  var lastname_id = lastId;
		  // var split_id = lastname_id.split('_');
		  // New index
		  var index_id = Number(split_id[1]) + 1;

		  // Create clone
		  var newel = $('.content-form:last').clone(true);

		  // Set id of new element
		  $(newel).find('input[type=text]').attr("id","title_"+index_id);

		  
		  $labelAvailable = $(newel).find(".toggle-checkbox");
		  var forLabelAvailable = $labelAvailable.attr('for');
		  var splitForLabelAvailable = forLabelAvailable.split('_');
		  $labelAvailable.attr('for',splitForLabelAvailable[0]+"_"+index_id);

		  $allInputs = $(newel).find(":input");
		  $allInputs.each(function (index)
		         {
		             var id_actual = $(this).attr('id');
		             if (typeof id_actual != "undefined"){
		              var split_name_id = id_actual.split('_');
		              console.log(split_name_id[0]);
		              if (split_name_id[0]!='currency' && split_name_id[0]!='status') {
		                $(this).attr("id", split_name_id[0]+"_"+index_id);
		                if(split_name_id[0]=='artwork-available'){
		                  $(this).val(index_id);
		                }else{
		                  $(this).val('');
		                }
		              }
		             }
		         });


		  //clear inputs
		  // $(newel).find('input[type=text]').val('');
		  $(newel).find('input[type=file]').val(null);
		  $(newel).find('.custom-file-label').html('Select new image');
		  $(newel).find('.custom-file-label').css("border", '1px solid rgb(195, 195, 195)');
		  $(newel).find('input[type=checkbox]').removeAttr('checked');
		  // $(newel).find('textarea').val('');


		  // Insert element
		  if (index_id<=2) { //no duplicate element close
		    $(newel).prepend("<a href='javascript:void(0);' class='close-element'>X</a>"); 
		  }

		  $(newel).insertAfter(".content-form:last");
	}



	//print selected artwork 
	function printArtwork(response){
		for(var index = 0; index < response.length; index++) {
		    var src = "uploads/"+response[index];
		    console.log(src);
		    var cardHtml = '<div class="col" id="card_'+index+'"><div class="card shadow-sm"><p class="buttonClose"   id="'+index+'"><button type="button" class="btn-close" aria-label="Close"></button></p><img src="'+src+'" alt="" class="img"></text></svg><div class="card-body"><p class="card-text"><div class="col-sm-12 row_input"><input type="text" class="form-control" id="n_serie" placeholder="Serial number" value="" required=""></div><div class="col-sm-12 row_input"><input type="text" class="form-control" id="title" placeholder="Title" value="" required=""></div><div class="col-sm-12 row_input"><input type="text" class="form-control" id="XXX" placeholder="XXX" value="" required=""></div><div class="col-sm-12 row_input"><div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="available" checked><label class="form-check-label" for="flexSwitchCheckChecked">Available</label></div></div><div class="col-sm-12 row_input"><textarea id="description" name="description" rows="5" cols="20" placeholder="Description" class=" form-control"></textarea></div></p><div class="d-flex justify-content-between align-items-center"><div class="btn-group"><button type="button" class="btn btn-sm btn-outline-primary">Save</button></div><small class="text-muted">...Editing</small></div></div></div></div>';

		    // Add img element in <div id='preview'>
		    // $('#preview').append('<img src="'+src+'" width="200px;" height="200px">');
		    $('#selectImage').hide();
		    $('#preview').append(cardHtml);
		}
	}

	$(".buttonClose").click(function(event) {
		console.log($(this).attr("id"));
	});



	});


	function closeCard(index){
		$("#card_"+index).hide();
	}
	</script>