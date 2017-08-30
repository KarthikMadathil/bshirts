<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Shirts</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalShow">Show</button>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModalAdd">Add</button>

  <!-- Modal -->
  <div class="modal fade" id="myModalAdd" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <form action="/store/shirt" enctype="multipart/form-data" method="post" id="rendered-form">
      {{csrf_field()}}
	
	<input type="hidden" name="product_id" id=1 value="1">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Shirts</h4>
        </div>
        <div class="modal-body">
 		
 		<div class="fb-file form-group field-image">
		<label for="image" class="fb-file-label">Upload Corresponding Image</label>
		<input type="file" class="form-control" name="image" multiple="false" id="image">
		</div>
		<div class="fb-text form-group field-rate">
			<label for="rate" class="fb-text-label">Price
				<span class="fb-required">*</span>
			</label>
			<input type="text" class="form-control" name="rate"  id="rate" required="required" aria-required="true">
			</div>
		<div class="fb-textarea form-group field-textarea-1502952580955">
		<label for="textarea-1502952580955" class="fb-textarea-label">Description</label>
		<textarea type="textarea" class="form-control" name="desc" id="desc"></textarea>
		</div>	

        </div>
        <input type="hidden" name="product_id" id="product_id" value= "iwade add cheyanam id" >

        <div class="modal-footer">
          <button type="submit" class="btn btn-default" >submit</button>
        </div>

        </form>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="myModalShow" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Current Available Shirtss</h4>
        </div>
        <div class="modal-body">
 
         @for($j=0;$j<10;$j++)
         <img src="images/Shirts/shirtVariant2.png" class="img-responsive" alt="Cinque Terre" width="304" height="236"> 
         <button type="button" class="btn btn-default" data-dismiss="modal">Delete</button>
		@endfor

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<!-- ------------------------------------------------------------------------------------------------ -->

</body>
</html>
