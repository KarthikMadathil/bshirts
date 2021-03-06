    <!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Shirt Customisation') }}</title>

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <style>.img-responsive {
        position: absolute;
      }</style>
    </head>
    <body>
     <div class="container"><br><br><br><br><br><br>
       <div class="row">

       <div class="col-md-6 content">
       </div>
       <div class="col-md-6 mainimgshow">
        <img id="shirtVariants" src="storage/images/Shirts/shirtVariant2.png" class="img-responsive" alt="Responsive image">
        <img id="collarVariants" src="storage/images/collar/collarVariant2.png" class="img-responsive" alt="Responsive image">
        <img id="cuffVariants" src="storage/images/kaii/cuffVariant1.png" class="img-responsive" alt="Responsive image">
        <img id="pipeVariants" src="storage/images/pipe/pipeVariant4.png" class="img-responsive" alt="Responsive image">
        <img id="palmVariants" src="storage/images/palm/palmVariant4.png" class="img-responsive" alt="Responsive image">
        <img id="buttonVariants" src="storage/images/button/buttonVariant2.png" class="img-responsive" alt="Responsive image">
      </div>
    </div>
  </div>
  <div>

      <script type="text/javascript">

        function myorder() {

        var shirt = document.getElementById("shirtVariants").src;
        var collar = document.getElementById("collarVariants").src;
        var sleeve = document.getElementById("cuffVariants").src;
        var button = document.getElementById("buttonVariants").src;
        var pipe = document.getElementById("pipeVariants").src;
        var cuff = document.getElementById("palmVariants").src;

        document.getElementById("shirt").value=shirt;
        document.getElementById("collar").value=collar;
        document.getElementById("sleeve").value=sleeve;
        document.getElementById("button").value=button;
        document.getElementById("pipe").value=pipe;
        document.getElementById("cuff").value=cuff;
                       //alert("bla abca");
                     }
     </script>
     <form action="/order" method="post"  >{{ csrf_field() }}
      <input  id="orderId" onclick= "myorder();" type="submit" > Order Now !</input>
      <input type="hidden" id="shirt" name="shirt" value="">
      <input type="hidden" id="collar" name="collar" value="">
      <input type="hidden" id="sleeve" name="sleeve" value="">
      <input type="hidden" id="button" name="button" value="">
      <input type="hidden" id="pipe" name="pipe" value="">
      <input type="hidden" id="cuff" name="cuff" value="">
    </form>
  </div>
</body>
<script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
<script>


  $(".shirt").click(function() {
   var shirt = $(this).attr('id');
   document.getElementById("shirtVariants").src = "storage/images/Shirts/"+shirt+".png";
 });

  $(".pipe").click(function() {
   var pipe = $(this).attr('id');
   document.getElementById("pipeVariants").src = "storage/images/pipe/"+pipe+".png";
 });
  $(".palm").click(function() {
   var palm = $(this).attr('id');
   document.getElementById("pipeVariants").src = "storage/images/palm/"+palm+".png";
 });

  $(".collar").click(function() {
   var collar = $(this).attr('id');
   document.getElementById("collarVariants").src = "storage/images/collar/"+collar+".png";
 });

  $(".cuff").click(function() {
   var cuff = $(this).attr('id');
   document.getElementById("cuffVariants").src = "storage/images/kaii/"+cuff+".png";
 });
  $(".btncls").click(function() {
   var btn = $(this).attr('id');
   document.getElementById("buttonVariants").src = "storage/images/button/"+btn+".png";
 });



</script>

</html>
