@extends('layout.master')

@section('title')
	Продукция
@endsection

@section('styles')
	<link rel="stylesheet" href="/css/content.css">
@endsection

@section('content')
		<div class="container">

			@if( session()->has('cart') )
				@foreach(session('cart') as $item)
					<h2 style="color: black">{{ $item->title }}</h2>
					<a href="{{ route('deletefromcart', $item) }}">Удалить из корзины</a>
				@endforeach

				<a href="{{ route('neworder') }}" class="button">Оформить заказ</a>

			<a href="{{ route('clearcart') }}" class="button"> 
				Удалить все товары из корзины
			</a>
			@else
				<h2 style="color: black">Товаров в корзине нет.</h2>
			@endif

		</div>
  
@endsection