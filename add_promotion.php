<?php
	include 'includes/db_connect.php';
	$updated = $_GET['updated'];
	if($updated == 'true'){
		$message = 'Your promo has been added to the database';
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="admin-wrapper col-sm-6 col-sm-offset-3">
				<div class="success msg"><?php print $message; ?></div>
				<form action="admin_process.php?task=insert" method="post">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Promotion Title</label>
				    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Promo Title">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Header Image</label>
				    <input type="text" name="header_image" class="form-control" id="exampleInputPassword1" placeholder="Path to file">
				  </div>
				  <div class="form-group">
				    <label for="field3">Header Text</label>
				    <input type="text" name="header_text" class="form-control" id="field3" placeholder="Path to file">
				  </div>
				  <div class="form-group">
				    <label for="field4">Body Text</label>
				    <input type="text" name="body_text" class="form-control" id="field4" placeholder="Enter Body Text">
				  </div>
				  <div class="form-group">
				    <label for="field5">Lower Image</label>
				    <input type="text" name="lower_image_text" class="form-control" id="field5" placeholder="Enter Path to Lower Image Text">
				  </div>

				  <div class="form-group">
				    <label for="field6">Lower Header</label>
				    <input type="text" name="lower_header" class="form-control" id="field6" placeholder="Enter Lower Header Text">
				  </div>

				  <div class="form-group">
				    <label for="field7">Lower Body Text</label>
				    <input type="text" name="lower_body_text" class="form-control" id="field7" placeholder="Enter Lower Body Text">
				  </div>

				  <div class="form-group">
				    <label for="field8">Lower Image 2</label>
				    <input type="text" name="lower_image2" class="form-control" id="field8" placeholder="Enter Path to Lower Image Text">
				  </div>

				  <div class="form-group">
				    <label for="field9">Lower Header 2</label>
				    <input type="text" name="lower_header2" class="form-control" id="field9" placeholder="Enter Lower Header Text">
				  </div>

				  <div class="form-group">
				    <label for="field10">Lower Body Text 2</label>
				    <input type="text" name="lower_body_text2" class="form-control" id="field10" placeholder="Enter Lower Body Text">
				  </div>


<!-- 
				  <div class="form-group">
				    <label for="exampleInputFile">File input</label>
				    <input type="file" id="exampleInputFile">
				    <p class="help-block">Example block-level help text here.</p>
				  </div> -->
<!-- 				  <div class="checkbox">
				    <label>
				      <input type="checkbox"> Check me out
				    </label>
				  </div> -->
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>


</body>
</html>