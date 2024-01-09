@extends('admin.layout')

@section('content')
    <h1 class="fs-3 text-center mb-3">Список категории</h1>

    <div class="mb-3 text-end">
        <a href="categories/create" class="btn btn-sm btn-primary">Создать</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center" style="width: 50px;">№</th>
                <th class="text-center">Наименование категории</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="text-center">{{ $loop->index + 1}}</td>
                    <td>{{ $category->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection