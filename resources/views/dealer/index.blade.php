@extends('welcome')
@section('title','Home')
@section('content')

<div class="mt-3">
    <a href="{{route('dealer.create')}}" class="btn btn-success">Thêm mới</a>
</div>


<h3 class="mt-4">Danh sách đại lý phân phối</h3 >
<hr>
<table class="table table-bordered mt-4">
    <thead>
      <tr>
        <th scope="col">Mã Số Đại Lý</th>
        <th scope="col">Tên đại lý</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Tên người quản lý</th>
        <th scope="col">Trạng thái</th>
        <th colspan="2" scope="col">Chức năng</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dealers as $dealer)
            <tr>
                <td>{{$dealer->code}}</td>
                <td>{{$dealer->dealername}}</td>
                <td>{{$dealer->phone}}</td>
                <td>{{$dealer->email}}</td>
                <td>{{$dealer->address}}</td>
                <td>{{$dealer->name}}</td>
                <td>{{$dealer->statusname}}</td>
                <td><a href="{{route('dealer.edit',$dealer->id)}}">Sửa</a></td>
                <td><a onclick="return confirm('Bạn có muốn xóa đại lý {{$dealer->dealername}} này không ?')" href="{{route('dealer.delete',$dealer->id)}}">Xóa</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
