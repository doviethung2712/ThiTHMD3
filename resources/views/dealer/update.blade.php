@extends('welcome')
@section('title', 'Create')
@section('content')
    <div class="container mt-5">
        <h3>Sửa đại lý phân phối</h3>
        <form method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Mã đại lý</label>
                    <input type="number" value="{{ $dealer->code }}" name="code" required class="form-control">
                    <label>Tên đại lý</label>
                    <input type="text" value="{{ $dealer->dealername }}" name="dealername" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Địa chỉ</label>
                    <textarea name="address" required class="form-control" id="" cols="4" rows="4">{{ $dealer->address }}</textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Điện thoại</label>
                    <input type="text" required value="{{ $dealer->phone }}" name="phone" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Tên người quản lý</label>
                    <input type="text" required value="{{ $dealer->name }}" name="name" class="form-control"
                        id="inputPassword4">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" required name="email" value="{{ $dealer->email }}" class="form-control"
                        id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Trạng thái hoạt động</label>
                    <select class="form-control" name="status_id" id="">
                        @foreach ($status as $statu)
                            <option class="form-control"
                                {{ $dealer->status_id == $statu->id ? 'selected' : '' }} value="{{ $statu->id }}">
                                {{ $statu->status }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-10"></div>
                <div class="col-1">
                    <button type="submit" class="btn btn-primary">Sửa</button>
                </div>
                <div class="col-1">
                    <a class="btn btn-info" href="{{ route('dealer.index') }}">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection
