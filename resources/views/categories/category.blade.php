<div class="category-item">

	@if(Auth::guard('admin')->check())
		<button type="button" class="btn btn-default button-join">
			<a href="">
				Добавить наименование
			</a>
		</button>
	@endif

	<a href="{{ route('itemsList',$category->id) }}">
		<h2>
			<u>{{ $category->title }}</u>
		</h2>
	</a>

	<h2>
		{{ $category->description }}
	</h2>

	<p class="group-meta">
		<strong>Количество наименований: {{ $category->items->count() }}</strong>
	</p>

	@if(Auth::guard('admin')->check())
		<button type="button" class="btn btn-default button-join">
			<a href="{{ route('deletecategory', $category->id) }}">
				Удалить категорию
			</a>
		</button>
	@endif
</div>