@extends('layout.master')

@section('title')
	Продукция
@endsection

@section('styles')
	<link rel="stylesheet" href="/css/content.css">
@endsection

@section('content')

	<h3 class="section-title">{{ $items->first()->category->title }}</h3>

	<div class="group-list">

		<div class="container">

			@forelse($items as $item)
				@include('items.item')
			@empty
				Товаров для данной секции пка не существует.
			@endforelse
		</div>

	</div>
  
  
@endsection