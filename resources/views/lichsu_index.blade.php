@extends('index');
@section('content')

<!-- <a href="/taikhoan/thungractaikhoan" class="btn btn-info">Thùng Rác</a> -->

<hr>

<table class="table">
    <thead>
        <tr>
            <th>
                Tên
            </th>
            <th>
                Số Câu Đúng
            </th>
            <th>
                Điểm
            </th>
            <th>
                Ngày Chơi
            </th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $ls)
        <tr>
        @foreach($taikhoan as $tk)   
                                @if($tk->ID == $ls->ID_TaiKhoan)     
                                <td>{{$tk->TenTaiKhoan}}</td> 
                                    @endif
                        @endforeach
            <td>{{ $ls->SoCauDung }}</td>
            <td>{{ $ls->TongDiem }}</td>
            <td>{{ $ls->NgayChoi }}</td>
            

            <td>
                <a href="/lichsu/update/{{ $ls->ID }}" class="btn btn-success">Update</a>
                <a href="/lichsu/softdelete/{{ $ls->ID }}" onclick="return confirm('Xác nhận xóa?')" class="btn btn-danger">Delete</a>

            <td>
        </tr>
        @endforeach
    </tbody>
    @endsection