<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="{{ asset('css/app.css') }}" rel="stylesheet">	




  <title> @yield('title')</title>
  @yield('head')
</head>
<body><br><br><br><br><br><br>
 @section('body')
 @show

<div class="container">

<div class="row">
<div class="col-md-12">
<div style="width: 500px; margin: 0px auto;">
 @section('form') 
	@show
</div>
</div>

</div>
</div>
 

</body>
</html>