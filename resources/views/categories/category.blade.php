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
			<button type="button" class="btn btn-default button-join">
				<a href="{{ route('createitem', $category->id) }}">
					Создать новый товар
				</a>
			</button>

			<button type="button" class="btn btn-default button-join">
				<a href="{{ route('deletecategory', $category->id) }}">
					Удалить категорию
				</a>
			</button>
		@endif
	</div>

</div>