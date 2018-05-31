@extends('layout.master')

@section('title')
    Home
@endsection

@section('styles')
    <link rel="stylesheet" href="/css/content.css">
@endsection

@section('content')

    <div class="banner">
        <div class="blure"></div>
        <div class="container">
            <h3 class="banner-title">Кондитерская "Зефир"</h3>
        </div>
    </div>

        <div class="container">
            @if(Auth::guard('admin')->check())
                <button type="button" class="btn btn-default button-join">
                    <a href="{{ route('createcategory') }}">
                        Создать новую категорию
                    </a>
                </button>
            @endif
            
            <div class="flex-container">


                @forelse($categories as $category)
                    @include('categories.category')
                @empty
                    Категорий нет
                @endforelse
            </div>
            
    </div>
  
@endsection