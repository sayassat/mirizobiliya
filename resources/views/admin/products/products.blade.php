@extends('admin.layout')

@section('content')
    <h1 class="fs-3 text-center mb-3">Список товаров</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Наименование товара</th>
                <th>Стоимость</th>
                <th>Кол-во в наличии</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->qty }}</td>
                    <!-- Add more columns as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection