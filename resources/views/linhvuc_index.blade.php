@extends('index');
@section('content')
<a href="/linhvuc/themlinhvuc" class="btn btn-primary">Thêm Lĩnh Vực</a> <br>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>
                Tên Lĩnh Vực
            </th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $lv)
        <tr>
            <td>{{ $lv->Ten }}</td>
            <td>
                <a href="/linhvuc/update/{{ $lv->ID }}" class="btn btn-success">Update</a>
                <a href="/linhvuc/softdelete/{{ $lv->ID }}" onclick="return confirm('Xác nhận xóa {{$lv->Ten}}')" class="btn btn-danger">Delete</a>

            <td>
        </tr>
        @endforeach
    </tbody>
@endsection