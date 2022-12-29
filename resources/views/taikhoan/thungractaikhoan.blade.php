<h2 align="center">Khôi Phục Tài Khoản</h2>

<table class="table" align="center">
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
        @foreach($data as $tkr)
        <tr>
            <td>{{ $tkr->TenTaiKhoan }}</td>
            <td>{{ $tkr->Email }}</td>
            <td>{{ $tkr->Diem }}</td>
            <td>{{ $tkr->Credit }}</td>
            <td>
                @if($tkr->VaiTro == 0) <p style="color:red;">Admin</p>
                @elseif($tkr->VaiTro == 1) <p style="color:green;">Người Chơi</p>
                @endif
            </td>
            

            <td>
                <a href="/taikhoan/khoiphuc/{{ $tkr->ID }}" onclick="return confirm('Xác nhận khôi phục {{$tkr->TenTaiKhoan}}')" class="btn btn-success">Khôi Phục</a>

            <td>
        </tr>
        @endforeach
    </tbody>