@extends('layout.master')

@section('title')
  NewGroup
@endsection

@section('styles')
  <link rel="stylesheet" href="/css/content.css">
@endsection

@section('content')

	<div class="container">

		<form action="{{ route('storecategory') }}" method="POST">
			{{ csrf_field() }}

			<div class="form-group">
				@include('layout.errors')
			</div>

			<div class="formgroup">
				<label class="col-sm-4" for="">Название категории:</label>
				<input class="col-sm-4" type="text" name="title">
			</div>

			<div class="formgroup">
				<label class="col-sm-4" for="">Описание:</label>
				<input class="col-sm-4" type="text" name="description">
			</div>

			<div class="formgroup">
				<label class="col-sm-4" for="">Ссылка на фото (обложку категории):</label>
				<input class="col-sm-4" type="text" name="photo">
			</div>

			<div class="formgroup">
				<button class="col-sm-9 btn btn-default button-join" type="submit">Создать</button>
			</div>

		</form>

		
	</div>
	
@endsection