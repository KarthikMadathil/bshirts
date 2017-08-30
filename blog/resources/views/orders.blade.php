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
      <style>.img-responsive {position: absolute;}</style>
    </head>
    <body>

     <div class="container"><br><br><br><br><br><br>  
       <div class="row">
        <div  class="col-md-6" id="list">

          <table class="table">
            <thead>
              <tr>
                <th>
                  Sno
                </th>
                <th>
                  Order Id
                </th>
                <th>
                  View
                </th>
              </tr>
            </thead>
            <tbody>
              @for($i=0;$i<$n;$i++)
              <tr>
                <td>

                </td>
                <td>
                  {{$order_id[$i] }}

                </td>
                <td>
                 <input type="button" id="{{$order_id[$i] }}" value="Show" class="order">
               </td>
             </tr>
             @endfor
           </tbody>
         </table>
       </div>
       <div class="col-md-6 mainimgshow"  id="dress">
        <img id="shirtVariants" src="" class="img-responsive" alt="Responsive image">

        <img id="collarVariants" src="" class="img-responsive" alt="Responsive image">

        <img id="cuffVariants" src="" class="img-responsive" alt="Responsive image">

        <img id="pipeVariants" src="" class="img-responsive" alt="Responsive image">
        <img id="palmVariants" src="" class="img-responsive" alt="Responsive image">

        <img id="buttonVariants" src="" class="img-responsive" alt="Responsive image">

      </div>



    </div>
  </div>
{{csrf_field()}}
</body>
<script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
<script >
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


</html>
