@extends('layouts.addItem')
@section('title','Edit Collar')
@section('form')
<form action="/product/{{$item->front_id}}/collar/{{$item->id}}" method="Post">
{{ method_field('PUT')}}
<div class="form-title">Edit COLLAR </div><br>
	
	@include('layouts.itemForm')
</form>
@endsection