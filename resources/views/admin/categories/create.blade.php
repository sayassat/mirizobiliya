@extends('admin.layout')

@section('content')
	<h1 class="fs-3 text-center mb-3">Создать новую категорию</h1>

	<form action="create" method="post">
		@csrf
		<div class="mb-3">
			<label for="name" class="form-label">Название</label>
			<input type="text" class="form-control" id="name" name="name" autocomplete="off">
			<div id="nameHelp" class="form-text">Введите название новой категории.</div>
		</div>
		<button type="submit" class="btn btn-primary">OK</button>
	</form>
@endsection