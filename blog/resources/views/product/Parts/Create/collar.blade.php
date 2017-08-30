@extends('layouts.addItem')
@section('title','Add Collar')
@section('form')
<form action="{{route('collar.store',['id'=>$product])}}" method="post" enctype="multipart/form-data">
<div class="form-title"> COLLAR </div><br>

	@include('layouts.itemForm')
</form>
@endsection
