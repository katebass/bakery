<div class="category-item">
		@auth
			<button type="button" class="btn btn-danger button-join">
				<a href="{{ route('deletecategory', $category->id) }}">
					Удалить категорию
				</a>
			</button>
		@endauth
		
	<h3>
		<a href="">
			<u>{{ $category->title }}</u>
		</a>
	</h3>
	
	<hr>

	<h2>
		{{ $category->description }}
	</h2>

	<p class="group-meta">
		<strong>Количество наименований: {{ $category->items->count() }}</strong>
	</p>

	@auth
		<button type="button" class="btn btn-primary button-join">
			<a href="{{ route('additem', $category->id) }}">
				Добавить наименование
			</a>
		</button>
	@endauth
</div>