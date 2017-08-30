@extends('layouts.addItem')
@section('title','Products ')
@section ('body')
<style>.img-responsive {
	position: absolute;
} .op{  }</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<br><br><br><br><br>

<div class="col-md-6 mainimgshow"> Products
	<table class="table">
		<thead>
			<tr>
				<th>
					Product ID
				</th>
				<th>
					Product  Name
				</th>
				<th>
					Product  Name
				</th>
				<th>
					Operations
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($products as $product)
			<tr>
		
				<td>     
					{{ $product->id }}  
				</td>
				<td>
					{{ $product->pattern }} 
				</td>
				<td>
					{{ $product->desc }}
				</td>
				<td>
					<div class="fb-button form-group  field-view view op ">
					<a href="/product/{{$product->id}}" class="btn btn-primarypull-left" >
				<i class="fa fa-plus" aria-hidden="true">Add</i>
				 </a>
				<a href="/product/{{$product->id}}/edit" class="btn btn-primary" style="
    background-color: transparent;
    color: black;
    border-color: transparent;
"><i class="fa fa-pencil-square-o" aria-hidden="true">
				Edit</i>
				 </a>
				
				 <form action="/product/{{$product->id}}" method="post"> 
				 {{csrf_field()}}
				 {{method_field('DELETE')}}
				<button type="submit" class="fa fa-trash-o pull-right" aria-hidden="true" style="
    background-color: transparent;
    color: black;
    border-color: transparent;
"> Delete</button></form>
					</div>
				</td>



			</tr>
			@endforeach
		</tbody>
	</table>
</div>


<div class="col-md-6 ">
	Add Product
	<form method="post" action="/product" id="rendered-form">{{csrf_field()}}

		
		<div class="fb-text form-group field-text-1502453955397">
			<label for="text-1502453955397" class="fb-text-label">Product Name</label>
			<input type="text" required="required" class="form-control" name="pattern" id="pattern">
		</div>


		<div class="fb-textarea form-group field-textarea-1502453970340">
			<label for="textarea-1502453970340" class="fb-textarea-label">Product Discription</label>
			<textarea type="textarea" required="required" class="form-control" name="desc" id="desc"></textarea>
		</div>
		<div class="fb-button form-group field-button-1502454192319">
			<button type="submit" class="btn btn-primary btn-lg btn-block" name="submit" style="default" id="button-1502454192319">Add New Product</button>
		</div>
	</form>
</div>