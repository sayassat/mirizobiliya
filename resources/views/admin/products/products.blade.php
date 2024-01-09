@extends('admin.layout')

@section('content')
    <h1 class="fs-3 text-center mb-3">Список товаров</h1>

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
                    <td class="text-end">{{ $product->qty }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection