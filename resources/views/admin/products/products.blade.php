@extends('admin.layout')

@section('content')
    <h1 class="fs-3 text-center mb-3">Список товаров</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="mb-3 text-end">
        <a href="products/create" class="btn btn-sm btn-primary">Добавить</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr class="text-nowrap">
                <th class="text-center" style="width: 50px;">№</th>
                <th class="text-center">Наименование товара</th>
                <th class="text-center">Категория товара</th>
                <th class="text-center">Описание товара</th>
                <th class="text-center">Цена</th>
                <th class="text-center">В наличии</th>
                <th class="text-center">Картинка</th>
                <th class="text-center">Тип</th>
                <th class="text-center">Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td class="text-center">{{ $loop->index + 1}}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->categories->name }}</td>
                    <td>
                        <div class="products-table-desc">
                            <small>{{ $product->description }}</small>
                        </div>
                    </td>
                    <td class="text-end">{{ $product->price }}</td>
                    <td class="text-center">{{ $product->qty }}</td>
                    <td class="text-center">
                        <img src="../pic/{{ $product->pic }}" alt="" width="100">
                    </td>
                    <td class="text-center">{{ $product->type }}</td>
                    <td class="text-center text-nowrap">
                        <a href="{{ url('admin/products/edit/'.$product->id) }}" class="btn btn-success btn-sm">Обновить</a>
                        <button class="btn btn-danger btn-sm">Удалить</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection