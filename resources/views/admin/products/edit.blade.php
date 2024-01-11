@extends('admin.layout')

@section('content')
	<h1 class="fs-3 text-center mb-3">Редактировать товар</h1>

	<form action="{{ url('admin/products/update/'.$product->id) }}" method="post" enctype="multipart/form-data">
		@csrf
		@method('put')
		<div class="mb-3">
			<label for="name" class="form-label">Название</label>
			<input type="text" class="form-control" id="name" name="name" autocomplete="off" value="{{ $product->name }}">
			<div id="nameHelp" class="form-text">Введите название нового товара.</div>
		</div>
		<div class="mb-3">
			<label for="category" class="form-label">Выберите категорию</label>
			<select class="form-select" aria-label="Default select example" id="category" name="category">
				@foreach ($categories as $category)
				<option @if ($category->id == $product->categories->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="mb-3">
			<label for="description" class="form-label">Описание товара</label>
			<textarea class="form-control" id="description" rows="5" name="description">{{ $product->description }}</textarea>
		</div>
		<div class="mb-3">
			<label for="price" class="form-label">Цена</label>
			<input type="text" class="form-control" id="price" name="price" autocomplete="off" value="{{ $product->price }}">
			<div id="priceHelp" class="form-text">Введите цену товара в тенге за единицу.</div>
		</div>
		<div class="mb-3">
			<label for="quantity" class="form-label">В наличии</label>
			<input type="number" class="form-control" id="quantity" name="quantity" autocomplete="off" value="{{ $product->qty }}">
			<div id="quantityHelp" class="form-text">Введите количество в наличии.</div>
		</div>
		<div class="mb-3">
			<label for="picture" class="form-label">Картинка товара</label>
			<input type="file" class="form-control" id="picture" name="picture" value="{{ $product->pic }}">
			<div id="nameHelp" class="form-text">Загрузите картинку нового товара.</div>
		</div>
		<div class="mt-6 text-center">
			<button type="submit" class="btn btn-primary">Обновить данные</button>
		</div>
	</form>
@endsection