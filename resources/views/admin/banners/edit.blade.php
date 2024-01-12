@extends('admin.layout')

@section('content')
	<h1 class="fs-3 text-center mb-3">Редактировать баннер</h1>

	<form action="{{ url('admin/banners/update/'.$banner->id) }}" method="post" enctype="multipart/form-data">
		@csrf
		@method('put')
		<div class="mb-3">
			<label for="product" class="form-label">Выберите товар</label>
			<select class="form-select" aria-label="Default select example" id="product" name="product">
				@foreach ($products as $product)
				<option @if ($product->id == $banner->products->id) selected @endif value="{{ $product->id }}">{{ $product->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="mb-3">
			<label for="order" class="form-label">Порядок</label>
			<input type="number" class="form-control" id="order" name="order" autocomplete="off" value="{{ $banner->order }}">
			<div id="quantityHelp" class="form-text">Введите порядок баннера.</div>
		</div>
		<div class="mt-6 text-center">
			<button type="submit" class="btn btn-primary">Обновить данные</button>
		</div>
	</form>
@endsection