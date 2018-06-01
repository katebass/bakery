@extends('layout.master')

@section('title')
  NewGroup
@endsection

@section('styles')
  <link rel="stylesheet" href="/css/content.css">
@endsection

@section('content')

	<div class="container">
		<h3 class="section-title">Новый заказ</h3>
		<form action="{{ route('createorder') }}" method="POST">
			{{ csrf_field() }}

			<div class="form-group">
				@include('layout.errors')
			</div>

			<div class="formgroup">
				<label class="col-sm-4" for="">Введите ваше имя:</label>
				<input class="col-sm-4" type="text" name="customer_name">
			</div>

			<div class="formgroup">
				<label class="col-sm-4" for="">Ваш email:</label>
				<input class="col-sm-4" type="text" name="customer_email">
			</div>

			<div class="formgroup">
				<label class="col-sm-4" for="">Ваш номер телефона:</label>
				<input class="col-sm-4" type="text" name="customer_phone">
			</div>

			<div class="formgroup">
				<button class="col-sm-12 btn btn-default button-join" type="submit">Оформить</button>
			</div>

		</form>

		
	</div>
	
@endsection