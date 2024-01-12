@extends('admin.layout')

@section('content')
	<h1 class="fs-3 text-center mb-3">Создать новый баннер</h1>

	<form action="create" method="post">
		@csrf
		<div class="mb-3">
			<label for="banner" class="form-label">Выберите товар</label>
			<select class="form-select" aria-label="Default select example" id="banner" name="banner">
				@foreach ($products as $product)
				<option value="{{ $product->id }}">{{ $product->name }}</option>
				@endforeach
			</select>
		</div>
		<div class="mb-3">
			<label for="order" class="form-label">Порядок</label>
			<input type="number" class="form-control" id="order" name="order" autocomplete="off" value="1">
			<div id="quantityHelp" class="form-text">Введите порядок баннера.</div>
		</div>
		<button type="submit" class="btn btn-primary">OK</button>
	</form>
@endsection