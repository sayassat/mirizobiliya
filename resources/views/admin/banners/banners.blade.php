@extends('admin.layout')

@section('content')
    <h1 class="fs-3 text-center mb-3">Список баннеров</h1>

    <div class="mb-3 text-end">
        <a href="banners/create" class="btn btn-sm btn-primary">Создать</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th class="text-center" style="width: 50px;">№</th>
                <th class="text-center">Наименование баннера</th>
                <th class="text-center" style="width: 200px;">Порядок баннера</th>
                <th class="text-center" style="width: 200px;">Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($banners as $banner)
                <tr>
                    <td class="text-center">{{ $loop->index + 1}}</td>
                    <td>{{ $banner->products->name }}</td>
                    <td class="text-center">{{ $banner->order }}</td>
                    <td class="text-center text-nowrap">
                        <a href="{{ url('admin/banners/edit/'.$banner->id) }}" class="btn btn-success btn-sm">Обновить</a>
                        <button class="btn btn-danger btn-sm">Удалить</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection