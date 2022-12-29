@extends('index');
@section('content')
<a href="/cauhoi/themcauhoi" class="btn btn-primary">Thêm Câu Hỏi</a> <br>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>
                Nội Dung
            </th>
            <th>
                Lĩnh Vực
            </th>
            <th>
                A
            </th>
            <th>
                B
            </th>
            <th>
                C
            </th>
            <th>
                D
            </th>
            <th>
                Đáp Án
            </th>
            <th>
                Điểm
            </th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $ch)
        <tr>
            <td>{{ $ch->NoiDung }}</td>
            @foreach($linhvuc as $lv)   
                                @if($lv->ID == $ch->LinhVuc_ID)     
                                <td>{{$lv->Ten}}</td> 
                                    @endif
                        @endforeach
            <td>{{ $ch->A }}</td>
            <td>{{ $ch->B }}</td>
            <td>{{ $ch->C }}</td>
            <td>{{ $ch->D }}</td>
            <td>{{ $ch->DapAn }}</td>
            <td>{{ $ch->Diem }}</td>
            <td>
                <a href="/cauhoi/update/{{ $ch->ID }}" class="btn btn-success">Update</a>
                <a href="/cauhoi/softdelete/{{ $ch->ID }}" onclick="return confirm('Xác nhận xóa {{$ch->NoiDung}}')" class="btn btn-danger">Delete</a>

            <td>
        </tr>
        @endforeach
    </tbody>
@endsection