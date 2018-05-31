<div class="category-item item">
	<div class="element">
		<a href="">
			<h2 class="item-title">
				<u>{{ $item->title }}</u>
			</h2>
		</a>

		<h2>
			{{ $item->description }}
		</h2>

		<h3>
			Цена: {{ $item->price }} UAH
		</h3>

		@if(Auth::guard('admin')->check())			
			<button type="button" class="btn btn-default button-join">
				<a href="">
					Удалить Товар
				</a>
			</button>
		@endif
	</div>

	<div class="element-photo">
		<img src="{{ $item->photo }}" alt="">
	</div>
</div>