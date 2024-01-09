@extends('admin.layout')

@section('content')
	<h1 class="fs-3 text-center mb-3">Добавить новый товар</h1>

	<form action="create" method="post">
		@csrf
		<div class="mb-3">
			<label for="name" class="form-label">Название</label>
			<input type="text" class="form-control" id="name" name="name" autocomplete="off">
			<div id="nameHelp" class="form-text">Введите название нового товара.</div>
		</div>
		<div class="mb-3">
			<label for="category" class="form-label">Выберите категорию</label>
			<select class="form-select" aria-label="Default select example" id="category" name="category">
				@foreach ($categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="mb-3">
			<label for="description" class="form-label">Описание товара</label>
			<textarea class="form-control" id="description" rows="5" name="description"></textarea>
		</div>
		<div class="mb-3">
			<label for="price" class="form-label">Цена</label>
			<input type="text" class="form-control" id="price" name="price" autocomplete="off">
			<div id="priceHelp" class="form-text">Введите цену товара в тенге за единицу.</div>
		</div>
		<div class="mb-3">
			<label for="quantity" class="form-label">В наличии</label>
			<input type="number" class="form-control" id="quantity" name="quantity" autocomplete="off">
			<div id="quantityHelp" class="form-text">Введите количество в наличии.</div>
		</div>
		<div class="mt-3 text-center">
			<button type="submit" class="btn btn-primary">OK</button>
		</div>
	</form>
@endsection