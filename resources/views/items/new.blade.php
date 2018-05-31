@extends('layout.master')

@section('title')
  NewGroup
@endsection

@section('styles')
  <link rel="stylesheet" href="/css/content.css">
@endsection

@section('content')

	<div class="container">
		<h3 class="section-title">Новый товар</h3>
		<form action="{{ route('storeitem', $categoryid) }}" method="POST">
			{{ csrf_field() }}

			<div class="form-group">
				@include('layout.errors')
			</div>

			<div class="formgroup">
				<label class="col-sm-4" for="">Название товара:</label>
				<input class="col-sm-4" type="text" name="title">
			</div>

			<div class="formgroup">
				<label class="col-sm-4" for="">Описание:</label>
				<input class="col-sm-4" type="text" name="description">
			</div>

			<div class="formgroup">
				<label class="col-sm-4" for="">Цена:</label>
				<input class="col-sm-4" type="text" name="price">
			</div>

			<div class="formgroup">
				<label class="col-sm-4" for="">Ссылка на фото (обложку категории):</label>
				<input class="col-sm-4" type="text" name="photo">
			</div>

			<div class="formgroup">
				<button class="col-sm-12 btn btn-default button-join" type="submit">Создать</button>
			</div>

		</form>

		
	</div>
	
@endsection