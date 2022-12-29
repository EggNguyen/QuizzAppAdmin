@extends('index');
@section('content')

<a href="/taikhoan/dangky" class="btn btn-primary">Tạo Tài Khoản</a> <br>
<a href="/taikhoan/thungractaikhoan" class="btn btn-info">Thùng Rác</a>

<hr>

<table class="table">
    <thead>
        <tr>
            <th>
                Tên Tài Khoản
            </th>
            <th>
                Email
            </th>
            <th>
                Điểm
            </th>
            <th>
                Credit
            </th>
            <th>
                Vai Trò
            </th>
            <th>
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $tk)
        <tr>
            <td>{{ $tk->TenTaiKhoan }}</td>
            <td>{{ $tk->Email }}</td>
            <td>{{ $tk->Diem }}</td>
            <td>{{ $tk->Credit }}</td>
            <td>
                @if($tk->VaiTro == 0) <p style="color:red;">Admin</p>
                @elseif($tk->VaiTro == 1) <p style="color:green;">Người Chơi</p>
                @endif
            </td>
            

            <td>
                <a href="/taikhoan/update/{{ $tk->ID }}" class="btn btn-success">Update</a>
                <a href="/taikhoan/softdelete/{{ $tk->ID }}" onclick="return confirm('Xác nhận xóa {{$tk->TenTaiKhoan}}')" class="btn btn-danger">Delete</a>

            <td>
        </tr>
        @endforeach
    </tbody>
    @endsection