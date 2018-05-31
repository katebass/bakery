<div class="category-item">

	@if(Auth::guard('admin')->check())
		<button type="button" class="btn btn-default button-join">
			<a href="">
				Добавить товар
			</a>
		</button>
	@endif

	<a href="">
		<h2>
			<u>{{ $item->title }}</u>
		</h2>
	</a>

	<h2>
		{{ $item->description }}
	</h2>

	@if(Auth::guard('admin')->check())
		<button type="button" class="btn btn-default button-join">
			<a href="">
				Удалить Товар
			</a>
		</button>
	@endif
</div>