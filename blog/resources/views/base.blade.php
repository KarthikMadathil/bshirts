  <!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Test') }}</title>

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <style>.img-responsive {
        position: absolute;
      }</style>
    </head>
    
    <br><br><br><br><br>

     <div class="col-md-6 mainimgshow">
    <table class="table">
  <thead>
    <tr>
      <th>
        ID
      </th>
      <th>
        Product Name
      </th>
      <th>
        Product  Description
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
     {{ $product->product_id }}  
      </td>
      <td><a href="/test"> 
       {{ $product->pattern }} </a>
      </td>
      <td>
      {{ $product->desc }}
      </td>
      <td>
      <form id="rendered-form"><div class="fb-button form-group field-view view">
      <button  type="button" class="btn btn-primary" name="view" style="primary" id={{$product->product_id}}>Delete</button>
      <button  type="button" class="btn btn-primary" name="view" style="primary" id={{$product->product_id}}>Edit</button>
      </div></form>
      </td>

    </tr>
   @endforeach
  </tbody>
</table>
</div>
<div class="col-md-6 ">
<form method="post" action="store" id="rendered-form">
{{ csrf_field() }}

  <div class="fb-text form-group field-text-1502453955397">
    <label for="text-1502453955397" class="fb-text-label">Product Name</label>
    <input type="text" class="form-control" name="pattern" id="pattern">
    </div>
    <div class="fb-textarea form-group field-textarea-1502453970340">
      <label for="textarea-1502453970340" class="fb-textarea-label">Product Discription</label>
      <textarea type="textarea" class="form-control" name="desc" id="desc"></textarea>
    </div>
    <div class="fb-button form-group field-button-1502454192319">
      <button type="submit" class="btn-default btn" name="submit" style="default" id="button-1502454192319">Add</button>
    </div>
  </form>
</div>

<script src="{{ asset('js/jquery-3.2.1.js') }}">
    $('.order').click(function($this) {
    var order_id = $(this).attr('id');
    $.post('sample', {order_id:order_id,'_token':$('input[name=_token]').val()},function(data) {     
      document.getElementById("shirtVariants").src = data[0].shirt;
      document.getElementById("collarVariants").src = data[0].collar;
      document.getElementById("cuffVariants").src = data[0].sleeve;
      document.getElementById("pipeVariants").src = data[0].pipe;
      document.getElementById("palmVariants").src = data[0].cuff;
      document.getElementById("buttonVariants").src = data[0].button;
     });

  });
</script>
</body>
</html>



