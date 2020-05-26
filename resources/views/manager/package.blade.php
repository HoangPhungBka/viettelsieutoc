@extends('layouts.app')
@section('content')
    <div style="margin-top: 100px;" class="container modal-content p-4">
        <div class="modal-header">
            <h5 class="modal-title font-weight-bold" id="ModalLabel">{{isset($pack)? $pack->name : 'Tạo mới'}}</h5>
        </div>
        <form method="POST" action="{{isset($pack)? route('home.update') : route('home.store')}}">
            @csrf
            @if(isset($pack))
                <input name="id" type="hidden" value="{{$pack->id}}">
            @endif
            <div class="form-group">
                <label class="font-weight-bold">Tên</label>
                <input value="{{isset($pack)? $pack->name : ''}}" required type="text" name="name"
                       class="form-control" placeholder="Nhập tên">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Giá</label>
                <input value="{{isset($pack)? $pack->cost : ''}}" required type="text" name="cost"
                       class="form-control" placeholder="Nhập giá">
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Loại</label>
                <select class="custom-select" name="category_id">
                    @foreach($categories as $category)
                        <option
                            {{ isset($pack) && $pack->category_id === $category->id ? 'selected' : '' }} value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label class="font-weight-bold">Kiểu</label>
                <select class="custom-select" name="type">
                    <option value="1">HOT</option>
                    <option {{isset($pack) && ($pack->type === 2)? 'selected' : ''}} value="2">
                        Bình thường
                    </option>
                </select>
            </div>

            <div class="form-group border">
                <label class="font-weight-bold" for="description">Tóm tắt</label>
                <div id="toolbar-container1"></div>
                <div id="summary">
                    {!! isset($pack)? $pack->summary : ''!!}
                </div>
            </div>
            <input id="textarea-summary" name="summary" type="hidden">

            <div class="form-group border">
                <label class="font-weight-bold" for="description">Miêu tả</label>
                <div id="toolbar-container2"></div>
                <div id="description">
                    {!!isset($pack)? $pack->description : ''!!}
                </div>
            </div>
            <input id="textarea-description" name="description" type="hidden">

            <div class="d-flex justify-content-end mt-4">
                <button id="submit" type="submit" class="btn btn-primary btn-action">Xác nhận</button>
                @if(isset($pack))
                    <a href="{{route('home.destroy', ['id' => $pack->id])}}" type="button"
                       class="btn btn-danger btn-action">Xóa</a>
                @endif
            </div>
        </form>
    </div>

    <script>
        DecoupledEditor
            .create(document.querySelector('#summary'))
            .then(editor => {
                const toolbarContainer = document.querySelector('#toolbar-container1');
                toolbarContainer.appendChild(editor.ui.view.toolbar.element);

                editor.model.document.on('change:data', () => {
                    document.getElementById('textarea-summary').value = editor.getData();
                });
            });

        DecoupledEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                const toolbarContainer = document.querySelector('#toolbar-container2');
                toolbarContainer.appendChild(editor.ui.view.toolbar.element);

                editor.model.document.on('change:data', () => {
                    document.getElementById('textarea-description').value = editor.getData();
                });
            });

    </script>
@endsection

