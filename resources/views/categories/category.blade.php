<div class="category-item category">

	<div class="element-photo">
		<a href="{{ route('itemsList',$category->id) }}">
			<img src="{{ $category->photo }}" alt="">
		</a>
	</div>

	<div class="center">
		<a href="{{ route('itemsList',$category->id) }}">
			<h1>
				<u>{{ $category->title }}</u>
			</h1>
		</a>

		<h2>
			{{ $category->description }}
		</h2>

		<p class="group-meta">
			<strong>Количество наименований: {{ $category->items->count() }}</strong>
		</p>

		@if(Auth::guard('admin')->check())
				<a href="{{ route('createitem', $category->id) }}" class="button">
					Создать новый товар
				</a>

				<a href="{{ route('deletecategory', $category->id) }}" class="button">
					Удалить категорию
				</a>
		@endif
	</div>

</div>