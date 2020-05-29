@extends('layouts.app')

@section('content')
    <div class="container pt-1">
        <form method="post" accept-charset="utf-8" class="navform m-0 d-md-none" action="{{route('package.search')}}">
            {{ csrf_field() }}
            <div class="input-group text">
                <input value="{{request()->name?? null}}" type="text" name="name" class="form-control"
                       placeholder="Tìm gói cước" id="keyword">
                <div class="input-group-append">
                    <button class="input-group-text" id="basic-addon2"><i class="fas fa-search"
                                                                          aria-hidden="true"></i></button>
                </div>
            </div>
        </form>
        <a href="{{route('home.create')}}" class="btn btn-success btn-action mt-2">Thêm Mới</a>
        <button class="btn btn-primary btn-action mt-2" data-toggle="modal" data-target="#number">Sửa số</button>
        <table class="table table-hover border">
            <thead class="border">
            <tr>
                <th scope="col">Tên</th>
                <th scope="col">Giá</th>
                <th scope="col">Loại</th>
                <th scope="col">Kiểu</th>
                <th scope="col">Lượt xem</th>
                <th scope="col">Hành động</th>
            </tr>
            </thead>
            <tbody>
            @if(!empty($packages))
                @foreach($packages as $pack)
                    <tr>
                        <th scope="row">{{$pack->name}}</th>
                        <td>{{ $pack->cost }}</td>
                        <td>
                                @foreach($pack->categories as $category)
                                    <span class="badge badge-success">{{$category->name}}</span>
                                @endforeach
                        </td>
                        <td>{!! ($pack->type === 1)? '<span class="badge badge-danger">HOT</span>' : '' !!}</td>
                        <td>{{$pack->count}}</td>
                        <td>
                            <a href="{{route('package.show', ['package'=>$pack->name])}}" type="button"
                               class="btn btn-secondary btn-action">
                                Sửa
                            </a>
                        </td>
                    </tr>
                @endforeach
            @endif

            <div class="modal fade" id="number" tabindex="-1" role="dialog"
                 aria-labelledby="ModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content p-4">
                        <div class="modal-header">
                            <h4 class="modal-title font-weight-bold" id="ModalLabel">Sửa số</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form method="POST" action="{{route('profile')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="font-weight-bold">Số điện thoại</label>
                                <input value="{{$user->cellphone}}" required type="text" name="cellphone"
                                       class="form-control"
                                       placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Số</label>
                                <input value="{{$user->telephone}}" required type="text" name="telephone"
                                       class="form-control"
                                       placeholder="Nhập số">
                            </div>
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </form>
                    </div>
                </div>
            </div>

            </tbody>
        </table>
    </div>
@endsection

<script>
    document.addEventListener('click', function (event) {
        let id = event.target.dataset.target;
        if (id) {
            document.getElementById(id.split('#')[1]).setAttribute('style', 'overflow: auto !important');
        }
    });
</script>
