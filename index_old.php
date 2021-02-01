<!DOCTYPE html>
<html>
<head>
	<title>xHow to uxpload Multiple Image files with jQuery AJAX and PHP</title>

	<script type="text/javascript" src='jquery-3.4.1.min.js'></script>

	<style type="text/css">
	#preview img{
		margin: 5px;
	}
	</style>
</head>
<body>


	<form method='post' action='' enctype="multipart/form-data">
		<input type="file" id='files' name="files[]" multiple><br>
		<input type="button" id="submit" value='Upload'>
	</form>

	<!-- Preview -->
	<div id='preview'></div>

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
<<<<<<< HEAD
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
=======
            $.post('ajaxfile.php', {data: form_data}, function(response, textStatus) {
            	// if (response==1) {
            		alert(1)
            	// }
            });

            
     //        $.ajax({
     //            url: 'ajaxfile.php',
     //           	type: 'post',
     //           	data: form_data,
     //           	dataType: 'json',
     //            contentType: false,
     //            processData: false,
     //            success: function (response) {
                   	
     //               	for(var index = 0; index < response.length; index++) {
					//     var src = response[index];

					//     // Add img element in <div id='preview'>
					//     $('#preview').append('<img src="'+src+'" width="200px;" height="200px">');
					// }
                   	
     //            }
     //        });


>>>>>>> d61b4b6a236115ccd03ba53ad53bffcd4ea3f470
		});
	});
	</script>
</body>
</html>